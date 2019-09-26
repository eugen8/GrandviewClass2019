## Date: 9/17/2019

# Content

## PHP 

### isset, empty and trim
Checking for isset or empty on your requests to avoid exceptions :
```
 if(isset($_GET['yourname'])){
        echo "name isset and it is: [".$_GET['yourname']."]";
 }
```
Can you say what these expressions will output?
        $_GET['yourname']==false
        $_GET['yourname']===false

The check with isset will still give you true if the string is empty, e.g. url?yourname=&youremail= . To exclude empty strings use the empty function:
```
    if( !empty($_GET['yourname']) ){
        echo "name is: ".$_GET['yourname'];
    }

    //this is somewhat equivalent to doing :
    if( isset($_GET['yourname']) && $_GET['yourname']!=false ){
        echo 'name is: '.$_GET['yourname'];
    }
```

If you want to check for whitespaces as well do something like below:
```
    if(isset($_GET['yourname'])  && !empty(trim($_GET['yourname'])) ){
        echo "name is not empty string and it is: ".$_GET['yourname'];
    }

    //Prior to PHP 5.5, empty() only supports variables, so this expression has to be written something like this:
    $nameStr = isset($_GET['yourname']) ? trim($_GET['yourname']) : "";
    if( !empty($nameStr) ){
        echo "name is not empty string and it is: ".$nameStr;
    }

```

See also: 

https://www.php.net/manual/en/function.empty.php

https://www.php.net/manual/en/types.comparisons.php

### Other userful string functions:
Length
5 != strlen( $_POST[ 'cache_scheduled_time' ] )

Compare strings
$result = strcmp($operand1, $operand2) == 0;


Substring
e.g.: 'jetpack' === substr( $_GET['page'], 0, 7 )

IndexOf:
if( xhr.responseText.indexOf('wp_error') !== -1 ) {return; }

### Dates

### Useful String functions 

### Objects in PHP

### Working with exceptions

### Connecting to the database

If you are using Lightsail by default phpmyadmin is disabled on your domain. Phpmyadmin is a great web tool to manage your database. You can read more about it here: https://www.phpmyadmin.net/  
There are two ways to use it: either use a tunneling application like putty and tunnel the access to phpmyadmin via ssh OR change the configurations on lightsail to allow access from the internet. We'll do the latter:
1) Go to http://yoururl/phpmyadmin and see how you get the message: __For security reasons, this URL is only accessible using localhost (127.0.0.1) as the hostname.__
2) Login into your instance and `cd ~/apps/phpmyadmin/conf`
3) Make a copy of your httpd-app.conf file to make sure you can get it back if you mess something up with command: `cp httpd-app.conf httpd-app.conf.denyinter
net_backup`
4) `sudo vim httpd-app.conf ` to edit httpd-app.conf file with root persmissions (you normally won't be able to save this file with bitnami user, so you do sudo to edit this file with root (power user) priviledges).
5) navigate to the line that looks like below and change it as follows. 
Remember in VIM you navigate with h/l keys for left/right and with j/k for down/up. It's convenient that you don't need to move your hand to the arrows. 
To go into insert mode and enter text use the `i` key. If you want to enter text after the cursor ends use the `a` key.
Change from this:
```
Order allow,deny
Allow from 127.0.0.1
```
To This:
```
Order allow,deny
#Allow from 127.0.0.1
Allow from all
```

AND ALSO CHANGE:
```
<IfVersion >= 2.3>
Require local
</IfVersion>
```
TO
```
<IfVersion >= 2.3>
#Require local
Require all granted
</IfVersion>
```
What this does is comments out to only allow access from IP 127.0.0.1 (localhost) to allowing from any IP. 

6) Save the file and exit: after you make the chagne press `ESC` key to get out of insert mode (you'll see --INSERT-- disapear at the bottom of the terminal). Type `:wq` to `w`rite the content of the updated file to the disk and `q`uit VIM. 
7) Restart your apache server with the command:  
```sudo /opt/bitnami/ctlscript.sh restart apache```

8) Go back to the URL/phpmyadmin and see your application load. Enter login root and password - retrieve it from doing `cat ~/bitnami_application_password`. 
9) Congratulate yourself, now you can see your database on Lightsail, add/remove tables, run queries. 


#### Create a DB table
_before we get started create a file credentials.php and add it to .gitignore: `**/credentials.php`_
Put the following content in credentials.php:
```<?php

define('DBHOST','localhost');
define('DBPORT','');
define('DBUSER','gwclassuser');
define('DBUSERPASSWORD','');
```

Connect and create tables

MySQLi is the MySQL improved extension. You can use it in object oriented or procedural way. 
PDO stands for Php Data Objects and will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.

To be consistent between your localhost and your lightsail instance for DB connections create a user that will have access to only one schema. If you create e.g. schema Lesson8 then select the Lesson8 in phpMyAdmin, go to Privileges and Add User Accou t.  Do something like this: username:gwclassuser , for passowrd click on generate to get a unique hard(impossible) to guess password. Copy the password in your DBUSERPASSWORD definition, e.g. `define('DBUSERPASSWORD','yourVeryHardToGuessPassword');`  
You can selet either "Grant all privileges on database lesson8" if you have a DB schema called lesson8, or you can create another schema.  
For Global Privileges select all Data and Structure for simplicity, and click Go.
Also note the hosts: You must have both localhost and % for each user. Only then you can log-in locally AND from other hosts or client programs.  This is why root has multiple entries in User Accounts tab in phpMyAdmin.


Now you should be able to connect to your schema. Head over to the database.php for the example. 

#### Update a DB table

Select, Insert, Update
View table information

Read about sql injection and security: https://websitebeaver.com/prepared-statements-in-php-mysqli-to-prevent-sql-injection
Read more about working with your database from php at: https://www.w3schools.com/php/php_mysql_intro.asp



### API Integration with Mailchimp
First go to Mailchimp and create an account.   
Then create an API key: go to your Account, then choose Extras > API Keys and Create A Key. 
Copy this key and add define a constant in your credentials:   
`define("MAILCHIMP_APIKEY_DEFAULT","your_api_key");`  
Next go to Audience tab and click on Manage Audiences > Settings
Copy the Unique id for audience _your_audience_name_ and add the constant in your credentials.php file  
`define ('MAILCHIMP_AUDIENCE_ID','your_list_id');`   

Once you have the key you can start invoking the API. Head to add_contact.php for the examples.   
Learn more from Mailchimp documentation: 
 * https://mailchimp.com/developer/       
 * https://mailchimp.com/developer/guides/get-started-with-mailchimp-api-3/
 * https://mailchimp.com/developer/guides/an-introduction-to-rest/
 * https://mailchimp.com/developer/reference/lists/list-members/ - this is what we'll mainly be doing, adding members
 * https://mailchimp.com/developer/reference/lists/ 
 * https://mailchimp.com/help/all-the-merge-tags-cheat-sheet/
 












