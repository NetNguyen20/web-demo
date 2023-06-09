FRAMEWORK={

	init:function(){

        if(COM!='user'&&ACT!='login'){

            FRAMEWORK.checkBox();

    		FRAMEWORK.checkStatus();

    		FRAMEWORK.deleteData();

    		FRAMEWORK.changeAlias();

            FRAMEWORK.validateForm();

            FRAMEWORK.ckEditor();

            FRAMEWORK.pluginsPage();
            
            FRAMEWORK.waterMark();

            FRAMEWORK.searchBv();

            FRAMEWORK.checkInputNumber();

        }else{

            FRAMEWORK.loginPage();

        }

        FRAMEWORK.menuBar();

        FRAMEWORK.themesPage();

	},
    themesPage:function(){
        class_ = localStorage.getItem('v');
        $('body').removeAttr('class').addClass('theme-' + class_);

        $('body').on('click', '.click-cog', function(event) {
            if($(this).hasClass('active')){
                $('.color-themes-page').removeClass('active');
                $(this).removeClass('active');
            }else{
                $('.color-themes-page').addClass('active');
                $(this).addClass('active');
           }
        });
        $('body').on('click', '.color-themes-page li', function(event) {
            var o = $(this);
            var v = o.attr('class');
            var c = o.attr('data-color');
            if (typeof(Storage) !== "undefined") {
                localStorage.setItem('v',v);
                localStorage.setItem('c',c);
                class_ = localStorage.getItem('v');
                color_ = localStorage.getItem('c');
                $('body').removeAttr('class').addClass('theme-' + class_);
                
            } else {
                console.log('Sorry! No Web Storage support.');
            }
        });

    },
    checkInputNumber: function(){

        var regex = /^\d*[.]?\d*$/;        
    
        $(".numberic").on("keyup", function(){

            // Get input value

            var inputVal = $(this).val();

            
            // Test input value against regular expression

            if(regex.test(inputVal)) {

            } else{

                var format = $(this).val().replace(/[^0-9.]/g, '');

                $(this).val(format);

            }
            
        });
    },
    menuBar:function(){
        $('.menu-bar').click(function(){

            let _this=$(this);
            $('#rightSide').css({'transition':'all 0.3s ease'});
            if(!_this.hasClass('active')){

                _this.addClass('active');

                $('#leftSide').css({'left':'0','visibility':'visible'});

                $('body').append('<div class="offcanvas-backdrop"></div>');

            }else{
                _this.removeClass('active');

                $('#leftSide').css({'left':'-220px','visibility':'hidden'});

                $('.offcanvas-backdrop').remove();

            }

        });

        $('body').on('click','.offcanvas-backdrop',function(){

            $('.menu-bar').removeClass('active');

            $('#leftSide').css({'left':'-220px','visibility':'hidden'});

            $(this).remove();

        });
    },
    waterMark: function(){

        $(".watermark-position label").click(function(){

            if($(".change-photo img").length)

            {

                var img = $(".change-photo img").attr("src");

                if(img)

                {

                    $(".watermark-position label img").attr("src","images/noimage.png");

                    $(this).find("img").attr("src",img);

                    $(this).find("img").show();

                }

            }

            else

            {

                alert("Dữ liệu hình ảnh không hợp lệ");

                return false;

            }

        })



    },
    searchBv:()=>{
        $('.js-focusSearch').on('keyup', (element)=>{
            $this = $(element.target);
            var type = $this.attr('data-type');
            var box = $this.attr('data-box');
            var view = $this.attr('data-view');
            var id = $this.attr('data-id');
            var value = $this.val();
            var params = { type: type, id: id,view:view,keyword: value,box:box}
            if(value != ""){
                $(box).addClass('active');
                $.ajax({
                    url:'ajax/loadBv.php',
                    data:params,
                    type:'POST',
                    success:function(res){
                        $(box).html(res);
                    }
                })
            }
        });
        
        $('.js-focusSearch').focusout((element)=>{
            $this = $(element.target);
            var box = $this.attr('data-box');
            $(box).removeClass("active");
        })
    },
    changeView:(view,idtab,id,element,box)=>{
        $(view).html(element.innerHTML);
        $(idtab).val(id);
        $(box).html("");
        $(box).removeClass("active");
    },
    validateForm:function(){



        $.validate();



        // $('#form-validate').validate({

        //     rules: {

        //         'data[ten_vi]': { required: true },

        //         'data[alias_vi]': { required: true }

        //     },

        //     messages: {

        //         'data[ten_vi]': {

        //             required: "Bạn chưa nhập tiêu đề bài viết"

        //         },

        //         'data[alias_vi]': {

        //             required: "Bạn chưa nhập đường dẫn cho tiêu đề"

        //         }

        //     },

        //     submitHandler: function(form) {

        //         var thisForm = $(form);

        //         if (thisForm.valid()) {

        //             thisForm.submit();

        //         }

        //     }

        // });



    },

    errorPage:function(text,error){

        $.toast({



            heading: 'Thông báo hệ thống',



            text: text,



            position: 'top-right',



            stack: false,



            icon: error



        });

    },

    loginPage:function(){

        $("body").on('click','.show-password',function(){

            if($("#password").val())

            {

                if($(this).hasClass("active"))

                {

                    $(this).removeClass("active");

                    $("#password").prop("type","password");

                }

                else

                {

                    $(this).addClass("active");

                    $("#password").prop("type","text");

                }

                $(this).find("span").toggleClass("fas fa-eye fas fa-eye-slash");

            }

        });

        $('input[name="password"]').keypress(function(e){

            if(e.keyCode == 13){

                login('username','password');

            }

        });

    },

	checkStatus:function(){

		$('.checker-status').click(function(){

            var table = $(this).attr('data-table');

            var id = $(this).attr('data-id');

            var type = $(this).attr('data-type');

            if($(this).is(':checked')){

                var arr=$('input[name="status'+id+'[]"]:checked').map(function(){

                    return this.value;

                }).get().join(',');

            }else{

                var arr=$('input[name="status'+id+'[]"]:checked').map(function(){

                    return this.value;

                }).get().join(',');

            }

            checkStatus(table,id,arr,type);

        });

        if($('.js-update-status').length>0){

            $('.js-update-status').change(function(){

                var _this=$(this);

                var table=_this.data('table');

                var id=_this.data('id');

                var type=_this.data('type');

                var value=_this.val();

                updateSt('updateStatus',table,id,type,value);

            });

        }

	},

    checkBox:function(){

        $('input#checkAll').click(function(){

            if($(this).is(":checked")){

                $('label.stardust-checkbox.checker input').prop('checked', true);

            }else{

                $('label.stardust-checkbox.checker input').prop('checked', false);

            }

        }); 

        $('.checkOnOff input.stardust-checkbox__input').click(function(){

            var _this=$(this);

            var id=_this.attr('data-id');

            var table=_this.attr('data-table');

            var type=_this.attr('data-type');

            var rel=_this.attr('rel');

            if(rel==1){

                $.ajax({

                    url:'ajax/ajax_hienthi.php',

                    data:{id:id,table:table,type:type,value:0},

                    type:'POST',

                    success:function(res){

                        console.log(res);

                    }

                });

                _this.attr("rel",0);

            }else{

                $.ajax({

                    url:'ajax/ajax_hienthi.php',

                    data:{id:id,table:table,type:type,value:1},

                    type:'POST',

                    success:function(res){

                        console.log(res);

                    }

                });

                _this.attr("rel",1);

            }

            

        });



    },

	deleteData:function(){

		$('a[data-js-delete]').click(function(){

            var _o=$(this);

            var _idp=_o.attr('data-product');

            var _com=_o.attr('data-com');

            var _act=_o.attr('data-act');

            var _tbl=_o.attr('data-tbl');

            var _type=_o.attr('data-type');

            var _page=_o.attr('data-page');

            $.confirm({

                title: 'Xác nhận!',

                content: 'Bạn có chắc chắn muốn xóa mục này!',

                buttons: {

                    success: {

                        text: 'Đồng ý!',

                        btnClass: 'btn-blue',

                        action: function(){

                           redirect('index.php?com='+_com+'&act='+_act+'&tbl='+_tbl+'&id='+_idp+'&type='+_type+'&page='+_page);

                        }

                    },

                    cancel: {   

                        text: 'Hủy ngay!',

                        btnClass: 'btn-red'

                    }

                }

            });

        });
        
        $('a[data-js-delete-info]').click(function(){

            var _o=$(this);

            var _idp=_o.attr('data-product');

            var _idf=_o.attr('data-flash');

            var _com=_o.attr('data-com');

            var _act=_o.attr('data-act');

            var _tbl=_o.attr('data-tbl');

            var _type=_o.attr('data-type');

            var _page=_o.attr('data-page');

            $.confirm({

                title: 'Xác nhận!',

                content: 'Bạn có chắc chắn muốn xóa mục này!',

                buttons: {

                    success: {

                        text: 'Đồng ý!',

                        btnClass: 'btn-blue',

                        action: function(){

                           redirect('index.php?com='+_com+'&act='+_act+'&tbl='+_tbl+'&id_flash='+_idf+'&id_product_flash='+_idp+'&type='+_type+'&page='+_page);

                        }

                    },

                    cancel: {   

                        text: 'Hủy ngay!',

                        btnClass: 'btn-red'

                    }

                }

            });

        });

        $('a[data-js-delete-attribute]').click(function(){

            var _o=$(this);
 
            var _idp=_o.attr('data-product');
 
            var _com=_o.attr('data-com');
 
            var _act=_o.attr('data-act');
 
            var _tbl=_o.attr('data-tbl');
 
            var _type=_o.attr('data-type');

            var _id_product=_o.attr('data-id-product');
 
            var _page=_o.attr('data-page');

            var _actbaiviet = _o.attr('data-act-baiviet');

            var _pagebaiviet = _o.attr('data-page-baiviet');
 
            $.confirm({
 
                title: 'Xác nhận!',
 
                content: 'Bạn có chắc chắn muốn xóa mục này!',
 
                buttons: {
 
                    success: {
 
                        text: 'Đồng ý!',
 
                        btnClass: 'btn-blue',
 
                        action: function(){
 
                           redirect('index.php?com='+_com+'&act='+_act+'&tbl='+_tbl+'&id='+_idp+'&type='+_type+'&id_product='+_id_product+'&page='+_page+'&act_baiviet='+_actbaiviet+'&page_baiviet='+_pagebaiviet);
 
                        }
 
                    },
 
                    cancel: {   
 
                        text: 'Hủy ngay!',
 
                        btnClass: 'btn-red'
 
                    }
 
                }
 
            });
 
        });

	},

	changeAlias:function(){

		$('.change_alias').each(function(index, el) {

            var o = $(this);

            o.on('change', function(event) {

                event.preventDefault();

                var ob = $(this);

                var oi = ob.data('id');

                if(!$(this).is(':checked')){

                    var ov = $('#name_'+oi).val();

                    ov = getSlug(ov,'-');

                    $('#alias_'+oi).val(ov);

                    $('#url_seo_'+oi).text(ov);



                }

            });

        });

        

        $('#title').keyup(function(){

            var _this=$(this).val();

            if(_this==''){

                $('#title_seo').text('[SEO Onpage] là gì? Hướng dẫn tối ưu SEO Onpage...');

            }else{

                $('#title_seo').text(_this);

            }

            

        });

        $('#description').keyup(function(){

            var _this=$(this).val();

            if(_this==''){

                $('#description_seo').text('Hướng dẫn SEO onpage căn bản tối ưu để trang web chuẩn SEO lên top Google nhanh và bền vững, kỹ thuật tối ưu SEO onpage đơn giản');

            }else{

                $('#description_seo').text(_this);

            }

            

        });

	},

    selectPicker:function(){

        $(".selectpicker").selectpicker("refresh");

    },

    timPicker:function(){

        $('.date-picker').daterangepicker({

            singleDatePicker: true,

            showDropdowns: false,

            autoUpdateInput: false,

            timePicker: true,

            timePicker24Hour: true,

            showWeekNumbers: true,

            showISOWeekNumbers: true,

            showDropdowns: true,

            locale: {

              format: 'DD/MM/YYYY hh:mm',

              cancelLabel: 'Clear'

            }

        }, function (start, end, label) {

            var years = moment().diff(start, 'years');

            console.log("You are " + years + " years old!");

        });

        $('.date-picker').on('apply.daterangepicker', function(ev, picker) {

          $(this).val(picker.startDate.format('DD/MM/YYYY hh:mm'));

        });

    }

    ,

    ckEditor:function(){

        $('.ck_editors').each(function(index, el) {

            var id = $(this).attr('id');

            CKEDITOR.replace(id, {

                height: $(this).attr('data-height'),

                entities: false,

                skin: 'office2013',

                basicEntities: false,

                entities_greek: false,

                entities_latin: false,

                filebrowserBrowseUrl: 'ckfinder/ckfinder.html',

                filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',

                filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash',

                filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                allowedContent: 'h1 h2 h3 h4 h5 h6 p blockquote strong em;' +

                    'a[!href];' +

                    'img(left,right)[!src,alt,width,height];' +

                    'table tr th td caption;' +

                    'span{!font-family};' +

                    'span{!color};' +

                    'span(!marker);' +

                    'del ins'

            });



        });

    },

    pluginsPage:function(){

        $(".cp3").CanvasColorPicker();

        $("input:file").uniform();

         $('.conso').priceFormat({

            limit: 13,

            prefix: '',

            centsLimit: 0

        });

        // $('[data-toggle="tooltip"]').tooltip();

    }

}

FRAMEWORK.init();