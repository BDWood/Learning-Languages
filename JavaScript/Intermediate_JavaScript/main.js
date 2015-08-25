/***************************************************************************************************
    Three talks rolled into one, loops, if statements, arrays and Document stuff. In JS you can 
    treat everything as an object. Every variable type can also be treated like an object.
***************************************************************************************************/

var lazy = true;
var hungry = true;

// Out put one of the following. 
// I am going to eat eggs and bacon
// I am going to eat cereal
// I am not hungry

/***************************************************************************************************
    If statements. If statements are written the same in JavaScript as they are in PHP
***************************************************************************************************/

if (hungry) {
    
    if (lazy) {
    
        console.log("I'm going to eat cereal");
    
    } else {
    
        console.log("I'm going to eat eggs and bacon");
    
    }

} else {

    console.log("I'm not hungry");

}

/***************************************************************************************************
    Arrays. Two ways to make arrays in JS. Everything in JS is an object. Even though they are also 
    Arrays, they are objects. Arrays typically hold objects. You can get an array out of an object 
    within an array.
***************************************************************************************************/


var a = new Array();
var a = [];

// You CANNOT do this
a[] = 'hello';
// In PHP ^this^ would put hello into the array.
// This is how you do it in JS. It is the only way to push info into an array
a.push('hello');
// vs PHP
push($a, 'hello');
a.push('world');
//accessing values of arrays.

console.log(a[0]);//outputs hello
console.log(a[1]);//outputs world
console.log(a[0].length);//outputs 5, the same as what strlen would in php

var person = {
    name: 'Bryan',
    email: 'woodywoodwoodman@gmail.com'
}

a.push(person);
//pushed person object literal into the a array in spot 2.

console.log(a[2].name);//outputs Bryan, the person object literal's name from inside of the a Array.

var people = []

var p1 = {
    name: 'Adult with kids',
    kids: ['kid', 'rose', 'joe']
}

var p2 = {
    name: 'The Scotts'
}

var p3 = {
    name: 'Another Person'
}

people.push(p1, p2, p3);

console.log(people[0].name);
console.log(people[1].name);
console.log(people[2].name);
console.log(people[0].kids[2]);

/***************************************************************************************************
    Loops for days.
***************************************************************************************************/

var people = [];

var p1 = {name: 'Bryan'};
var p2 = {name: 'The Scotts'};
var p3 = {name: 'Even from Ellenois'};

people.push(p1, p2, p3);

var i = 0
while (i < people.length) {
        console.log( people[i].name );
        i++;
}
//outputs Bryan, The Scotts, Even from Ellenois


for (var i = 0; i < people.length; i++) {
    console.log( people[i].name );
}
//outputs Bryan, The Scotts, Even from Ellenois


for (i in people) {
    console.log( people[i].name );
}
//outputs Bryan, The Scotts, Even from Ellenois

/***************************************************************************************************
    DOM and Document methods. This is native JavaScript and for the most part is sucks.
***************************************************************************************************/

var e = document.getElementById('foo');

var els = document.getElementsByTagName('div');

for (i in els) {
els[i].innerHTML = 'This is a div on top of being foo';
}

var e = document.querySelector('div > .foo.bar')
//Allows you to use any CSS selector. can only select one.
var els = document.querySelectorAll('div > .foo.bar')
//selects all of the things.
//have to loop over a bunch of crap.