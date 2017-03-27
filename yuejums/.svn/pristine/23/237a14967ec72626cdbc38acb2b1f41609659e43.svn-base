$(function(){
    // $.ajaxSetup({
    //     async: false
    // });
    $('#editable-sample_del').on('click',function(){
        $('#del_some').submit();
    });
    $('#editable-sample_new').on('click',function(){
        $(document.body).rightdialog({
            title:'添加房源',
            content:'admin/add_house',
            delscroll:'.main-content'
        });
        $.get('admin/get_add_house_info',{

        },function(data){
            var type_select_html='';
            for(var i = 0; i < data.types.length;i++){
                type_select_html +='<option value='+data.types[i].type_id+'>'+data.types[i].name+'</option>'
            }
            $('#add_type').append(type_select_html);
            var rent_type_select_html = '';
            for(var j = 0; j < data.rent_types.length; j++){
                rent_type_select_html += '<option value='+ data.rent_types[j].rent_type_id+'>'+data.rent_types[j].name+'</option>'
            }
            $('#add_rent_type').append(rent_type_select_html);
            var facilitys_html = '';
            for(var k =0; k<data.facilitys.length; k++){//此处还需加入设备的icon font 类 在input前
                facilitys_html += '<div class="square-blue col-lg-4"><div class="checkbox"><div class="icheckbox_square-blue"><span class="fa fa-times"></span><input id="facility'+ k +'" type="checkbox" name="facilitys[]" value='+ data.facilitys[k].facility_type_id+'></div><label for="facility'+ k +'">'+data.facilitys[k].name+'</label></div></div>'
            }
            $('#facilitys_select').append(facilitys_html);
        },'json');
    });
    $('.title').on('click',function(){
        $(document.body).rightdialog({
            title:'房源信息',
            content:'admin/show_house',
            delscroll:'.main-content'
        });
        var id = $(this).attr('houseid');
        $.get('admin/get_house_info',{
            'id':id
        },function(data){
            console.log(data);
            $('#show_title').html(data.house_info.title);
            $('#show_city').html(data.house_info.city);
            $('#show_street').html(data.house_info.street);
            $('#show_road').html(data.house_info.road);
            $('#show_type').html(data.house_info.type_name);
            $('#show_rent_type').html(data.house_info.rent_name)
            var house_facilitys_html = '';
            for(var i=0; i<data.facilitys.length; i++){   //此处还需加入设备的icon font 类
                house_facilitys_html += '<div class="square-blue col-lg-4"><div class="checkbox"><span class="fa fa-times"></span><label for="facility'+ i +'">'+data.facilitys[i].name+'</label></div></div>';
            }
            $('#show_facilitys').append(house_facilitys_html);
            $('input[name="show_price"]').val(data.house_info.price);
            if(data.house_info.is_order==1){
                $('#show_isorder').html('是');
            }else{
                $('#show_isorder').html('否');
            }
            var house_img_html='';
            for(var j=0; j<data.house_img.length; j++){
                house_img_html += '<img style="margin-bottom: 10px;" class="col-sm-9" src="'+data.house_img[j].thumb_src +'">';
            }
            $('#show_house_img').append(house_img_html);
            $('#show_describe').html(data.house_info.house_describe);
            var show_conmment = '';
            show_conmment += '<ul class="list-group " id="addli">';
            for(var k=0; k<data.house_conmment.length; k++){
                show_conmment += '<li class="list-group-item" >';
                show_conmment +='<a class="thumb pull-left" href = "javascript:;" ><img style="height: 50px;" src = "' +data.house_conmment[k].img+'" > </a >';
                show_conmment +='<small class="pull-right text-muted" ></small >';
                show_conmment +='<strong class="col-sm-2">'+ data.house_conmment[k].username+'</strong >';
                show_conmment +='<span class="col-sm-2"><strong >score:</strong>'+data.house_conmment[k].score+'</span>';
                show_conmment +='<span class="col-sm-3"><strong>house:</strong>'+data.house_info.title+'</span>';
                show_conmment +='<span class="col-sm-4">'+data.house_conmment[k].conmment_date+'</span>';
                show_conmment +='<br/>';
                show_conmment +='<a class="dialog" href = "javascript:;" contentId="'+data.house_conmment[k].comment_id+'" ><span class="col-sm-4" >'+data.house_conmment[k].content+'</span >';
                show_conmment +='</a >';
                show_conmment +='<br/>';
                show_conmment +='</li >';
            }
            show_conmment += '</ul>';
            $('#show_conmment').append(show_conmment);
            $('#show_house_order').on('click',function(){
                if($('#show_order:empty')){
                    $.get("admin/get_show_house_order",{
                        'id':id
                    },function(data){
                        console.log(data);
                        var show_order='<table class="table table-striped table-hover table-bordered" id="editable-sample">';
                        show_order +='<thead>';
                        show_order +='<tr>';
                        show_order +='<th>顾客</th>';
                        show_order +='<th>价格</th>';
                        show_order +='<th>添加时间</th>';
                        show_order +='<th>订单状态</th>';
                        show_order +='</tr>';
                        show_order +='</thead>';
                        show_order +='<tbody>';
                        for(var i=0; i<data.length; i++){
                            show_order +='<tr class="">';
                            show_order +='<td>'+data[i].username+'</td>';
                            show_order +='<td>'+data[i].price+'</td>';
                            show_order +='<td>'+data[i].addtime+'</td>';
                            show_order +='<td>'+data[i].order_status+'</td>';
                            show_order +='</tr>';
                        }
                        show_order +='</tbody>';
                        show_order +='</table>';
                        $('#show_order').append(show_order);
                    },'json');
                }
                $('#show_house_order').off('click');
            });
            $('#show_house_collect').on('click',function(){
                if($('#show_collect:empty')){
                    $.get("admin/get_show_house_collect",{
                        'id':id
                    },function(data){
                        console.log(data);
                        var house_collect_html='<table class="table table-striped table-hover table-bordered" id="editable-sample">';
                        house_collect_html +='<thead>';
                        house_collect_html +='<tr>';
                        house_collect_html +='<th>用户</th>';
                        house_collect_html +='<th>收藏时间</th>';
                        house_collect_html +='</tr>';
                        house_collect_html +='</thead>';
                        house_collect_html +='<tbody>';
                        for(var i=0; i<data.length; i++){
                            house_collect_html +='<tr class="">';
                            house_collect_html +='<td>'+data[i].username+'</td>';
                            house_collect_html +='<td>'+data[i].collect_time+'</td>';
                            house_collect_html +='</tr>';

                        }
                        house_collect_html +='</tbody>';
                        house_collect_html +='</table>';
                        $('#show_collect').append(house_collect_html);
                    },'json');
                }
                $('#show_house_collect').off('click');
            });
        },'json');

    });
    $('.edit').on('click',function(){
        $(document.body).rightdialog({
            title:'更新房源信息',
            content:'admin/edit_house',
            delscroll:'.main-content'
        });
        var id = $(this).attr('houseid');
        $.get('admin/get_edit_house',{
            'id':id
        },function(data){
            console.log(data);
            $('#title').val(data.house_info.title);
            $('#city').val(data.house_info.city);
            $('#street').val(data.house_info.street);
            $('#road').val(data.house_info.road);
            // data.house_info.type_id
            var type_select_html='';
            for(var i = 0; i < data.types.length;i++){
                type_select_html +='<option value='+data.types[i].type_id+'>'+data.types[i].name+'</option>';
            }
            $('#add_type').append(type_select_html);
            for(var ii = 0; ii < data.types.length;ii++){
                if($('#add_type option').eq(ii).val()==data.house_info.type_id){
                    $('#add_type option').eq(ii).prop('selected','true');
                }
            }
            var rent_type_select_html = '';
            for(var j = 0; j < data.rent_types.length; j++){
                rent_type_select_html += '<option value='+ data.rent_types[j].rent_type_id+'>'+data.rent_types[j].name+'</option>'
            }
            $('#add_rent_type').append(rent_type_select_html);
            for(var jj = 0; jj < data.rent_types.length; jj++){
                if($('#add_rent_type option').eq(jj).val()==data.house_info.rent_type_id){
                    $('#add_rent_type option').eq(jj).prop('selected','true');
                }
            }
            var facilitys_html = '';
            for(var k =0; k<data.facilitys.length; k++){//此处还需加入设备的icon font 类 在input前
                facilitys_html += '<div class="square-blue col-lg-4"><div class="checkbox"><div class="icheckbox_square-blue"><span class="fa fa-times"></span><input id="facility'+ k +'" type="checkbox" name="facilitys[]" value='+ data.facilitys[k].facility_type_id+'></div><label for="facility'+ k +'">'+data.facilitys[k].name+'</label></div></div>'
            }
            $('#facilitys_select').append(facilitys_html);
            for(var kk =0; kk<data.facilitys.length; kk++){
                for(var n=0; n<data.has_facilitys.length; n++){
                    if($('.checkbox input[type="checkbox"]').eq(kk).val()==data.has_facilitys[n].facility_type_id){
                        $('.checkbox input[type="checkbox"]').eq(kk).prop('checked','true');
                    }
                }
            }
            $('#show_price').val(data.house_info.price);
            if(data.house_info.is_order==1){
                $('#add_isorder option').eq(1).prop('selected','true');
            }else{
                $('#add_isorder option').eq(0).prop('selected','true');
            }
            var house_img_html='';
            for(var m=0; m<data.house_img.length; m++){
                house_img_html += '<img style="margin-bottom: 10px;" class="col-sm-7" src="'+data.house_img[m].thumb_src +'"><span  imgid="'+data.house_img[m].img_id+'" style="font-size: 20px; cursor: pointer; " class="del_img col-sm-2 fa fa-times clearpaddingleft"></span>';
            }
            $('#show_house_img').append(house_img_html);
            $('#show_house_img').on('click','span',function(){
                console.log(111);
                var that = $(this);
                $.get('admin/del_img',{
                    'img_id' : $(this).attr('imgid')
                },function(data){
                    if(data==1){
                        that.prev().remove();
                        that.remove();
                    }
                },'text');
            });
            $('#add_describe').val(data.house_info.house_describe);
            $('#edit_form').attr('action',"admin/do_edit_house?houseid="+id+"");
        },'json');


    });
});
