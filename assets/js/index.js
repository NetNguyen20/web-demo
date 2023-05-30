"use strict";

_FRAMEWORK={

	init:function(){

		_FRAMEWORK.preLoader();
		
		_FRAMEWORK.carouselSlider();

		_FRAMEWORK.searchPage();

		_FRAMEWORK.submitContact();

		_FRAMEWORK.tocList();

		_FRAMEWORK.scrollTo();

		_FRAMEWORK.map();

		_FRAMEWORK.active();

		_FRAMEWORK.ajaxHandle();

		_FRAMEWORK.ratioImage();

		_FRAMEWORK.LoadingImages();

		_FRAMEWORK.ratioImageNoLoad();
		
		_FRAMEWORK.Counter();

		_FRAMEWORK.tabtoggle();

		_FRAMEWORK.scrollTool();

		_FRAMEWORK.tabQuestion();

		_FRAMEWORK.ratioVideo();

		_FRAMEWORK.systemControl();
			
		_FRAMEWORK.submitFormCheckOut();

		_FRAMEWORK.checkoutModal();

		_FRAMEWORK.menuMobile();

		_FRAMEWORK.mobiTool();

		_FRAMEWORK.nextMenuMobile();

		new WOW().init();

	},

	systemControl : () => {

		$('.js-sortby-slider').click(function(){

			$('.js-sortby-slider').removeClass('activeLink');

			let targetLink = $(this).attr('data-target-link');

			$(this).addClass('activeLink');

			let elementSearch = $(this).attr('data-search');

			let targetid = $(this).attr("data-target");

			let idlist = $(targetLink).attr("data-list");

			let idcat = $(targetLink).attr("data-cat");

			let type = $(this).attr("data-type");

			let slide = $(this).attr('data-slider');

			_FRAMEWORK.pagingDataIndex(1,PAGE_INDEX,"ajax_paging_slider.php",idlist,idcat,type,targetid,slide,elementSearch);
			

		});

		$(".js-slider-index").click(function(){

			$('.js-slider-index').removeClass('activeLink');

			var $this = $(this);

			$this.addClass('activeLink');

			var targetid = $(this).attr("data-target");

			var idlist = $(this).attr("data-list");

			var idcat = $(this).attr("data-cat");

			var type = $(this).attr("data-type");

			var slide = $(this).attr('data-slider');
			
			let targetSearch = $(this).attr('data-target-search');

			let elementSearch = $(targetSearch).attr('data-search');

			$(".js-cat[data-target='" + targetid + "']").removeClass("activeLink");

			$this.addClass("activeLink");

			_FRAMEWORK.pagingDataIndex(1,PAGE_INDEX,"ajax_paging_slider.php",idlist,idcat,type,targetid,slide,elementSearch);

		});

	},

	albumLoad:function(id_product,box,url){

		$.post(
			"ajax/"+url,
			{
				id:id_product

			},function(data,status){

				if(status == "success"){

					$(box).html(data);

					_FRAMEWORK.carouselSlider();

					_FRAMEWORK.ratioImage();

					_FRAMEWORK.LoadingImages();	
					
				}
			}
		);
	},

	albumClick:function(){

		$('.build-reference__box--click').click(function(){

			let id = $(this).attr('data-id');

			let target = $(this).attr('data-target');

			_FRAMEWORK.albumLoad(id,target,'ajaxloadAlbum.php');

		});

		$(`[data-fancybox]`).fancybox({
			thumbs : {
			  autoStart : true
			},
			buttons : [
			  'zoom',
			  'close'
			]
		});
	},

	tabQuestion:function(){

		$(".js-faq").click(function () {

			var $this = $(this);
			if ($this.parent().hasClass("active")) {
			  $this.parent().removeClass("active");
			  $this.next().slideUp();
			  $this.find("i").removeClass("fa-xmark");
			  $this.find("i").addClass("fa-circle-plus");
			} else {
			  $(".js-faq").parent().removeClass("active");
			  $(".js-faq").parent().parent().removeClass("active");
			  $(".js-faq").next().slideUp();
			  $(".js-faq").find("i").removeClass("fa-xmark");
			  $(".js-faq").find("i").addClass("fa-circle-plus");
			  $this.parent().addClass("active");
			  $this.next().slideDown();
			  $this.find("i").removeClass("fa-circle-plus");
			  $this.find("i").addClass("fa-xmark");
			}

		});

	},

	scrollTool:function(){

		$('.wrapper-nav__menu').each(function(){
            let $this = $(this);
            var _this = this;
            let margin = parseInt($this.data('margin'));
            let items = $this.find(".wrapper-nav__menu-item");
            
            let total = 0;
            items.each(function(){
                var width = parseInt($(this).width());
                total = total + width;
                $(this).css('margin-right', margin+'px');
            })
            $this.find('.wrapper-nav__menu-item:last-child').css('margin-right', '0px');
            let count = items.length;
            total = total + ((count-1)*margin);  
           
            if($this.width() < total){
                var next = document.createElement("div");
                next.className = "wrapper__nav-prev-menu";
                next.innerHTML = "<span></span>";
                _this.append(next);
                var prev = document.createElement("div");
                prev.className = "wrapper__nav-next-menu";
                prev.innerHTML = "<span></span>"
                _this.prepend(prev);
                $this.find('.wrapper-nav__menu-ofstage').css('margin-right', '20px');
                $this.find('.wrapper-nav__menu-ofstage').css('margin-left', '20px');
                getready();
            }
            $this.find('.wrapper-nav__menu-list').css("width", total+'px');
            $this.addClass("wrappers__list-menu-box-loaded");
        })

		function getready(){
            $('.wrapper__nav-prev-menu').click(function(){
                var $this = $(this);
                var $stage = $this.parent().find(".wrapper-nav__menu-ofstage");
                var left = $stage.scrollLeft();
                var newp = left - 200;
                $stage.scrollLeft(newp);
            })
            $('.wrapper__nav-next-menu').click(function(){
                var $this = $(this);
                var $stage = $this.parent().find(".wrapper-nav__menu-ofstage");
                var left = $stage.scrollLeft();
                var newp = left + 200;
                $stage.scrollLeft(newp);
            })
        }
	},

	chaychu:function(){

		$('.chaychu > div').textillate({
			in: {
				effect: 'fadeInLeft'
			},
			out: {
				effect: 'fadeInRight'
			},
			loop: true
		});

	},

	loadProductIndex:function(){

		$('.paging-product-view-outstanding').click(function(){

			let _this = $(this);

			let page = $(this).attr('data-page');
	
			let perPage = $(this).attr('data-perpage');
	
			let type = $(this).attr('data-type');
	
			let target = $(this).attr('data-target');

			let box = $(this).attr('data-box');
	
			let idl = ($(this).attr('data-idl')!='') ? $(this).attr('data-idl') : 0;
	
			$.ajax({
	
				url:'ajax/loadOutstandingAjax.php',
	
				type:'POST',
	
				data:{
	
					perPage:perPage,
	
					page:page,
					
					type:type,
	
					idl:idl,
	
				},
	
				dataType:'json',
	
				beforeSend:function(){
					
					$(_this).addClass('loading');
	
				},
				success:function(res){
	
					if(res.status==200){
	
						setTimeout(() => {
	
							$(_this).removeClass('loading');
	
						}, 500);
		
						$(target).append(res.html);
	
						$(_this).attr('data-page',parseInt(page)+1);
	
						$(_this).html(res.button);

						$(_this).attr('title',res.title);

						$(_this).attr('aria-label',res.title);		
	
						if(res.numb < 1){
	
							$(box).remove();
	
						}
	
					}else{
						
						$(box).remove();
	
					}
	
					_FRAMEWORK.ratioImage();

					_FRAMEWORK.LoadingImages();
				}
				
			})
	
		});

		$('.paging-product-view').click(function(){

			let _this = $(this);

			let page = $(this).attr('data-page');
	
			let perPage = $(this).attr('data-perpage');
	
			let type = $(this).attr('data-type');
	
			let target = $(this).attr('data-target');

			let box = $(this).attr('data-box');
	
			let idl = ($(this).attr('data-idl')!='') ? $(this).attr('data-idl') : 0;
	
			$.ajax({
	
				url:'ajax/loadProductPaging.php',
	
				type:'POST',
	
				data:{
	
					perPage:perPage,
	
					page:page,
					
					type:type,
	
					idl:idl,
	
				},
	
				dataType:'json',
	
				beforeSend:function(){
					
					$(_this).addClass('loading');
	
				},
				success:function(res){
	
					if(res.status==200){
	
						setTimeout(() => {
	
							$(_this).removeClass('loading');
	
						}, 500);
		
						$(target).append(res.html);
	
						$(_this).attr('data-page',parseInt(page)+1);
	
						$(_this).html(res.button);

						$(_this).attr('title',res.title);

						$(_this).attr('aria-label',res.title);		
	
						if(res.numb < 1){
	
							$(box).remove();
	
						}
	
					}else{
						
						$(box).remove();
	
					}
	
					_FRAMEWORK.ratioImage();

					_FRAMEWORK.LoadingImages();
				}
				
			})
	
		});
	},
	
	removeTranlaste:()=>{

		$(window).on('load',function(){

			$('.title.gray').remove();

		});

	},
	cartShoppingDetail:function(){

		$('.js-color').on('click touchstart tap',function(){

			var target = $(this).data('target');
            var value = $(this).data('value');
            $('.js-color').removeClass('activeAttr');
            $(this).addClass('activeAttr');
            $(target).val(value);

		});

	},
	mmenu:function(){

		if(exists("nav#mmenu")){
	
			$('nav#mmenu').mmenu({
	
				extensions  : [ 'effect-slide-menu', 'pageshadow' ],
	
				searchfield : false,
	
				counters  : false,
	
				offCanvas: {
	
					position  : "left"
	
				},
	
			});
	
		}
	},
	Counter:()=>{

		$(window).on('load',()=>{

			$.ajax({

				url:'ajax/ajaxCounter.php',

				method:'POST',

				dataType:'json',

				success:(data)=>{
				}
			})
		})

	},
	cursorDefault:function(){
		var cursor = document.querySelector('.cursor');
		var cursorinner = document.querySelector('.cursor2');
		var a = document.querySelectorAll('a');

		document.addEventListener('mousemove', function(e){
		var x = e.clientX;
		var y = e.clientY;
		cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
		});

		document.addEventListener('mousemove', function(e){
		var x = e.clientX;
		var y = e.clientY;
		cursorinner.style.left = x + 'px';
		cursorinner.style.top = y + 'px';
		});

		document.addEventListener('mousedown', function(){
		cursor.classList.add('click');
		cursorinner.classList.add('cursorinnerhover')
		});

		document.addEventListener('mouseup', function(){
		cursor.classList.remove('click')
		cursorinner.classList.remove('cursorinnerhover')
		});

		a.forEach(item => {
		item.addEventListener('mouseover', () => {
			cursor.classList.add('hover');
		});
		item.addEventListener('mouseleave', () => {
			cursor.classList.remove('hover');
		});
		})
	},
	LoadingImages:function(){

		const images = document.querySelectorAll(".ratio-img__content");

		const imgOptions = {};
		const imgObserver = new IntersectionObserver((entries, imgObserver) => {

		entries.forEach((entry) => {

			if (!entry.isIntersecting) return;

			const img = entry.target;

			const newUrl = img.getAttribute('data-src');

			img.src = newUrl;

			img.classList.remove('img-scale');

			imgObserver.unobserve(entry.target);
			
		});

		}, imgOptions);

		images.forEach((img) => {
			imgObserver.observe(img);
		});

	},
	ratioVideo:function(){

		var ratioAll = document.querySelectorAll('.ratio-video');

		for (let index = 0; index < ratioAll.length; index++) {

			let width = ratioAll[index].getAttribute("video-width");

			let height = ratioAll[index].getAttribute("video-height");
			
			ratioAll[index].style.setProperty('--data-ratio-video',`calc((${height} / ${width}) * 100%)`);

			
		}

	},
	ratioImage:function(){

		var ratioAll = document.querySelectorAll('.ratio-img');

		for (let index = 0; index < ratioAll.length; index++) {

			let width = ratioAll[index].getAttribute("img-width");

			let height = ratioAll[index].getAttribute("img-height");
			
			ratioAll[index].style.setProperty('--data-ratio',`calc((${height} / ${width}) * 100%)`);

			
		}

	},
	ratioImageNoLoad:function(){

		var ratioAll = document.querySelectorAll('.ratio-imgD');

		for (let index = 0; index < ratioAll.length; index++) {

			let width = ratioAll[index].getAttribute("img-width");

			let height = ratioAll[index].getAttribute("img-height");
			
			ratioAll[index].style.setProperty('--data-ratio',`calc((${height} / ${width}) * 100%)`);

			
		}

	},
	pagingData:function(page, per_page, url, id_list,id_cat,type, tabs){
		$.post(
			"ajax_paging/"+url,
			{
				page: page,
				per_page: per_page, 
				id_list: id_list, 
				id_cat:id_cat,
				type: type
			},function(data,status){

				if(status == "success"){

					$(tabs).html(data);

					$(tabs + ' .pagination li.active').click(function() {

						var pager = $(this).attr('p');

						_FRAMEWORK.pagingData(pager, per_page, url, id_list,id_cat,type, tabs);

						goToByScroll(tabs);

					});


					_FRAMEWORK.ratioImage();

					_FRAMEWORK.LoadingImages();	
					
				}
			}
		);
	},
	pagingDataIndex:function(page, per_page, url, id_list,id_cat,type, tabs, slider, search){

		$.post(

			"ajax_paging/"+url,
			{
				page: page,

				per_page: per_page, 

				id_list: id_list, 

				id_cat:id_cat,

				type: type,

				slider:slider,

				search:search

			},function(data,status){

				if(status == "success"){

					$(tabs).html(data);

					_FRAMEWORK.ratioImageNoLoad();
					
					_FRAMEWORK.carouselSlider();	
					
				}
			}
		);
	},

	ClickSearch:function(){

		$("#SeachOnClick").click(()=>{

		});

	},

	submitFormCheckOut:function(){

        $('#checkout-modal__submit-form').click(function(){

            $("#form-checkout" ).submit();

        });

    },

	checkoutModal:function(){

			$(".js-checkout__tpl").click(function(){

				var name = $('.wrap-input__checkout-name').val();

				var email = $('.wrap-input__checkout-email').val();

				var phone = $('.wrap-input__checkout-phone').val();

				var city = $('.wrap-input__checkout-city').val();

				var dist = $('.wrap-input__checkout-dist').val();

				var address = $('.wrap-input__checkout-address').val();

				var content = $('.wrap-input__checkout-content').val();

				var payship = $('.wrap-input__checkout-payship').val();

				var payment = $('.wrap-input__checkout-payment').val();

				var total = $('.wrap-input__checkout-payment-total').val();

				if (isBlank(name)){

					_FRAMEWORK.showError('Tên không được bỏ trống!!!','error');

					$('.input wrap-input__checkout-name').focus();
	
					return false;
	
				} else if (isBlank(phone)) {

					_FRAMEWORK.showError('Số điện thoại không được bỏ trống!!!','error');
	
					$('.input wrap-input__checkout-phone').focus();
	
					return false;
	
				} else if (!validatePhone(phone)) {

					_FRAMEWORK.showError('Số điện thoại sai định dạng!!!','error');
	
					$('.input wrap-input__checkout-phone').focus();
	
					return false;
	
				}else if (isBlank(city)) {

					_FRAMEWORK.showError('Bạn chưa chọn tỉnh thành!!!','error');
	
					return false
	
				}else if (isBlank(dist)) {

					_FRAMEWORK.showError('Bạn chưa chọn quận huyện!!!','error');
	
					return false
	
				}else if (isBlank(address)) {

					_FRAMEWORK.showError('Địa chỉ không được bỏ trống!!!','error');
	
					return false
	
				}else{

				
				$.post("ajax/modal-checkout.php",{
					name:name,
					phone:phone,
					email:email,
					address:address,
					content:content,
					payship:payship,
					payment:payment,
					total:total
				},
				function(data,status){
					if(status == "success"){
						$("body").append(data);
						_FRAMEWORK.submitFormCheckOut();
						$(".close-modal").click(function(){
							$("#modal-contact").remove();
						})
					}
				});

				}
				
			});
		   
			$("body").click(".modal,.modal-container",function(event){   
				var modals = document.getElementById("modal-contact");   
				var container = document.getElementById("modal-container");
				if(event.target == modals || event.target == container){
					$("#modal-contact").remove();
				}
			})
	},
	active:()=>{

		let heightContent = $('#view-desc-detail').height();

		if(heightContent>499){

			$('.bg-article').removeClass('nobackground');

			$('.box-detail-content-btnview').removeClass('d-none');
			
		}

		$('#click-viewdesc').click(function(){

			var target = $(this).attr('data-target');

			if(!$(target).hasClass('activeDesc')){

				$(target).addClass('activeDesc');

				$('.bg-article').addClass('nobackground');

				$(this).html('Thu g&#1073;�&#1036;n <i class="fa-sharp fa-solid fa-caret-up"></i>');

			}else{

				$(this).html('Xem th&#1043;&#1028;m <i class="fa-sharp fa-solid fa-caret-down"></i>');

				$('.bg-article').removeClass('nobackground');

				$(target).removeClass('activeDesc');

				goToByScroll(target);

			}
		});

		$(".js-cat").click(function(){

			$('.js-cat').removeClass('activeM');
			var $this = $(this);
			$this.addClass('activeM');
			var targetid = $this.attr("data-target");
			var idlist = $this.attr("data-list");
			var idcat = $this.attr("data-cat");
			var type = $this.attr("data-type");
			$(".js-cat[data-target='" + targetid + "']").removeClass("activeM");
			$this.addClass("activeM");
			_FRAMEWORK.pagingData(1,PAGE_INDEX,"ajax_paging.php",idlist,idcat,type,targetid);

		});

	},
	map:function(){
		$(".js-active").click(function(){
			var $this = $(this);
			var targetid = $this.attr("data-target");
			$(".js-active").removeClass("active");
			
			$this.addClass("active");
			if(!$(targetid).hasClass("active")){	
				$(targetid).addClass("active");			
			}else{
				$(targetid).removeClass("active");	
			}
		});
		$('body').click(".js-map",function(e){
			var id = e.target.getAttribute('data-id');
			if(id != "" & id != null & id != undefined){
				var params = {id:id};
			}else{
				if(e.target.classList.contains('js-map')){
					params = {};
				}
			}
			if(e.target.classList.contains('js-map')){
				$.post("ajax/loadMap.php",params,
				function(data,status){
					if(status == "success"){
						$("body").append(data);
						$(".close-modal").click(function(){
							$("#modal-map").remove();
						})
					}
				})
				$("body").click(".modalmap,.modalmap-container",function(event){   
					var modals = document.getElementById("modal-map");   
					var container = document.getElementById("modalmap-container");
					if(event.target == modals || event.target == container){
						$("#modal-map").remove();
					}
				})
			}
		});
	},
	preLoader:function(){

		var h_s=$('.h__box__subject').height()/3;

		if(h_s>0){

			$('.h__box__subject').css({'max-height':'10'+'px','overflow':'hidden'}).append('<div class="append__subject"><a class="expend"><span>Xem th&#1043;&#1028;m</span>&nbsp;<i class="fa-light fa-angle-down"></i></a></div>');
			$('body').on('click','.append__subject a.expend',function(){
				if(!$(this).hasClass('is-expend')){
					$(this).addClass('is-expend');
					$('.h__box__subject').css('max-height','100%');

					$('.append__subject').addClass('activeSubject');
					
					$('.append__subject a.expend span').text('Thu g&#1073;�&#1036;n');
					$('.append__subject a.expend i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
				}else{
					$(this).removeClass('is-expend');
					
					$('.h__box__subject').css('max-height','10px');

					$('.append__subject a.expend span').text('Xem th&#1043;&#1028;m');

					$('.append__subject').removeClass('activeSubject');

					var elementScroll = '.h__box__subject';
					goToByScroll(elementScroll);

					$('.append__subject a.expend i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
				}
				
			});
			
		}
		
		$('.popup__close-btn').click(()=>{
			$('.home--popup').remove();
		});

        if(_INDEX=="true"){

			countNumberWhenScrollPage('.res--why--page','.count-number');

		}

    },

    magicZoomplus:function(){

    	if(exists('.product-detail-slider')){

		    var owl = $(".product-detail-slider").owlCarousel({

			    autoplay: true,

			    autoplaySpeed: 300,

			    loop: true,

			    navSpeed: 300,

			    items: 4,

			    margin: 2,

			    nav: true,

		        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']

			  });

		}

    },

	ajaxHandle:function(){

		$('body').on('click','.view__load',function(){

			let _this=$(this);
	
			let item=parseInt(_this.attr('data-item'));
	
			let page=parseInt(_this.attr('data-page'));
	
			let x = page + 1;
			
			$.ajax({
	
				url:_URL,
	
				type:'GET',
	
				data:{
	
					page:x,
	
					per_page:item
	
				},
	
				dataType:'JSON',
	
				beforeSend:function(){

					$(this).addClass('loading');

				},

				success:function(data){

					$(this).removeClass('loading');

					$('#wrap__product').append(data.html);
	
					$('#paging').html(data.paging);

					_FRAMEWORK.ratioImage();

					_FRAMEWORK.LoadingImages();	
		
				},
				complete:function(){}
			});
	
		});


		$('#reload-captcha').click(()=>{

			$.ajax({

				url:'ajax/loadCaptcha.php',

				method:'GET',

				dataType:'json',

				success:(data)=>{

					$('#captcha-code').text(data.characters);

				}

			})

		});

		$('.call-back__detail').click(()=>{

			var phone = $('input[name="txt-phone-detail"]').val();

			if (isBlank(phone)) {

				_FRAMEWORK.showError('S&#1073;�� &#1044;�i&#1073;��n tho&#1073;&#1108;&#1038;i kh&#1043;&#1169;ng &#1044;�&#1046;�&#1073;�&#1032;c b&#1073;�&#1039; tr&#1073;��ng!!!','error');

				$('input[name="txt-phone-detail"]').focus();

				return false;

			} else if (!validatePhone(phone)) {

				_FRAMEWORK.showError('S&#1073;�� &#1044;�i&#1073;��n tho&#1073;&#1108;&#1038;i sai &#1044;�&#1073;��nh d&#1073;&#1108;&#1038;ng!!!','error');

				$('input[name="txt-phone-detail"]').focus();

				return false;

			}else{

				$.ajax({

					url:'ajax/ajaxContactPhone.php',

					type:'post',

					dataType:'json',
					
					data:{phone:phone},

					beforeSend:function(){

						$('.call-back__detail').addClass('loading');

					},
					success:function(data){

						if(data.status==200){

							setTimeout(() => {

								$('.call-back__detail').removeClass('loading');
								
								_FRAMEWORK.showError(data.message,'success');

								$('input[name="txt-phone-detail"]').val('');

							}, 3000);

							

						}else{

							_FRAMEWORK.showError(data.message,'error');

							$('input[name="txt-phone-detail"]').val('');

						}

					}

				});
				
			}

		});

		$('#submit-promotion').click(()=>{

			var email = $('input[name="email-promotion"]').val();

			if (isBlank(email)) {

				_FRAMEWORK.showError('Email không được bỏ trống!!!','error');

				$('input[name="email-promotion"]').focus();

				return false;

			} else if (!isEmail(email)) {

				_FRAMEWORK.showError('Email không đúng định dạng!!','error');

				$('input[name="email-promotion"]').focus();

				return false;

			}else{

				$.ajax({

					url:'ajax/ajaxUudai.php',

					type:'post',

					dataType:'json',
					
					data:{email:email},

					beforeSend:function(){

						$('#submit-promotion').addClass('loading');

					},
					success:function(data){

						if(data.status==200){

							setTimeout(() => {

								$('#submit-promotion').removeClass('loading');

								_FRAMEWORK.showError(data.message,'success');

								$('input[name="email-promotion"]').val('');

							}, 3000);

						}else{

							_FRAMEWORK.showError(data.message,'error');

							$('input[name="email-promotion"]').val('');

						}

					}

				});
				
			}

		});



		
		$('#submit_register').click(()=>{

			var name = $('input[name="regis-index-fullname"]').val();

			var email = $('input[name="regis-index-email"]').val();

			var address = $('input[name="regis-index-address"]').val();

			var phone = $('input[name="regis-index-phone"]').val();

			var content = $('textarea[name="regis-index-content"]').val();

			// var service = $('select[name="regis-index-services"]').val();

			// var inputCode = $('input[name="regis-index-captcha"]').val();

			// var captchaCode = $('#captcha-code').text();

			if(isBlank(name)){

				_FRAMEWORK.showError('H&#1073;�&#1036; t&#1043;&#1028;n kh&#1043;&#1169;ng &#1044;�&#1046;�&#1073;�&#1032;c b&#1073;�&#1039; tr&#1073;��ng!!!','error');

				$('input[name="regis-index-fullname"]').focus();

				return false;

			}else if (isBlank(phone)) {

				_FRAMEWORK.showError('S&#1073;�� &#1044;�i&#1073;��n tho&#1073;&#1108;&#1038;i kh&#1043;&#1169;ng &#1044;�&#1046;�&#1073;�&#1032;c b&#1073;�&#1039; tr&#1073;��ng!!!','error');

				$('input[name="regis-index-phone"]').focus();

				return false;

			} else if (!validatePhone(phone)) {

				_FRAMEWORK.showError('S&#1073;�� &#1044;�i&#1073;��n tho&#1073;&#1108;&#1038;i sai &#1044;�&#1073;��nh d&#1073;&#1108;&#1038;ng!!!','error');

				$('input[name="regis-index-phone"]').focus();

				return false;

			}
			// else if(service==0){

			// 	_FRAMEWORK.showError('B&#1073;&#1108;&#1038;n ch&#1046;�a ch&#1073;�&#1036;n d&#1073;��ch v&#1073;�&#1168;!!','error');

			// 	$('select[name="regis-index-services"]').focus();

			// 	return false;

			else if(isBlank(email)){

					_FRAMEWORK.showError('Email kh&#1043;&#1169;ng &#1044;�&#1046;�&#1073;�&#1032;c b&#1073;�&#1039; tr&#1073;��ng!!!','error');
	
					$('input[name="regis-index-email"]').focus();
	
					return false;
	
				}else if (!isEmail(email)) {
	
					_FRAMEWORK.showError('Email kh&#1043;&#1169;ng &#1044;�&#1043;&#1108;ng &#1044;�&#1073;��nh d&#1073;&#1108;&#1038;ng !!!','error');
	
				    $('input[name="regis-index-email"]').focus();
	
				    return false;
	
			// 	}else if (!isEmail(email)) {

			// 			_FRAMEWORK.showError('Email kh&#1043;&#1169;ng &#1044;�&#1043;&#1108;ng &#1044;�&#1073;��nh d&#1073;&#1108;&#1038;ng !!!','error');
		
			// 		    $('input[name="regis-index-email"]').focus();
		
			// 		    return false;

			}else if (isBlank(address)) {

				_FRAMEWORK.showError('&#1044;&#1106;&#1073;��a ch&#1073;�� kh&#1043;&#1169;ng &#1044;�&#1046;�&#1073;�&#1032;c b&#1073;�&#1039; tr&#1073;��ng!!!','error');

				$('input[name="regis-index-address"]').focus();

				return false;

			// }else if(isBlank(email)){

			// 	_FRAMEWORK.showError('Email kh&#1043;&#1169;ng &#1044;�&#1046;�&#1073;�&#1032;c b&#1073;�&#1039; tr&#1073;��ng!!!','error');

			// 	$('input[name="regis-index-email"]').focus();

			// 	return false;

			// }else if (!isEmail(email)) {

			// 	_FRAMEWORK.showError('Email kh&#1043;&#1169;ng &#1044;�&#1043;&#1108;ng &#1044;�&#1073;��nh d&#1073;&#1108;&#1038;ng !!!','error');

	        //     $('input[name="regis-index-email"]').focus();

	        //     return false;

			// }else if (isBlank(inputCode)) {

			// 	_FRAMEWORK.showError('M&#1043;&#1032; x&#1043;&#1038;c nh&#1073;&#1108;�n kh&#1043;&#1169;ng &#1044;�&#1046;�&#1073;�&#1032;c b&#1073;�&#1039; tr&#1073;��ng !!!','error');

	        //     $('input[name="regis-index-captcha"]').focus();

	        //     return false;

	        // }else if (captchaCode != inputCode) {

			// 	_FRAMEWORK.showError('M&#1043;&#1032; x&#1043;&#1038;c nh&#1073;&#1108;�n kh&#1043;&#1169;ng ch&#1043;�nh x&#1043;&#1038;c !!!','error');

	        //     $('input[name="regis-index-captcha"]').focus();

	        //     return false;

	        }else{

				$.ajax({

					url:'ajax/ajaxNewsletter.php',

					type:'post',

					dataType:'json',

					data:{
						name:name,
						phone:phone,
						// service:service,
						address:address,
						email:email,
						content:content
					},

					beforeSend:()=>{

						$('#submit_register').addClass('loading');
						
					},
					success:(data)=>{

						setTimeout(function(){

							$('#submit_register').removeClass('loading');

							if(data.status == 200){

								_FRAMEWORK.showError(data.message,'success');

								$('input[name="regis-index-fullname"]').val('');

								$('input[name="regis-index-phone"]').val('');

								$('input[name="regis-index-address"]').val('');

								$('input[name="regis-index-email"]').val('');

								$('textarea[name="regis-index-content"]').val('');

								// $('input[name="regis-index-captcha"]').val('');

								// $('select[name="regis-index-services"]').prop('selectedIndex',0);

							}else{

								_FRAMEWORK.showError(data.message,'error');

								$('input[name="regis-index-fullname"]').val('');

								$('input[name="regis-index-phone"]').val('');

								$('input[name="regis-index-address"]').val('');

								$('input[name="regis-index-email"]').val('');

								$('textarea[name="regis-index-content"]').val('');

								// $('input[name="regis-index-captcha"]').val('');

								// $('select[name="regis-index-services"]').prop('selectedIndex',0);

							}

						},1500);
					}

				})
			}
		});

	},

	scrollTo:function(){

		$('body').append('<div id="back-to-top" style=""><a class="top arrow"><i class="fa fa-angle-up"></i> <span></span></a></div>');

	    $(window).scroll(() => {

	        if ($(window).scrollTop() > 100) {

	            $('#back-to-top .top').addClass('animate_top');

	        } else {

	            $('#back-to-top .top').removeClass('animate_top');

	        }

	    });

	    $(window).scroll(() => {

	        if ($(window).scrollTop() > 130) {

	            $('.scroll-fixed').addClass('fixed');

	        } else {

	            $('.scroll-fixed').removeClass('fixed');

	        }

	    });

	    $('#back-to-top .top').click(() => {

	        $('html, body').animate({ scrollTop: 0 }, 500);

	    });

		$('#slide-menu-right').click(function() {

            var container = $('#slide-menu');

            sideScroll(container, 'right', 25, 100, $(".slide-menu").width());

        });



        $('#slide-menu-left').click(function() {

            var container = $('#slide-menu');

            sideScroll(container, 'left', 25, 100, $(".slide-menu").width());

        });

	},

	blockSite:function(){


			function clickIE() {

				if (document.all) {return false;}
	
			}
	
			function clickNS(e) {
	
				if (document.layers||(document.getElementById&&!document.all)) {
	
				if (e.which==2||e.which==3) {return false;}}
	
			}
	
			if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;document.onselectstart=clickIE}document.oncontextmenu=new Function("return false")
	
			function disableselect(e){
	
				return false
	
			}
	
			function reEnable(){
	
				return true
	
			}
	
			document.onselectstart=new Function ("return false")
	
			if (window.sidebar){
	
				document.onmousedown=disableselect
	
				document.onclick=reEnable
	
			}
	
			$(document).keydown(function(event){
	
				if(event.ctrlKey && event.shiftKey && event.keyCode==73)
	
				{        
	
					return false;
	
				}
	
				if (event.ctrlKey && event.shiftKey && event.keyCode == 74) {
	
					return false;
	
				}
	
				if (event.keyCode == 83 && (navigator.platform.match("Mac") ? event.metaKey : event.ctrlKey)) {
	
					return false;
	
				}
	
				// "U" key
	
				if (event.ctrlKey && event.keyCode == 85) {
	
					return false;
	
				}
	
				 if (event.keyCode == 123) {
	
					return false;
	
				}
	
			});
   
	},

	menuMobile:function(){

		$('#close-menumobile').click(function(){
    
            $('#menuSide').removeClass('active');
            
        });

		$('div[data-toggle-menu]').click(function() {

	        if (!$(this).hasClass('active')) {

	            $(this).addClass('active');

	            $('body').append('<div class="bg-mask"></div>');

	            $('.box-modal-menu').css({'transform': 'translateX(0)','left':'0'});

	        } else {

	            $(this).removeClass('active');

	            $('.bg-mask').remove();

	            $('.box-modal-menu').css({'transform': 'translateX(-260px)','left':'-260px'});

	        }

	    });

	    $('body').on('click', '.bg-mask', function() {

	        $('.bg-mask').remove();

	        $('.navbar-menu').removeClass('active');

	        $('.box-modal-menu').css({'transform': 'translateX(-260px)','left':'-260px'});

	    });

	    $('span.drop').click(function() {

	        if (!$(this).hasClass('active')) {

	            $(this).removeClass('active');

	            $(this).addClass('active');

	            $(this).closest('li').find('>ul').stop().slideUp();

	            $(this).closest('li').find('>ul').stop().slideDown();

	        } else {

	            $(this).removeClass('active');

	            $(this).removeClass('active');

	            $(this).closest('li').find('>ul').stop().slideUp();

	        }

	    });

	    $('#fabCheckbox').click(function() {

            if (this.checked) {

                $('.mask-overlay').addClass('is-active');

            } else {

                $('.mask-overlay').removeClass('is-active');

            }

        });

	},

	tabtoggle: function(){

		$('.js-droptabdetail').click(function() {

			var $this = $(this);
			if ($this.parent().hasClass('active')) {
				$this.parent().removeClass('active');
				$this.next().slideUp();
				$this.find("i").removeClass('fa-chevron-up');
				$this.find("i").addClass('fa-chevron-down');
			} else {
				$(".js-droptabdetail").parent().removeClass('active');
				$(".js-droptabdetail").next().slideUp();
				$(".js-droptabdetail").find("i").removeClass('fa-chevron-up');
				$(".js-droptabdetail").find("i").addClass('fa-chevron-down');
				$this.parent().addClass('active');
				$this.next().slideDown();
				$this.find("i").removeClass('fa-chevron-down');
				$this.find("i").addClass('fa-chevron-up');			
			}
		});

		$('.js-droptabdetail2').click(function() {

			var $this = $(this);
			if ($this.parent().hasClass('active')) {
				$this.parent().removeClass('active');
				$this.next().slideUp();
				$this.find("i").removeClass('fa-chevron-up');
				$this.find("i").addClass('fa-chevron-down');
			} else {
				$(".js-droptabdetail2").parent().removeClass('active');
				$(".js-droptabdetail2").next().slideUp();
				$(".js-droptabdetail2").find("i").removeClass('fa-chevron-up');
				$(".js-droptabdetail2").find("i").addClass('fa-chevron-down');
				$this.parent().addClass('active');
				$this.next().slideDown();
				$this.find("i").removeClass('fa-chevron-down');
				$this.find("i").addClass('fa-chevron-up');			
			}
		});


	},

	nextMenuMobile:function(){

		$('.wrapper-menu__header-mobile-next-menu').click(function(){

			var scroll = $('.wrapper-menu__header-mobile-list').scrollLeft();
			
			$('.wrapper-menu__header-mobile-list').animate({scrollLeft: scroll + 200}, 200);

		});

		$('.wrapper-nav__menu-next--mobile').click(function(){

			var scroll = $('.nav-services__mobile-list').scrollLeft();
			
			$('.nav-services__mobile-list').animate({scrollLeft: scroll + 200}, 200);

		});

		$('.wrapper-nav__menu-prev--mobile').click(function(){

			var scroll = $('.nav-services__mobile-list').scrollLeft();
			
			$('.nav-services__mobile-list').animate({scrollLeft: scroll - 200}, 200);

		});
	},


	carouselSlider:function(){

		var owl = $('.owl-carousel.in-home');

	  		owl.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1){ loop = true; }else{ loop = false; }

			if (dot == 1){ dot = true; }else{ dot = false; }

			if (nav == 1){ nav = true; }else{ nav = false; }

			if (play == 1){ play = true; }else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ["<div class='arrowleft'><svg viewBox='0 0 16000 16000'><polyline class='a' points='11040,1920 4960,8000 11040,14080'></polyline></svg></div>","<div class='arrowright'><svg viewBox='0 0 16000 16000' style='position:absolute;top:0;left:0;width:100%;height:100%;'><polyline class='a' points='4960,1920 11040,8000 4960,14080'></polyline></svg></div>"],

				autoplay:play,

				autoplayTimeout: 10000,

				smartSpeed: 2000,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	
						
						margin:8,

					},

					600:{

						items:Number(sm_item)				

					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		var owlslider = $('.owl-carousel.owl-slider');

		owlslider.each( function(){

	  var xs_item = $(this).attr('data-xs-items');

	  var md_item = $(this).attr('data-md-items');

	  var lg_item = $(this).attr('data-lg-items');

	  var sm_item = $(this).attr('data-sm-items');	

	  var margin=$(this).attr('data-margin');

	  var dot=$(this).attr('data-dot');

	  var nav=$(this).attr('data-nav');

	  var height=$(this).attr('data-height');

	  var play=$(this).attr('data-play');

	  var loop=$(this).attr('data-loop');

	  

	  if (typeof margin !== typeof undefined && margin !== false) {    

	  } else{

		  margin = 30;

	  }

	  if (typeof xs_item !== typeof undefined && xs_item !== false) {    

	  } else{

		  xs_item = 1;

	  }

	  if (typeof sm_item !== typeof undefined && sm_item !== false) {    



	  } else{

		  sm_item = 3;

	  }	

	  if (typeof md_item !== typeof undefined && md_item !== false) {    

	  } else{

		  md_item = 3;

	  }

	  if (typeof lg_item !== typeof undefined && lg_item !== false) {    

	  } else{

		  lg_item = 3;

	  }



	  if (loop == 1){ loop = true; }else{ loop = false; }

	  if (dot == 1){ dot = true; }else{ dot = false; }

	  if (nav == 1){ nav = true; }else{ nav = false; }

	  if (play == 1){ play = true; }else{ play = false; }

	  

	  $(this).owlCarousel({

		  loop: loop,

		  margin:Number(margin),

		  responsiveClass:true,

		  animateOut: 'fadeOut',

		  dots:dot,

		  nav:nav,

		  navText: ["<div class='arrowleft'><svg viewBox='0 0 16000 16000'><polyline class='a' points='11040,1920 4960,8000 11040,14080'></polyline></svg></div>","<div class='arrowright'><svg viewBox='0 0 16000 16000' style='position:absolute;top:0;left:0;width:100%;height:100%;'><polyline class='a' points='4960,1920 11040,8000 4960,14080'></polyline></svg></div>"],

		  autoplay:play,

		  autoplayTimeout: 10000,

		  smartSpeed: 2000,

		  autoplayHoverPause:true,

		  autoHeight:false,

		  responsive:{

			  0:{

				  items:Number(xs_item)				

			  },

			  600:{

				  items:Number(sm_item)				

			  },

			  1000:{

				  items:Number(md_item)				

			  },

			  1200:{

				  items:Number(lg_item)				

			  }

		  }

	  })

  		});

		var owlQuick = $('.owl-carousel.quick-slide');

		owlQuick.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-delay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1) { loop = true; } else{ loop = false; }

			if (dot == 1) { dot = true; } else{ dot = false; }

			if (nav == 1) { nav = true; } else{ nav = false; }

			if (play == 1) { play = true; } else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 200,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

					},

					600:{

						items:Number(sm_item),			


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		var owlQuick = $('.owl-carousel.service-slide');

		owlQuick.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-delay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1) { loop = true; } else{ loop = false; }

			if (dot == 1) { dot = true; } else{ dot = false; }

			if (nav == 1) { nav = true; } else{ nav = false; }

			if (play == 1) { play = true; } else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				autoWidth:true,

				nav:nav,

				navText: ['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 200,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

						autoWidth:false,

					},

					600:{

						items:Number(sm_item),			


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		$('.wrapper-nav__menu-prev').click(function() {

			$('.slider-service').trigger('prev.owl.carousel');
	
		});
		
		$('.wrapper-nav__menu-next').click(function() {
	
			$('.slider-service').trigger('next.owl.carousel');
	
		});

		$('.build-reference__album-btn--prev').click(function() {

			$('.album-slider').trigger('prev.owl.carousel');
	
		});
		
		$('.build-reference__album-btn--next').click(function() {
	
			$('.album-slider').trigger('next.owl.carousel');
	
		});

		$('.build-reference__news-btn--prev').click(function() {

			$('.slider-news').trigger('prev.owl.carousel');
	
		});
		
		$('.build-reference__news-btn--next').click(function() {
	
			$('.slider-news').trigger('next.owl.carousel');
	
		});


		var owlQuickProduct = $('.owl-carousel.quick-slide-product');

		owlQuickProduct.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-delay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1) { loop = true; } else{ loop = false; }

			if (dot == 1) { dot = true; } else{ dot = false; }

			if (nav == 1) { nav = true; } else{ nav = false; }

			if (play == 1) { play = true; } else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 200,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

					},

					600:{

						items:Number(sm_item),			


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		$('.btnslide--prev').click(function(){

			let target = $(this).attr('data-target');

			$(target).trigger('prev.owl.carousel');

		});

		$('.btnslide--next').click(function(){

			let target = $(this).attr('data-target');

			$(target).trigger('next.owl.carousel');

		})

	},

	navBar:function(){

		$('ul.box-nav-js li[data-tabs]').click(function(){

			$('ul.box-nav-js li[data-tabs]').removeClass('active');

			$(this).addClass('active');

			var role=$(this).attr('role');

			$('.tabs-content[data-tabs]').removeClass('active');

			$('.tabs-content[data-view-'+role+']').addClass('active');

		});

	},

	searchPage:function(){

		$('button[data-btn-search-pc]').click(function(){

        	var t=$('#keywordspc');

	        searchEnter(t);

	    });
		$('button[data-btn-search-m]').click(function(){

        	var t=$('#keywords-m');

	        searchEnter(t);

	    });
	    $('button.button-search-m').click(function(){

        	var t=$('#keywords-m');

	        searchEnter(t);

	    });

		$('button.button-search-mmenu').click(function(){

        	var t=$('#keywords-mmenu');

	        searchEnter(t);

	    });

		$('i.button-search-m').click(function(){

        	var t=$('#keywords-m');

	        searchEnter(t);

	    });

		$('button.btn--search').click(function(){

        	var t=$('#keywords');

	        searchEnter(t);

	    });
	    

	    $('#keywords').keypress(function(e){

	        if(e.which==13){

	            searchEnter($(this));

	        }

	    });

		$('#keywords-m').keypress(function(e){

	        if(e.which==13){

	            searchEnter($(this));

	        }

	    });

		$('#keywords-mmenu').keypress(function(e){

	        if(e.which==13){

	            searchEnter($(this));

	        }

	    });

		$('#keywordspc').keypress(function(e){

	        if(e.which==13){

	            searchEnter($(this));

	        }

	    });


	    $('input[data-role="search-input"]').placeholderTypewriter({text: _PLACEHOLDER});

		$('input[data-inputsearch-mobile]').placeholderTypewriter({text: _PLACEHOLDER});

		

	},

	showError:function(message,status){



		 $.toast({



	        heading: 'Thông báo',



	        text: message,



	        position: 'top-right',



	        stack: false,



	        icon: status



	    });



	},

	submitContact:function(){

		$('#submit-contact').click(function() {

	        var _o=$(this);

	        var _fn = $('#customername').val();

	        var _el = $('#customerEmail').val();

	        var _pn = $('#customerPhone').val();

	        var _obj = $('#contactSubject').val();

			var _content = $('#contactMessage').val();

	        var _capcha = $('#contactCapcha').val();

	        if (isBlank(_fn)) {

	            $('#customername').focus();

	            return false;

	        } else if (isBlank(_el)) {

	            $('#customerEmail').focus();

	            return false

	        } else if (!isEmail(_el)) {

	            $('#customerEmail').focus();

	            return false;

	        } else if (isBlank(_pn)) {

	            $('#customerPhone').focus();

	            return false;

	        } else if (!validatePhone(_pn)) {

	            $('#customerPhone').focus();

	            return false;

	        }else if (isBlank(_capcha)) {

	            $('#contactCapcha').focus();

	            return false;

	        }

	        var params={

	            _fn:_fn,

	            _el:_el,

	            _pn:_pn,

	            _obj:_obj,

				_content:_content,

	            _capcha:_capcha

	        };

	        $.ajax({

	            url:'ajax/ajaxContact.php',

	            dataType:'json',

	            data:params,

	            type:'post',

	            beforeSend:function(){

	                _o.addClass('loading');

	            },

	            error:function(res){

	                _o.removeClass('loading');

	                _FRAMEWORK.showError('server error!', 'error');

	            },

	            success:function(res) {

	                setTimeout(function(){

	                    _o.removeClass('loading');

	                    if(res.status==200){

	                        _FRAMEWORK.showError(res.message, res.error);

	                        $('#customername').val('');

	                        $('#customerEmail').val('');

	                        $('#customerPhone').val('');

	                        $('#contactSubject').val('');

	                        $('#contactMessage').val('');

	                        $('#contactCapcha').val('');

	                    }else{

	                        _FRAMEWORK.showError(res.message, res.error);

	                    }

	                },1500);

	            }

	        })

	    });

	},

	mobiTool: function(){
		
		$(".js-moredetail").click(function(){
            var target = $(this).data('target');
            $(target).toggleClass('active');
            if($(target).hasClass('active')){
                $(this).html('THU G&#1073;�&#1034;N');
            }else{     
                $(this).html('XEM TH&#1043;&#1033;M');
            }
        })

		$('.js-bank-pop').click(function(){
            var target = $(this).data('target');
            if($(this).hasClass('active')){
                $(this).removeClass('active');
                $(target).removeClass('active');
            }else{
                $('.bankpop').removeClass('active');
                $('.js-bank-pop').removeClass('active');
                $(this).addClass('active');
                $(target).addClass('active');
            }
        });
		
        $('.js-mobi-tool').click(function(){
            var $this = $(this);
            var target = $this.data('target');
            var id = $this.attr('id');
            $('.js-mobi-tool').each(function(){
                if($(this).attr('id') != id & $(this).find('.mobi-tool-act').hasClass('active')){
                    var t = $(this).data('target');
                    $(this).find('.mobi-tool-act').removeClass('active');
                    $(t).removeClass('active');
                }
            })
            $this.find('.mobi-tool-act').toggleClass('active');
            $(target).toggleClass('active');
        });
        $(".toggle-btn").click(function(e){
            e.preventDefault();
            var $next = $(this).parent().next();
            var $grandparent = $(this).parent().parent().parent();
            $grandparent.find("li").removeClass('active');
            $grandparent.find(".ic-arrow").removeClass('active');
            if($next.hasClass("show")){
                $next.removeClass("show");
                $next.slideUp(500);
                $(this).parent().parent().addClass('active');
            }else{
                $grandparent.find("li .inner").removeClass("show");
                $grandparent.find("li .inner").slideUp(500);
                $grandparent.find("i").attr("class","fal fa-chevron-down");
                $next.slideDown(500);
                $(this).parent().parent().addClass('active');
                $(this).addClass('active');
                $next.addClass("show");
            }
            
        });
        $('.js-droptab').click(function() {
            var $this = $(this);
            $('.js-droptab').removeClass('active');
            if ($this.parent().hasClass('active')) {
                $this.parent().removeClass('active');
                $this.removeClass('active');
                $this.next().slideUp(500);
            } else {
                $(".js-droptab").parent().removeClass('active');
                $(".js-droptab").next().slideUp(500);
                $this.parent().addClass('active');
                $this.addClass('active');
                $this.next().slideDown(500);		
            }
        });
    },

	tocList:function(){

		if(_TOC==1 || _LIST_TOC==1){

			$('#toc').toc({

	            selectors: 'h2, h3, h4, h5, h6',

	            container: $('.content'),

	            status: true

	          });

	          $('a#toc').click(function(){

	            $('.toc-list').toggle(200);

	          });

	        $('.toc-list').find('a').click(function(e) {

	            e.preventDefault();

		        var x = $(this).attr('data-rel');

		        goToByScroll(x);

		    });

	    }

	},
	addCart:()=>{

		$('body').on('click','.js-addcart',function(e){

			e.preventDefault();
			
			var id = $(this).attr('data-id');

			var qty = $(this).attr('data-qty');
	
			$.ajax({
	
				url:'ajax/addCart.php',
	 
				type:'POST',
	 
				data:{ 
					
					pid:id,

					quality:qty
				},
	 
				dataType:'json',
	 
				beforeSend:function(){

					$('#loader').addClass('active');
	 
				},
	 
				success:function(res){
	 
				$('.viewcart').html(res['total-product']);

				$('.viewcartm').html(res['total-product']);

				$('.view-cart').html(res['total-product']);

				$('.view-cartm').html(res['total-product']);

				$('.view-price').html(res['price-string']);

				$('#total-product').html(res['total-product']);

				$('.numb-cart').html(res['total-product']);

				$('#total-price').html(res['total-price']);

				$('.cart-price').html(res['total-price']);

				$('#js-price-temp').html(res['price-string']);

				$('#js-total-cart').html(res['price-string']);

				$('#js-total-cart1').html(res['price-string']);

				$('.body-cart').html(res['html']);

				// _FRAMEWORK.showError(res['total-price'],'success');
					
	 
				},
	 
				complete:function(){
					$('#loader').removeClass('active');
					_FRAMEWORK.showError('Th&#1043;&#1028;m v&#1043;�o gi&#1073;�&#1039; h&#1043;�ng th&#1043;�nh c&#1043;&#1169;ng !','success');
	 
				}
	 
			});
			
	
		});

		$('body').on('click','.js-addcart-buynow',function(e){

			

			e.preventDefault();
			
			var id = $(this).attr('data-id');

			var qty = $(this).attr('data-qty');

			
	
			$.ajax({
	
				url:'ajax/addCart.php',
	 
				type:'POST',
	 
				data:{ 
					pid:id,
					quality:qty
				},
	 
				dataType:'json',
	 
				beforeSend:function(){

					$('#loader').addClass('active');
	 
				},
				error:function(res){

	                // _o.removeClass('loading');

	                // _FRAMEWORK.showError('server error!', 'error');

					// alert("OK");

	            },
				success:function(res){

	 
				$('.viewcart').html(res['total-product']);

				$('.view-price').html(res['price-string']);

				$('#total-product').html(res['total-product']);

				$('.numb-cart').html(res['total-product']);

				$('#total-price').html(res['total-price']);

				$('.cart-price').html(res['total-price']);

				$('#js-price-temp').html(res['price-string']);

				$('#js-total-cart').html(res['price-string']);

				$('#js-total-cart1').html(res['price-string']);

				$('.body-cart').html(res['html']);

				console.log(res.url);

				window.location.href = res.url;

				// _FRAMEWORK.showError(res['total-price'],'success');		 
					
	 
				},
	 
				complete:function(){
					
					$('#loader').removeClass('active');
	 
				}
	 
			});
			
	
		});
	}


	

}

_FRAMEWORK.init();