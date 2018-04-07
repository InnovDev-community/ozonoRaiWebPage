$('document').ready(function() {
    let variable = false;
    $('#toggle-menu').click(function(){
        $(this).next().slideToggle();
        if(!variable){
            $('#cabezera').css("position","fixed");
        }else{
            $('#cabezera').css("position","absolute");
        }
        variable=!variable;        
    });
});