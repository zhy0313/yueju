/**
 * Created by 王双丽 on 2017/1/13.
 */
$(function () {
    var $aDelBtn = $(".del-btn");
    var $oMessageCon = $(".message-con");
    var $olistGroup = $(".message .list-group");
    var $aListGroupItem = $(".message .list-group-item");
    var $alistGroupItemDiv = $("div",$aListGroupItem);
    $aListGroupItem.height($oMessageCon.height()+30);
    if ($aListGroupItem.height()<120) {
        $aListGroupItem.height(120);
    }
    $alistGroupItemDiv.height($aListGroupItem.height());
    $aDelBtn.css({"marginTop":$aListGroupItem.height()/2-10+"px","display":"block"});

//    全选
    var $oCheckAll = $(".check-all");
    var $aCheck = $(".list-group-item input:checkbox");
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
});