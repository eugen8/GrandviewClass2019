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

### What is an exception:

### Working with files: upload, read, write

### handling cookies and headers


### PHP Filters

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

#### Create a DB table

#### Update a DB table

Select, Insert, Update
View table information




### Ajax and responding to the browser






## Javascript
Going deep into JavaScript syntax 
    syntax
    reserved words
    types
    operators
    conditional and loops
    string library and operators
    functions, variables, globals
    objects and classes
    arrays
    RegExJava
    JavaScript DOM
    Ajax 
    Single page applications (SPA)
    Event propagation
    DOM Update
    jQuery

Homework/practice:

Watch: JavaScript: The Good Parts
https://www.youtube.com/watch?v=hQVTIJBZook


CSS and HTML -> https://www.w3schools.com/css/css_pseudo_classes.asp
                units: rem, em, px, cm
				https://www.w3schools.com/css/css_pseudo_elements.asp


Practice: 

