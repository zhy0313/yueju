/**
 * Created by 王双丽 on 2017/2/5.
 */
var oSelectLogin=document.getElementById('select-login'),
    oLoginShow=document.getElementsByClassName('show-llogin'),
    oLogin = document.getElementById('login'),
    oClose = document.getElementById('login-close'),
    oMask = document.getElementById('login-mask'),
    aSelectSpan = oSelectLogin.getElementsByTagName('span'),
    oOpenDown = document.getElementById('open-down'),
    oLoginDown = document.getElementById('login-down'),
    inddx= 0,
    oDoLogin = document.getElementById('do_login'),
    aLoginForm = oDoLogin.getElementsByTagName('form');
var selectidx;
console.log(oLoginShow);
for (var i=0;i<aSelectSpan.length;i++){
    selectidx=i;
    aSelectSpan[i].onclick= function () {
        for(var j=0;j<aSelectSpan.length;j++){

            aLoginForm[j].style.display='none';
            aSelectSpan[j].style.color = '#8f9ba7';
            aSelectSpan[j].style.border = '1px solid #bad5cd';
        }
        aLoginForm[selectidx].style.display='block';
        this.style.color = '#28a88c';
        this.style.border = '1px solid #30b295';
    }
}
if (oLoginShow){
    for (var i=0;i<oLoginShow.length;i++){
    oLoginShow[i].onclick = function(){
        //console.log(111);
        oLogin.style.display='block';
        oMask.style.display = 'block';
    }
    oClose.onclick=function(){
        oLogin.style.display='none';
        oMask.style.display = 'none';
    };}
}
window.onscroll = function(){
    var iScrollTop = document.documentElement.scrollTop ||
        document.body.scrollTop;
    if(iScrollTop >= 50){
        var oTitle=document.getElementById('header-login');

        oTitle.style.position="fixed"
        oTitle.style.left=0;
        oTitle.style.top=0;
    }
    else{
        var oTitle=document.getElementById('header-login');
        oTitle.style.position="static";
    }
};
if(oOpenDown){
oOpenDown.onclick = function(){
    if(inddx==0){

        oLoginDown.style.display='block';
        inddx=1;
    }else{
        oLoginDown.style.display='none';
        inddx=0;
    }
};}