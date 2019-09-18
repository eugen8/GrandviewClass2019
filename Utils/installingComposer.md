Install composer:  
Download and run [getcomposer.org/Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe) - it will install the latest composer version whenever it is executed.  
Add the following environment variables (then restart your VSCode for bash to pick up your new variables):  
```
C:\xampp\php
C:\xampp\composer
C:\xampp\mysql
C:\xampp\mysql\bin
```
Composer is a dependency management tool for php: https://getcomposer.org/doc/00-intro.md . That means if you need to add certain third party libraries/plugins to your php code you can manage that with a simple configuration file or with command line.  
To verfiy it is correctly installed run the commands below to see the version numbers:  
php --version  
composer --version  
mysql --version  

To test the waters, let's install a library called Guzzle. It can be a great helper for consuming REST-full web services:   
`composer require guzzlehttp/guzzle`  
You can read a tutorial on how to use it here:  https://hackernoon.com/creating-rest-api-in-php-using-guzzle-d6a890499b02



When composer downloads dependent libraries it will create a composer.json file to store the dependencies and also a vendor folder with all third party libraries. You normally don't want to commit ./vendor content to you repo, so add the vendor/ folder to .gitignore. If you don't have .gitignore file create already, go to the root of your repo and run: `touch .gitignore`. 
Add the following in the .gitignore file:
```
#Ignore folder vendor
vendor/
```
Now you can do the usual `git add -A` && `git commit -m "your message"` && `git push origin master`   



