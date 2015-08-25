$(function() {


    /**
     * Can treat $ as a function or an object.
     * ie: $().method()
     * or: $.method()
     */

    //newer way with promises
    $.ajax({
    'url': 'foo.php',
    'type': 'POST',
    'dataType': 'json'
    }).then(function(data) {
        console.log(data);
    }).fail(function() {
        console.log('theres an error');
    });

    //older way with callbacks
    $.ajax({
        'url': 'foo.php',
        'type': 'POST',
        'dataType': 'json'
        'success': function(data) {
            console.log(data.name);
        },
        'error': function() {
            console.log('theres an error');
        }
    });


    //short cut to callback way
    $.post('path/', { data: data }, function(/* success */) {

    }, function(/* failure */) {

    });

    //shortcut to promises
    $.post('path/').done(function() {

    }).fail(function() {

    });

});