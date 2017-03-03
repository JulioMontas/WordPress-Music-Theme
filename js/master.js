console.log("Helloooo I'm hereeeeeee to stay, Design and Develop by @JulioMontas");


function openTap(tapName) {
              var i;
              var x = document.getElementsByClassName("tap");
              for (i = 0; i < x.length; i++) {
                 x[i].style.display = "none";
              }
              document.getElementById(tapName).style.display = "block";
          }



jQuery(document).ready(function($){
  $('.tabs').tabslet({
     active :1,
     animation : true
  });
});





// Show up whne you Scroll Down

$(document).scroll(function () {
    //Show element after user scrolls 800px
    var y = $(this).scrollTop();

    if (y > 2300) {
        $('.bottomMenu').fadeIn();
    } else {
        $('.bottomMenu').fadeOut();
    }
});



// Animation
$(document).ready(function (){
  $('.latest-music').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated bounceInLeft',
      offset: 95,
      repeat: true
     });
});

$(document).ready(function (){
  $('.music-latest').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated bounceInRight',
      offset: 95,
      repeat: true
     });
});

$(document).ready(function (){
  $('.fade-in').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeIn',
      offset: 95,
      repeat: true
     });
});
