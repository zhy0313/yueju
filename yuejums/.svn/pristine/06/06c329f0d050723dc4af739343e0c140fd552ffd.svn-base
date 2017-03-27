$(function(){
    $('.cancel_txt').each(function(){
        var maxwidth=20;
        if($(this).text().length>maxwidth){
            $(this).text($(this).text().substring(0,maxwidth));
            $(this).html($(this).html()+'…');
        }
    });
    $('.cancel_td').on('click',function() {
        $(document.body).rightdialog({
            title: '详情',
            content: 'Order/cancel_view',
            delscroll: '.main-content'
        });
        var $cancel_id=$(this).attr('contentId');
        $.post('Order/cancel_detail',{
            'cancel_id':$cancel_id
        },function(data){
            var $detail=data;
            var html='';
            $('.cancel_ajaxid').html('订单号:'+$detail.order_id);
            $('.cancel_ajaxusername').html($detail.username);
            $('.cancel_ajaxcity').html($detail.city+'市');
            $('.cancel_ajaxstreet').html($detail.street);
            $('.cancel_ajaxroad').html($detail.road);
            $('.cancel_ajaxtitle').html($detail.title);
            $('.cancel_ajaxreason').html($detail.reason);
            $('.cancel_ajaxtime').html($detail.time);
            if($detail.manage==3){
                html+='<a href="Order/cancel?cancelagid='+$cancel_id+'" class="cancel_ajaxa1 cancel_aj">'+'同意'+'</a>';
                html+='<a href="Order/cancel?cancelreid='+$cancel_id+'" class="cancel_ajaxa2 cancel_aj">'+'拒绝'+'</a>';
            }else if($detail.manage==2){
                html+='<span class="cancel_ajaxre cancel_aj">'+'已拒绝'+'</span>';
            }else{
                html+='<span class="cancel_ajaxag cancel_aj">'+'已同意'+'</span>';
            } 
            $('#cancel_ajaxchoose').append(html);
        },'json');
    });
});