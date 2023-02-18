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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
    <div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.3.1.5 fullwidth mode -->
        <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.1.5">
            <ul>
                @foreach ($banners as $item)
                <li data-index="rs-11" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{$item->image}}"  data-rotate="0"  data-saveperformance="off"  data-mediafilter="rise" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{$item->image}}"  alt="" title="slide1-min"  width="2000" height="1500" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                </li>
                @endforeach
            </ul>
            <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
                if(htmlDiv) {
                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                }else{
                    var htmlDiv = document.createElement("div");
                    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                }
            </script>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
        <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
            if(htmlDiv) {
                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
            }else{
                var htmlDiv = document.createElement("div");
                htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
            }
        </script>
        <script type="text/javascript">
            /******************************************
            -	PREPARE PLACEHOLDER FOR SLIDER	-
            ******************************************/
            
            var setREVStartSize=function(){
            try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
            e.c = jQuery('#rev_slider_3_1');
            e.responsiveLevels = [1240,1024,778,480];
            e.gridwidth = [1280,1024,768,480];
            e.gridheight = [700,600,500,500];
                
            e.sliderLayout = "fullwidth";
            e.minHeight = "400";
            if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
            
            }catch(d){console.log("Failure at Presize of Slider:"+d)}
            };
            
            setREVStartSize();
            
            var tpj=jQuery;
            
            var revapi3;
            tpj(document).ready(function() {
            if(tpj("#rev_slider_3_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_3_1");
            }else{
            revapi3 = tpj("#rev_slider_3_1").show().revolution({
            sliderType:"standard",
            jsFileLocation:"//duckienad.com/wp-content/plugins/revslider/public/assets/js/",
            sliderLayout:"fullwidth",
            dottedOverlay:"none",
            delay:9000,
            navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                onHoverStop:"off",
                touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                }
                ,
                arrows: {
                    style:"hesperiden",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:800,
                    hide_onleave:false,
                    tmp:'',
                    left: {
                        h_align:"left",
                        v_align:"center",
                        h_offset:15,
                        v_offset:0
                    },
                    right: {
                        h_align:"right",
                        v_align:"center",
                        h_offset:15,
                        v_offset:0
                    }
                }
                ,
                bullets: {
                    enable:true,
                    hide_onmobile:false,
                    hide_over:800,
                    style:"uranus",
                    hide_onleave:false,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:20,
                    space:15,
                    tmp:'<span class="tp-bullet-inner"></span>'
                }
            },
            responsiveLevels:[1240,1024,778,480],
            visibilityLevels:[1240,1024,778,480],
            gridwidth:[1280,1024,768,480],
            gridheight:[700,600,500,500],
            lazyType:"none",
            minHeight:"400",
            shadow:0,
            spinner:"off",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
                simplifyAll:"off",
                nextSlideOnWindowFocus:"off",
                disableFocusListener:false,
            }
            });
            }
            });	/*ready*/
        </script>
        <script>
            var htmlDivCss = unescape(".hesperiden.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%09width%3A44px%3B%0A%09height%3A44px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A100%3B%0A%20%20%20%20border-radius%3A%2050%25%3B%0A%7D%0A.hesperiden.tparrows%3Ahover%20%7B%0A%09background%3Argba%28255%2C%20192%2C%200%2C%201%29%3B%0A%7D%0A.hesperiden.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%22revicons%22%3B%0A%09font-size%3A20px%3B%0A%09color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2044px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A.hesperiden.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce82c%22%3B%0A%20%20%20%20margin-left%3A-3px%3B%0A%7D%0A.hesperiden.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce82d%22%3B%0A%20%20%20%20margin-right%3A-3px%3B%0A%7D%0A%23rev_slider_3_1%20.uranus%20.tp-bullet%7B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C%20192%2C%200%2C%200%29%3B%0A%20%20-webkit-transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20background%3Atransparent%3B%0A%20%20width%3A15px%3B%0A%20%20height%3A15px%3B%0A%7D%0A%23rev_slider_3_1%20.uranus%20.tp-bullet.selected%2C%0A%23rev_slider_3_1%20.uranus%20.tp-bullet%3Ahover%20%7B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C%20192%2C%200%2C1%29%3B%0A%20%20border%3Anone%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background%3Atransparent%3B%0A%7D%0A%0A%23rev_slider_3_1%20.uranus%20.tp-bullet-inner%20%7B%0A%20%20-webkit-transition%3A%20background-color%200.3s%20ease%2C%20-webkit-transform%200.3s%20ease%3B%0A%20%20transition%3A%20background-color%200.3s%20ease%2C%20transform%200.3s%20ease%3B%0A%20%20top%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20height%3A%20100%25%3B%0A%20%20outline%3A%20none%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background-color%3A%20rgb%28255%2C%20192%2C%200%29%3B%0A%20%20background-color%3A%20rgba%28255%2C%20192%2C%200%2C%200.3%29%3B%0A%20%20text-indent%3A%20-999em%3B%0A%20%20cursor%3A%20pointer%3B%0A%20%20position%3A%20absolute%3B%0A%7D%0A%0A%23rev_slider_3_1%20.uranus%20.tp-bullet.selected%20.tp-bullet-inner%2C%0A%23rev_slider_3_1%20.uranus%20.tp-bullet%3Ahover%20.tp-bullet-inner%7B%0A%20transform%3A%20scale%280.4%29%3B%0A%20-webkit-transform%3A%20scale%280.4%29%3B%0A%20background-color%3Argb%28255%2C%20192%2C%200%29%3B%0A%7D%0A");
            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
            if(htmlDiv) {
                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
            }
            else{
                var htmlDiv = document.createElement('div');
                htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
            }
            
        </script>
    </div>
    <!-- END REVOLUTION SLIDER -->
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
                                            <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-5183 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:30px;"}'  style="">THẨM MỸ &amp; HIỆN ĐẠI</h3>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-5183 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style="">
                                            </p>
                                            <p style="text-align: justify;"><strong>Làm biển quảng cáo</strong> bằng việc cập nhật các tiêu chuẩn thẩm mỹ&nbsp; nghệ thuật toàn cầu cùng việc am hiểu văn hóa địa phương, dựa trên các vật liệu tiên tiến nhất.</p>
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
                                            <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-4391 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:30px;"}'  style="">ĐỘI NGŨ CHUYÊN NGHIỆP</h3>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-4391 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style="">
                                            </p>
                                            <p style="text-align: justify;">Đội ngũ với&nbsp;hàng chục năm kinh nghiệm chuyên sâu và hơn nữa là thấu hiểu các giá trị nhất quán mà chúng tôi mong muốn mang đến cho Khách hàng.</p>
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
                                            <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-7537 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:30px;"}'  style="">SÁNG TẠO KHÔNG NGỪNG</h3>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-7537 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style="">
                                            </p>
                                            <p style="text-align: justify;">Tiếp tục công việc thật sáng tạo hoặc dừng lại, chúng tôi luôn chỉ chọn một. Vượt ra các khuôn khổ để mang lại những đột phá cho Khách hàng là sứ mệnh của chúng tôi.</p>
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
                                            <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-2567 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:30px;"}'  style="">CHI PHÍ LINH HOẠT</h3>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-2567 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style="">
                                            </p>
                                            <p style="text-align: justify;">Đáp ứng mạnh các nhu cầu <strong>làm biển quảng cáo</strong> phức tạp của Khách hàng với các mức ngân sách linh hoạt và phù hợp mà vẫn đảm bảo được hiệu quả hoạt động.</p>
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
                                       <span class="h5-cus"> DỊCH VỤ</span> 
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
                                                            <a href="{{route('serviceDetail',['slug'=>$item->slug])}}" class="post-details details-type-link" aria-label="Read more about {{$item->nanme}}" rel="nofollow">Đọc thêm<i class="dt-icon-the7-arrow-03" aria-hidden="true"></i></a>
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
                                   <span class="h5-cus"><a href="{{route('allProduct')}}">BIỂN QUẢNG CÁO</a> </span> 
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
                                        <div class="wf-cell iso-item category-{{$cate->id}}" data-post-id="8084" data-date="2022-02-17T17:18:15+07:00" data-name="Màn hình LED">
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
                                        @endforeach
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- hêt ajaxx --}}
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
                                                <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-8883 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:30px;","line-height":"desktop:30px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;color:#405b64;">TẦM NHÌN</h3>
                                            </a>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-8883 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:14px;","line-height":"desktop:14px;"}'  style="color:#405b64;">Chúng tôi muốn trở thành những gì bạn muốn hợp tác khi có ý định thực hiện một chiến dịch làm biển quảng cáo bất kỳ.</div>
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
                                                <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-4152 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:30px;","line-height":"desktop:30px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;color:#405b64;">SỨ MỆNH</h3>
                                            </a>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-4152 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:14px;","line-height":"desktop:14px;"}'  style="color:#405b64;">Làm cho việc thiết kế và làm biển quảng cáo vượt ra khỏi những giá trị tiếp thị thông thường, dựa trên các tiêu chuẩn toàn cầu.</div>
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
                                                <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-6909 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:30px;","line-height":"desktop:30px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;color:#405b64;">GIÁ TRỊ</h3>
                                            </a>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-6909 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:14px;","line-height":"desktop:14px;"}'  style="color:#405b64;">Những giá trị cốt lõi định hướng tư duy của chúng tôi trong cách phục vụ và tách chúng tôi ra khỏi đám đông.</div>
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
                                                <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-1241 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:30px;","line-height":"desktop:30px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;color:#405b64;">CAM KẾT</h3>
                                            </a>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-1241 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:14px;","line-height":"desktop:14px;"}'  style="color:#405b64;">Cam kết làm biển quảng cáo mang lại những giá trị lớn nhất và phù hợp nhất cho Khách hàng.</div>
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
                                                <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-3643 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:30px;","line-height":"desktop:30px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;color:#405b64;">VĂN HÓA</h3>
                                            </a>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-3643 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:14px;","line-height":"desktop:14px;"}'  style="color:#405b64;">Văn hóa của Đức Kiên AD khiến cho việc triển khai mọi hoạt động trở nên dễ dàng và nhất quán.</div>
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
                                                <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-1102 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:30px;","line-height":"desktop:30px;"}'  style="font-family:'Open Sans Condensed';font-weight:700;color:#405b64;">NHÂN SỰ</h3>
                                            </a>
                                        </div>
                                        <!-- header -->
                                        <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-1102 .aio-icon-description'  data-responsive-json-new='{"font-size":"desktop:14px;","line-height":"desktop:14px;"}'  style="color:#405b64;">Tuyển dụng và giữ gìn những con người tốt nhất là đam mê và động lực của chúng tôi. Chỉ như vậy mới khiến chúng tôi vững vàng.</div>
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
                                   <div counter-responsv-wrap-2474="" data-ultimate-target="#counter-responsv-wrap-2474 .stats-text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:20px;&quot;,&quot;line-height&quot;:&quot;desktop:26px;&quot;}" class="stats-text ult-responsive" style="font-size:px; color:#ffffff; font-weight:bold;">Khách hàng</div>
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
                                   <div counter-responsv-wrap-1046="" data-ultimate-target="#counter-responsv-wrap-1046 .stats-text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:20px;&quot;,&quot;line-height&quot;:&quot;desktop:26px;&quot;}" class="stats-text ult-responsive" style="font-size:px; color:#ffffff; font-weight:bold;">Nhân sự</div>
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
                                   <div counter-responsv-wrap-9615="" data-ultimate-target="#counter-responsv-wrap-9615 .stats-text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:20px;&quot;,&quot;line-height&quot;:&quot;desktop:26px;&quot;}" class="stats-text ult-responsive" style="font-size:px; color:#ffffff; font-weight:bold;">Dự án lớn</div>
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
                                   <div counter-responsv-wrap-2856="" data-ultimate-target="#counter-responsv-wrap-2856 .stats-text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:20px;&quot;,&quot;line-height&quot;:&quot;desktop:26px;&quot;}" class="stats-text ult-responsive" style="font-size:px; color:#ffffff; font-weight:bold;">Năm kinh nghiệm</div>
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
                                   <span class="h5-cus"><a href="{{route('allListBlog')}}">BLOGS & TIN TỨC</a> </span> 
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
                                                            <span class="fancy-categories"><a href="{{route('detailBlog',['slug'=>$blog->slug])}}" rel="category tag" style="background-color:#;color:#;">Làm biển quảng cáo</a></span>
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
                                                        <a href="{{route('detailBlog',['slug'=>$blog->slug])}}" class="post-details details-type-link" aria-label="Read more about {{languageName($blog->title)}}" rel="nofollow">Đọc thêm<i class="dt-icon-the7-arrow-03" aria-hidden="true"></i></a>
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