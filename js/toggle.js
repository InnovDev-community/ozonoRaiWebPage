$('document').ready(function() {
    $('#toggle-menu').click(function(){
        $(this).next().slideToggle();
    });
});