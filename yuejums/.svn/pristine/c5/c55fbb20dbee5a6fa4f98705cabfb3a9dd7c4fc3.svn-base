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
        $.post('user/user_edit',{//ajax 方式
            'user_id':user_id
        },function(data){
            console.log(data);
            var html='';
            var $name=$('.login-wrap');
            html+='<input type="hidden" name="hid" value="'+data.user_id+'"> 用户名：<input type="text" class="form-control" placeholder="User Name" id="name" autofocus name="username" value="'+data.username+'"> 密&nbsp;码：<input type="password" class="form-control" placeholder="Password" name="pasword" value="'+data.password+'">邮&nbsp;箱：<input type="text" class="form-control" placeholder="Email" name="email" value="'+data.email+'">电&nbsp;话：<input type="text" class="form-control" placeholder="Tel" name="tel" value="'+data.tel+'">性&nbsp;别：<input type="text" class="form-control" placeholder="Sex" name="sex" value="'+data.sex+'">出生年：<input type="text" class="form-control" placeholder="Birth-year" name="birth-year"  value="'+data.birth_year+'">出生月：<input type="text" class="form-control" placeholder="Birth-month" name="birth-month"  value="'+data.birth_month+'">出生日：<input type="text" class="form-control" placeholder="Birth-day" name="birth-day"  value="'+data.birth_day+'"><button class="btn btn-lg btn-update btn-block" type="submit"><i class="fa fa-check"></i></button>';
            console.log(html);
            $name.append(html);

        },'json');
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

