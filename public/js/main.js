$("#header").load("/common/nav.html", function () {
    console.log("nav.html loaded!");
  });

$("#sidebar").load("/common/sidebar.html", function () {
  console.log("sidebar.html loaded!");
});

$("#footer").load("/common/footer.html", function () {
  console.log("footer.html loaded!");
});

/* add nav, sidebar head */
$('head').append('<script src="/public/js/sidebar.js"></script>');
$('head').append('<script src="/public/js/navbar.js" defer></script>');
$('head').append('<script src="/public/fw/js/color-modes.js"></script>');
$('head').append('<link href="/public/css/sidebars.css" rel="stylesheet">');
$('head').append('<link href="/public/css/navbars.css" rel="stylesheet"/>');
$('head').append('<link href="/public/css/common.css" rel="stylesheet"/>');