# Installing Laravel for the project application


# Installation instructions   
Install composer and Laravel. Follow the instructions: https://laravel.com/docs/6.x  

Video lessons on Laracast:   
https://laracasts.com/skills/laravel


Creating the project: 
`laravel new . `    - creates a project in current directory


## Why will we use Laravel to build the project application 
It provides all the modern web application standards out of the box:  
 * MVC Pattern 
 * A robust application structure
 * Dependency Injection
 * ORM (Object-Relational Mapping)
 * CSRF Protection
 * Templating engine that also support plain PHP 
 * Great and detailed documentation
 * Simple to build Authentication and Authorization   

Read more here: https://belitsoft.com/blog/10-benefits-using-laravel-php-framework



## MVC
Laravel implements Model View Controller pattern. More reading: https://blog.pusher.com/laravel-mvc-use/   
## CSRF 
Cross-site request forgery, also known as one-click attack or session riding and abbreviated as CSRF or XSRF, is a type of malicious exploit of a website where unauthorized commands are transmitted from a user that the web application trusts (wikipedia).  
Example: a website has a link that transfer 100$ from your account at BankX if you have recently logged in and have a current session:
```
<img src="https://bankX.com/transferFunds/Amount=100&ToAccount=1343953824321">
```

## Frontent
On the frontend Laravel uses SASS instead of CSS. https://sass-lang.com/. 
It also has configured an npm project with commands to compile resources. It uses Webpack behind the scene. 

