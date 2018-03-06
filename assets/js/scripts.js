
/*
These functions make sure WordPress
and Materialize play nice together.
*/
// var headerHeight = $("header").height();
//
//
//         $(document).ready(function(){
//     $('a[href^="#"]').on('click',function (e) {
//         e.preventDefault();
//
//         var target = this.hash,
//         $target = $(target);
//
//         $('html, body').stop().animate({
//             'scrollTop': $target.offset().top - headerHeight
//         }, 1200, 'swing', function () {
//             window.location.hash = target ;
//         });
//     });
// });

$('a[href^="#"]').on('click',function(event){
    event.preventDefault();
    var target_offset = $(this.hash).offset() ? $(this.hash).offset().top : 0;
    //change this number to create the additional off set
    var customoffset = $("header").height();
    $('html, body').animate({scrollTop:target_offset - customoffset}, 900);
});

$(document).ready(function(){



 $('.modal').modal();



var options = [
    {selector: '.dropcap', offset: 50, callback: 'Materialize.fadeInImage(".fixed-action-btn")' },
    {selector: '#about-pathways', offset: 50, callback: 'Materialize.fadeInImage("#about-pathways")' },
    {selector: '#starting', offset: 50, callback: 'Materialize.fadeInImage("#starting")' }
];
Materialize.scrollFire(options);


  // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
$(".dropdown-button").dropdown();
  $(".dropdown-button").click(function(){


  // //   $width = $("li.dropdown").width();
  $id = $(this).parent().attr("id");
  // //
  //$( "li" ).not(document.getElementById("#"+$id+"")).children( "a" ).removeClass("active");
  // $( "li" ).not(document.getElementById("#"+$id+"")).children( "ul" ).toggleClass("block");
  // // $("#"+$id+"").children("ul").toggleClass("block").css("min-width", $("li.dropdown").width());
  $("#"+$id+" a i").toggleClass("rotate");
  // //   $("#"+$id+" a").toggleClass("activate");
  // //
  });
  // //
  // //
  $('.slider').slick({
  	    dots:true,
  			arrows: true,
    	  //autoplay:true,
    		infinite: true,
        //fade: true,

  	  });


      var markers = document.querySelectorAll('input[type="checkbox"]'),
          l = markers.length,
          i, txt;
      for (i = l - 1; i >= 0; i--) {
          txt = markers[i].nextSibling;
          $(txt).prev().attr('id', 'r' + markers[i].value);
          $(txt).wrap('<label for="r' + markers[i].value + '"/>');
      };

      var favorite = [];
              $.each($("input[type=checkbox]:checked"), function(){
                  favorite.push($(this).next().html());
              });
              $( ".page-title" ).append( favorite.join(", ") );


window.cookieconsent_options = {
       learnMore: 'More info',
       theme: 'dark-bottom',
       link: document.location.origin + '/privacy'
   };

});
