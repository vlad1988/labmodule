
$('td').each( function () {
    $('option#'+$(this).attr('data-pivot')).hide();
});
