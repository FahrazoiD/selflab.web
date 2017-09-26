$(document).ready(function() {
    portflioSlide();
    setSpecContent();
    // parallaxScroller();
    if (window.location.href == "http://localhost:8000/album")
        getInstagramData();
});

function portflioSlide() {

    $('.img-unit').click(function() {
        $('.portfolio-slide').css('left', '-100%');
    });

    $('.back-arrow').click(function() {
        $('.portfolio-slide').css('left', '0');
    });

}

function portfolioResize() {

    $('.insta-img').click(function() {
        var modal = `<div class="modal_blackener" 
                              style="z-index: 50; 
                                    top: 0; left: 0; 
                                    position: fixed; 
                                    width: 100vw; 
                                    height: 100vh; 
                                    background-color: rgba(50, 50, 50, .5); 
                                    display: flex; 
                                    flex-direction: column;
                                    justify-content: center;
                                    align-items: center;"> 
							<div class='modal_img'
                                style='z-index: 60;
                                        height: auto; 
                                        border: 10px solid white;
                                        box-shadow: 0px 0px 4px rgba(50, 50, 50, .6);
										cursor: pointer;
										position: relative;'>
								<img src="../images/close.svg" width='50px' style="position: absolute; right: 0; top 0;"></img>
                            </div>
                          </div>`;
        var imgsrc_old = $(this).attr('src');
        var imgsrc_new = '';

        $('.album-section').prepend(modal);
        $('window').css('overflow', 'hidden');

        if (imgsrc_old.indexOf('/p320x320/') == -1) {
            imgsrc_new = imgsrc_old.replace('/s320x320/', '/612x612/');
            $('.modal_img').css('width', '70%');
            $('.modal_img').append(`<img src='${imgsrc_new}' width=100%></img>`);
        } else {
            imgsrc_new = imgsrc_old.replace('/p320x320/', '/612x612/');

            $(window).height() > $(window).width() ? $('.modal_img').css('height', '60%') : $('.modal_img').css('height', '80%');
            $('.modal_img').append(`<img src='${imgsrc_new}' height=100%></img>`);
        }

        $('.modal_img').click(function() {
            $(this).parent().remove();
            $(this).remove();
        })
    });

}

function setSpecContent() {

    $('.img-unit').click(function() {
        let specTitle = $(this).find('p').text(),
            specImage = $(this).css('background-image');

        specImage = './' + specImage.slice(specImage.indexOf("assets"), -2);

        $('.spec-title').text(specTitle);
        $('.img-spec').attr('src', specImage);
    });

}

function parallaxScroller() {

    var windowHeight = $(document.body).height();
    var quoteHeight = $('.quote-spacing').height();
    var quoteBgTop = $('.quote-spacing').css('background-position');
    var quoteBgSize = $('.quote-spacing').css('background-size');
    var scrollage = 0;
    var quote_spacings = [];

    $('.quote-spacing').each(function(index) {
        quote_spacings.push($(this));
    });

    $(window).scroll(function() {

        scrollage = $(this).scrollTop() / windowHeight * 200;

        if ((($(this).scrollTop() + $(window).height()) >= quote_spacings[0].offset().top) &&
            ($(this).scrollTop() <= (quote_spacings[0].offset().top + quote_spacings[0].height()))) {

            quote_spacings[0].css('background-position', '50% calc( 100% - ' + scrollage + '% )');

        }

        if ((($(this).scrollTop() + $(window).height()) >= quote_spacings[1].offset().top) &&
            ($(this).scrollTop() <= (quote_spacings[1].offset().top + quote_spacings[1].height()))) {

            quote_spacings[1].css('background-position', '50% calc( 100% - ' + scrollage + '% )');

        }

    });

}

function getInstagramData() {

    var feed = new Instafeed({
        get: 'user',
        userId: '3108753216',
        //filter: function(image) { return image.tags.indexOf('selflaboratory') >= 0; },
        //template: '<div class="grid-item"><img src="{{image}}"><p>{{caption}}</p></div>',
        template: '<div class="grid-item"><img class="insta-img" src="{{image}}"></div>',
        clientId: 'd1c051869a4d4a0fb4165399d638ba59',
        accessToken: '3108753216.d1c0518.87bda88f40d94183a61c12be8d74072b',
        resolution: 'low_resolution',
        limit: 30,
        after: function() {
            initMasonryGrid();
            portfolioResize();
        }
    });

    feed.run();

}

function initMasonryGrid() {

    var grid = document.querySelector('.grid');
    var msnry = new Masonry(grid, {
        itemSelector: '.grid-item',
        columnWidth: 320,
        fitWidth: true,
        gutter: 10
    });

    imagesLoaded(grid).on('progress', function() {
        // layout Masonry after each image loads
        msnry.layout();
    });

}