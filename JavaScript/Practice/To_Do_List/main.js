/*******************************************************************************

    Make a ToDo List that listens for the click and then submits the input value
    to a new DOM element.

    Then make a Remove button connected to the new DOM element that listens for 
    a click and then removes the entire DOM element.

*******************************************************************************/


$(function() {

    var submittedMessage = function(message) {

        var remove_btn = $('<button>')
            .text('Remove')
            .addClass('remove');

        var sub_message = $('<li>')
            .text(message)
            .addClass('todo_items')
            .append(remove_btn);
            
        $('ol').append(sub_message);

    }

    $('.submit').click(function() {

        var message = $('textarea').val();
        submittedMessage(message);

    });

    $(document).on('click', '.remove' ,function() {

        $(this).parent().remove();
        
    });

});