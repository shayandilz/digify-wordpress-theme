require('./bootstrap');
import 'swiper/css';
import WOW from 'wow.js'
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import $ from 'jquery';


const wow = new WOW(
    {
        boxClass: 'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0,          // distance to the element when triggering the animation (default is 0)
        // duration: 1.5,
        mobile: true,       // trigger animations on mobile devices (default is true)
        live: true,       // act on asynchronously loaded content (default is true)
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
    }
);
wow.init();

const shadow = new WOW(
    {
        boxClass: 'shadow_box',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0,          // distance to the element when triggering the animation (default is 0)
        // duration: 1.5,
        mobile: true,       // trigger animations on mobile devices (default is true)
        live: true,       // act on asynchronously loaded content (default is true)
        callback: function (box) {
            if (box) {
                setTimeout(function () {
                    box.classList.add('card-shadow2')
                }, 1000)
            }


        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
    }
);
shadow.init();

document.addEventListener('DOMContentLoaded', function () {
    require('./gsap');


    function css(element, style) {
        for (const property in style)
            element.style[property] = style[property];
    }
    var myCollapsible = document.getElementById('navbarNav')
    const html = document.querySelector('html');
    myCollapsible.addEventListener('shown.bs.collapse', function () {
        css(html, {
            'margin': '0',
            height: '100%',
            overflow: 'hidden'
        });
    })
    myCollapsible.addEventListener('hidden.bs.collapse', function () {
        css(html, {
            'margin': '0',
            height: 'auto',
            overflow: 'scroll'
        });
    })
    let mh = 0;
    $(".equal-box > div").each(function () {
        if (mh < $(this).height()) {
            mh = $(this).height()
        }
    })
    $(".equal-box > div").height(mh);
    //play pause button
    let playButton = document.getElementById("play_button");
    let video_tr = document.getElementById("video_tr")
    // Event listener for the play/pause button
    if (playButton) {
        playButton.addEventListener("click", function () {
            if (video.paused == true) {
                // Play the video
                video.play();

                // Update the button text to 'Pause'
                playButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="#fff" class="bi bi-pause-fill" viewBox="0 0 16 16">
                                      <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z"/>
                                    </svg>`;
                video_tr.classList.add('transparent');

            } else {
                // Pause the video
                video.pause();

                // Update the button text to 'Play'
                playButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="#fff" class="bi bi-play-fill" viewBox="0 0 16 16">
                                        <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                                    </svg>`;
                video_tr.classList.remove('transparent');
            }
        });
    }
    if (window.matchMedia('(max-width: 1200px)').matches) {
        //fix post card category break line


        $('div > .single-post-img #category_cut').each(function () {
            // let parentMain = this;
            let parent = document.getElementById('category_cut').offsetWidth
            let children = this.children;
            let totalWidth = 0;

            // console.log(children.length)
            for (var i = 0; i < children.length; i++) {
                totalWidth += parseInt(children[i].offsetWidth, 10);
            }

            // console.log(totalWidth)

            if (totalWidth > parent) {
                function short(length) {
                    var len = children.length;

                    for (var i = 0; i < len; i++) {
                        var g = children[i].innerHTML;
                        var x = "...";
                        var leng = length - 5;
                        var html = g.substring(0, leng) + "";
                        var allHTML = html + x;
                        children[i].innerHTML = allHTML;
                    }
                }

                short(39);
            }
        });





        $('.menu-item-has-children > a').after(`
        <div class="d-lg-none d-block p-2 custom-d position-absolute end-0 top-0 mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
        </div>`);
        $('.custom-d').on('click', function (e) {
            let subMenu = $('.menu-item-has-children').children("ul");
            if (subMenu.is(':visible')) {
                subMenu.slideUp();
            } else {
                subMenu.slideDown();
            }

            return false;
        });
    } else {
        $("#navbarNav .menu-item-has-children").hover(function () {
            var isHovered = $(this).is(":hover");
            if (isHovered) {
                $(this).children("ul").stop().slideDown(300);
            } else {
                $(this).children("ul").stop().slideUp(300);
            }
        });
    }

    //toggle header on time
    const toggleScrollClass = function () {
        if (window.scrollY > 24) {
            document.body.classList.add('scrolled');
        } else {
            document.body.classList.remove('scrolled');
        }
    }
    toggleScrollClass();

    //check scroll to take actions on it
    window.addEventListener('scroll', function () {
        toggleScrollClass();
    });

    const swiper = new Swiper('.swiper1', {
        // Optional parameters
        direction: 'vertical',
        loop: true,
        autoplay: {
            delay: 2000,
        },
        disableOnInteraction: false,
    });

    const swiper2 = new Swiper('.swiper2', {
        // Optional parameters

        direction: 'horizontal',
        loop: true,
        autoplay: true,
        spaceBetween: 35,
        slidesPerView: 3,
        centeredSlides: true,
        roundLengths: false,
        grabCursor: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next-unique',
            prevEl: '.swiper-button-prev-unique',
        },
        disableOnInteraction: false,
        breakpoints: {
            360: {
                slidesPerView: 1,
            },
            1050: {
                slidesPerView: 3,
            }
        },
        on: {
            afterInit: function () {
                setTimeout(function () {
                    $('.swiper2 .swiper-wrapper .card').each(function () {
                        let width = $(this).width();
                        $(this).height(width)
                    })
                }, 400)
            },
        },
    });

    const swiper3 = new Swiper('.swiper3', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,
        slidesPerView: 1,
        simulateTouch: false,
        effect: 'creative',
        creativeEffect: {
            limitProgress: 2,
            prev: {
                // will set `translateZ(-400px)` on previous slides
                translate: [0, 0, 0],
            },
            next: {
                // will set `translateX(100%)` on next slides
                translate: [10, 15, 0],
            },
            shadowPerProgress: true,
            progressMultiplier: 1
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
    // swiper3.changeLanguageDirection('rtl');
    let names = [];
    $(".swiper-wrapper .swiper-slide").each(function (i) {
        names.push($(this).data("name"));
    });
    // var menu = ['Slide 1', 'Slide 2', 'Slide 3']
    const swiper4 = new Swiper('.swiper4', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,
        slidesPerView: 1,
        grabCursor: false,
        effect: 'creative',
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (names[index]) + '</span>';

            },
        },
        creativeEffect: {
            limitProgress: 2,
            prev: {
                // will set `translateZ(-400px)` on previous slides
                translate: [0, 0, 0],
            },
            next: {
                // will set `translateX(100%)` on next slides
                translate: [10, 15, 0],
            },
            shadowPerProgress: true,
            progressMultiplier: 1
        }
    });
    // swiper4.changeLanguageDirection('rtl');
    // get tab active width
    if (swiper4) {
        let div = document.querySelector('.swiper-pagination > span:last-child');
        let newText = document.createElement('span'); // create new textarea
        div.parentNode.insertBefore(newText, div.nextSibling);

        let markerfirst = document.querySelector('.swiper-pagination > span:first-child');
        let marker = document.querySelector('.swiper-pagination > span:last-child');
        let item = document.querySelectorAll('.swiper-pagination span');

        marker.style.left = markerfirst.offsetLeft + "px";
        marker.style.width = markerfirst.offsetWidth + "px";

        function indicator(e) {
            marker.style.left = e.offsetLeft + "px";
            marker.style.width = e.offsetWidth + "px";
        }

        item.forEach(link => {
            link.addEventListener('click', (e) => {
                indicator(e.target)
            })
        })
    }



})



