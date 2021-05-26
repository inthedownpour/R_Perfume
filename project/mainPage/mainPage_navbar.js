var didScroll;
var lastScrollTop=0;
var delta=5;
var navH=$('header').outerHeight();


$(window).scroll(function(event){
  didScroll=true;
});

setInterval(function(){
  if(didScroll){
    hasScrolled();
    didScroll=false;
  }
}, 300);

function hasScrolled(){
  var st=$(this).scrollTop();
  if (Math.abs(lastScrollTop-st)<=delta)
    return;

  if(st>lastcrollTop && st> navH){
    $('header').removeClass('nav-down').addClass('nav-up')
  }
  else{
    if(st+$(window).height() < $(document).height()){
      $('header').removeClass('nav-up').addClass('nav-down');
    }
  }
  lastScrollTop=st;
};
