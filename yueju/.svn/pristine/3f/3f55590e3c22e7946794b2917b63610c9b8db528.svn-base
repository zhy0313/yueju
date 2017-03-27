/**
 * Created by 王双丽 on 2017/1/23.
 */
$(function(){
    //房间基本信息高度设置
    var $information = $("#essential-information"),
        $informationDiv = $(".house-type div",$information),
        $conmmentContianer = $(".conmment-contianer"),
        $conmmentContent = $('.conmment-content'),
        informationheight= 0,
        conmment=0;
    $informationDiv.each(function () {
        informationheight=informationheight+$(this).height();
    });
    $information.height(informationheight+4*20+2+38+55+10);
    //评论高度
    for (var i = 0;i<$conmmentContent.length;i++){
        console.log($('p',$conmmentContent).eq(i).innerHeight());
        //$conmmentContianer.eq(i).height($conmmentContent.eq(i).height()+11);
    }
    //设置结束
    //轮播图
    var $smallHouseImg = $("#small-house-img"),//小图片div
        $smallImg = $("img",$smallHouseImg),//小图片
        $bigHouseImg = $("#big-house-img"),//大图片div
        $informationImg = $('#information-img'),//图片整个展示区域
        $bigImg = $("img",$bigHouseImg),//大图片
        idx = 1,
        $down = $("#down"),
        $up = $("#up");
    $smallImg.eq(1).addClass('select');
    $informationImg.hover(function(){
            $('#up').show();
            $('#down').show();
        },function(){
            $('#up').hide();
            $('#down').hide();
        });
    $smallImg.on('click',function(){
            var $i= $(this).index();
            idx=$(this).index();
            $bigImg.fadeOut();
            $bigImg.eq(idx).fadeIn();
            $smallImg.removeClass('select');
            $(this).addClass('select');

        });
    $up.on('click',function(){
            //$smallHouseImg.css({'top':'-104px'});
            idx--;
            if (idx==-1){
                idx=$smallImg.length-1;
            }
            console.log(idx);
            $smallImg.removeClass('select');
            $smallImg.eq(idx).addClass('select');
            $bigImg.fadeOut();
            $bigImg.eq(idx).fadeIn();
            //$smallHouseImg.css({'top':'-104px'});
        });
    $down.on('click',function(){
            idx++;
            if (idx==$smallImg.length){
                idx=0;
            }
            $smallImg.removeClass('select');
            $smallImg.eq(idx).addClass('select');
            $bigImg.fadeOut();
            $bigImg.eq(idx).fadeIn();
        });
    //基本信息和评论的选项卡；
    var $contentConmment = $("#content-conmment button"),//选择基本信息/评论
        $particaularsUl = $("#particaulars ul");//对应的ul
    $contentConmment.on('click',function(){
        $contentConmment.removeClass('select');
        $(this).addClass('select');
        $particaularsUl.fadeOut();
        $particaularsUl.eq($(this).index()).fadeIn();
    });
    var $collectIcon = $(".collect-icon");
    var user_id = $collectIcon.prop('user_id');
    var house_id = $collectIcon.prop('house_id');
    var $i=0;
    if (user_id!=-1){
        $collectIcon.on('click',function(){
            if ($i==0){
                $.get('room/do_collect',{'user_id':user_id,'house_id':house_id},function(){
                    $collectIcon.css({'backgroundImage':'url(./assets/img/collect1.png)'});
                    $i=1;
                });
            }else{
                $.get('room/do_del_collect',{'user_id':user_id,'house_id':house_id},function(){
                    $collectIcon.css({'backgroundImage':'url(./assets/img/collect.png)'});
                    $i=0;
                });
            }

        });
    }else{
        alert('请登录后操作');
    }
    var $loginshow = $(".login_show"),
        oMask = document.getElementById('login-mask'),
        oClose = document.getElementById('login-close'),
        oLogin = document.getElementById('login');
    $loginshow.on('click',function(){
            oLogin.style.display='block';
            oMask.style.display = 'block';
    });
    oClose.onclick=function(){
        oLogin.style.display='none';
        oMask.style.display = 'none';
    };
    //验证短租/长租/不满一个月
});
