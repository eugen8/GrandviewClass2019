# Lesson 7 
_09/20/2019_


## Pre-requisites:  

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
Now install a tool for auto-reloading your page:  
1. In a terminal window navigate to the root of your project
2. composer require pattern-lab/plugin-reload   

https://patternlab.io/docs/

`composer require pattern-lab/plugin-reload`

You will see something like this: 
```
$ composer require pattern-lab/plugin-reload
Using version ^2.0 for pattern-lab/plugin-reload
./composer.json has been created
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 15 installs, 0 updates, 0 removals
  - Installing wrench/wrench (v2.0.1): Downloading (100%)
  - Installing symfony/polyfill-ctype (v1.12.0): Downloading (100%)
  - Installing symfony/yaml (v3.4.31): Downloading (100%)
  - Installing symfony/process (v3.4.31): Downloading (100%)
  - Installing symfony/finder (v3.4.31): Downloading (100%)
  - Installing symfony/filesystem (v3.4.31): Downloading (100%)
  - Installing symfony/event-dispatcher (v3.4.31): Downloading (100%)
  - Installing shudrum/array-finder (v1.1.0): Downloading (100%)
  - Installing seld/jsonlint (1.7.1): Downloading (100%)
  - Installing michelf/php-markdown (1.8.0): Downloading (100%)
  - Installing kevinlebrun/colors.php (1.0.3): Downloading (100%)
  - Installing doctrine/collections (v1.4.0): Downloading (100%)
  - Installing alchemy/zippy (0.3.5): Downloading (100%)
  - Installing pattern-lab/core (v2.9.0): Downloading (100%)
  - Installing pattern-lab/plugin-reload (v2.0.1): Downloading (100%)
symfony/yaml suggests installing symfony/console (For validating YAML files using the lint command)
symfony/event-dispatcher suggests installing symfony/dependency-injection
symfony/event-dispatcher suggests installing symfony/http-kernel
alchemy/zippy suggests installing guzzle/guzzle (To use the GuzzleTeleporter)
Writing lock file
Generating autoload files
```
This created a composer.json file to store the dependencies and also a vendor folder with all third party libraries. You normally don't want to commit that to you repo, so add /vendor/ folder to .gitignore. If you don't have .gitignore file create it in the root of your project (GrandviewClass2019):
```
touch .gitignore
```
and add the following:
```
#Ignore folder vendor
vendor/
```









