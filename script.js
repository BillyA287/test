let $root = $("html, body");

//scroll function
$('a[href^="#"]').click(function () {
  let href = $.attr(this, "href");

  $root.animate(
    {
      scrollTop: $(href).offset().top,
    },
    500,
    function () {
      window.location.hash = href;
    }
  );
  return false;
});

$(window).on("scroll", changeLink);

//change link
function changeLink() {
  winScrollTop = $(window).scrollTop();
  let scrollPosition = scrollY || pageYOffset;
  lastSection = "";

  $(".js-section").each(function (index, template) {
    sectionPos = $(template).offset().top;

    // function to keep smooth scroll from jumping.
    if (scrollPosition > sectionPos - $(window).height() / 2) {
      lastSection = $(template).attr("id");
    }
  });

  // Change url
  window.location.hash = lastSection;

  // Change Highlight
  $(`.js-nav .js-link-smooth`).removeClass("active");
  $(`.js-nav .js-link-smooth[href="#${lastSection}"]`).addClass("active");
}
