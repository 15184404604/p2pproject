$(function(){
    $("#btnOnOff").on('click',function(){
        $("#personal").toggleClass("active");
        if($("#personal").hasClass("active")){
            $(this).text("显示");
        }else{
            $(this).text("隐藏")
        }
    });
    var x1,y1;
    $(window).on('touchstart',function(e){
        x1=e.originalEvent.changedTouches[0].clientX;
        y1=e.originalEvent.changedTouches[0].clientY;

    });
    $(window).on('touchend',function(e){
        var x2=e.originalEvent.changedTouches[0].clientX;
        var y2=e.originalEvent.changedTouches[0].clientY;
        //计算滑动距离
        var dx=x2-x1;
        
        if(Math.abs(dx)>=100){
            //$(选择器).trigger(事件类型)
            //完整写法$("#btnOnOff").trigger("click")
            //简写
            $("#btnOnOff").click();
        }
    })
})