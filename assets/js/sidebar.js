$('document').ready(function(){
    $('#sidebarCollapse').click(function(){

        $('#sidebar').toggleClass('close');
        $('#content').toggleClass('full');

    });
});