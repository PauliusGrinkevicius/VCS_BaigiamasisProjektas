jQuery(document).ready(function($){
    

 document.querySelector(".burger").addEventListener("click", function(){
                                                          

     document.getElementById('nav2').classList.toggle("hide");
    
 
 } );
    

        
    // document.querySelector(".mygtukas").addEventListener("click", function(){
     //    window.scrollTo(0,document.body.scrollHeight);

     //    } );

    $(".button").click(function () {
       $('html, body').animate({
           scrollTop: $(".kontaktai").offset().top
       }, 2000);
    });
    
    $(".pagrindinis").click(function () {
        event.preventDefault();
       $('html, body').animate({
           scrollTop: $(".cover-konteineris").offset().top
       }, 2000);
    });
    
    $(".apie_mane").click(function () {
        event.preventDefault();
       $('html, body').animate({
           scrollTop: $(".apie-mane-konteineris").offset().top
       }, 2000);
    });
    
     $(".darbo_patirtis").click(function () {
         event.preventDefault();
       $('html, body').animate({
           scrollTop: $(".dp").offset().top
       }, 2000);
    });
    $("._issilavinimas").click(function () {
         event.preventDefault();
       $('html, body').animate({
           scrollTop: $("#issilavinimas").offset().top
       }, 2000);
    });
    
     $("._igudziai").click(function () {
          event.preventDefault();
       $('html, body').animate({
           scrollTop: $("#igudziai").offset().top
       }, 2000);
    });
    
    $("._kontaktai").click(function () {
         event.preventDefault();
       $('html, body').animate({
           scrollTop: $("#kontaktai").offset().top
       }, 2000);
    });

        
});