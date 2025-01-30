$(document).on('mouseover', '.navbar > .container-fluid > .hover-sub > ul > li', function () {
    $(this).children('.dropdown-menu').stop().fadeIn(400);
});

$(document).on('mouseleave', '.navbar > .container-fluid > .hover-sub > ul > li', function () {
    $(this).children('.dropdown-menu').stop().fadeOut();
});

// $(document).ready(function(){
//     $('.navbar > .container-fluid > .hover-sub > ul > li').mouseover(function(){
//         $(this).children('.dropdown-menu').stop().fadeIn(400);
// });
// $('nav > .container-fluid > .hover-sub > ul > li').mouseleave(function(){
//     $(this).children('.dropdown-menu').stop().fadeOut();
//     });
// });

mobileNavToggle = function () {
    const $sidebar = $("#sidebar");
    const $header = $("#header");

    if ($sidebar.length === 0) {
        console.error("Sidebar element not found!");
        return;
    }
    if ($header.length === 0) {
        console.error("header element not found!");
        return;
    }

    $sidebar.toggleClass("d-none");
}