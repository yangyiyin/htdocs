layui.use('carousel', function(){
    var carousel = layui.carousel;
    carousel.render({
        elem: '#test1'
        ,width: '100%' //设置容器宽度
        ,height: '428px'
        ,arrow: 'hover' //始终显示箭头
        //,anim: 'updown' //切换动画方式
    });
});
layui.use('carousel', function(){
    var carousel = layui.carousel;
    carousel.render({
        elem: '#test2'
        ,width: '100%' //设置容器宽度
        ,height: '252px'
        ,arrow: 'none'
        ,interval: '3000'
        //,anim: 'updown' //切换动画方式
    });
});

var showtime = 0;
$("#img_small a:lt(3)").mouseover(function(){
    var showtime = $("#img_small a:lt(3)").index(this);
    showImg(showtime)
});
$("#img_scroll").hover(function(){
    if(settime)clearInterval(settime);
},function(){
    settime = setInterval(function(){
        showImg(showtime)
        showtime++;
        if(showtime==3){showtime=0;}
    } , 3000);
});
var settime = setInterval(function(){
    showImg(showtime)
    showtime++;
    if(showtime==3){showtime=0;}
} , 3000);

$("#cwq_ranking_tab li").hover(function() {
    $(this).addClass('active').siblings().removeClass('active');
    index = $(this).index();
    $(".tab-pane").hide();
    $(".tab-pane").eq(index-1).show();
}, function() {
    /* Stuff to do when the mouse leaves the element */
});

function showImg(i){
    var Link = $("#img_small").eq(i).find("a").attr("href");
    $("#img_small .curr").attr("href",Link);
    $("#img_big a").eq(i).fadeIn(800).siblings("a").fadeOut(600);
    $("#img_small .curr").animate( { top: (i*216) } , 300);
}