$(function(){
    $('.mes').on('click',function() {
        //$post(url, data, callback, type);   //提交地址, 提交数据, 回调函数, 返回的数据类型
        $(document.body).rightdialog({
            title: '订单详情',
            content: 'admin/order_mes',
            delscroll: '.main-content'
        });

        var id = $(this).attr('orderid');
        $.get('admin/gain', {
            'orderid': id
        }, function (data) {
            //console.log(data);
            var html1 = '';
            var html2 = '';
            var html3 = '';
            var html4 = '';
            var html5 = '';
            var html6 = '';
            var $div1 = $('#div1');
            html1 += '<span>订单号: '+ data.user_id +'</span>'+'</br>';
            html2 += '<span>开始时间: '+ data.start_time +'</span>'+'</br>';
            html3 += '<span>结束时间: '+ data.end_time +'</span>'+'</br>';
            html4 += '<span>价格: '+ data.price +'</span>'+'</br>';
            html5 += '<span>添加时间: '+ data.addtime +'</span>'+'</br>';
            html6 += '<span>订单状态: '+ data.order_status +'</span>'+'</br>';
            //aa.order_id = aa.order_id == null ? "" : aa.order_id;
            $div1.append(html1);
            $div1.append(html2);
            $div1.append(html3);
            $div1.append(html4);
            $div1.append(html5);
            $div1.append(html6);
        }, 'json');
    });
});