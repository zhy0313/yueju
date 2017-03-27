/**
 * Created by 王双丽 on 2017/1/15.
 */
$(".edit").on('click',function () {
    var $id = $(this).prop('admin-id');
    $(document.body).rightdialog({
        title:'修改管理员',
        content:'admin/edit_admin',
        delscroll:'.main-content'
    });
    $.get('admin/update_admin',{'id':$id},function (data) {
        $('#adminname').val(data.name);
        $('')
    });
});
$('.btn.btn-primary').on('click',function(){
    $(document.body).rightdialog({
        title:'添加管理员',
        content:'admin/add_admin',
        delscroll:'.main-content'
    });
});
