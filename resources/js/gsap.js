import gsap from "gsap";
import $ from "jquery";

import ScrollTrigger from 'gsap/ScrollTrigger';
import DrawSVGPlugin from "gsap/DrawSVGPlugin";
import MorphSVGPlugin from "gsap/MorphSVGPlugin";
import CSSRulePlugin from "gsap/CSSRulePlugin";

gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin, MorphSVGPlugin, CSSRulePlugin)
MorphSVGPlugin.defaultType = "linear";


$(function () {







    // check for element
    if(gsap.utils.toArray('#drawSvg')){
        let shapes = "#drawSvg path",
            tl = gsap.timeline();

        tl.fromTo(shapes, {duration: 5, visibility:"visible", drawSVG:"0%"}, {duration: 5, drawSVG:"100%"})
    }



    let targets = gsap.utils.toArray(
        ".icon-section > div," +
        ".icon-section," +
        ".icon-section > div:nth-child(1) span, " +
        ".icon-section > div:nth-child(2) span, " +
        ".icon-section > div:nth-child(3) span, " +
        ".icon1, " +
        ".icon2, " +
        ".icon3, " +
        ".section-1, " +
        ".section-2, " +
        ".section-3, " +
        ".svg-draw, " +
        "#star-path, " +
        ".tile-section, " +
        ".tiles path:first-child, " +
        ".tiles path:last-child"
    );
    if (targets.length) {
        let box1 = document.querySelector(".box1");
        let box2 = document.querySelector(".box2");
        let box3 = document.querySelector(".box3");
        ScrollTrigger.matchMedia({
            "(min-width: 1080px)": function () {
                let section1 = gsap.timeline({
                    scrollTrigger: {
                        trigger: ".section-1",
                        scrub: 2,
                        start: "top center",
                        end: "bottom center"
                    }
                })
                    .fromTo(box1, {translateY: 0}, {translateY: -130})
                let section2 = gsap.timeline({
                    scrollTrigger: {
                        trigger: ".section-2",
                        scrub: 2,
                        start: "top center",
                        end: "bottom center"
                    }
                })
                    .fromTo(box2, {translateY: 0}, {translateY: -160})

                let section3 = gsap.timeline({
                    scrollTrigger: {
                        trigger: ".section-3",
                        scrub: 2,
                        start: "top center",
                        end: "bottom center"
                    }
                })
                    .fromTo(box3, {translateY: 0}, {translateY: -70})
            }
        });
        let rule = CSSRulePlugin.getRule(".first-circle")

        let lineSVG = gsap.timeline({
            scrollTrigger: {
                trigger: ".svg-draw",
                start: "-300px center",
                end: "150px center",
                scrub: true
            }
        })
        lineSVG.fromTo('#star-path', 0.3, {drawSVG: "0%"}, {drawSVG: "100%"});

        let tile1 = document.querySelector(".tiles path:first-child");
        let tile2 = document.querySelector(".tiles path:last-child");

        let tiles = gsap.timeline({
            scrollTrigger: {
                trigger: ".tile-section",
                start: "-150px center",
                end: "50px center",
                scrub: true
            }
        })
        tiles.fromTo(tile1,
            {fill: 'transparent', translateY: '-290px', translateX: '-150px'},
            {fill: '#D33535', translateY: '0px', translateX: '0px'});
        tiles.fromTo(tile2,
            {fill: 'transparent', translateY: '+190px', translateX: '+50px'},
            {fill: '#F46B5E', translateY: '0px', translateX: '0px'});

        let icon1 = document.querySelector('.icon1');
        let icon2 = document.querySelector('.icon2');
        let icon3 = document.querySelector('.icon3');

        let iconSpan1 = document.querySelector('.icon-section > div:nth-child(1) span');
        let iconSpan2 = document.querySelector('.icon-section > div:nth-child(2) span');
        let iconSpan3 = document.querySelector('.icon-section > div:nth-child(3) span');

        let icon_section = gsap.timeline({
            scrollTrigger: {
                trigger: ".icon-section",
                start: "-150px center",
                end: "50px center",
                scrub: true
            }
        })
        icon_section.fromTo('.icon-section > div', {opacity: '0', delay: 0.4},{opacity: '1'})

        icon_section.fromTo(icon1,  {scale: '0', delay: 0.4},{scale: '1'})
        icon_section.fromTo(iconSpan1,  {opacity: '0', delay: 0.4},{opacity: '1'})

        icon_section.fromTo(icon2,  {scale: '0', delay: 1.2},{scale: '1'})
        icon_section.fromTo(iconSpan2,  {opacity: '0', delay: 1.2},{opacity: '1'})

        icon_section.fromTo(icon3,  {scale: '0', delay: 2},{scale: '1'})
        icon_section.fromTo(iconSpan3,  {opacity: '0', delay: 2},{opacity: '1'})
    }


    if(gsap.utils.toArray('progress, .sticky-side')){
        gsap.to('progress', {
            value: 100,
            ease: 'none',
            visibility:'visible',
            scrollTrigger: {
                trigger: "#startProgressBar",
                scrub: 0.3,
                start: 'start 0px',
                end: 'bottom bottom'

            }
        });

        ScrollTrigger.matchMedia({
            "(min-width: 1080px)": function () {

                gsap.to('article',{
                    scrollTrigger:{
                        trigger: '.sticky-side',
                        pin: true,
                        start: 'top 50px',
                        end: 'bottom center',
                        markers: true
                    }
                })
            }
        })

    }





})
