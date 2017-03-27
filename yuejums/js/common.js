/**
 * Created by 王双丽 on 2017/1/15.
 */
$('.admin-update').on('click',function(){
    var $id = $(this).prop('admin-id');
    $(document.body).rightdialog({
        title:'修改管理员',
        content:'admin/edit_admin',
        delscroll:'.main-content'
    });
    $.get('admin/update_admin',{'id':$id},function () {
    });
});