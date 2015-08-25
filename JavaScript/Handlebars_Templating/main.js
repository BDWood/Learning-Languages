/***************************************************************************************************
    Enter only a string into Handlebars.compile. It returns a function. Call the function and then
    pass an object literal into it. The thing that the object literal gives you is a string that
    is outputted into the actual page.
***************************************************************************************************/
//var string = $('#user-template').html();
//Without something passed in they ^^^^^^ are getters not setters.
$(function() {
    
    var template = Handlebars.compile($('#user-template').html()); 
    //this outputs the template filled with the variables.

    var output = template ({
        name: "Bryan",
        age: 19
    });


    $('.users').html(output);

});
