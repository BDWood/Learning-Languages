$(function() {

    var dogtd = function(data) {
        var source = $('#dogtd').html();
        var template = Handlebars.compile(source);

        return template({data: data});
    }

    var dogtr = function(meat, bun, ketchup) {
        var source = $('#dogrow').html();
        var template = Handlebars.compile(source);

        return template({
            meat: meat,
            bun: bun,
            ketchup: ketchup
        });
    }

    $('button').on('click', function(event) {
        event.preventDefault();
        console.log('button clicked');

        var meat = $('[name="meat-type"] option:selected').text();
        console.log(meat);
        var bun = $('[name="bun"] option:selected').text();
        console.log(bun)
        var ketchup = $('[name="ketchup"]').prop('checked');
        console.log(ketchup);

        var meat_cell = dogtd(meat);

        var bun_cell = dogtd(bun);

        var ketchup_cell = dogtd(ketchup ? 'heck yeah' : 'hellz no');

        // console.log(template);

        var context = {
            meat: meat_cell, 
            bun: bun_cell, 
            ketchup: ketchup_cell
        };

        var new_row = dogtr(meat_cell, context.bun, context.ketchup);
        console.log(new_row);

        $('table').append(new_row);

    });

});