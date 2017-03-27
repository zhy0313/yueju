/**
 * Created by dell on 2017/1/15.
 */
$(function(){

    var $oCheckAll = $(".check-all");
    var $aCheck = $(".select_check");
    var $messageHide = $(".message-hide");
    var deleteAll ,delArr = [];
    function checkAll(){
        var aCheckIndex = 0;
        $oCheckAll.on("click",function () {
            if (aCheckIndex==0) {
                $aCheck.prop("checked",true);
                aCheckIndex=1;
            }
            else if (aCheckIndex==1) {
                $aCheck.prop("checked",false);
                aCheckIndex=0;
            }
        });
    }
    checkAll();

    var $messageDele = $("#message-dele");
    $messageDele.on("click",function(){
        console.log($("#del-some"))
        $("#del-some").submit();
    });
    $('#editable-sample_new').on('click',function(){
        $(document.body).rightdialog({
            title:'添加设施',
            content:'facility/get_add_facility',
            delscroll:'.main-content'
        });
    });
    $('.update').on('click', function () {
        var $id = $(this).prop('facility-id');

        $(document.body).rightdialog({
            title:'修改设施',
            content:'facility/update_facility',
            delscroll:'.main-content'
        });
        $.get('facility/get_update_facility',{'id':$id}, function (date) {
            console.log(date);
            $("#facility-name").val(date.name);
            $('#icon').prop('src',date.icon);
        },'json');
        console.log($("#facility-name").length);
    })
});