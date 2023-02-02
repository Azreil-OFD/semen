$(document).ready(function() {
    PopUpHide();
    $(".header_burger").click(function(event) {
        $(".header_burger,.header_menu").toggleClass("active");
        $("body").toggleClass("lock");
    });
    $( ".header_link" ).click(function() {
        $(".header_burger,.header_menu").toggleClass("active");
        $("body").toggleClass("lock");
      });
});

function PopUpShow(){
    $("#popup1").show();
}

function PopUpHide(){
    $("#popup1").hide();
}

function PopUpShow2(){
    $("#popup2").show();
}

function PopUpHide2(){
    $("#popup2").hide();
}