



$(document).ready(function(){
    $('.share').toggle(function(){
        $('.share-wrapper').animate({'width': '345px'}, 500);
        $(this).addClass('open');
    }, function() {
        $('.share-wrapper').animate({'width': 0}, 500);
        $(this).removeClass('open');
    });


    $('.credits').click(function(){
        $('.billing-block').slideDown();
    });

    $('.billing-block').click(function(){
        $(this).slideUp();
    });

    $('.menu-text').click(toggleMenu);

    $('.synopsis-text').click(function(){
        $('.overlay').fadeIn().append('<div class="synopsis-modal"><div class="modal-close"></div><iframe src="synopsis.html" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:100%;" allowTransparency="true"></iframe></div>');
        toggleMenu();
    });

    $('.trailer-text').click(function(){
        $('.overlay').fadeIn().append('<div class="trailer-modal"><div class="modal-close"></div><iframe src="trailer.html" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:100%;" allowTransparency="true"></iframe></div>');
        toggleMenu();
    });

    $('.photos-text').click(function(){
        $('.overlay').fadeIn().append('<div class="photos-modal"><div class="modal-close"></div><iframe src="photos.html" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:100%;" allowTransparency="true"></iframe></div>');
        toggleMenu();
    });

    $('.modal').click(function(event){
        event.stopPropagation();
    });

    $('.modal-close').click(function(){
        $('.overlay').fadeOut().empty();
    });

    $('.overlay').click(function(){
        $(this).fadeOut().empty();
    });
});

function toggleMenu() {
    if ($('.menu-text').hasClass('open')) {
        $('.menu-dropdown').animate({height: '1.9em'});
        $('.menu-text').removeClass('open');
    } else {
        $('.menu-dropdown').animate({height: '5.9em'});
        // $('.menu-dropdown').animate({height: '4.6em'});
        $('.menu-text').addClass('open');
    }
}
