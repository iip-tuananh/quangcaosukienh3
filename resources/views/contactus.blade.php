@extends('layouts.main.master')
@section('title')
    Liên hệ với chúng tôi
@endsection
@section('description')
    Liên hệ với chúng tôi
@endsection
@section('image')
    {{ url('' . $setting->logo) }}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/ff084.css')}}">
@endsection
@section('js')
@endsection
@section('content')

 <div class="page-title title-left solid-bg breadcrumbs-mobile-off page-title-responsive-enabled bg-img-enabled">
	<div class="wf-wrap">
	   <div class="page-title-head hgroup">
		  <h1 >Contact</h1>
	   </div>
	   <div class="page-title-breadcrumbs">
		  <div class="assistive-text">You are here:</div>
		  <ol class="breadcrumbs text-small" itemscope itemtype="https://schema.org/BreadcrumbList">
			 <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="{{route('home')}}" title=""><span itemprop="name">Home</span></a>
				<meta itemprop="position" content="1" />
			 </li>
			 <li class="current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span itemprop="name">Contact</span>
				<meta itemprop="position" content="2" />
			 </li>
		  </ol>
	   </div>
	</div>
 </div>

 <div id="main" class="sidebar-none sidebar-divider-vertical pd-t-10 pd-100">
	<div class="main-gradient"></div>
	<div class="wf-wrap">
	   <div class="wf-container-main">
		  <div id="content" class="content" role="main">
			 <div class="vc_row wpb_row vc_row-fluid vc_custom_1526564184949">
				<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-7 vc_col-xs-12">
				   <div class="vc_column-inner vc_custom_1529902515166">
					  <div class="wpb_wrapper">
						 <style type="text/css" data-type="the7_shortcodes-inline-css">.shortcode-single-image-wrap.shortcode-single-image-1ab87893b4fb0cf590a6ab2870facc16.enable-bg-rollover .rollover i,
							.shortcode-single-image-wrap.shortcode-single-image-1ab87893b4fb0cf590a6ab2870facc16.enable-bg-rollover .rollover-video i {
							background: -webkit-linear-gradient();
							background: linear-gradient();
							}
							.shortcode-single-image-wrap.shortcode-single-image-1ab87893b4fb0cf590a6ab2870facc16 .rollover-icon {
							font-size: 32px;
							color: #ffffff;
							min-width: 44px;
							min-height: 44px;
							line-height: 44px;
							border-radius: 100px;
							border-style: solid;
							border-width: 0px;
							}
							.dt-icon-bg-on.shortcode-single-image-wrap.shortcode-single-image-1ab87893b4fb0cf590a6ab2870facc16 .rollover-icon {
							background: rgba(255,255,255,0.3);
							box-shadow: none;
							}
						 </style>
						 <div class="shortcode-single-image-wrap shortcode-single-image-1ab87893b4fb0cf590a6ab2870facc16 alignleft  vc_custom_1529911893070 enable-bg-rollover dt-icon-bg-off" >
						
						 </div>
					
						 <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1498572805259 vc_row-o-equal-height vc_row-flex">
							<div class="wpb_column vc_column_container vc_col-sm-6">
							   <div class="vc_column-inner vc_custom_1475919323336">
								  <div class="wpb_wrapper">
									 <div class="aio-icon-component  vc_custom_1616429256508  accent-icon-bg color-title style_1">
										<div id="Info-box-wrap-6218" class="aio-icon-box left-icon" style=""  >
										   <div class="aio-icon-left">
											  <div class="ult-just-icon-wrapper  ">
												 <div class="align-icon" style="text-align:center;">
													<div class="aio-icon advanced "  style="color:#ffffff;background:#ffffff;border-style:;border-color:#333333;border-width:1px;width:34px;height:34px;line-height:34px;border-radius:500px;font-size:16px;display:inline-block;">
													   <i class="icomoon-icomoonfree-16x16-office"></i>
													</div>
												 </div>
											  </div>
										   </div>
										   <div class="aio-ibd-block">
											  <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-6218 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:18px;","line-height":"desktop:24px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;">{{$setting->address1}}</div>
											  <!-- description -->
										   </div>
										   <!-- aio-ibd-block -->
										</div>
										<!-- aio-icon-box -->
									 </div>
									 <!-- aio-icon-component -->
								  </div>
							   </div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-6">
							   <div class="vc_column-inner vc_custom_1475919331923">
								  <div class="wpb_wrapper">
									 <div class="aio-icon-component  vc_custom_1601305721110  accent-icon-bg color-title style_1">
										<div id="Info-box-wrap-9273" class="aio-icon-box left-icon" style=""  >
										   <div class="aio-icon-left">
											  <div class="ult-just-icon-wrapper  ">
												 <div class="align-icon" style="text-align:center;">
													<div class="aio-icon advanced "  style="color:#ffffff;background:#ffffff;border-style:;border-color:#333333;border-width:1px;width:34px;height:34px;line-height:34px;border-radius:500px;font-size:16px;display:inline-block;">
													   <i class="icomoon-icomoonfree-16x16-mobile"></i>
													</div>
												 </div>
											  </div>
										   </div>
										   <div class="aio-ibd-block">
											  <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-9273 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:18px;","line-height":"desktop:24px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;">{{$setting->phone1}}
											  </div>
											  <!-- description -->
										   </div>
										   <!-- aio-ibd-block -->
										</div>
										<!-- aio-icon-box -->
									 </div>
									 <!-- aio-icon-component -->
								  </div>
							   </div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-6">
							   <div class="vc_column-inner vc_custom_1475919340203">
								  <div class="wpb_wrapper">
									 <div class="aio-icon-component  vc_custom_1526568398144  accent-icon-bg color-title style_1">
										<div id="Info-box-wrap-7756" class="aio-icon-box left-icon" style=""  >
										   <div class="aio-icon-left">
											  <div class="ult-just-icon-wrapper  ">
												 <div class="align-icon" style="text-align:center;">
													<div class="aio-icon advanced "  style="color:#ffffff;background:#ffffff;border-style:;border-color:#333333;border-width:1px;width:34px;height:34px;line-height:34px;border-radius:500px;font-size:16px;display:inline-block;">
													   <i class="Defaults-envelope-o"></i>
													</div>
												 </div>
											  </div>
										   </div>
										   <div class="aio-ibd-block">
											  <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-7756 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:18px;","line-height":"desktop:24px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;">{{$setting->company}}</div>
											  <!-- description -->
										   </div>
										   <!-- aio-ibd-block -->
										</div>
										<!-- aio-icon-box -->
									 </div>
									 <!-- aio-icon-component -->
								  </div>
							   </div>
							</div>
				
						
							<div class="wpb_column vc_column_container vc_col-sm-6">
							   <div class="vc_column-inner vc_custom_1475919448283">
								  <div class="wpb_wrapper">
									 <div class="aio-icon-component  vc_custom_1629193955085  accent-icon-bg color-title ib-link-prevent-accent style_1">
										<a class="aio-icon-box-link" href="{{$setting->facebook}}" target=" _blank" rel="noopener">
										   <div id="Info-box-wrap-5631" class="aio-icon-box left-icon" style=""  >
											  <div class="aio-icon-left">
												 <div class="ult-just-icon-wrapper  ">
													<div class="align-icon" style="text-align:center;">
													   <div class="aio-icon advanced "  style="color:#ffffff;background:#ffffff;border-style:;border-color:#333333;border-width:1px;width:34px;height:34px;line-height:34px;border-radius:500px;font-size:16px;display:inline-block;">
														  <i class="icomoon-icomoonfree-16x16-facebook"></i>
													   </div>
													</div>
												 </div>
											  </div>
											  <div class="aio-ibd-block">
												 <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-5631 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:18px;","line-height":"desktop:24px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;">{{$setting->company}}</div>
												 <!-- description -->
											  </div>
											  <!-- aio-ibd-block -->
										   </div>
										   <!-- aio-icon-box -->
										</a>
									 </div>
									 <!-- aio-icon-component -->
								  </div>
							   </div>
							</div>
						 </div>
						 <div class="wpb_raw_code wpb_content_element wpb_raw_html">
							<div class="wpb_wrapper">
							  {!!$setting->iframe_map!!}
							</div>
						 </div>
					  </div>
				   </div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-5 vc_col-xs-12">
				   <div class="vc_column-inner vc_custom_1587669240620">
					  <div class="wpb_wrapper">
						 <style type="text/css" data-type="the7_shortcodes-inline-css">.shortcode-single-image-wrap.shortcode-single-image-91e2f4c801c7223de3a5c8d1308688f9.enable-bg-rollover .rollover i,
							.shortcode-single-image-wrap.shortcode-single-image-91e2f4c801c7223de3a5c8d1308688f9.enable-bg-rollover .rollover-video i {
							background: -webkit-linear-gradient();
							background: linear-gradient();
							}
							.shortcode-single-image-wrap.shortcode-single-image-91e2f4c801c7223de3a5c8d1308688f9 .rollover-icon {
							font-size: 32px;
							color: #ffffff;
							min-width: 44px;
							min-height: 44px;
							line-height: 44px;
							border-radius: 100px;
							border-style: solid;
							border-width: 0px;
							}
							.dt-icon-bg-on.shortcode-single-image-wrap.shortcode-single-image-91e2f4c801c7223de3a5c8d1308688f9 .rollover-icon {
							background: rgba(255,255,255,0.3);
							box-shadow: none;
							}
						 </style>
						 <div class="shortcode-single-image-wrap shortcode-single-image-91e2f4c801c7223de3a5c8d1308688f9 alignleft  vc_custom_1587669376318 enable-bg-rollover dt-icon-bg-off" >
						
						 </div>
						 <div class="wpb_text_column wpb_content_element  vc_custom_1587669400424" >
							<div class="wpb_wrapper">
							   <div role="form" class="wpcf7" id="wpcf7-f5052-p13-o1" lang="vi" dir="ltr">
								  <div class="screen-reader-response">
									 <p role="status" aria-live="polite" aria-atomic="true"></p>
									 <ul></ul>
								  </div>
								  <form action="{{route('postcontact')}}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
									@csrf
								
									 <p><label> Tên của bạn*:<br />
										<span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label>
									 </p>
									 <p><label> Địa chỉ Email*:<br />
										<span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </label>
									 </p>
									 <p><label> Số điện thoại*:<br />
										<span class="wpcf7-form-control-wrap tel-186"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" /></span> </label>
									 </p>
									
									 <p><label> Nội dung thông điệp:<br />
										<span class="wpcf7-form-control-wrap your-message"><textarea name="mess" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label>
									 </p>
									 <p><input type="submit" value="Gửi liên hệ" class="wpcf7-form-control wpcf7-submit" /></p>
									 <div class="wpcf7-response-output" aria-hidden="true"></div>
								  </form>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
		  <!-- #content -->
	   </div>
	   <!-- .wf-container -->
	</div>
	<!-- .wf-wrap -->
 </div>
 <!-- #main -->
@endsection
