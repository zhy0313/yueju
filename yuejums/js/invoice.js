$(function(){
    $('.edit').on('click',function(){
        $(document.body).rightdialog({
            title: '增加发票',
            content: 'Invoice/invoice_detail',
            delscroll:'.main-content'
        });
        var $invoice_id=$(this).attr('invoiceId');
            // console.log($invoice_id);
            $.post('invoice/invoice_edit',{
                'order_id':$invoice_id
            },function(data){
                var html='';
                var $edit=data; 
                $('.edit_num').html('房屋编号：'+$edit.house_id);
                $('.edit_username').html('用户名：'+$edit.username);
                $('.edit_time').val("2014-10-20 10:20:20");
                $('.edit_price').html('价格：￥'+$edit.price);
                $('.invoice_number').html($edit.order_id);
                $('.invoice_num').val($edit.invoice_num);
                $('.invoice_title').val($edit.invoice_title);
                if($edit.is_post==0){
                    html+='<a href="Invoice/order?invoiceid='+$invoice_id+'" class="">'+'更改邮寄状态'+'</a>';
                }else{
                    html+='<span class="">'+'已邮寄'+'</span>';
                } 
                $('.post').append(html);
                if($edit.invoiced == 1){
                    $('.edit_time').attr('disabled',true);
                    $('.invoice_title').attr('disabled',true);
                    $('.invoice_num').attr('disabled',true);
                    $('.yes').attr('disabled',true);
                }
            },'json');

    });
});