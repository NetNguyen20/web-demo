<div class="control_frm">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
            <li><a href="index.php?com=order&act=man"><span><?=_donhang?></span></a></li>
            <li class="current"><a href="#" onclick="return false;"><?=_tatca?></a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<script language="javascript">

$(document).ready(function() {
    $('#search_btn').click(function() {
        var loai = 1;
        var madonhang = $('#madonhang').val();
        var id_tinhtrang = $('#id_tinhtrang').val();
        var dienthoai = $('#dienthoai').val();
        var hoten = $('#hoten').val();
        window.location = "index.php?com=order&act=man&loai=" + loai + "&code=" + madonhang +
            "&order_status=" + id_tinhtrang + "&phone=" + dienthoai + "&hoten=" + hoten;
        return true;
    });
     $("#xoahet").click(function() {
        var listid=$("input[name='chon']:checked").map(function() {
            return this.value
        }).get().join(",");

        if(listid.length>0){
            $.confirm({
                title: 'Xác nhận!',
                content: 'Bạn có chắc chắn muốn xóa mục này!',
                buttons: {
                    success: {
                        text: 'Đồng ý!',
                        btnClass: 'btn-blue',
                        action: function(){
                           redirect("index.html?com=order&act=delete&page=<?=$_GET['page']?>&listid=" + listid);
                        }
                    },
                    cancel: {   
                        text: 'Hủy ngay!',
                        btnClass: 'btn-red'
                    }
                }
            });
        }
    });
});
</script>

<form name="f" id="f" method="post">
    <div class="oneOne" style="margin-top:0;">
        <div style="float:left;">
            <input type="text" name="madonhang" id="madonhang" class="input_search" placeholder="<?=_madonhang?>" />
            <input type="text" name="hoten" id="hoten" class="input_search" placeholder="<?=_hovaten?>" />
            <input type="text" name="dienthoai" id="dienthoai" class="input_search" placeholder="<?=_sodienthoai?>" />
            <input type="button" id="search_btn" class="greenB" value="<?=_tim?>" />
        </div>
    </div>
    <div class="oneOne" style="margin-top:0;">
        <div style="float:left;">
        </div>
    </div>
    <div class="oneOne">
        <div class="box-admin" style="display:flex; align-items:center;">
            <div class="box-action">
                <a class="btn btn-sm bg-gradient-danger text-white" id="xoahet">
                    <i class="far fa-trash-alt mr-2"></i>Xóa tất cả
                </a>
            </div>
        </div>
    </div>
    <div class="oneOne">
        <div class="widget mtop10">
            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
                    <thead>
                        <tr>
                            <td>

                                <label class="stardust-checkbox">
                                    <input class="stardust-checkbox__input" id="checkAll" type="checkbox" value=""
                                        style="display:none">
                                    <div class="stardust-checkbox__box"></div>
                                </label>
                            </td>
                            <td class="sortCol" width="100">
                                <div><?=_madonhang?><span></span></div>
                            </td>
                            <td class="sortCol" width="150">
                                <div><?=_hoten?><span></span></div>
                            </td>
                            <td width="100">
                                <div><?=_dienthoai?></div>
                            </td>
                            <td width="100"><div>Giao hàng</div></td>
                            <td width="100"><div>Thanh toán</div></td>
                            <td class="sortCol" width="150">
                                <div><?=_ngaydat?><span></span></div>
                            </td>
                            <td class="sortCol" width="100">
                                <div>Số tiền<span></span></div>
                            </td>
                            <td class="sortCol" width="100">
                                <div>Tình trạng<span></span></div>
                            </td>
                            <td class="tb_data_small" style="width: 100px !important;">Thao tác</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0, $count=count($items); $i<$count; $i++){
                        ?>
                        <tr>
                            <td>
                                <label class="stardust-checkbox checker">
                                    <input class="stardust-checkbox__input" name="chon" id="check<?=$i?>" type="checkbox"
                                        value="<?=$items[$i]['id']?>" style="display:none">
                                    <div class="stardust-checkbox__box"></div>
                                </label>
                            </td>
                            <td align="left" <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>
                                <?=$items[$i]['code']?>
                            </td>
                            <td <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>
                                <?=$items[$i]['fullname']?>
                            </td>
                            <td <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>
                                <?=$items[$i]['phone']?>
                            </td>
                            <td <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>
                                <?=$func->getFieldOne('ten_'.$lang,'baiviet',$items[$i]['payship'])?>
                            </td>
                            <td <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>
                                <?=$func->getFieldOne('ten_'.$lang,'baiviet',$items[$i]['payment'])?>
                            </td>
                            <td align="left" <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>
                                <?=$items[$i]['createdAt']?>
                            </td>
                            <td align="left" <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>
                                <span <?php if(!empty($items[$i]['id_customer'])){ echo "color='#f00;'";}?>>
                                    <?=$func->changeMoney($items[$i]['total_price'],$lang)?>
                                </span>
                            </td>
                             <td align="center" align="left" <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>

                                <?php

                                    $tinhtrang=$db->rawQuery("SELECT * from #_order_status");

                                ?>
                                <select data-target=".select-status-order<?=$items[$i]["id"]?>" data-id="<?=$items[$i]["id"]?>" class="main-select select-status-order select-status-order<?=$items[$i]["id"]?>" id="order_status" style="font-size: 11px;
                                    padding: 7px 6px;
                                    background: white;
                                    border: 1px solid #DDD;
                                    width: 100%;
                                    font-family: Arial, Helvetica, sans-serif;
                                    color: #656565; 

                                    <?php if($items[$i]['order_status']==1){ ?> 

                                        border-color:blue;

                                    <?php }else if($items[$i]['order_status']==2){ ?>

                                        border-color:#ffa200;

                                    <?php }else if($items[$i]['order_status']==3){ ?>

                                        border-color:#569e03;
                                    
                                    <?php }else{ ?>

                                        border-color:red;
                                    
                                    
                                    <?php }?>">

                                    <?php foreach($tinhtrang as $key => $value){?>

                                        <option value="<?=$value['id']?>" <?php if($items[$i]['order_status']==$value['id']) echo 'selected';?>><?=$value['name_'.$lang]?></option>

                                    <?php }?>

                                </select>

                            </td>

                            <style>
                                .select-blue{
                                    border-color:blue !important;
                                }
                                .select-orange{
                                    border-color:#ffa200 !important;
                                }
                                .select-green{
                                    border-color:#569e03 !important;
                                }
                                .select-red{
                                    border-color:red !important; 
                                }
                            </style>
                            <td class="actBtns">
                                <a class="text-primary" href="index.php?com=order&act=edit&id=<?=$items[$i]['id']?>" title=""
                                    class="smallButton tipS" original-title="Xem và sửa đơn hàng"><i class="fas fa-edit"></i></a>
                                <a class="text-danger" data-product="<?=$items[$i]['id']?>" data-com="<?=$_GET['com']?>" data-act="delete" data-tbl="<?=$_GET['tbl']?>" data-type="<?=$_GET['type']?>" data-page="<?=$_GET['page']?>" href="javascript:" data-js-delete title=""
                                        class="smallButton tipS" original-title="Xóa ">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>
<div class="paging"><?=$paging?></div>

<script>

    $(document).ready(function(){

        $('.select-status-order').on('change',function(){

            var status = $(this).val();

            let id = $(this).attr('data-id');
            
            let url = "index.php?com=order&act=man&page=<?=$_GET["page"]?>";

            var target = $(this).attr('data-target');

            $.ajax({

                url:'ajax/changeStatusOrder.php',

                type:'POST',

                data:{id:id,status:status},

                dataType:'json',

                success:function(data){

                    if(data.status==200){

                        if(status==1){

                            $(target).addClass('select-blue');

                            $(target).removeClass('select-orange');

                            $(target).removeClass('select-green');

                            $(target).removeClass('select-red');

                        }else if(status==2){

                            $(target).addClass('select-orange');

                            $(target).removeClass('select-blue');

                            $(target).removeClass('select-green');

                            $(target).removeClass('select-red');

                        }else if(status==3){

                            $(target).removeClass('select-blue');

                            $(target).removeClass('select-orange');

                            $(target).removeClass('select-red');

                            $(target).addClass('select-green');

                        }else{

                            $(target).removeClass('select-orange');

                            $(target).removeClass('select-green');

                            $(target).removeClass('select-blue');

                            $(target).addClass('select-red');

                        }

                        FRAMEWORK.errorPage(data.message,'success');

                    }else{

                        FRAMEWORK.errorPage(data.message,'error');

                    }

                }

            });

        });

        // $('body').on('click', '.btn-save-export', function (event) {

        //     var _o = $(this);

        //     var _i = $(this).attr('data-id');

        //     window.location.href = 'ajax/exportOrder.php?id=' + _i;

        // });

    });
</script>
