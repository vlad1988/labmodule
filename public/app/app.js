(function($) { 

    $('td').each( function () {
        $('option#'+$(this).attr('data-pivot')).hide();
    });

    /*
    * Страничка отчетов
    */
    $('span:contains("Розглядається")').each(function(){
        $(this).addClass('badge');
    });

    $('span:contains("Схвалено")').each(function(){
        $(this).addClass('label label-success');
    });

    $('span:contains("На доопрацювання")').each(function(){
        $(this).addClass('label label-danger');
    });

    $('tr').each( function () {
        $('option[value='+$(this).attr('data-schema')+']').hide();
    });

})(jQuery);


