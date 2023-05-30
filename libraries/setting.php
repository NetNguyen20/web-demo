<?php 

	#=================check per===============

	$GLOBAL_LANG=false;

	$GLOBAL_PERMISSION=false;

	#=================check user===============

	$GLOBAL_USER=true;

	$GLOBAL_USER_ADMIN=true;

	$GLOBAL_USER_CLIENT=true;

	#================check member================

	$ORDER=true;

	$MEMBER=false;

	$CONTACT=true;

	$NEWSLETTER=false;

	$BOOKING=true;

	// =======================seo page======================
	$setting['seopage']['page']=array(

		'san-pham'=>'Sản phẩm',

		'tin-tuc'=>'Tin tức',

		'dich-vu' => 'Dịch vụ',

		'cam-nang'=>'Cẩm nang chăm sóc cá',

		'chinh-sach'=>'Chính sách',

		'lien-he'=>'Liên hệ'

	);
	$setting['seopage']['mota'] = true;
	$setting['seopage']['mota-ckeditor'] = true;
	$setting['seopage']['noidung'] = true;
	$setting['seopage']['noidung-ckeditor'] = true;
	$setting['seopage']['img-width'] = 300;
	$setting['seopage']['img-height'] = 200;
	$setting['seopage']['img-ratio'] = 1;
	$setting['seopage']['img-b'] = 200;
	$setting['seopage']['thumb'] = '300x200x1';
	$setting['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
	$viewArray=array('htgh','pttt');

	// #========================properties====================
	$nametype='properties';
	$setting['properties'][$nametype]['name']='Thuộc tính sản phẩm';
	$setting['properties'][$nametype]['color']=true;
	$setting['properties'][$nametype]['qty']=true;
	$setting['properties'][$nametype]['price']=true;
	$setting['properties'][$nametype]['photo']=true;
	$setting['properties'][$nametype]['img-height']=285;
	$setting['properties'][$nametype]['img-width']=250;
	$setting['properties'][$nametype]['img-ratio']=2;
	$setting['properties'][$nametype]['img-b']=false;


	#==================================Tác giả====================================

	$nametype='tac-gia';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tác giả';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách tác giả';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"hienthi"=>"Hiển thị",

		"mucluc"=>"Mục lục"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 100;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 100;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['link_facebook'] = true;

	$GLOBAL['baiviet'][$nametype]['link_zalo'] = true;

	$GLOBAL['baiviet'][$nametype]['link_twitter'] = true;

	$GLOBAL['baiviet'][$nametype]['link_instagram'] = true;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['thongtin'] = false;

	$GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['job'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


	//#========================Sản phẩm==================== 

	$nametype='san-pham';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Sản phẩm';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị",

	);

	$GLOBAL['baiviet'][$nametype]['status'] = array();

	$GLOBAL['baiviet'][$nametype]['slogan'] = false;

	$GLOBAL['baiviet'][$nametype]['daban'] = false;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 227;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 227;

	$GLOBAL['baiviet'][$nametype]['product_attribute'] = true;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['trangthai-batdongsan'] = true;

	$GLOBAL['baiviet'][$nametype]['img-b'] = false;

	$GLOBAL['baiviet'][$nametype]['iframe_map'] = false;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

	$GLOBAL['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh kèm theo",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 227,

            	"height_photo" => 227,

            	"thumb_width_photo" => 227,

            	"thumb_height_photo" => 227,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['mota_khuyenmai'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-khuyenmai-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['tukhoa'] = false;

	$GLOBAL['baiviet'][$nametype]['tukhoa-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tinhtrang'] = true;

	$GLOBAL['baiviet'][$nametype]['text-search'] = true;

	$GLOBAL['baiviet'][$nametype]['masp'] = false;

	$GLOBAL['baiviet'][$nametype]['color'] = false;

	$GLOBAL['baiviet'][$nametype]['size'] = false;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['gia'] = true;

	$GLOBAL['baiviet'][$nametype]['donvitinh'] = false;

	$GLOBAL['baiviet'][$nametype]['giacu'] = true;

	$GLOBAL['baiviet'][$nametype]['brand'] = false;

	$GLOBAL['baiviet'][$nametype]['xuatxu'] = false;

	$GLOBAL['baiviet'][$nametype]['baohanh'] = false;

	$GLOBAL['baiviet'][$nametype]['title-seo']=true;

	$GLOBAL['baiviet'][$nametype]['keywords-seo']=true;

	$GLOBAL['baiviet'][$nametype]['description-seo']=true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tags'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = true;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	// danh mục cấp 1

	$GLOBAL['baiviet'][$nametype]['list'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

	$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

		"noibat"=>"menu footer",

		"menupc"=> "Menu pc",

		"menu"=> "Menu mobile",

		"mucluc"=> "Mục lục",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 233;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 175;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 285;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 347;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 40;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 40;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	

	//danh mục cấp 2

	// $GLOBAL['baiviet'][$nametype]['cat'] = false;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['title'] = 'Danh mục cấp 2';

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['full'] = true;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['check_cat']=array(

	// 	"mucluc"=> "Mục lục",

	// 	"hienthi"=>"Hiển thị",

	// 	"menu"=> "Menu mobile",
		
	// );

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['img'] = true;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-width'] = 233;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-height'] = 175;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['brand'] = true;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['list'] = true;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['icon'] = false;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['link_cano'] = true;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-width1'] = 30;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-height1'] = 30;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-ratio'] = 1;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['mota'] = true;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['mota-ckeditor'] = true;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['noidung'] = true;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['noidung-ckeditor'] = true;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['seo'] = true;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-qc'] = false;

	// $GLOBAL_LEVEL2['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	// Danh mục cấp 3

	// $GLOBAL['baiviet'][$nametype]['item'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['title'] = 'Danh mục cấp 3';

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['full'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['check_item']=array(

	// 	"mucluc"=>"Mục lục",

	// 	"hienthi"=>"Hiển thị"
	// );

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['img'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-width'] = 187;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-height'] = 140;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-ratio'] = 2;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['link_cano'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['mota'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['mota-ckeditor'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['noidung'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['noidung-ckeditor'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['seo'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-qc'] = false;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';





	$nametype='danh-gia';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Đánh giá';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị",

	);

	$GLOBAL['baiviet'][$nametype]['status'] = array();

	$GLOBAL['baiviet'][$nametype]['slogan'] = false;

	$GLOBAL['baiviet'][$nametype]['daban'] = false;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 227;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 227;

	$GLOBAL['baiviet'][$nametype]['product_attribute'] = true;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['trangthai-batdongsan'] = true;

	$GLOBAL['baiviet'][$nametype]['img-b'] = false;

	$GLOBAL['baiviet'][$nametype]['iframe_map'] = false;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

	$GLOBAL['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh kèm theo",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 227,

            	"height_photo" => 227,

            	"thumb_width_photo" => 227,

            	"thumb_height_photo" => 227,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['mota_khuyenmai'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-khuyenmai-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['tukhoa'] = false;

	$GLOBAL['baiviet'][$nametype]['tukhoa-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tinhtrang'] = true;

	$GLOBAL['baiviet'][$nametype]['text-search'] = true;

	$GLOBAL['baiviet'][$nametype]['masp'] = false;

	$GLOBAL['baiviet'][$nametype]['color'] = false;

	$GLOBAL['baiviet'][$nametype]['size'] = false;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['gia'] = true;

	$GLOBAL['baiviet'][$nametype]['donvitinh'] = false;

	$GLOBAL['baiviet'][$nametype]['giacu'] = true;

	$GLOBAL['baiviet'][$nametype]['brand'] = false;

	$GLOBAL['baiviet'][$nametype]['xuatxu'] = false;

	$GLOBAL['baiviet'][$nametype]['baohanh'] = false;

	$GLOBAL['baiviet'][$nametype]['title-seo']=true;

	$GLOBAL['baiviet'][$nametype]['keywords-seo']=true;

	$GLOBAL['baiviet'][$nametype]['description-seo']=true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tags'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = true;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	// danh mục cấp 1

	$GLOBAL['baiviet'][$nametype]['list'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

	$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

		"noibat"=>"menu footer",

		"menupc"=> "Menu pc",

		"menu"=> "Menu mobile",

		"mucluc"=> "Mục lục",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 233;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 175;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 285;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 347;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 40;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 40;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';





		#==================================Hình thức giao hàng====================================

		$nametype='htgh';

		$GLOBAL['baiviet'][$nametype]['title_main'] = 'phương thức giao hàng';
	
		$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách phương thức giao hàng';
	
		$GLOBAL['baiviet'][$nametype]['full'] = false;
	
		$GLOBAL['baiviet'][$nametype]['check']=array(
	
			"hienthi"=>"Hiển thị"
	
		);
	
		$GLOBAL['baiviet'][$nametype]['tag']=true;
	
		$GLOBAL['baiviet'][$nametype]['img'] = false;
	
		$GLOBAL['baiviet'][$nametype]['img-width'] = 72;
	
		$GLOBAL['baiviet'][$nametype]['img-height'] = 72;
	
		$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;
	
		$GLOBAL['baiviet'][$nametype]['mota'] = true;
	
		$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;
	
		$GLOBAL['baiviet'][$nametype]['noidung'] = false;
	
		$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;
	
		$GLOBAL['baiviet'][$nametype]['thongtin'] = false;
	
		$GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;
	
		$GLOBAL['baiviet'][$nametype]['job'] = false;
	
		$GLOBAL['baiviet'][$nametype]['seo'] = false;
	
		$GLOBAL['baiviet'][$nametype]['alias'] = true;
	
		$GLOBAL['baiviet'][$nametype]['tag'] = false;
	
		$GLOBAL['baiviet'][$nametype]['top_nb'] = false;
	
		$GLOBAL['baiviet'][$nametype]['rating'] = false;
	
		$GLOBAL['baiviet'][$nametype]['daytin'] = false;
	
		$GLOBAL['baiviet'][$nametype]['mucluc'] = true;
	
		$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	
		$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

		#========================pttt==================== 

		$nametype='pttt';

		$GLOBAL['baiviet'][$nametype]['title_main'] = 'phương thức thanh toán';

		$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách phương thức thanh toán';

		$GLOBAL['baiviet'][$nametype]['full'] = false;

		$GLOBAL['baiviet'][$nametype]['check']=array(

			"mucluc"=>"Mục lục",

			"hienthi"=>"Hiển thị"

		);

		$GLOBAL['baiviet'][$nametype]['tag']=true;

		$GLOBAL['baiviet'][$nametype]['img'] = false;

		$GLOBAL['baiviet'][$nametype]['img-width'] = 285;

		$GLOBAL['baiviet'][$nametype]['img-height'] = 215;

		$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

		$GLOBAL['baiviet'][$nametype]['mota'] = false;

		$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

		$GLOBAL['baiviet'][$nametype]['noidung'] = true;

		$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

		$GLOBAL['baiviet'][$nametype]['thongtin'] = false;

		$GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

		$GLOBAL['baiviet'][$nametype]['job'] = false;

		$GLOBAL['baiviet'][$nametype]['seo'] = false;

		$GLOBAL['baiviet'][$nametype]['alias'] = true;

		$GLOBAL['baiviet'][$nametype]['tag'] = false;

		$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

		$GLOBAL['baiviet'][$nametype]['rating'] = false;

		$GLOBAL['baiviet'][$nametype]['daytin'] = false;

		$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

		$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

		$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



		$nametype='hinh-anh';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Hình ảnh thực tế';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 416;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 286;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



	#========================Tin tức==================== 

	$nametype='tin-tuc';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tin tức';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 416;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 286;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';




	#========================Tin tức==================== 

	$nametype='cam-nang';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Cẩm nang chăm sóc cá';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 416;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 286;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



	#========================Tin tức==================== 

	$nametype='vi-sao';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tại sao chọn hodicare';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = false;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 416;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 286;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = false;

	$GLOBAL['baiviet'][$nametype]['schema'] = false;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = false;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = false;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['rank'] = true;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = false;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


	#====================Video============================

	// $nametype='video';

	// $GLOBAL['video'][$nametype]['title_main'] = 'video';

	// $GLOBAL['video'][$nametype]['title'] = 'Quản lý video';

	// $GLOBAL['video'][$nametype]['full'] = false;

	// $GLOBAL['video'][$nametype]['upload'] = false;

	// $GLOBAL['video'][$nametype]['img'] = true;

	// $GLOBAL['video'][$nametype]['img-width'] = 590;

	// $GLOBAL['video'][$nametype]['img-height'] = 345;

	// $GLOBAL['video'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['video'][$nametype]['link'] = true;

	// $GLOBAL['video'][$nametype]['mota'] = true;

	// $GLOBAL['video'][$nametype]['mota-ckeditor'] = true;

	// $GLOBAL['video'][$nametype]['noidung'] = true;

	// $GLOBAL['video'][$nametype]['noidung-ckeditor'] = true;

	// $GLOBAL['video'][$nametype]['seo'] = false;

	// $GLOBAL['video'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Slider============================

	$nametype='slider';
	
	$GLOBAL['photo'][$nametype]['title_main'] = 'Slider';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý slider';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['video'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 1440;

	$GLOBAL['photo'][$nametype]['img-height'] = 495;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['slogan'] = false;

	$GLOBAL['photo'][$nametype]['options'] = false;

	$GLOBAL['photo'][$nametype]['tieuchi'] = false;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	#====================Slider============================

	$nametype='quang-cao';
	
	$GLOBAL['photo'][$nametype]['title_main'] = 'Hình ảnh quảng cáo';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý Hình ảnh quảng cáo';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['video'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 1440;

	$GLOBAL['photo'][$nametype]['img-height'] = 635;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['slogan'] = false;

	$GLOBAL['photo'][$nametype]['options'] = false;

	$GLOBAL['photo'][$nametype]['tieuchi'] = false;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Slider============================

	$nametype='doi-tac';

	$GLOBAL['photo'][$nametype]['title_main'] = 'Hình ảnh đối tác';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý Hình ảnh đối tác';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['video'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 185;

	$GLOBAL['photo'][$nametype]['img-height'] = 90;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['slogan'] = false;

	$GLOBAL['photo'][$nametype]['options'] = false;

	$GLOBAL['photo'][$nametype]['tieuchi'] = false;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================mạng xã hội============================

	$nametype='mangxahoi';

	$GLOBAL['photo'][$nametype]['title_main'] = 'Mạng xã hội';

	$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 40;

	$GLOBAL['photo'][$nametype]['img-height'] = 40;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================logo============================

	$nametype='banner-all';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Banner trang trong';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Banner trang trong';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1519;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 315;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	#====================logo============================

	$nametype='logo';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Logo';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 160;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 150;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	// #====================logo============================

	// $nametype='logo-footer';

	// $GLOBAL['bannerqc'][$nametype]['title_main'] = 'Logo footer';

	// $GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Logo footer';

	// $GLOBAL['bannerqc'][$nametype]['full'] = false;

	// $GLOBAL['bannerqc'][$nametype]['img'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img-width'] = 258;

	// $GLOBAL['bannerqc'][$nametype]['img-height'] = 79;

	// $GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['bannerqc'][$nametype]['link'] = false;

	// $GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================logo============================

	$nametype='logo_mobile';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'logo mobile';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo mobile';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 80;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 60;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	

	#====================bg footer============================

	$nametype='ha-lienhe';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh liên hệ';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình ảnh liên hệ';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 570;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 300;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================logo============================

	$nametype='banner-all';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Banner trang trong';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Banner trang trong';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1519;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 315;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================bg footer============================

	$nametype='bg-why';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background vì sao và tiêu đề';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Background vì sao và tiêu đề';

	$GLOBAL['bannerqc'][$nametype]['ten'] = true;

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1519;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 165;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['mota'] = true;

	$GLOBAL['bannerqc'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================bg footer============================

	$nametype='bg-news';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh và tiêu đề tin tức';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình ảnh và tiêu đề tin tức';

	$GLOBAL['bannerqc'][$nametype]['ten'] = true;

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1519;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 755;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['mota'] = true;

	$GLOBAL['bannerqc'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';



	$nametype='bg-pros';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh và tiêu đề sản phẩm';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình ảnh và tiêu đề tin tức';

	$GLOBAL['bannerqc'][$nametype]['ten'] = true;

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1519;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 755;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['mota'] = true;

	$GLOBAL['bannerqc'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	$nametype='bg-image';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh và tiêu đề sản phẩm';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình ảnh và tiêu đề tin tức';

	$GLOBAL['bannerqc'][$nametype]['ten'] = true;

	$GLOBAL['bannerqc'][$nametype]['full'] = false;


	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['mota'] = true;

	$GLOBAL['bannerqc'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	#====================bg footer============================

	$nametype='bg-dangky';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background đăng ký tư vấn và tiêu đề';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Background đăng ký tư vấn và tiêu đề';

	$GLOBAL['bannerqc'][$nametype]['ten'] = true;

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1519;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 165;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['mota'] = true;

	$GLOBAL['bannerqc'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	#====================logo============================

	$nametype='icon-timkiem';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Icon tìm kiếm';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Icon tìm kiếm';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 25;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 25;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================logo============================

	$nametype='icon-giohang';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Icon giỏ hàng';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Icon giỏ hàng';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 25;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 25;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';



	// #===================================bg tin tức video===========================================================
	
	// $nametype='popup';

	// $GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh popup';

	// $GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý hình ảnh popup';

	// $GLOBAL['bannerqc'][$nametype]['full'] = false;

	// $GLOBAL['bannerqc'][$nametype]['img'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img-width'] = 438;

	// $GLOBAL['bannerqc'][$nametype]['img-height'] = 329;

	// $GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['bannerqc'][$nametype]['link'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	// #====================bg footer============================

	// $nametype='bg_footer';

	// $GLOBAL['bannerqc'][$nametype]['title_main'] = 'background footer';

	// $GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background footer';

	// $GLOBAL['bannerqc'][$nametype]['full'] = false;

	// $GLOBAL['bannerqc'][$nametype]['img'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img-width'] = 1519;

	// $GLOBAL['bannerqc'][$nametype]['img-height'] = 492;

	// $GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['bannerqc'][$nametype]['link'] = false;

	// $GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================hình đại diện============================

	$nametype='hinhdaidien';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh share link';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình ảnh share link';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 200;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 200;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	
	#====================================================ĐĂNG KÝ NHẬN TIN====================================

	// $nametype='client';

	// $GLOBAL['booking'][$nametype]['title_main'] = 'Đăng ký tư vấn';

	// $GLOBAL['booking'][$nametype]['title'] = 'Quản lý đăng ký tư vấn';

	// $GLOBAL['booking'][$nametype]['ten'] = true;

	// $GLOBAL['booking'][$nametype]['full'] = false;

	// $GLOBAL['booking'][$nametype]['img'] = true;

	// $GLOBAL['booking'][$nametype]['img-width'] = 380;

	// $GLOBAL['booking'][$nametype]['img-height'] = 260;

	// $GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['booking'][$nametype]['phone'] = true;

	// $GLOBAL['booking'][$nametype]['email'] = true;

	// $GLOBAL['booking'][$nametype]['dichvu'] = false;

	// $GLOBAL['booking'][$nametype]['diachi'] = true;

	// $GLOBAL['booking'][$nametype]['noidung'] = true;

	// $GLOBAL['booking'][$nametype]['ngaytao'] = true;

	// $GLOBAL['booking'][$nametype]['seo'] = false;

	// $GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';
	

	#====================================================ĐĂNG KÝ NHẬN TIN====================================

	$nametype='tu-van';

	$GLOBAL['booking'][$nametype]['title_main'] = 'Đăng ký nhận tư vấn';

	$GLOBAL['booking'][$nametype]['title'] = 'Quản lý Đăng ký nhận tư vấn';

	$GLOBAL['booking'][$nametype]['ten'] = false;

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = true;

	$GLOBAL['booking'][$nametype]['img-width'] = 380;

	$GLOBAL['booking'][$nametype]['img-height'] = 260;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['phone'] = false;

	$GLOBAL['booking'][$nametype]['email'] = true;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = false;

	$GLOBAL['booking'][$nametype]['dientich'] = false;

	$GLOBAL['booking'][$nametype]['taichinh'] = false;

	$GLOBAL['booking'][$nametype]['noidung'] = false;

	$GLOBAL['booking'][$nametype]['ngaytao'] = true;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

	#========================Chính sách==================== 

	$nametype='chinh-sach';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Chính sách';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['public'] = true;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục tự động",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 321;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 233;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


	#================================================Yêu cầu gọi lại======================================================================

	$nametype='goi-lai';

	$GLOBAL['booking'][$nametype]['title_main'] = 'Yêu cầu gọi lại';

	$GLOBAL['booking'][$nametype]['title'] = 'Quản lý Yêu cầu gọi lại';

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = true;

	$GLOBAL['booking'][$nametype]['img-width'] = 380;

	$GLOBAL['booking'][$nametype]['img-height'] = 260;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['phone'] = true;

	$GLOBAL['booking'][$nametype]['email'] = false;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = false;

	$GLOBAL['booking'][$nametype]['noidung'] = false;

	$GLOBAL['booking'][$nametype]['ngaytao'] = true;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

	##===================Về chúng tôi========================

	$nametype='gioi-thieu';

	$GLOBAL['info'][$nametype]['title_main'] = 'giới thiệu';

	$GLOBAL['info'][$nametype]['title'] = 'Quản lý giới thiệu';

	$GLOBAL['info'][$nametype]['full'] = false;

	$GLOBAL['info'][$nametype]['chuky'] = false;

	$GLOBAL['info'][$nametype]['img'] = true;

	$GLOBAL['info'][$nametype]['img-width'] = 636;

	$GLOBAL['info'][$nametype]['img-height'] = 598;

	$GLOBAL['info'][$nametype]['img-ratio'] = 1;

	$GLOBAL['info'][$nametype]['img-b'] = false;

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['nguoidaidien'] = false;

	$GLOBAL['info'][$nametype]['job'] = false;

	$GLOBAL['info'][$nametype]['mota'] = true;

	$GLOBAL['info'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['info'][$nametype]['noidung'] = true;

	$GLOBAL['info'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['info'][$nametype]['link'] = false;

	$GLOBAL['info'][$nametype]['seo'] = true;

	$GLOBAL['info'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh Sản phẩm",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

	#====================company============================

	$nametype='lien-he';

	$GLOBAL['company'][$nametype]['title_main'] = 'liên hệ';

	$GLOBAL['company'][$nametype]['title'] = 'Quản lý liên hệ';

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['img'] = true;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = true;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================company============================

	$nametype='footer';

	$GLOBAL['company'][$nametype]['title_main'] = 'Mô tả liên hệ footer';

	$GLOBAL['company'][$nametype]['title'] = 'Quản lý mô tả liên hệ footer';

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['img'] = true;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = true;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================company============================

	$nametype='des-product';

	$GLOBAL['company'][$nametype]['title_main'] = 'Tiêu đề và mô tả sản phẩm nổi bật';

	$GLOBAL['company'][$nametype]['title'] = 'Quản lý Tiêu đề và mô tả sản phẩm nổi bật';

	$GLOBAL['company'][$nametype]['ten'] = true;

	$GLOBAL['company'][$nametype]['slogan'] = false;

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['img'] = true;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = true;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	#====================company============================

	$nametype='des-detail';

	$GLOBAL['company'][$nametype]['title_main'] = 'Mô tả hỗ trợ khách hàng';

	$GLOBAL['company'][$nametype]['title'] = 'Quản lý mô tả hỗ trợ khách hàng';

	$GLOBAL['company'][$nametype]['ten'] = false;

	$GLOBAL['company'][$nametype]['slogan'] = false;

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['img'] = true;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = true;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';



	// #====================HotLine============================
	
	$nametype = "hotline";
	$GLOBAL['map'][$nametype]['title_main'] = 'Hotline';
	$GLOBAL['map'][$nametype]['title'] = 'Quản lý hotline';
	$GLOBAL['map'][$nametype]['phone'] = true;
	$GLOBAL['map'][$nametype]['mota'] = false;
	$GLOBAL['map'][$nametype]['email'] = false;
	$GLOBAL['map'][$nametype]['iframe_map'] = true;
	
	#====================setting============================

	$GLOBAL['setting']['tieude']=true;

	$GLOBAL['setting']['diachi']=true;

	$GLOBAL['setting']['chaychu1']=true;

	$GLOBAL['setting']['chaychu2']=true;

	$GLOBAL['setting']['slogan']=false;

	$GLOBAL['setting']['mota']=false;

	$GLOBAL['setting']['timework']=false;

	$GLOBAL['setting']['time']=false;

	$GLOBAL['setting']['email']=true;

	$GLOBAL['setting']['hotline']=true;

	$GLOBAL['setting']['hotline-advance']=true;

	$GLOBAL['setting']['page_video']=false;

	$GLOBAL['setting']['dienthoai']=true;

	$GLOBAL['setting']['page_in']=false;

	$GLOBAL['setting']['page_service']=false;

	$GLOBAL['setting']['page_new']=true;

	$GLOBAL['setting']['page_album']=false;

	$GLOBAL['setting']['page_baogia']=false;

	$GLOBAL['setting']['page_thicong']=false;

	$GLOBAL['setting']['page_tuyendung']=false;

	$GLOBAL['setting']['pagein_project']=false;

	$GLOBAL['setting']['page_ne']=true;

	$GLOBAL['setting']['page_sp']=true;

	$GLOBAL['setting']['postalcode']=true;

	$GLOBAL['setting']['tax_code']=false;

	$GLOBAL['setting']['blank']=false;

	$GLOBAL['setting']['denominator']=false;

	$GLOBAL['setting']['symbol']=false;

	$GLOBAL['setting']['code']=false;

	$GLOBAL['setting']['city']=true;

	$GLOBAL['setting']['district']=true;

	$GLOBAL['setting']['message']=true;

	$GLOBAL['setting']['counter']=false;

	$GLOBAL['setting']['zalo']=true;

	$GLOBAL['setting']['website']=true;

	$GLOBAL['setting']['laisuat']=false;

	$GLOBAL['setting']['phivanchuyen']=false;

	$GLOBAL['setting']['toado']=true;

	$GLOBAL['setting']['menu_bds']=false;

	$GLOBAL['setting']['seo']=true;

	$GLOBAL['setting']['iframe']=true;

	$GLOBAL['setting']['iframe1']=true;

	$GLOBAL['setting']['fanpage']=true;

	$GLOBAL['setting']['copyright']=false;

	$GLOBAL['setting']['faceid']=true;

	$GLOBAL['setting']['toc']=true;

	$GLOBAL['setting']['block']=false;

	$GLOBAL['setting']['time_slider']=true;

	$GLOBAL['setting']['slider']=false;

	$GLOBAL['setting']['linksyoutube']=false;

	$GLOBAL['setting']['links']=false;

	$GLOBAL['setting']['videofile']=false;

	$GLOBAL['setting']['slide']=false;

	$GLOBAL['setting']['link_blog']=false;

	$GLOBAL['setting']['nonecopy']=false;

	$GLOBAL['setting']['background']=true;

	$GLOBAL['setting']['watermark']=false;

	$GLOBAL['setting']['slider_video']=false;

	$GLOBAL['setting']['tag']=false;

	$GLOBAL['setting']['changedola']=false;

	$GLOBAL['setting']['hotline-kythuat']=false;

	$GLOBAL['setting']['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';





	// #====================Tuyển dụng============================

	$nametype='tuyen-dung';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tin tức';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 416;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 286;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


	// #====================Dịch vụ============================

	
	$nametype='dich-vu';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Dịch vụ';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị",

	);

	$GLOBAL['baiviet'][$nametype]['status'] = array();

	$GLOBAL['baiviet'][$nametype]['slogan'] = false;

	$GLOBAL['baiviet'][$nametype]['daban'] = false;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 227;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 227;

	$GLOBAL['baiviet'][$nametype]['product_attribute'] = true;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['trangthai-batdongsan'] = true;

	$GLOBAL['baiviet'][$nametype]['img-b'] = false;

	$GLOBAL['baiviet'][$nametype]['iframe_map'] = false;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

	$GLOBAL['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh kèm theo",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 227,

            	"height_photo" => 227,

            	"thumb_width_photo" => 227,

            	"thumb_height_photo" => 227,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['mota_khuyenmai'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-khuyenmai-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['tukhoa'] = false;

	$GLOBAL['baiviet'][$nametype]['tukhoa-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tinhtrang'] = true;

	$GLOBAL['baiviet'][$nametype]['text-search'] = true;

	$GLOBAL['baiviet'][$nametype]['masp'] = false;

	$GLOBAL['baiviet'][$nametype]['color'] = false;

	$GLOBAL['baiviet'][$nametype]['size'] = false;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['gia'] = true;

	$GLOBAL['baiviet'][$nametype]['donvitinh'] = false;

	$GLOBAL['baiviet'][$nametype]['giacu'] = true;

	$GLOBAL['baiviet'][$nametype]['brand'] = false;

	$GLOBAL['baiviet'][$nametype]['xuatxu'] = false;

	$GLOBAL['baiviet'][$nametype]['baohanh'] = false;

	$GLOBAL['baiviet'][$nametype]['title-seo']=true;

	$GLOBAL['baiviet'][$nametype]['keywords-seo']=true;

	$GLOBAL['baiviet'][$nametype]['description-seo']=true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tags'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = true;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	// danh mục cấp 1

	$GLOBAL['baiviet'][$nametype]['list'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

	$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

		"noibat"=>"menu footer",

		"menupc"=> "Menu pc",

		"menu"=> "Menu mobile",

		"mucluc"=> "Mục lục",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 233;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 175;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 285;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 347;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 40;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 40;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	

	//danh mục cấp 2

	$GLOBAL['baiviet'][$nametype]['cat'] = false;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['title'] = 'Danh mục cấp 2';

	$GLOBAL_LEVEL2['baiviet'][$nametype]['full'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['check_cat']=array(

		"mucluc"=> "Mục lục",

		"hienthi"=>"Hiển thị",

		"menu"=> "Menu mobile",
		
	);

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width'] = 233;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height'] = 175;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['brand'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['list'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['icon'] = false;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width1'] = 30;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height1'] = 30;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['mota'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['seo'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-qc'] = false;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';




	// #====================Gỉai pháp============================

	$nametype='giai-phap';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Gỉai pháp';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 416;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 286;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

?>