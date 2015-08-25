//A new empty object
var tree = {};

//A new object with a property
var also_tree = {"size": "Large"};

//A new object with a property
var also_tree = {"size": "Large", "Evergreen": true};

//This is the same as the above, but prettier
var also_tree = {
    "size": "Large", 
    "Evergreen": true
};

JavaScript does not need the quotes for the variables
var also_tree = {
    size: "Large", 
    Evergreen: true
};


This is how you access the propperties of something in your object.
console.log(also_tree['size']);
this is the same thing as the above.
console.log(also_tree.size);

This is an Indexed array, associative arrays do not exist in JavaScript.
var list = [];

This is the same as the above
console.log( also_tree );


practice with object literals
var person = {
    tall: false,
    hair_color: 'brown',
    hair_length: 'long',
    eyes: 'hazel',
    shoe_size: 7,
    smart: true
};

console.log(person['tall']);
console.log(person.hair_color);
console.log(person['hair_length']);
console.log(person.eyes);
console.log(person['shoe_size']);
console.log(person.smart);

var sport = {};

sport.type = 'football';
sport['ball'] = true;
console.log(sport);

/*
    JSON stands for JavaScript Object Notation. Required to have quotes around it's
    properties. IE: {"number": 10, "evergreen", true} 
    Function in PHP called json_encode to change associative arrays to JSON code.
*/