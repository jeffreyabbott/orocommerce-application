<?php

namespace Training\Bundle\FirstThemeBundle\Layout\DataProvider;
use Symfony\Component\HttpClient\HttpClient;

class WeatherDataProvider
{
    /**
     * @return string
     */
    public function getWeatherText()
    {
	    $client = HttpClient::create();
	    $response = $client->request('GET', 'https://api.openweathermap.org/data/2.5/weather?zip=33914,us&units=imperial&appid=4328aca7acd6bf2a038faf88be51f144');

	    $statusCode = $response->getStatusCode();
		// $statusCode = 200
	    $contentType = $response->getHeaders()['content-type'][0];
		// $contentType = 'application/json'
	    $content = $response->getContent();
		// $content = '{"id":521583, "name":"symfony-docs", ...}'
	    $content = $response->toArray();
		// $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
	    $main = $content['main'];
		$temp = $main['temp'];

        return 'Current temperature is ' . $temp;
    }
}
