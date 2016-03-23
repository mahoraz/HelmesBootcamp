
     ,-----.,--.                  ,--. ,---.   ,--.,------.  ,------.
    '  .--./|  | ,---. ,--.,--. ,-|  || o   \  |  ||  .-.  \ |  .---'
    |  |    |  || .-. ||  ||  |' .-. |`..'  |  |  ||  |  \  :|  `--, 
    '  '--'\|  |' '-' ''  ''  '\ `-' | .'  /   |  ||  '--'  /|  `---.
     `-----'`--' `---'  `----'  `---'  `--'    `--'`-------' `------'
    ----------------------------------------------------------------- 
    /////////////////////////////////////////////////////////////////
    // setting up the Helmes bootcamp project                      //
    /////////////////////////////////////////////////////////////////
    - installation and configuration 15min
    
    $ curl -sS https://getcomposer.org/installer | php
    $ sudo mv composer.phar /usr/local/bin/composer
    *edit composer.json "helmes-bootcamp"
    $ composer install
    $ mysql-ctl start
    $ phpmyadmin-ctl install
    $ sudo nano /etc/apache2/sites-enabled/001-cloud9.conf
    * Change this line "DocumentRoot /home/ubuntu/workspace"
    * To following "DocumentRoot /home/ubuntu/workspace/docroot"
    
    - Stage 1 
    
    