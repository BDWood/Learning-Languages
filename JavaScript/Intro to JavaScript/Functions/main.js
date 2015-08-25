
// //Function Declarations used 1% of the time, hoisting.
// function hello() {
//     return 'hi, how are you?';
// }

// console.log(hello());


// //Function Expressions used the other 99% of the time, no hoisting.
// var hello = function() {
//     return 'hi, how are you?';
// }



//======================== Second Function Lesson ==============================




// var foo = function() {
//     return 'hello from foo';
// }



// var doSomething = function(x) {
//     console.log(x());
// }

// doSomething(foo);

// var pizza = function() {
//     //console.log('make the dough');
//     return 'make the dough';
// }

// var spaghetti = function() {
//     //console.log('make the noodles');
//     return 'make the noodles';
// }

// var cook = function(recipe) {
//     console.log('the first thing I need to do is: ');
//     console.log(recipe());// <-----Recipe() is the callback function.
// }

// cook(pizza);
// cook(spaghetti);




//============================More function shizz===============================



// userIsLogged = true;


// var userLogin = function(x, y) {
//     if (userIsLogged) {
//         console.log(x());
//     } else {
//         console.log(y());
//     }
// }



// var success = function() {
//     return 'We are logged in';
// }

// var fail = function() {
//     return 'ya dun goofed';
// }


// userLogin(success, fail);







//=======================Anonymous Functions Man================================




var foo = function() {
    console.log('i am foo');
}

var bar = function(c) {
    console.log(c());
}




setInterval(foo , 60000);



// function add(x, y) {
//     console.log(x + y);
// }

// add(3, 8);

// var