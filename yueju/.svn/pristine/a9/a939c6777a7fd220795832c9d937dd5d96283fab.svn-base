/**
 * Created by zjl .
 */
$(function(){
   $('.com-revise').on('click',function(){
      $('#mask').css('display','block');
       var $comment_id=$(this).attr('reviseId');
       console.log($comment_id);
       $.get('comment/comment_revise',{//ajax 方式
           'comment_id':$comment_id
       },function(data){
           console.log(data);
           var comTimeEnd = data.end_time;
           var comTimeStart = data.start_time;
           console.log(comTimeStart);
           var aa=comTimeStart.split(' ');
           var startTime = aa[0].split('-');
           // var aa=comTimeStart.split(' ');
           // console.log(aa);
           // var startTime = aa[0].split('-');
           var startTimeY=startTime[0];
           var startTimeM=startTime[1];
           var startTimeD=startTime[2];
           console.log(startTime);
           var bb=comTimeEnd.split(' ');
           var endTime=bb[0].split('-');
           var endTimeY=endTime[0];
           var endTimeM=endTime[1];
           var endTimeD=endTime[2];
           // var startTime= aa[0];
           $('.com-time-tc').html('开始时间：'+startTimeY+'年'+startTimeM+'月'+startTimeD+'日'+'--结束时间：'+endTimeY+'年'+endTimeM+'月'+endTimeD+'日');
           $('.c-abstract').html(data.name+'-'+data.count+'条评论');
           console.log(data.name);
           //单间出租-20评论-宜居两人
           // console.log(endTime);
           // console.log(aa);
           $('.bcom-title').html(data.title);
           $('.star-tc').attr('data-score',data.score).raty({
               score: function () {
                   return $(this).attr('data-score');
               }
       });
           $('.com-left-img').attr('src',data.img_src);
           $('.com-content').val(data.content);
           $('.hcom-id').val(data.comment_id);
       },'json');
   });
    $('.mask-com-cancel').on('click',function(){
        $('#mask').css('display','none');
        location.href='comment/show';
    });
    $('.sidebar-mess').on('click',function () {
        $(this).addClass('active').parent().siblings().children('a').removeClass('active');
        $(this).siblings('.rectangle').addClass('chosestyle')
            .parent().siblings().children('.rectangle').removeClass('chosestyle');
    });
    // $('.star').raty({score:3});
    $('.star').raty({
        score: function() {
            return $(this).attr('data-score');
        },
        readOnly  : true
    });
    $('.star-tc').raty({
        score: function() {
            return $(this).attr('data-score');
        }
    });
});
