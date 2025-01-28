/* global bootstrap: false */
(() => {
  'use strict'
  const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(tooltipTriggerEl => {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})();

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