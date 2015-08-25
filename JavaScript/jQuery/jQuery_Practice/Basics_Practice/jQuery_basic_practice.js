// In the document ready function of jQuery, console.log "hello".
// console.log the html of the p.poem element.
// console.log the text of the p.poem element.
// console.log the val of the select.title element.
// console.log the val of the input.fn element.
// console.log the val of the input.age element.
// console.log the val of the input.sex element.
// console.log the attribute of the input.sex element.
// Append your name to the div.name element.
// Append "isn't it" to the end of li.saying.
// Use AppendTo method to append "er" to each greeting.
// Use AppendTo method to append "pie" to the div.food element.
// Use AppendTo method to append "er" to each saying.


$(function() {

    console.log('hello');
    console.log($('p.poem').html());
    console.log($('p.poem').text());
    console.log($('select.title').val());
    console.log($('input.fn').val());
    console.log($('input.age').val());
    console.log($('input.sex').val());
    console.log($('input.sex').attr("class"));
    $('div.name').append('Bryan Wood');
    $('li.saying').append("isn't it");
    $('er').appendTo('.greeting');
    $('pie').appendTo("div.foo");
    $('<i>er</i>').appendTo('.greeting');

});