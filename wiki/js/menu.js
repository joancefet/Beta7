// JavaScript Document
 $(function(){
    /*Ð¿Ð»Ð°Ð³Ð¸Ð½*/
    (function($){
        $.fn.liMenuVert = function(params){
            var p = $.extend({
    
            }, params);
            return this.each(function(){
                var menuWrap = $(this);
                var menuWrapWidth = menuWrap.outerWidth();
                var menuWrapLeft = menuWrap.offset().left;
                var menuSubSub = $('ul',menuWrap);
                
                menuSubSub.each(function(){
                    var mArrowRight = $('<div>').addClass('arrow-right');
                    var mSubSub = $(this);
                    var mSubList = mSubSub.closest('li');
                    var mSubLink = mSubList.children('a').append(mArrowRight);
                    var mSubArrow = $('<div>').addClass('arrow-left').prependTo(mSubSub);
                    var mSubArrow2 = $('<div>').addClass('arrow-left2').prependTo(mSubSub);
                    mSubLink.on('mouseenter',function(){
                        $(this).next('ul').children('li').width($(this).next('ul').width());
                        mSubArrow.css({top:mSubLink.outerHeight()/2 - 5});
                        mSubArrow2.css({top:mSubLink.outerHeight()/2 - 5});
                        var mSubSubLeft = mSubLink.position().left + mSubLink.outerWidth()
                        mSubSub.css({top:(mSubLink.position().top - (mSubLink.closest('ul').outerWidth()-mSubLink.closest('ul').width())/2)});    
                        mSubSub.css({left:mSubSubLeft});
                        mSubSub.show();
                        var w3 = $(window).width();
                        var w6 = (mSubSub.offset().left + mSubSub.outerWidth());
                        if(w6 >= w3){
                            mSubSub.closest('ul').addClass('toLeft')
                            mSubSubLeft = -mSubSub.outerWidth()
                        }
                        if(mSubSub.parents('ul').hasClass('toLeft')){
                            mSubSubLeft = -mSubSub.outerWidth()
                        }
                        mSubSub.css({left:mSubSubLeft});                
                        mSubLink.addClass('active')
                    })
                    mSubList.on('mouseleave',function(){
                        mSubSub.hide();
                        mSubLink.removeClass('active')
                    })
                })
                menuWrapWidth = menuWrap.outerWidth();
                menuWrapLeft = menuWrap.offset().left;
                $(window).resize(function(){
                    menuWrapWidth = menuWrap.outerWidth();
                    menuWrapLeft = menuWrap.offset().left;    
                })
            });
        };
    })(jQuery);
    
    /*Ð¸Ð½Ð¸Ñ†Ð¸Ð°Ð»Ð¸Ð·Ð°Ñ†Ð¸Ñ*/
    $('.menu_vert').liMenuVert();
});