@extends('layouts.main.master')
@section('title')
{{ $setting->company }}
@endsection
@section('description')
{{ $setting->webname }}
@endsection
@section('image')
{{ url('' . $setting->logo) }}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div id="main-slideshow">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
      .swiper {
        width: 100%;
        height: 100%;
      }
  
      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
      }
  
      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        /* object-fit: cover; */
      }
    </style>
  </head>
  
  <body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
      @foreach ($banners as $banner)
      <div class="swiper-slide">
        <img src="{{$banner->image}}" alt="" srcset="">
      </div>
          
      @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>
  
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
</div>
<div id="main" class="sidebar-none sidebar-divider-vertical">
    <div class="main-gradient"></div>
    <div class="wf-wrap">
        <div class="wf-container-main">
            <div id="content" class="content" role="main">
                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1535471023407">
                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
                        <div class="vc_column-inner vc_custom_1495112557524">
                            <div class="wpb_wrapper">
                                <div class="aio-icon-component  vc_custom_1590041539253  accent-icon-bg style_2">
                                    <div id="Info-box-wrap-5183" class="aio-icon-box top-icon" style=""  >
                                        <div class="aio-icon-top">
                                            <div class="ult-just-icon-wrapper  ">
                                                <div class="align-icon" style="text-align:center;">
                                                    <div class="aio-icon-img " style="font-size:180px;display:inline-block;" >
                                                        <img class="img-icon" alt="null" src="{{asset('frontend/images/tham-my-vs-hien-dai.png')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aio-icon-header" >
                                            <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-5183 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:30px;"}'  style="">TH???M M??? &amp; HI???N ?????I</h3>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-5183 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style="">
                                            </p>
                                            <p style="text-align: justify;"><strong>L??m bi???n qu???ng c??o</strong> b???ng vi???c c???p nh???t c??c ti??u chu???n th???m m???&nbsp; ngh??? thu???t to??n c???u c??ng vi???c am hi???u v??n h??a ?????a ph????ng, d???a tr??n c??c v???t li???u ti??n ti???n nh???t.</p>
                                            <p>
                                        </div>
                                        <!-- description -->
                                    </div>
                                    <!-- aio-icon-box -->
                                </div>
                                <!-- aio-icon-component -->
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
                        <div class="vc_column-inner vc_custom_1495112563645">
                            <div class="wpb_wrapper">
                                <div class="aio-icon-component  vc_custom_1590041077071   style_2">
                                    <div id="Info-box-wrap-4391" class="aio-icon-box top-icon" style=""  >
                                        <div class="aio-icon-top">
                                            <div class="ult-just-icon-wrapper  ">
                                                <div class="align-icon" style="text-align:center;">
                                                    <div class="aio-icon-img " style="font-size:180px;display:inline-block;" >
                                                        <img class="img-icon" alt="null" src="{{asset('frontend/images/dka-support-team-icon.png')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aio-icon-header" >
                                            <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-4391 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:30px;"}'  style="">?????I NG?? CHUY??N NGHI???P</h3>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-4391 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style="">
                                            </p>
                                            <p style="text-align: justify;">?????i ng?? v???i&nbsp;h??ng ch???c n??m kinh nghi???m chuy??n s??u v?? h??n n???a l?? th???u hi???u c??c gi?? tr??? nh???t qu??n m?? ch??ng t??i mong mu???n mang ?????n cho Kh??ch h??ng.</p>
                                            <p>
                                        </div>
                                        <!-- description -->
                                    </div>
                                    <!-- aio-icon-box -->
                                </div>
                                <!-- aio-icon-component -->
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
                        <div class="vc_column-inner vc_custom_1495112570142">
                            <div class="wpb_wrapper">
                                <div class="aio-icon-component  vc_custom_1590041087872   style_2">
                                    <div id="Info-box-wrap-7537" class="aio-icon-box top-icon" style=""  >
                                        <div class="aio-icon-top">
                                            <div class="ult-just-icon-wrapper  ">
                                                <div class="align-icon" style="text-align:center;">
                                                    <div class="aio-icon-img " style="font-size:180px;display:inline-block;" >
                                                        <img class="img-icon" alt="null" src="{{asset('frontend/images/art-design-icon-1.png')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aio-icon-header" >
                                            <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-7537 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:30px;"}'  style="">S??NG T???O KH??NG NG???NG</h3>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-7537 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style="">
                                            </p>
                                            <p style="text-align: justify;">Ti???p t???c c??ng vi???c th???t s??ng t???o ho???c d???ng l???i, ch??ng t??i lu??n ch??? ch???n m???t. V?????t ra c??c khu??n kh??? ????? mang l???i nh???ng ?????t ph?? cho Kh??ch h??ng l?? s??? m???nh c???a ch??ng t??i.</p>
                                            <p>
                                        </div>
                                        <!-- description -->
                                    </div>
                                    <!-- aio-icon-box -->
                                </div>
                                <!-- aio-icon-component -->
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
                        <div class="vc_column-inner vc_custom_1495112577073">
                            <div class="wpb_wrapper">
                                <div class="aio-icon-component  vc_custom_1590041097033   style_2">
                                    <div id="Info-box-wrap-2567" class="aio-icon-box top-icon" style=""  >
                                        <div class="aio-icon-top">
                                            <div class="ult-just-icon-wrapper  ">
                                                <div class="align-icon" style="text-align:center;">
                                                    <div class="aio-icon-img " style="font-size:180px;display:inline-block;" >
                                                        <img class="img-icon" alt="null" src="{{asset('frontend/images/art-design-icon-2.png')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aio-icon-header" >
                                            <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-2567 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:30px;"}'  style="">CHI PH?? LINH HO???T</h3>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-2567 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style="">
                                            </p>
                                            <p style="text-align: justify;">????p ???ng m???nh c??c nhu c???u <strong>l??m bi???n qu???ng c??o</strong> ph???c t???p c???a Kh??ch h??ng v???i c??c m???c ng??n s??ch linh ho???t v?? ph?? h???p m?? v???n ?????m b???o ???????c hi???u qu??? ho???t ?????ng.</p>
                                            <p>
                                        </div>
                                        <!-- description -->
                                    </div>
                                    <!-- aio-icon-box -->
                                </div>
                                <!-- aio-icon-component -->
                            </div>
                        </div>
                    </div>
                  
                    <div class="upb_color" data-bg-override="ex-full" data-bg-color="#f7f7f7" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false"  data-custom-vc-row=""  data-vc="5.0.1"  data-is_old_vc=""  data-theme-support=""   data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""    ></div>
                
                    <div class="wpb_column vc_column_container ">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div>
                                        <h5 >
                                       <span class="h5-cus"> D???CH V???</span> 
                                       <span class="lop-phu-h5"></span>
                                        </h5>
                                    </div>
                                    <br>
                                    <br>
                                    <style type="text/css" data-type="the7_shortcodes-inline-css">.blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on.classic-layout-list article {
                                        margin-top: ;
                                        padding-top: 0;
                                        border-color: ;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on.classic-layout-list article:first-of-type {
                                        margin-top: 0;
                                        padding-top: 0;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.classic-layout-list.mode-list .post-thumbnail-wrap {
                                        width: ;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.classic-layout-list.mode-list .post-entry-content {
                                        width: calc(100% - );
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.classic-layout-list.mode-list .no-img .post-entry-content {
                                        width: 100%;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .filter-bg-decoration .filter-categories a.act {
                                        color: #fff;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.mode-masonry) article {
                                        margin-top: ;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.mode-masonry) article:first-of-type,
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.mode-masonry) article.visible.first:not(.product) {
                                        margin-top: 0;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on:not(.mode-masonry) article {
                                        margin-top: 0;
                                        padding-top: ;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on:not(.mode-masonry) article:first-of-type,
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on:not(.mode-masonry) article.visible.first:not(.product) {
                                        margin-top: 0;
                                        padding-top: 0;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-thumbnail-wrap {
                                        padding: 0px 0px 0px 0px;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.enable-bg-rollover .post-thumbnail-rollover:after {
                                        background: ;
                                        background: -webkit-linear-gradient();
                                        background: linear-gradient();
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico {
                                        width: 44px;
                                        height: 44px;
                                        line-height: 44px;
                                        border-radius: 100px;
                                        margin: -22px 0 0 -22px;
                                        border-width: 0px;
                                        color: #ffffff;
                                        }
                                        .bottom-overlap-layout-list.blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico {
                                        margin-top: -72px;
                                        }
                                        .gradient-overlay-layout-list.blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico,
                                        .content-rollover-layout-list.blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico {
                                        margin: 0 0 10px;
                                        }
                                        .content-align-center.gradient-overlay-layout-list.blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico,
                                        .content-align-center.content-rollover-layout-list.blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico {
                                        margin: 0 auto 10px;
                                        }
                                        .dt-icon-bg-on.blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico {
                                        background: rgba(255,255,255,0.3);
                                        box-shadow: none;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico > span,
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico:before {
                                        font-size: 32px;
                                        line-height: 44px;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico > span,
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico:before {
                                        color: #ffffff;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .entry-title,
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.owl-carousel .entry-title {
                                        margin-bottom: 5px;
                                        font-weight: bold;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .entry-meta {
                                        margin-bottom: 15px;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .portfolio-categories {
                                        margin-bottom: 15px;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .entry-excerpt {
                                        margin-bottom: 5px;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.centered-layout-list) .post-entry-content {
                                        padding: 15px 15px 15px 15px;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.centered-layout-list):not(.content-bg-on):not(.mode-list) .no-img .post-entry-content {
                                        padding: 0;
                                        }
                                        @media screen and (max-width: ) {
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e article {
                                        -ms-flex-flow: column nowrap;
                                        flex-flow: column nowrap;
                                        margin-top: 20px;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on article {
                                        border: none;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.content-bg-on.centered-layout-list article {
                                        padding: 0;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.blog-shortcode.dividers-on article,
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on.classic-layout-list article {
                                        margin-top: 20px;
                                        padding: 0;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.blog-shortcode.dividers-on article:first-of-type,
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on.classic-layout-list article:first-of-type {
                                        padding: 0;
                                        }
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-thumbnail-wrap,
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-entry-content {
                                        width: 100%;
                                        margin: 0;
                                        top: 0;
                                        }
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-thumbnail-wrap {
                                        padding: 0;
                                        }
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-entry-content:after {
                                        display: none;
                                        }
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .project-even .post-thumbnail-wrap,
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.centered-layout-list .post-thumbnail-wrap {
                                        -ms-flex-order: 0;
                                        order: 0;
                                        }
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.centered-layout-list .post-entry-title-content {
                                        -ms-flex-order: 1;
                                        order: 1;
                                        width: 100%;
                                        padding: 20px 20px 0;
                                        }
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.centered-layout-list .post-entry-content {
                                        -ms-flex-order: 2;
                                        order: 2;
                                        padding-top: 0;
                                        }
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .fancy-categories {
                                        top: 10px;
                                        left: 10px;
                                        bottom: auto;
                                        right: auto;
                                        }
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .fancy-date a {
                                        top: 10px;
                                        right: 10px;
                                        left: auto;
                                        bottom: auto;
                                        }
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-entry-content {
                                        padding: 20px;
                                        }
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .entry-title {
                                        margin: 3px 0 5px;
                                        font-size: 20px;
                                        line-height: 26px;
                                        }
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .entry-meta {
                                        margin: 5px 0 5px;
                                        }
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .entry-excerpt {
                                        margin: 15px 0 0;
                                        }
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-details {
                                        margin: 5px 0 10px;
                                        }
                                        #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-details.details-type-link {
                                        margin-bottom: 2px;
                                        }
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.resize-by-browser-width) .dt-css-grid {
                                        grid-row-gap: 30px;
                                        grid-column-gap: 30px;
                                        grid-template-columns: repeat(auto-fill,minmax(,1fr));
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.resize-by-browser-width) .dt-css-grid .double-width {
                                        grid-column: span 2;
                                        }
                                        .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.resize-by-browser-width) .dt-css-grid,
                                        .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.resize-by-browser-width) .dt-css-grid {
                                        display: flex;
                                        flex-flow: row wrap;
                                        margin: -15px;
                                        }
                                        .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.resize-by-browser-width) .dt-css-grid .wf-cell,
                                        .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.resize-by-browser-width) .dt-css-grid .wf-cell {
                                        flex: 1 0 ;
                                        min-width: ;
                                        max-width: 100%;
                                        padding: 15px;
                                        box-sizing: border-box;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid {
                                        grid-template-columns: repeat(4,1fr);
                                        grid-template-rows: auto;
                                        grid-column-gap: 30px;
                                        grid-row-gap: 30px;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .double-width {
                                        grid-column: span 2;
                                        }
                                        .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid {
                                        margin: -15px;
                                        }
                                        .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell {
                                        width: 25%;
                                        padding: 15px;
                                        }
                                        .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
                                        width: calc(25%) * 2;
                                        }
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width:not(.centered-layout-list):not(.content-bg-on) .dt-css-grid {
                                        grid-row-gap: 15px;
                                        }
                                        @media screen and (max-width: 1199px) {
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid {
                                        grid-template-columns: repeat(3,1fr);
                                        }
                                        .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell,
                                        .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell {
                                        width: 33.333333333333%;
                                        }
                                        .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell.double-width,
                                        .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
                                        width: calc(33.333333333333%)*2;
                                        }
                                        }
                                        @media screen and (max-width: 991px) {
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid {
                                        grid-template-columns: repeat(2,1fr);
                                        }
                                        .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell,
                                        .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell {
                                        width: 50%;
                                        }
                                        .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell.double-width,
                                        .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
                                        width: calc(50%)*2;
                                        }
                                        }
                                        @media screen and (max-width: 767px) {
                                        .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid {
                                        grid-template-columns: repeat(1,1fr);
                                        }
                                        .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell,
                                        .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell {
                                        width: 100%;
                                        }
                                        .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell.double-width,
                                        .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
                                        width: calc(100%)*2;
                                        }
                                        }
                                    </style>
                                    <div class="blog-shortcode blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e mode-grid classic-layout-list content-bg-on jquery-filter scale-img meta-info-off dt-css-grid-wrap dt-icon-bg-off resize-by-browser-width loading-effect-none description-under-image " data-padding="15px" data-cur-page="1" data-post-limit="-1" data-pagination-mode="none" data-desktop-columns-num="4" data-v-tablet-columns-num="2" data-h-tablet-columns-num="3" data-phone-columns-num="1" data-width="0px" data-columns="0">
                                        
                                        <div class="dt-css-grid" >
                                            @foreach ($servicehome as $item)
                                                <div class="visible wf-cell" data-post-id="8160" data-date="2023-02-03T11:41:59+07:00" data-name="{{$item->nanme}}">
                                                    <article class="post project-odd visible post-8160 type-post status-publish format-standard has-post-thumbnail hentry category-lam-bien-quang-cao tag-bien-hang-rao tag-bien-quang-cao-cong-trinh category-71" data-name="{{$item->nanme}}" data-date="2023-02-03T11:41:59+07:00">
                                                        <div class="post-thumbnail-wrap">
                                                            <div class="post-thumbnail">
                                                                <span class="fancy-categories"><a href="{{route('serviceDetail',['slug'=>$item->slug])}}" rel="category tag" style="background-color:#;color:#;">{{$item->name}}</a></span>
                                                                <a href="{{route('serviceDetail',['slug'=>$item->slug])}}" class="post-thumbnail-rollover layzr-bg layzr-bg"><img class="iso-lazy-load preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20768%20576&#39;%2F%3E" data-src="{{$item->image}}" data-srcset="{{$item->image}} 768w, {{$item->image}} 1152w" alt="" title="bien quang cao cong trinh xay dung vincons dream city" width="768" height="576"  /></a>	
                                                            </div>
                                                        </div>
                                                        <div class="post-entry-content">
                                                            <h3 class="entry-title">
                                                                <a href="{{route('serviceDetail',['slug'=>$item->slug])}}" title="{{$item->nanme}}" rel="bookmark">{{$item->nanme}}</a>
                                                            </h3>
                                                            <div class="entry-excerpt limit-text-3 ">
                                                             {!!languageName($item->description)!!}
                                                            </div>
                                                            <a href="{{route('serviceDetail',['slug'=>$item->slug])}}" class="post-details details-type-link" aria-label="Read more about {{$item->nanme}}" rel="nofollow">?????c th??m<i class="dt-icon-the7-arrow-03" aria-hidden="true"></i></a>
                                                        </div>
                                                    </article>
                                                </div>
                                            @endforeach
                                          
                                        </div>
                                        <!-- iso-container|iso-grid -->
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                   
                    {{-- ajax load sp --}}
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      
                        <div class="vc_column-inner vc_custom_1535471071874">
                          
                            <div class="wpb_wrapper pd-t-10">
                                
                                <div>
                                    <h5 >
                                   <span class="h5-cus"><a href="{{route('allProduct')}}">BI???N QU???NG C??O</a> </span> 
                                   <span class="lop-phu-h5"></span>
                                    </h5>
                                </div>
                                <br>
                                <br>
                                
                                    
                                <div class="dt-shortcode with-isotope pd-100">
                                    <div class="filter iso-filter extras-off filter-bg-decoration">
                                        @foreach ($categoryhome as $key=>$cate)
                                            <div class="filter-categories" data-default-order="desc" data-default-orderby="date">
                                                <a href="{{route('home')}}?term={{$cate->id}}" class="backdrop" data-filter=".category-{{$cate->id}}">{{languageName($cate->name)}}</a>
                                            </div>
                                        @endforeach
                                    </div>
                                    @foreach ($categoryhome as $key=>$cate)
                                    
                                    <div class=" wf-container dt-portfolio-shortcode loading-effect-scale-up iso-container description-on-hover hover-style-one content-align-centre" data-padding="10px" data-cur-page="1" data-posts-per-page="12" data-width="260px" data-columns="4" >
                                        @foreach ($cate->product as $pro)
                                        @php
                                            $img = json_decode($pro->images);
                                        @endphp
                                        <div class="wf-cell iso-item category-{{$cate->id}}" data-post-id="8084" data-date="2022-02-17T17:18:15+07:00" data-name="M??n h??nh LED">
                                            <article class="post post-8084 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-led dt_portfolio_category-38 text-centered ">
                                                <figure class="rollover-project rollover-active">
                                                    <a href="{{route('detailProduct',['slug'=>$pro->slug])}}" class="layzr-bg" title="z3189688527599_42d88b7855b5d539b782dcdaa47c15a8"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="{{$img[0]}}" data-srcset="{{$img[0]}} 485w, {{$img[0]}} 599w" alt="" width="485" height="364"  /></a>		
                                                    <figcaption class="rollover-content">
                                                        <div class="links-container"><a href="{{route('detailProduct',['slug'=>$pro->slug])}}" class="project-link no-text"  rel="noopener">Link</a></div>
                                                        <div class="rollover-content-container">
                                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="{{route('detailProduct',['slug'=>$pro->slug])}}">{{languageName($pro->name)}}</a></span></div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                        <br>
                                        @endforeach
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- h??t ajaxx --}}
                </div>
                
                <div class="vc_row-full-width vc_clearfix"></div>
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1529813033684">
                    <div class="wpb_column vc_column_container vc_col-sm-2">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="aio-icon-component    style_3">
                                    <div id="Info-box-wrap-8883" class="aio-icon-box top-icon" style=""  >
                                        <div class="aio-icon-top">
                                            <div class="ult-just-icon-wrapper  ">
                                                <div class="align-icon" style="text-align:center;">
                                                    <div class="aio-icon none "  style="color:#405b64;font-size:99px;display:inline-block;">
                                                        <i class="Defaults-diamond"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aio-icon-header" >
                                            <a class="aio-icon-box-link" href="javascript:;" t>
                                                <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-8883 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:30px;","line-height":"desktop:30px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;color:#405b64;">T???M NH??N</h3>
                                            </a>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-8883 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:14px;","line-height":"desktop:14px;"}'  style="color:#405b64;">Ch??ng t??i mu???n tr??? th??nh nh???ng g?? b???n mu???n h???p t??c khi c?? ?? ?????nh th???c hi???n m???t chi???n d???ch l??m bi???n qu???ng c??o b???t k???.</div>
                                        <!-- description -->
                                    </div>
                                    <!-- aio-icon-box -->
                                </div>
                                <!-- aio-icon-component -->
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-2">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="aio-icon-component    style_3">
                                    <div id="Info-box-wrap-4152" class="aio-icon-box top-icon" style=""  >
                                        <div class="aio-icon-top">
                                            <div class="ult-just-icon-wrapper  ">
                                                <div class="align-icon" style="text-align:center;">
                                                    <div class="aio-icon none "  style="color:#405b64;font-size:99px;display:inline-block;">
                                                        <i class="icomoon-icomoonfree-16x16-compass"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aio-icon-header" >
                                            <a class="aio-icon-box-link" href="javascript:;" t>
                                                <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-4152 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:30px;","line-height":"desktop:30px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;color:#405b64;">S??? M???NH</h3>
                                            </a>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-4152 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:14px;","line-height":"desktop:14px;"}'  style="color:#405b64;">L??m cho vi???c thi???t k??? v?? l??m bi???n qu???ng c??o v?????t ra kh???i nh???ng gi?? tr??? ti???p th??? th??ng th?????ng, d???a tr??n c??c ti??u chu???n to??n c???u.</div>
                                        <!-- description -->
                                    </div>
                                    <!-- aio-icon-box -->
                                </div>
                                <!-- aio-icon-component -->
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-2">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="aio-icon-component    style_3">
                                    <div id="Info-box-wrap-6909" class="aio-icon-box top-icon" style=""  >
                                        <div class="aio-icon-top">
                                            <div class="ult-just-icon-wrapper  ">
                                                <div class="align-icon" style="text-align:center;">
                                                    <div class="aio-icon none "  style="color:#405b64;font-size:99px;display:inline-block;">
                                                        <i class="icomoon-icomoonfree-16x16-compass2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aio-icon-header" >
                                            <a class="aio-icon-box-link" href="javascript:;" t>
                                                <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-6909 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:30px;","line-height":"desktop:30px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;color:#405b64;">GI?? TR???</h3>
                                            </a>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-6909 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:14px;","line-height":"desktop:14px;"}'  style="color:#405b64;">Nh???ng gi?? tr??? c???t l??i ?????nh h?????ng t?? duy c???a ch??ng t??i trong c??ch ph???c v??? v?? t??ch ch??ng t??i ra kh???i ????m ????ng.</div>
                                        <!-- description -->
                                    </div>
                                    <!-- aio-icon-box -->
                                </div>
                                <!-- aio-icon-component -->
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-2">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="aio-icon-component    style_3">
                                    <div id="Info-box-wrap-1241" class="aio-icon-box top-icon" style=""  >
                                        <div class="aio-icon-top">
                                            <div class="ult-just-icon-wrapper  ">
                                                <div class="align-icon" style="text-align:center;">
                                                    <div class="aio-icon none "  style="color:#405b64;font-size:99px;display:inline-block;">
                                                        <i class="Defaults-microphone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aio-icon-header" >
                                            <a class="aio-icon-box-link" href="javascript:;" t>
                                                <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-1241 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:30px;","line-height":"desktop:30px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;color:#405b64;">CAM K???T</h3>
                                            </a>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-1241 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:14px;","line-height":"desktop:14px;"}'  style="color:#405b64;">Cam k???t l??m bi???n qu???ng c??o mang l???i nh???ng gi?? tr??? l???n nh???t v?? ph?? h???p nh???t cho Kh??ch h??ng.</div>
                                        <!-- description -->
                                    </div>
                                    <!-- aio-icon-box -->
                                </div>
                                <!-- aio-icon-component -->
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-2">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="aio-icon-component    style_3">
                                    <div id="Info-box-wrap-3643" class="aio-icon-box top-icon" style=""  >
                                        <div class="aio-icon-top">
                                            <div class="ult-just-icon-wrapper  ">
                                                <div class="align-icon" style="text-align:center;">
                                                    <div class="aio-icon none "  style="color:#405b64;font-size:99px;display:inline-block;">
                                                        <i class="Defaults-yelp"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aio-icon-header" >
                                            <a class="aio-icon-box-link" href="javascript:;" t>
                                                <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-3643 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:30px;","line-height":"desktop:30px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;color:#405b64;">V??N H??A</h3>
                                            </a>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-3643 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:14px;","line-height":"desktop:14px;"}'  style="color:#405b64;">V??n h??a c???a ?????c Ki??n AD khi???n cho vi???c tri???n khai m???i ho???t ?????ng tr??? n??n d??? d??ng v?? nh???t qu??n.</div>
                                        <!-- description -->
                                    </div>
                                    <!-- aio-icon-box -->
                                </div>
                                <!-- aio-icon-component -->
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-2">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="aio-icon-component    style_3">
                                    <div id="Info-box-wrap-1102" class="aio-icon-box top-icon" style=""  >
                                        <div class="aio-icon-top">
                                            <div class="ult-just-icon-wrapper  ">
                                                <div class="align-icon" style="text-align:center;">
                                                    <div class="aio-icon none "  style="color:#405b64;font-size:99px;display:inline-block;">
                                                        <i class="Defaults-child"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aio-icon-header" >
                                            <a class="aio-icon-box-link" href="javascript:;" t>
                                                <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-1102 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:30px;","line-height":"desktop:30px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;color:#405b64;">NH??N S???</h3>
                                            </a>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-1102 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:14px;","line-height":"desktop:14px;"}'  style="color:#405b64;">Tuy???n d???ng v?? gi??? g??n nh???ng con ng?????i t???t nh???t l?? ??am m?? v?? ?????ng l???c c???a ch??ng t??i. Ch??? nh?? v???y m???i khi???n ch??ng t??i v???ng v??ng.</div>
                                        <!-- description -->
                                    </div>
                                    <!-- aio-icon-box -->
                                </div>
                                <!-- aio-icon-component -->
                            </div>
                        </div>
                    </div>
                </div>
              
                </div>
                <!-- Row Backgrounds -->
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1529765457980 ult-vc-hide-row vc_row-has-fill" data-rtl="false" style="position: relative;" data-row-effect-mobile-disable="true">
                    <div class="upb_row_bg" data-bg-override="ex-full" style="background: rgb(78, 71, 51); min-width: 1903px; left: -310px; width: 1903px;"></div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                       <div class="vc_column-inner ">
                          <div class="wpb_wrapper">
                             <div class="stats-block stats-left  accent-icon-bg ">
                                <div class="aio-icon-left">
                                   <div class="ult-just-icon-wrapper  ">
                                      <div class="align-icon" style="text-align:center;">
                                         <div class="aio-icon advanced animated bounceIn delay-03" data-animation="bounceIn" data-animation-delay="03" style="color:#ffffff;background:#ffffff;border-style:solid;border-color:#ededed;border-width:3px;width:100px;height:100px;line-height:100px;border-radius:10px;font-size:50px;display:inline-block;">
                                            <i class="Defaults-heart"></i>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="stats-desc" id="counter-responsv-wrap-2474">
                                   <div id="counter_23889564763ecb161a342c" data-id="counter_23889564763ecb161a342c" data-ultimate-target="#counter-responsv-wrap-2474 .stats-number" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:70px;&quot;,&quot;line-height&quot;:&quot;desktop:70px;&quot;}" class="stats-number ult-responsive" style=" color:#ffffff; color:#ffffff;" data-speed="6" data-counter-value="800" data-separator="," data-decimal=".">800</div>
                                   <div class="counter_suffix mycust ult-responsive" data-ultimate-target="#counter-responsv-wrap-2474 .mycust" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:40px;&quot;,&quot;line-height&quot;:&quot;desktop:40px;&quot;}" style=" color:#dd3333">+</div>
                                   <div counter-responsv-wrap-2474="" data-ultimate-target="#counter-responsv-wrap-2474 .stats-text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:20px;&quot;,&quot;line-height&quot;:&quot;desktop:26px;&quot;}" class="stats-text ult-responsive" style="font-size:px; color:#ffffff; font-weight:bold;">Kh??ch h??ng</div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                       <div class="vc_column-inner ">
                          <div class="wpb_wrapper">
                             <div class="stats-block stats-left  accent-icon-bg ">
                                <div class="aio-icon-left">
                                   <div class="ult-just-icon-wrapper  ">
                                      <div class="align-icon" style="text-align:center;">
                                         <div class="aio-icon advanced animated bounceIn delay-03" data-animation="bounceIn" data-animation-delay="03" style="color:#ffffff;background:#ffffff;border-style:solid;border-color:#ededed;border-width:3px;width:100px;height:100px;line-height:100px;border-radius:10px;font-size:50px;display:inline-block;">
                                            <i class="Defaults-group users"></i>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="stats-desc" id="counter-responsv-wrap-1046">
                                   <div id="counter_136926124563ecb161a3656" data-id="counter_136926124563ecb161a3656" data-ultimate-target="#counter-responsv-wrap-1046 .stats-number" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:70px;&quot;,&quot;line-height&quot;:&quot;desktop:70px;&quot;}" class="stats-number ult-responsive" style=" color:#ffffff; color:#ffffff;" data-speed="3" data-counter-value="50" data-separator="," data-decimal=".">50</div>
                                   <div class="counter_suffix mycust ult-responsive" data-ultimate-target="#counter-responsv-wrap-1046 .mycust" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:40px;&quot;,&quot;line-height&quot;:&quot;desktop:40px;&quot;}" style=" color:#dd3333">+</div>
                                   <div counter-responsv-wrap-1046="" data-ultimate-target="#counter-responsv-wrap-1046 .stats-text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:20px;&quot;,&quot;line-height&quot;:&quot;desktop:26px;&quot;}" class="stats-text ult-responsive" style="font-size:px; color:#ffffff; font-weight:bold;">Nh??n s???</div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                       <div class="vc_column-inner ">
                          <div class="wpb_wrapper">
                             <div class="stats-block stats-left  accent-icon-bg ">
                                <div class="aio-icon-left">
                                   <div class="ult-just-icon-wrapper  ">
                                      <div class="align-icon" style="text-align:center;">
                                         <div class="aio-icon advanced animated bounceIn delay-03" data-animation="bounceIn" data-animation-delay="03" style="color:#ffffff;background:#ffffff;border-style:solid;border-color:#ededed;border-width:3px;width:100px;height:100px;line-height:100px;border-radius:10px;font-size:50px;display:inline-block;">
                                            <i class="Defaults-language"></i>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="stats-desc" id="counter-responsv-wrap-9615">
                                   <div id="counter_127052495663ecb161a385a" data-id="counter_127052495663ecb161a385a" data-ultimate-target="#counter-responsv-wrap-9615 .stats-number" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:70px;&quot;,&quot;line-height&quot;:&quot;desktop:70px;&quot;}" class="stats-number ult-responsive" style=" color:#ffffff; color:#ffffff;" data-speed="8" data-counter-value="950" data-separator="," data-decimal=".">950</div>
                                   <div class="counter_suffix mycust ult-responsive" data-ultimate-target="#counter-responsv-wrap-9615 .mycust" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:40px;&quot;,&quot;line-height&quot;:&quot;desktop:40px;&quot;}" style=" color:#dd3333">+</div>
                                   <div counter-responsv-wrap-9615="" data-ultimate-target="#counter-responsv-wrap-9615 .stats-text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:20px;&quot;,&quot;line-height&quot;:&quot;desktop:26px;&quot;}" class="stats-text ult-responsive" style="font-size:px; color:#ffffff; font-weight:bold;">D??? ??n l???n</div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                       <div class="vc_column-inner ">
                          <div class="wpb_wrapper">
                             <div class="stats-block stats-left  accent-icon-bg ">
                                <div class="aio-icon-left">
                                   <div class="ult-just-icon-wrapper  ">
                                      <div class="align-icon" style="text-align:center;">
                                         <div class="aio-icon advanced animated bounceIn delay-03" data-animation="bounceIn" data-animation-delay="03" style="color:#ffffff;background:#ffffff;border-style:solid;border-color:#ededed;border-width:3px;width:100px;height:100px;line-height:100px;border-radius:10px;font-size:50px;display:inline-block;">
                                            <i class="Defaults-dashboard tachometer"></i>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="stats-desc" id="counter-responsv-wrap-2856">
                                   <div id="counter_160491879263ecb161a3a3c" data-id="counter_160491879263ecb161a3a3c" data-ultimate-target="#counter-responsv-wrap-2856 .stats-number" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:70px;&quot;,&quot;line-height&quot;:&quot;desktop:70px;&quot;}" class="stats-number ult-responsive" style=" color:#ffffff; color:#ffffff;" data-speed="3" data-counter-value="18" data-separator="," data-decimal=".">18</div>
                                   <div class="counter_suffix mycust ult-responsive" data-ultimate-target="#counter-responsv-wrap-2856 .mycust" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:40px;&quot;,&quot;line-height&quot;:&quot;desktop:40px;&quot;}" style=" color:#dd3333">+</div>
                                   <div counter-responsv-wrap-2856="" data-ultimate-target="#counter-responsv-wrap-2856 .stats-text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:20px;&quot;,&quot;line-height&quot;:&quot;desktop:26px;&quot;}" class="stats-text ult-responsive" style="font-size:px; color:#ffffff; font-weight:bold;">N??m kinh nghi???m</div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <br>
                 <br>
                 <br>
                <!-- Row Backgrounds -->
                <div class="upb_color" data-bg-override="ex-full" data-bg-color="#f7f7f7" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false"  data-custom-vc-row=""  data-vc="5.0.1"  data-is_old_vc=""  data-theme-support=""   data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""    ></div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div>
                                    <h5 >
                                   <span class="h5-cus"><a href="{{route('allListBlog')}}">BLOGS & TIN T???C</a> </span> 
                                   <span class="lop-phu-h5"></span>
                                    </h5>
                                </div>
                                <br>
                                <br>
                                <br>
                                <style type="text/css" data-type="the7_shortcodes-inline-css">.blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on.classic-layout-list article {
                                    margin-top: ;
                                    padding-top: 0;
                                    border-color: ;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on.classic-layout-list article:first-of-type {
                                    margin-top: 0;
                                    padding-top: 0;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.classic-layout-list.mode-list .post-thumbnail-wrap {
                                    width: ;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.classic-layout-list.mode-list .post-entry-content {
                                    width: calc(100% - );
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.classic-layout-list.mode-list .no-img .post-entry-content {
                                    width: 100%;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .filter-bg-decoration .filter-categories a.act {
                                    color: #fff;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.mode-masonry) article {
                                    margin-top: ;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.mode-masonry) article:first-of-type,
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.mode-masonry) article.visible.first:not(.product) {
                                    margin-top: 0;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on:not(.mode-masonry) article {
                                    margin-top: 0;
                                    padding-top: ;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on:not(.mode-masonry) article:first-of-type,
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on:not(.mode-masonry) article.visible.first:not(.product) {
                                    margin-top: 0;
                                    padding-top: 0;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-thumbnail-wrap {
                                    padding: 0px 0px 0px 0px;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.enable-bg-rollover .post-thumbnail-rollover:after {
                                    background: ;
                                    background: -webkit-linear-gradient();
                                    background: linear-gradient();
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico {
                                    width: 44px;
                                    height: 44px;
                                    line-height: 44px;
                                    border-radius: 100px;
                                    margin: -22px 0 0 -22px;
                                    border-width: 0px;
                                    color: #ffffff;
                                    }
                                    .bottom-overlap-layout-list.blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico {
                                    margin-top: -72px;
                                    }
                                    .gradient-overlay-layout-list.blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico,
                                    .content-rollover-layout-list.blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico {
                                    margin: 0 0 10px;
                                    }
                                    .content-align-center.gradient-overlay-layout-list.blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico,
                                    .content-align-center.content-rollover-layout-list.blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico {
                                    margin: 0 auto 10px;
                                    }
                                    .dt-icon-bg-on.blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico {
                                    background: rgba(255,255,255,0.3);
                                    box-shadow: none;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico > span,
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico:before {
                                    font-size: 32px;
                                    line-height: 44px;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico > span,
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .gallery-zoom-ico:before {
                                    color: #ffffff;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .entry-title,
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.owl-carousel .entry-title {
                                    margin-bottom: 5px;
                                    font-weight: bold;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .entry-meta {
                                    margin-bottom: 15px;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .portfolio-categories {
                                    margin-bottom: 15px;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .entry-excerpt {
                                    margin-bottom: 5px;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.centered-layout-list) .post-entry-content {
                                    padding: 15px 15px 15px 15px;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.centered-layout-list):not(.content-bg-on):not(.mode-list) .no-img .post-entry-content {
                                    padding: 0;
                                    }
                                    @media screen and (max-width: ) {
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e article {
                                    -ms-flex-flow: column nowrap;
                                    flex-flow: column nowrap;
                                    margin-top: 20px;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on article {
                                    border: none;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.content-bg-on.centered-layout-list article {
                                    padding: 0;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.blog-shortcode.dividers-on article,
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on.classic-layout-list article {
                                    margin-top: 20px;
                                    padding: 0;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.blog-shortcode.dividers-on article:first-of-type,
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.dividers-on.classic-layout-list article:first-of-type {
                                    padding: 0;
                                    }
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-thumbnail-wrap,
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-entry-content {
                                    width: 100%;
                                    margin: 0;
                                    top: 0;
                                    }
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-thumbnail-wrap {
                                    padding: 0;
                                    }
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-entry-content:after {
                                    display: none;
                                    }
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .project-even .post-thumbnail-wrap,
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.centered-layout-list .post-thumbnail-wrap {
                                    -ms-flex-order: 0;
                                    order: 0;
                                    }
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.centered-layout-list .post-entry-title-content {
                                    -ms-flex-order: 1;
                                    order: 1;
                                    width: 100%;
                                    padding: 20px 20px 0;
                                    }
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.centered-layout-list .post-entry-content {
                                    -ms-flex-order: 2;
                                    order: 2;
                                    padding-top: 0;
                                    }
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .fancy-categories {
                                    top: 10px;
                                    left: 10px;
                                    bottom: auto;
                                    right: auto;
                                    }
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .fancy-date a {
                                    top: 10px;
                                    right: 10px;
                                    left: auto;
                                    bottom: auto;
                                    }
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-entry-content {
                                    padding: 20px;
                                    }
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .entry-title {
                                    margin: 3px 0 5px;
                                    font-size: 20px;
                                    line-height: 26px;
                                    }
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .entry-meta {
                                    margin: 5px 0 5px;
                                    }
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .entry-excerpt {
                                    margin: 15px 0 0;
                                    }
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-details {
                                    margin: 5px 0 10px;
                                    }
                                    #page .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e .post-details.details-type-link {
                                    margin-bottom: 2px;
                                    }
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.resize-by-browser-width) .dt-css-grid {
                                    grid-row-gap: 30px;
                                    grid-column-gap: 30px;
                                    grid-template-columns: repeat(auto-fill,minmax(,1fr));
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.resize-by-browser-width) .dt-css-grid .double-width {
                                    grid-column: span 2;
                                    }
                                    .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.resize-by-browser-width) .dt-css-grid,
                                    .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.resize-by-browser-width) .dt-css-grid {
                                    display: flex;
                                    flex-flow: row wrap;
                                    margin: -15px;
                                    }
                                    .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.resize-by-browser-width) .dt-css-grid .wf-cell,
                                    .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e:not(.resize-by-browser-width) .dt-css-grid .wf-cell {
                                    flex: 1 0 ;
                                    min-width: ;
                                    max-width: 100%;
                                    padding: 15px;
                                    box-sizing: border-box;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid {
                                    grid-template-columns: repeat(4,1fr);
                                    grid-template-rows: auto;
                                    grid-column-gap: 30px;
                                    grid-row-gap: 30px;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .double-width {
                                    grid-column: span 2;
                                    }
                                    .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid {
                                    margin: -15px;
                                    }
                                    .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell {
                                    width: 25%;
                                    padding: 15px;
                                    }
                                    .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
                                    width: calc(25%) * 2;
                                    }
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width:not(.centered-layout-list):not(.content-bg-on) .dt-css-grid {
                                    grid-row-gap: 15px;
                                    }
                                    @media screen and (max-width: 1199px) {
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid {
                                    grid-template-columns: repeat(3,1fr);
                                    }
                                    .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell,
                                    .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell {
                                    width: 33.333333333333%;
                                    }
                                    .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell.double-width,
                                    .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
                                    width: calc(33.333333333333%)*2;
                                    }
                                    }
                                    @media screen and (max-width: 991px) {
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid {
                                    grid-template-columns: repeat(2,1fr);
                                    }
                                    .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell,
                                    .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell {
                                    width: 50%;
                                    }
                                    .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell.double-width,
                                    .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
                                    width: calc(50%)*2;
                                    }
                                    }
                                    @media screen and (max-width: 767px) {
                                    .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid {
                                    grid-template-columns: repeat(1,1fr);
                                    }
                                    .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell,
                                    .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell {
                                    width: 100%;
                                    }
                                    .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell.double-width,
                                    .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
                                    width: calc(100%)*2;
                                    }
                                    }
                                </style>
                                <div class="blog-shortcode blog-masonry-shortcode-id-5de78d8effc993cb567682ea76ea1e0e mode-grid classic-layout-list content-bg-on jquery-filter scale-img meta-info-off dt-css-grid-wrap dt-icon-bg-off resize-by-browser-width loading-effect-none description-under-image " data-padding="15px" data-cur-page="1" data-post-limit="-1" data-pagination-mode="none" data-desktop-columns-num="4" data-v-tablet-columns-num="2" data-h-tablet-columns-num="3" data-phone-columns-num="1" data-width="0px" data-columns="0">
                                    <div class="dt-css-grid" >
                                        @foreach ($news as $blog)
                                            <div class="visible wf-cell" data-post-id="8160" data-date="2023-02-03T11:41:59+07:00" data-name="{{languageName($blog->title)}}">
                                                <article class="post project-odd visible post-8160 type-post status-publish format-standard has-post-thumbnail hentry category-lam-bien-quang-cao tag-bien-hang-rao tag-bien-quang-cao-cong-trinh category-71" data-name="{{languageName($blog->title)}}" data-date="2023-02-03T11:41:59+07:00">
                                                    <div class="post-thumbnail-wrap">
                                                        <div class="post-thumbnail">
                                                            <span class="fancy-categories"><a href="{{route('detailBlog',['slug'=>$blog->slug])}}" rel="category tag" style="background-color:#;color:#;">L??m bi???n qu???ng c??o</a></span>
                                                            <a href="{{route('detailBlog',['slug'=>$blog->slug])}}" class="post-thumbnail-rollover layzr-bg layzr-bg"><img class="iso-lazy-load preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20768%20576&#39;%2F%3E" data-src="{{$blog->image}}" data-srcset="{{$blog->image}} 768w, {{$blog->image}} 1152w" alt="" title="bien quang cao cong trinh xay dung vincons dream city" width="768" height="576"  /></a>	
                                                        </div>
                                                    </div>
                                                    <div class="post-entry-content">
                                                        <h3 class="entry-title">
                                                            <a href="{{route('detailBlog',['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}" rel="bookmark">{{languageName($blog->title)}}</a>
                                                        </h3>
                                                        <div class="entry-excerpt limit-text-3 ">
                                                            {{languageName($blog->description)}}
                                                        </div>
                                                        <a href="{{route('detailBlog',['slug'=>$blog->slug])}}" class="post-details details-type-link" aria-label="Read more about {{languageName($blog->title)}}" rel="nofollow">?????c th??m<i class="dt-icon-the7-arrow-03" aria-hidden="true"></i></a>
                                                    </div>
                                                </article>
                                            </div>
                                        @endforeach
                                       
                                    </div>
                                    <!-- iso-container|iso-grid -->
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
<br>
<br>
@endsection