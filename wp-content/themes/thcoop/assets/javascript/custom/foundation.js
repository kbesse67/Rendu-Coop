jQuery(document).foundation();

/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mysidenav").style.width = "320px";
    document.getElementById("mysidenav").style.paddingRight = "60px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mysidenav").style.width = "0";
    document.getElementById("mysidenav").style.paddingRight = "0";
}


jQuery(document).ready(function() {

  /*
   * Avec un console.log
   */
   /* Menu qui devient noir lors du scroll */
   $(window).scroll(function() {
       var scroll = $(window).scrollTop();

       if (scroll >= 500) {
           $('.containerdrapeau').addClass('displaynone');
       } else {
           $(".containerdrapeau").removeClass('displaynone');
       }

       if (scroll >= 500) {
           $('.logocoop').addClass('displaynone');
       } else {
           $(".logocoop").removeClass('displaynone');
       }
   });

  jQuery(document).ready(function(){
    console.log("jQuery est prêt !");
  });



});
