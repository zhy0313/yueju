/**
 * Created by 王双丽 on 2017/2/4.
 */
$(function(){
    var $facility = $("#facility"),
        $facilityType = $(".type",$facility),
        $facilityLi = $('li',$facility);
    console.log($facilityType.outerHeight());
    $facility.height($facilityLi.height()*Math.ceil($facilityLi.length/4)+ $facilityType.outerHeight(true)+40);
    var $conmmentBtn = $("#content-conmment span"),
        $containerDown = $("#container ul");
    console.log($conmmentBtn);
        $conmmentBtn.on('tap',function(){
            console.log(1);
            $conmmentBtn.removeClass('select');
            $(this).addClass('select');
            $containerDown.css({'display':'none'});
            $containerDown.eq($(this).index()).css({'display':'block'});
        });
    var $bigHouseImg = $("#big-house-img"),
        $bigImg = $(".big-img");
    $bigImg.on('swipeleft',function(){
        if ($(this).index()<$bigImg.length-1){
            $(this).fadeOut();
            $bigImg.eq($(this).index()+1).fadeIn()
        }else {
            $bigImg.fadeOut();
            $bigImg.eq(0).fadeIn();
        }

    });
    $bigImg.on('swiperight',function(){
        if ($(this).index()!=0){
            console.log(111111111);
            $(this).fadeOut();
            $bigImg.eq($(this).index()-1).fadeIn()
        }else {
            $bigImg.fadeOut();
            $bigImg.eq($bigImg.length-1).fadeIn();
        }

    });
    var $bookBtn = $("#book-btn"),
        idx= 0,
        $particaulars = $("#particaulars"),
        $bookInformation = $("#book-information");
    $particaulars.on('tap',function(){
        $bookInformation.hide();
        idx=0;
    });
    $bookBtn.on('tap',function(){
        console.log(idx);
        if (idx==0){
            $bookInformation.show();
            idx=1;
        }else{
            $bookInformation.submit();
        }

    });
});

