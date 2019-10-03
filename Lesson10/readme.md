# Lesson 10  
___10/01/2019___



# Going deep into JavaScript syntax 


_note_: you can execute javascript directly in your developer console.

Your guide: https://www.w3schools.com/js/default.asp

## Synatx basics
var a,b;
var x, y;
x = 5;
y = 6;
var z = x+y;
if(x===y){
    console.log("x is equal to y");
    console.log('this is a string too');
}
function thisIsAFunction(input1){
    return "Receieved "+input1;
}

// this is a comment
/* and this is a comment too */
var i = 3;
for (var i = 0; i < 10; i++) {
  // some statements, but var i = 0 overrides previous value. Use Let instead

}
let j = 15;
for (let j=0; j<10; j++){
    console.log("j = "+j);
}
console.log(' here j is: '+j);


"use strict"; Defines that JavaScript code should be executed in "strict mode".

this keyword is a bit confusing, read more at: https://www.w3schools.com/js/js_this.asp


Arrays and types:
var cars = ["Saab", "Volvo", "BMW"];
Objects: 
var city = {
    name: 'Des Moines',
    neighboringCities: ['West Des Moines', 'Urbandale', 'Plesant Hill'],
    foundedYear: 1851
}


ECMAScript standard defines seven data types that are primitives: 
* Boolean 
* Null 
* Undefined 
* Number 
* BigInt 
* String 
* Symbol (https://developer.mozilla.org/en-US/docs/Glossary/Symbol)
And there is Object. 

From: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Data_structures

_"Normal" objects_, and functionsSection
A JavaScript object is a mapping between keys and values. Keys are strings (or Symbols) and values can be anything. This makes objects a natural fit for hashmaps.
_Functions_ are regular objects with the additional capability of being callable.
_Dates_
When representing dates, the best choice is to use the built-in Date utility in JavaScript.

_Indexed collections_: Arrays and typed ArraysSection
Arrays are regular objects for which there is a particular relationship between integer-key-ed properties and the 'length' property. Additionally, arrays inherit from Array.prototype which provides to them a handful of convenient methods to manipulate arrays. For example, indexOf (searching a value in the array) or push (adding an element to the array), etc. This makes Arrays a perfect candidate to represent lists or sets.

A note on bigint:
var x = 32n;
typeof x;
//"bigint"

There is also the concept of "truthy" and "falsy" in javascript. E.g. you can have a boolean true or false
let x = true;
if(x) console.log('x is true');
if(3>9){console.log("3 > 9")}else{console.log("3 is not greater than 9")};
but you can also have things like that which evaluate to true or false inside a conditional:  
"0"  
"hello"  
null    
Undefined  
1    
0  
3  
{}  
How do you check? A very common pattern to transform a truthy/falsy to a boolean is to use !!  
for example:
```  
!!"0"
//true
!!""
//false
!!0
//false
```

## Keywords and reserved words
Keywords are tokens that have special meaning in JavaScript: break, case, catch, continue, debugger, default, delete, do, else, finally, for, function, if, in, instanceof, new, return, switch, this, throw, try, typeof, var, void, while, and with.

Future reserved words are tokens that may become keywords in a future revision of ECMAScript: class, const, enum, export, extends, import, and super. Some future reserved words only apply in strict mode: implements, interface, let, package, private, protected, public, static, and yield.

The null literal is, simply, null.

There are two boolean literals: true and false.


## Regex
```
var pattern = /grand view/i;
var text = "Founded in 1896, Grand View University is a private liberal arts university in Des Moines. It's name is again Grand View University";
var n = text.search(pattern);
console.log(n);
var replResult = text.replace(pattern, "");
console.log(replResult);
//"Founded in 1896, GrandView University is a private liberal arts university in Des Moines. It's name is again GrandView University"
```
More exercise: https://www.w3schools.com/js/js_regexp.asp


## Javascript and DOM
https://www.w3schools.com/js/js_htmldom.asp



### Ajax and responding to the browser
Will go over an example: add_contact_ajax.php vs add_contact.php 


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
    jQuery - what is it and how it's less necessary with query selectors: https://www.w3schools.com/jsref/met_document_queryselector.asp


Greate reading: https://css-tricks.com/multi-million-dollar-html/  

## Homework/practice
Create a page that that has four javascript questions. The answer options will be:
Question 1: input box (i.e. `<input type="text">`)
Question 2: Single select question - will have 4 select radio buttons
Question 3: Multiple choice question: 4 checkboxes
Question 5: Multiple choice questions but with a select box i.e. `<select> <option>...</option> ... </select>` with --select-- by default, and 4 options to select. This will also allow multiple selections! 

Use javascript to validate the answer. Once the user clicks Submit below the form display the result, something like this:
Question 1: you entered: ..., correct answer ...
Question 2: ...
Your total score: 1 point. 
(possible scores are 1, 2,3,4 points, a point for each question).

The submit button becomes enabled ONLY after the user fills in all the possible questions. 

Successfully completting this homework will add points to your quiz result. 

---





