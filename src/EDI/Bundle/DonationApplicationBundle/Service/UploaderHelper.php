<?php

namespace EDI\Bundle\DonationApplicationBundle\Service;

use Gedmo\Sluggable\Util\Urlizer;
use League\Flysystem\AdapterInterface;
use League\Flysystem\FileNotFoundException;
use League\Flysystem\FilesystemInterface;
use mysql_xdevapi\Exception;
use Oro\Bundle\GaufretteBundle\FileManager;
use Psr\Log\LoggerInterface;
use Symfony\Component\Asset\Context\RequestStackContext;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploaderHelper
{
    private $filesystem;
    private $logger;

    /**
     * @param FileManager $fileManager
     * @param LoggerInterface $logger
     */
    public function __construct(FileManager $fileManager, LoggerInterface $logger)
    {
        $this->logger = $logger;
        $this->fileManager = $fileManager;
    }
    public function uploadImage(File $file, ?string $existingFilename) :string
    {

        $newFilename = $this->uploadFile($file,self::APPLICATION_IMAGE, true);

        if($existingFilename) {
            try {
                $result = $this->filesystem->delete(self::APPLICATION_IMAGE . '/' . $existingFilename);
                if ($result === false) {
                    throw new \Exception(sprintf('Could not delete old uploaded file "%s"', $existingFilename));
                }
            }
            catch(FileNotFoundException $e) {
                $this->logger->alert(sprintf('Old uploaded file "%s" was missing when trying to delete', $existingFilename));
            }
        }

        return $newFilename;
    }

    public function uploadApplicationImage(File $file): string
    {
        return $this->uploadFile($file,self::APPLICATION_REFERENCE, false);
    }

    public function getPublicPath(string $path): string
    {
        $fullPath = $this->publicAssetBaseUrl.'/'.$path;

        if (strpos($fullPath, '://') !== false) {
            return $fullPath;
        }
        return $this->requestStackContext
                ->getBasePath().$fullPath;
    }

    /**
     * @resource
     */
    public function readStream(string $path /*, bool $isPublic*/)
    {
  //      $filesystem = $isPublic ? $this->filesystem : $this->privateFilesystem;

        $resource = $this->filesystem->readStream($path);

        if($resource === false) {
            throw new \Exception(sprintf('Error opening stream for "%s"',$path));
        }
        return $resource;
    }

    public function deleteFile(string $path /*, bool $isPublic*/)
    {
//        $filesystem = $isPublic ? $this->filesystem : $this->privateFilesystem;

        $result = $this->filesystem->delete($path);

        if ($result === false) {
            throw new \Exception(sprintf('Error deleting "%s"', $path));
        }
    }

    private function uploadFile(File $file, string $directory, bool $isPublic): string
    {
        if ($file instanceof  UploadedFile) {
            $originalFilename = $file->getClientOriginalName();
        } else {
            $originalFilename = $file->getFilename();
        }


        $newFilename = Urlizer::urlize(pathinfo($originalFilename, PATHINFO_FILENAME)).'-'.uniqid().'.'.$file->guessExtension();

        //$filesystem = $isPublic ? $this->filesystem : $this->privateFilesystem;

        $stream = fopen($file->getPathname(), 'r');

        $result = $this->filesystem->writeStream(
            $directory.'/'.$newFilename,
            $stream,
            [
                'visibility' => $isPublic ? AdapterInterface::VISIBILITY_PUBLIC : AdapterInterface::VISIBILITY_PRIVATE,
            ]
        );

        if ($result === false) {
            throw new \Exception(sprintf('Could not write uploaded file "%s"', $newFilename));
        }

        if (is_resource($stream)) {
            fclose($stream);
        }
        return $newFilename;
    }
}