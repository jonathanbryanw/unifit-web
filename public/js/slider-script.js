$(document).ready(function () {
    $('.right').on('click', function(){
        var currImg = $('.active');
        var nextImg = currImg.next();
        var dots = $(".dot");

        if(nextImg.length){
            nextImg.addClass('active');
            currImg.removeClass('active');
        }else{
            nextImg = $(".slider-in img").first();
            nextImg.addClass('active');
            currImg.removeClass('active');
        }

        var i = nextImg.index();
        dots.className = dots.attr('class', 'dot');
        var currentDot = $(".slider-dot .dot:eq("+i+")");
        currentDot.addClass('active-dot');
    });

    $('.left').on('click', function () {
        var currImg = $('.active');
        var prevImg = currImg.prev();
        var dots = $(".dot");

        if(prevImg.length){
            prevImg.addClass('active');
            currImg.removeClass('active');
        }else{
            prevImg = $(".slider-in img").last();
            prevImg.addClass('active');
            currImg.removeClass('active');
        }

        var i = prevImg.index();
        dots.className = dots.attr('class', 'dot');
        var currentDot = $(".slider-dot .dot:eq("+i+")");
        currentDot.addClass('active-dot');
    });

});

function dotSwitch(a){
    var currImg = $('.active');
    var changeImg;
    var dots = $(".dot");
    a=a-1;

    changeImg = $(".slider-in img:eq("+a+")");
    currImg.removeClass('active');
    changeImg.addClass('active');

    dots.className = dots.attr('class','dot');
    var currDot = $(".slider-dot .dot:eq("+a+")");
    currDot.addClass('active-dot');
}