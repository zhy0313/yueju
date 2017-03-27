$(function(){
    $('.edit').on('click',function(){
        $(document.body).rightdialog({
            title:'用户管理',
            content:'user/user_bounce',
            delscroll:'.main-content'
        });
        //获取当前ID
        var user_id=$(this).attr('contentId');
        // console.log(user_id);
        // $.post('user/user_edit',{//ajax 方式
        //     'user_id':user_id
        // },function(data){
        //
        // },'json');
    });
    $('#pdel').on('click',function(){
        console.log('aa');
        var check=$('.input1');
        var arr=[];
        for(var i=0;i<check.length;i++){
            if(check[i].checked==true){
                arr.push(check[i].value);
            }
            console.log(arr);
        }     
        $.post('user/delete_many',{
                'delete_id':arr
        },function(data){
           if(data=='success'){
               location.href="user/userall";
           } else{
              alert('删除失败');
           }
        },'text')
        });
    

    });

