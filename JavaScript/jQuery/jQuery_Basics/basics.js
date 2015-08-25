// $(function () {

    // $('noun').verb();

    // $('subject').action();

//     $('div').remove();



// });

// $(document).ready(function() {

    /*same as $(function() {

    }); */

// });


//document is a built in object in JavaScript.

// $(function() {


//     $('div')
//         .addClass('foo bar')
//         .text('This is div.foo.bar and it also as an ID of whatever the hell I felt like writing')
//         .attr('id', 'whateverthehellifeltlikewriting')
//         .attr('align', 'center');


// });

// $(function() {
    // Selects all the divs that exist on the page
//     var foo = $('div');

    //creates a brand ner div tag that doesn't exist in the DOM
//     var foo = $('<div>')
//     foo.append('hello');


// });


//usage of .append $('container').append(goes inside the container)
//usage of .appendTo $(inside the container).appendTo('container')
//usage of .text $(target element).text(inserted text); this prints code into a string
//usage of .html $(target element).html(inserted text); this does not print code to a string
//usage of .addClass $(target element).addClass(class to add to element)
//usage of .attr $(target element).attr(attribute to add to element)
//usage of .css $(target element).css('css property', 'css value'); creates inline styles
//usage of .remove $(target element).remove()





// $(function() {

//     var div = $('<div>')
//         .text('hello world')
//         .addClass('foo')
//         .css('border', '1px solid black')
//         .append('lets go to lunch')
//         .appendTo('body');

// });




















$(function() {

    var div = $('<div>');


    div.addClass('foo')
        .text('This is a div')
        .append('<br>This is an append method')
        .appendTo('body');


});






