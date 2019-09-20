## Date: 9/17/2019

# Content

## PHP 
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



What is an exception:


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

