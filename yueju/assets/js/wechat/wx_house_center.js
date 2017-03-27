$(function () {
    var $select2 = $('#select2');
    var $oli2 = $('#select2 li');
    var $Sstreet = $('Sstreet');
    var Sinput1=document.getElementById('Sinput1');
    var Sinput2=document.getElementById('Sinput2');
    var biao2 = 0;
    var Sstreet =document.getElementById('Sstreet');
    var p_house_tupe = document.getElementById('p_house_type');
    var p_facility_type = document.getElementById('p_facility_typ');
    $select2.on('tap', function () {
        if (biao2 == 0) {
            for (var j = 0; j < $oli2.length; j++) {
                $oli2[j].style.display = 'block';
            }
            biao2++;
        }
        else {
            for (var j1 = 0; j1 < $oli2.length; j1++) {
                $oli2[j1].style.display = 'none';
            }
            biao2 = 0;
        }
    });
        $oli2.on("tap", function () {
           Sstreet.innerHTML= $(this).html();
            Sinput2.value = Sstreet.innerHTML;
        });
    //alert($(hs1).val());
    /*********下拉框*****/
    var price_a = document.getElementById('price_a');
    var price_b = document.getElementById('price_b');
    var hs1=document.getElementById("hs1");
    var hs2=document.getElementById("hs2");
    var hs3=document.getElementById("hs3");
    var hs4=document.getElementById("hs4");
    $('#s_sub').on('tap', function () {
        var hs1=document.getElementById("hs1");
        var hs2=document.getElementById("hs2");
        var hs3=document.getElementById("hs3");
        var hs4=document.getElementById("hs4");
        if(hs2.value == '1000以下'){
            console.log(hs2.value)
            price_a.value = 0;
            price_b.value = 1000;
        }else if(hs2.value == '1000-1500'){
            price_a.value = 1000;
            price_b.value = 1500;
        }else if(hs2.value == '1500-2000'){
            price_a.value = 1500;
            price_b.value = 2000;
        }else if(hs2.value == ''){
            price_a.value = 0;
            price_b.value = 2000000000000;
        }
        else{
            price_a.value = 2000;
            price_b.value = 20000000000000;
        }
        Sinput1.value = hs1.value;
        p_house_type.value=hs3.value;
        p_facility_type.value = hs4.value;
    });
/***********图片上的标题********/
    var tags = document.getElementsByTagName('span');
    var tags_sp1=0;
    for (var tags_num = 0;tags_num<tags.length;tags_num++){
        if(tags[tags_num].getAttribute("class")=='h_r_title'){
            var tag_y = 4.84*tags_sp1+3.6;
            tags[tags_num].style.top = tag_y +'rem';
            tags[tags_num].style.left = 0.4 +'rem';
            tags_sp1++;
        }
    }
    var tags_sp2=0;
    for (var tags_num = 0;tags_num<tags.length;tags_num++){
        if(tags[tags_num].getAttribute("class")=='h_r_city'){
            var tag_y = 4.84*tags_sp2+3.6;
            tags[tags_num].style.top = tag_y +'rem';
            tags[tags_num].style.left = 5.4 +'rem';
            tags_sp2++;
        }
    }
    var tags_sp3=0;
    for (var tags_num = 0;tags_num<tags.length;tags_num++){
        if(tags[tags_num].getAttribute("class")=='h_r_des'){
            var tag_y = 4.84*tags_sp3+4.0;
            tags[tags_num].style.top = tag_y +'rem';
            tags[tags_num].style.left = 0.2 +'rem';
            tags_sp3++;
        }
    }














});