/**
 * Created by TRUONG on 4/28/14.
 */
$(document).ready(function(){

//    get width site and return masonry
    var width = Math.floor((window.outerWidth)/244)*244;

    $('.widthMasonry').width(width+1);

    $(window).resize(function() {
        var newWidth =  Math.floor(($('body').width())/244)*244;
//        alert($('body').width());
        $('.widthMasonry').width(newWidth+1);
    });

//    masonry
    var container = document.querySelector('#masonry');
    var msnry = new Masonry( container, {
        isOriginLeft: false,
        columnWidth: 244,
        itemSelector: '.item-masonry'
    });

    imagesLoaded( container, function() {
        msnry.layout();
    });


//    button like item
    $('.item-masonry').on('click', '.btnLike',function(){
       $(this).toggleClass('activate');
       $('.item-masonry').click();
    });
});