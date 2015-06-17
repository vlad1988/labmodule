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

    $('tr').each( function () {
        $('option[value='+$(this).attr('data-schema')+']').hide();
    });

})(jQuery);


