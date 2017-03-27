//房源中心 原鑫
var Scity = document.getElementById('Scity');
var Sstreet = document.getElementById('Sstreet');
var Sinput1 = document.getElementById('Sinput1');
var Sinput2 = document.getElementById('Sinput2');
Sinput1.value=Scity.innerHTML;
Sinput2.value = Sstreet.innerHTML;//获取城市和街道的搜素框    PS：已经隐藏
var select1 = document.getElementById('select1');
var select2 = document.getElementById('select2');
var oli1 = select1.getElementsByTagName('li');
var oli2 = select2.getElementsByTagName('li');
var biao =0;
var biao2 =0;
select1.onclick =function(){
    if(biao==0){
        for(var i = 0 ;i<oli1.length;i++)
        {
            oli1[i].style.display = 'block';
        }
        biao =1;
    }else{
        for(var i1 = 0 ;i1<oli1.length;i1++)
        {
            oli1[i1].style.display = 'none';
        }
        biao = 0;
    }

}
select2.onclick =function(){
    if(biao2==0){
        for(var j = 0 ;j<oli2.length;j++)
        {
            oli2[j].style.display = 'block';
        }
        biao2 ++;
    }
    else{
        for(var j1 = 0 ;j1<oli2.length;j1++)
        {
            oli2[j1].style.display = 'none';
        }
        biao2=0;
    }

}
for(var num1 = 0 ;num1<oli1.length;num1++){
    (function (){
        var p = num1;
        oli1[p].onmousemove=function(){
            this.style.background = "gray";
            //alert(p);
        }})();

    oli1[num1].onmouseout =function(){
        this.style.background = 'black';
    }
    oli1[num1].onclick=function(){
        Scity.innerHTML=this.innerHTML;
        for(var j11 = 0 ;j11<oli2.length;j11++)
        {
            oli1[j11].style.display = 'none';
        }
        //biao=1;
        Sinput1.value=Scity.innerHTML;
    }
}
for(var num2 = 0 ;num2<oli2.length;num2++){
    (function (){
        var p = num2;
        oli2[p].onmousemove=function(){
            this.style.background = "gray";
            //alert(p);
        }})();

    oli2[num2].onmouseout =function(){
        this.style.background = 'black';
    }
    oli2[num2].onclick=function(){
        Sstreet.innerHTML=this.innerHTML;
        for(var j12 = 0 ;j12<oli2.length;j12++)
        {
            oli2[j12].style.display = 'none';
        }
        Sinput2.value = Sstreet.innerHTML;//获取城市和街道的搜素框    PS：已经隐藏
    }
}
/********************************价格区间开始********************************/
var price1 = document.getElementById('price_1');
var price2 = document.getElementById('price_2');
var price3 = document.getElementById('price_3');
var price4 = document.getElementById('price_4');
var price5 = document.getElementById('price_5');
var p_biao2 = 0;
var p_biao3 = 0;
var p_biao4 = 0;
var p_biao5 = 0;
price2.onmousemove = function(){
    if(p_biao2!=1){
        price2.style.background = '#39c6a7';
    }
}
price2.onmouseout = function(){
    if(p_biao2!=1){
        price2.style.background = 'white';
    }
}
price3.onmousemove = function(){
    if(p_biao3!=1){
        price3.style.background = '#39c6a7';
    }
}
price3.onmouseout = function(){
    if(p_biao3!=1){
        price3.style.background = 'white';
    }
}
price4.onmousemove = function(){
    if(p_biao4!=1){
        price4.style.background = '#39c6a7';
    }
}
price4.onmouseout = function(){
    if(p_biao4!=1){
        price4.style.background = 'white';
    }
}
price5.onmousemove = function(){
    if(p_biao5!=1){
        price5.style.background = '#39c6a7';
    }
}
price5.onmouseout = function(){
    if(p_biao5!=1){
        price5.style.background = 'white';
    }
}
var price_a = document.getElementById('price_a');
var price_b = document.getElementById('price_b');
price2.onclick = function(){
    p_biao2=1;
    p_biao3=0;
    p_biao4=0;
    p_biao5=0;
    price2.style.background = '#39c6a7';
    price3.style.background = 'white';
    price4.style.background = 'white';
    price5.style.background = 'white';
    price_a.value = 0;
    price_b.value = 1000;
}
price3.onclick = function(){
    p_biao3=1;
    p_biao4=0;
    p_biao5=0;
    p_biao2=0;
    price3.style.background = '#39c6a7';
    price2.style.background = 'white';
    price4.style.background = 'white';
    price5.style.background = 'white';
    price_a.value = 1000;
    price_b.value = 1500;
}
price4.onclick = function(){
    p_biao4=1;
    p_biao5=0;
    p_biao2=0;
    p_biao3=0;
    price4.style.background = '#39c6a7';
    price3.style.background = 'white';
    price2.style.background = 'white';
    price5.style.background = 'white';
    price_a.value = 1500;
    price_b.value = 2000;
}
price5.onclick = function(){
    p_biao2=0;
    p_biao3=0;
    p_biao4=0;
    p_biao5=1;
    price5.style.background = '#39c6a7';
    price3.style.background = 'white';
    price4.style.background = 'white';
    price2.style.background = 'white';
    price_a.value = 2000;
    price_b.value = 20000000000000;
}
/*************************************************价格区间结束*************************************************/
/**************************************************复选框户型开始*************************************************************/
var sou = document.getElementById('sou');
var p_house_tupe = document.getElementById('p_house_type');
var p_facility_type = document.getElementById('p_facility_typ');
sou.onclick = function(){
    var ht = document.getElementsByName('ht');
    var ht_all ='';
    for (var h_num = 0 ;h_num<ht.length;h_num++){
        if(ht[h_num].checked){
            if(ht_all==''){
                ht_all=ht[h_num].value;
            }
            else{
                ht_all=ht_all+'+'+ht[h_num].value;
            }
        }
    }
    var ft = document.getElementsByName('ft');
    var ft_all ='';
    for (var f_num = 0 ;f_num<ft.length;f_num++){
        if(ft[f_num].checked){
            if(ft_all==''){
                ft_all=ft[f_num].value;
            }
            else{
                ft_all=ft_all+'+'+ft[f_num].value;
            }

        }
    }
    p_facility_type.value = ft_all;
    p_house_tupe.value = ht_all;
}
/**************************************************限时优惠 和全部按钮*********************************************************/
var h_all =document.getElementById('all');
var h_local = document.getElementById('local');
h_all.onclick = function(){
    h_all.style.borderColor='white';
}
//var local_biao = 1;
//h_local.onclick = function(){
//    if(local_biao ==1){
//        h_local.style.borderColor = '#eff3f5';
//        h_local.style.background = '#eff3f5';
//        h_local.style.color='black';
//        local_biao = 0;
//    }else{
//        h_local.style.borderColor = '#1fd2ab';
//        h_local.style.background = 'white';
//        h_local.style.color='#1fd2ab';
//        local_biao = 1;
//    }
//}
var all_biao = 0;
h_all.onclick = function(){
    if(all_biao == 0){
        h_all.style.background = '#eff3f5';
        h_all.style.borderColor = '#eff3f5';
        h_all.style.color='black';
        all_biao =1
    }else{

        h_all.style.background = 'white';
        h_all.style.borderColor = '#1fd2ab';
        h_all.style.color='#1fd2ab';
        all_biao=0;
    }
}
/**************************************************************图片部分**********************************************************************/
var h_picture = document.getElementById('h_picture');
var p_divs = h_picture.getElementsByTagName('div');
for (var p_num = 0;p_num<p_divs.length;p_num++){
    if((p_num+1)%3!=0){
        p_divs[p_num].style.marginRight='26px';
        //alert(p_num);
    }
}
var tags = document.getElementsByTagName('span');
var tags_sp1=0;
for (var tags_num = 0;tags_num<tags.length;tags_num++){
    if(tags[tags_num].getAttribute("class")=='h_r_title'){
        var tag_y = 230*parseInt(tags_sp1/3)+235;
        if(parseInt(tags_sp1/3)>=1){
            var tag_y = 315*parseInt(tags_sp1/3)+235;
            tags[tags_num].style.top = tag_y +'px';
        }
        var tag_x =400*(tags_sp1%3)+10;
        //alert(tag_x +'px');
        tags[tags_num].style.top = tag_y +'px';
        tags[tags_num].style.left = tag_x +'px';
        tags_sp1++;
    }
}
var tags_sp2=0;
for (var tags_num2 = 0;tags_num2<tags.length;tags_num2++){
    if(tags[tags_num2].getAttribute("class")=='h_r_city'){
        var tag2_y = 230*parseInt(tags_sp2/3)+235;
        if(parseInt(tags_sp2/3)>=1){
            var tag2_y = 315*parseInt(tags_sp2/3)+235;
            tags[tags_num2].style.top = tag_y +'px';
        }
        var tag2_x =400*(tags_sp2%3)+320;
        //alert(tag_x +'px');
        tags[tags_num2].style.top = tag2_y +'px';
        tags[tags_num2].style.left = tag2_x +'px';
        tags_sp2++;
    }
}
var tags_sp3=0;
for (var tags_num3 = 0;tags_num3<tags.length;tags_num3++){
    if(tags[tags_num3].getAttribute("class")=='h_r_des'){
        var tag3_y = 230*parseInt(tags_sp3/3)+230;
        if(parseInt(tags_sp3/3)>=1){
            var tag3_y = 315*parseInt(tags_sp3/3)+235;
            tags[tags_num3].style.top = tag3_y +'px';
        }
        var tag3_x =400*(tags_sp3%3);
        //alert(tag_x +'px');
        tag3_y=tag3_y+30;
        tags[tags_num3].style.top = tag3_y +'px';
        tags[tags_num3].style.left = tag3_x +'px';
        tags_sp3++;
    }
}

