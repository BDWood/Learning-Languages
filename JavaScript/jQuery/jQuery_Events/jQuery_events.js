$(function() {

    $('button').on('click', function() {
    
        var btn = $('<div>');

        btn.text('new div');

        btn.appendTo('body');

    });

    //delegated event. $(parent).on('click', 'child', function() {});

    $('body').on('click', 'div', function() {
      
        console.log('div is clicked')
    
    });

});