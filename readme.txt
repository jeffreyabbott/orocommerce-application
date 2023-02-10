% brew unlink php
% brew link php@8.1

% brew unlink node
% brew link node@16 <you may need: brew link --overwrite node@16 >

% npm install -g npm@8

% git clone -b edi https://github.com/jeffreyabbott/edi-orocommerce-application edi-orocommerce-application-jesse

% cd edi-orocommerce-application-jesse                                                                    

% docker-compose up -d 

<note if you have already done this, the docker image will serialize the DB, so drop the DB in phpadmin first>

% composer install --prefer-dist

The only settings to change (there are written to the parameters.yml file) in the wizard, the rest are default:
env(ORO_DB_NAME): oro_db
env(ORO_DB_USER): oro_db_user
env(ORO_DB_PASSWORD): oro_db_pass

% symfony console oro:install -vvv --sample-data=n --application-url=https://127.0.0.1:8000 --user-name=admin --user-email=jeffrey_abbott@kineticthoughts.com --user-firstname=Jeff --user-lastname=Abbott --user-password=admin --organization-name=EDI --timeout=0 --symlink --env=prod -n

(The above may end in a caching clear error - ignore it)

<within phpMyAdmin, import the oro_db_edi_tables_only.sql that is in the main git pull directory to the oro_db. You may need to increase the max_post_size=100M and max_upload_size=100M in the php.ini. To find the php.ini run "php -I | grep php.ini" and edit the found file>

Add the following parameters to the bottom of config/parameters.yml file:
### CUSTOM VARS
    env(SLACK_WEBHOOK_ENDPOINT): https://hooks.slack.com/services/....
    env(SITE_BASE_URL): https://127.0.0.1:8000
    env(AWS_S3_ACCESS_ID):
    env(AWS_S3_ACCESS_SECRET):
    env(AWS_S3_ACCESS_BUCKET):
### END CUSTOM VARS

Note: there is an error on some of these, especially about EmbRecipient entity. Ignore it. Everything will come up.

% symfony console oro:assets:build

% symfony console oro:assets:build first (you need this to build the custom theme otherwise it won't install)

% symfony console assets:install --symlink

% symfony console oro:assets:install --symlink

% symfony console cache:clear

% symfony server:start -d

Test at http://127.0.0.1:8000 and https://127.0.0.1:8000/donation/emb_application