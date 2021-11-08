$(document).ready(function() {
    function openMobileNav() {
        $('.navbar__toggle').click(function(event) {
            // console.log('Показ меню');
            $('.navbar').toggleClass('navbar_open');
            $('.navbar__toggle').toggleClass('navbar__toggle_open');
        });
    };
    openMobileNav();
});

$(document).ready(function() {

    let wowOffset = $(window).height() / 4;
    
    let wow = new WOW({
        boxClass:     'wow',
        animateClass: 'slideUp', // animation css class (default is animated)
        offset:       wowOffset,          // distance to the element when triggering the animation (default is 0)
    });
    wow.init();
})
