console.log('hello')
$(document).ready(function(){
    $('nav > .container-fluid > .hover-sub > ul > li').mouseover(function(){
        $(this).children('.dropdown-menu').stop().fadeIn(400);
});
$('nav > .container-fluid > .hover-sub > ul > li').mouseleave(function(){
    $(this).children('.dropdown-menu').stop().fadeOut();
    });
});