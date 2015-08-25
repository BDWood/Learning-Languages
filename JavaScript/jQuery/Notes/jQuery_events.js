$(function() {

    $('button').on('click', function() {
        //This way violates Seperation of Concerns
        //Normally use two seperate event handlers
    //     var btn = $(this);


    //     if (btn.hasClass('hello')) {
    //         btn.parents('div').append('hello');
    //     } else {
    //         btn.remove();
    //     }

    // });

    // $('button.remove').on('click', function() {

    //     $(this).remove();

    // });

});


/*******************************************************************************

$(this), in JavaScript refers to the current thing you are working with. In the 
example above that is the object button

*******************************************************************************/