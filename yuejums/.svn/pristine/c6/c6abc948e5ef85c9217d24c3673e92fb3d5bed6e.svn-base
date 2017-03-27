// $(function(){
//     var offset=0;
//     $('#btn-more').on('click',function(){
//         $.get('comment/get_more',{
//             offset:offset+=7,
//         },function(data){
//             console.log(data);
//             var html='';
//             var $commentList=$('#addli');
//             for(var i=0;i<data.length;i++){
//                 var page=data[i];
//                 html+='<li class="list-group-item" ><span class="pull-left chk" ><input type = "checkbox" /> </span > <a class="thumb pull-left" href = "javascript:;" > <img src = "'+page.img+'" > </a > <a class="dialog" href = "javascript:;" > <small class="pull-right text-muted" ></small > <strong > '+page.username+'</strong > <span class="score"><strong>score:</strong>'+page.score+'</span> <span class="house-title"><strong>house:</strong>'+page.title+'</span> <span class="score">'+page.conmment_date+'</span> <br/> <span class="content_com"> '+page.content+'</span ></a > <br/> <a  id="delete_com" href="comment/delete/'+page.comment_id+'">删除</a> </li >';
//             }
//             $commentList.append(html);
//         },'json');
//
//     });
$(function(){
    $('.dialog').on('click',function() {
        $(document.body).rightdialog({
            title: '评论详情',
            content: 'comment/comment_details',
            delscroll: '.main-content'
        });
        var $comment_id=$(this).attr('contentId');
        // console.log($comment_id);
            $.post('comment/comment_detail',{
                'comment_id':$comment_id
            },function(data){
                    var detail=data;
                    $('.user-photo').attr('src',detail.img);
                    $('.username').html(detail.username);
                    $('.detail-score').html(detail.score);
                    $('.detail-title').html(detail.title);
                    $('.date').html(detail.conmment_date);
                    $('.detail-content').html(detail.content);
                    $('.img-first').src=detail.img_first;
                    detail.img_first=detail.img_first==null?"":detail.img_first;
                    detail.img_second=detail.img_second==null?"":detail.img_second;
                    detail.img_third=detail.img_third==null?"":detail.img_third;
                    $('.img-first').attr('src',detail.img_first);
                    $('.img-second').attr('src',detail.img_second);
                    $('.img-third').attr('src',detail.img_third);
            },'json');
        });
    $('#pdel').on('click',function(){
       var check=$('.input1');
        var arr=[];
        for(var i=0;i<check.length;i++){
            if(check[i].checked==true){
                arr.push(check[i].value);
            }
        }
    $.post('comment/delete_many',{
            'delete_id':arr
    },function(data){
       if(data=='success'){
           location.href="comment/paging";
       } else{
          alert('删除失败');
       }
    },'text')
    });
});