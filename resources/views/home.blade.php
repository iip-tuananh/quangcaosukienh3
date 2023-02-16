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
            <!-- SLIDE  -->
            <li data-index="rs-11" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://duckienad.com/wp-content/uploads/revslider/the7-construction-slider/Daybreak-1030x773-100x50.jpeg"  data-rotate="0"  data-saveperformance="off"  data-mediafilter="rise" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="https://duckienad.com/wp-content/uploads/2018/07/slide1-min.jpg"  alt="" title="slide1-min"  width="2000" height="1500" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-layer-selectable  tp-resizeme" 
                id="slide-11-layer-9" 
                data-x="['left','left','center','center']" data-hoffset="['181','200','18','14']" 
                data-y="['top','top','middle','middle']" data-voffset="['213','273','6','-38']" 
                data-fontsize="['60','44','44','25']"
                data-lineheight="['88','50','50','40']"
                data-width="['none','733','649','408']"
                data-height="['177','106','97','42']"
                data-whitespace="['nowrap','nowrap','normal','nowrap']"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"delay":990,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 5; max-width: 177px; max-width: 177px; white-space: nowrap; font-size: 60px; line-height: 88px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;">Nhà thầu Sản xuất & Thi công </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption rev-btn  tp-resizeme" 
                id="slide-11-layer-4" 
                data-x="['left','left','left','center']" data-hoffset="['470','339','207','-108']" 
                data-y="['top','top','middle','middle']" data-voffset="['436','425','119','87']" 
                data-fontsize="['14','18','18','15']"
                data-lineheight="['17','18','18','17']"
                data-width="['109','none','none','none']"
                data-height="['49','none','none','none']"
                data-whitespace="nowrap"
                data-type="button" 
                data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"https:\/\/duckienad.com\/gioi-thieu\/","delay":""}]'
                data-responsive_offset="on" 
                data-frames='[{"delay":1650,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(252, 168, 0, 1.00);bs:solid;bw:0 0 0 0;"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[15,15,15,15]"
                data-paddingright="[18,18,18,18]"
                data-paddingbottom="[15,15,15,15]"
                data-paddingleft="[18,18,18,18]"
                style="z-index: 6; min-width: 109px; max-width: 109px; max-width: 49px; max-width: 49px; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(255, 192, 0, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">    Giới thiệu </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption rev-btn  tp-resizeme" 
                id="slide-11-layer-8" 
                data-x="['left','left','left','left']" data-hoffset="['599','473','344','201']" 
                data-y="['top','top','middle','middle']" data-voffset="['437','425','119','87']" 
                data-fontsize="['14','16','18','15']"
                data-lineheight="['17','18','18','17']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="button" 
                data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"tel:0946095000","delay":""}]'
                data-responsive_offset="on" 
                data-frames='[{"delay":2050,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(70, 70, 70, 1.00);bs:solid;bw:0 0 0 0;"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[15,15,15,15]"
                data-paddingright="[18,18,18,18]"
                data-paddingbottom="[15,15,15,15]"
                data-paddingleft="[18,18,18,18]"
                style="z-index: 7; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(48, 48, 48, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Đặt hàng ngay bây giờ </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-layer-selectable  tp-resizeme" 
                id="slide-11-layer-11" 
                data-x="['left','left','center','center']" data-hoffset="['150','179','34','6']" 
                data-y="['top','top','middle','middle']" data-voffset="['296','347','56','16']" 
                data-fontsize="['60','44','34','25']"
                data-lineheight="['88','50','50','40']"
                data-width="['none','671','566','420']"
                data-height="['177','none','88','71']"
                data-whitespace="['nowrap','nowrap','normal','nowrap']"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"delay":990,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 8; max-width: 177px; max-width: 177px; white-space: nowrap; font-size: 60px; line-height: 88px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;">Biển bảng quảng cáo hàng đầu </div>
            </li>
            <!-- SLIDE  -->
            <li data-index="rs-12" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://duckienad.com/wp-content/uploads/2018/06/tt-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="https://duckienad.com/wp-content/uploads/2018/06/tt.jpg"  alt="" title="tt"  width="1280" height="720" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 5 -->
                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                id="slide-12-layer-9" 
                data-x="['center','center','center','center']" data-hoffset="['-124','-124','-124','-124']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['-56','-56','-56','-56']" 
                data-width="1920"
                data-height="1080"
                data-whitespace="nowrap"
                data-type="shape" 
                data-responsive_offset="on" 
                data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 5;background-color:rgba(0, 0, 0, 0.60);"> </div>
                <!-- LAYER NR. 6 -->
                <div class="tp-caption tp-layer-selectable  tp-resizeme" 
                id="slide-12-layer-1" 
                data-x="['left','left','left','left']" data-hoffset="['75','70','168','58']" 
                data-y="['top','top','middle','middle']" data-voffset="['167','162','-80','-93']" 
                data-fontsize="['50','44','40','35']"
                data-lineheight="['56','50','50','40']"
                data-width="['685','583','none','none']"
                data-height="['116','100','none','none']"
                data-whitespace="nowrap"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"delay":990,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 6; min-width: 685px; max-width: 685px; max-width: 116px; max-width: 116px; white-space: nowrap; font-size: 50px; line-height: 56px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;">Bất kỳ loại biển nào
                </div>
                <!-- LAYER NR. 7 -->
                <div class="tp-caption rev-btn  tp-resizeme" 
                id="slide-12-layer-4" 
                data-x="['left','left','left','center']" data-hoffset="['80','70','173','-76']" 
                data-y="['top','top','middle','middle']" data-voffset="['329','435','49','39']" 
                data-fontsize="['14','18','18','15']"
                data-lineheight="['17','18','18','17']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="button" 
                data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"https:\/\/duckienad.com\/dat-hang","delay":""}]'
                data-responsive_offset="on" 
                data-frames='[{"delay":1650,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(252, 168, 0, 1.00);bs:solid;bw:0 0 0 0;"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[15,15,15,15]"
                data-paddingright="[18,18,18,18]"
                data-paddingbottom="[15,15,15,15]"
                data-paddingleft="[18,18,18,18]"
                style="z-index: 7; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(255, 192, 0, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Đặt hàng trực tuyến </div>
                <!-- LAYER NR. 8 -->
                <div class="tp-caption rev-btn  tp-resizeme" 
                id="slide-12-layer-8" 
                data-x="['center','left','left','left']" data-hoffset="['-301','318','412','269']" 
                data-y="['top','top','middle','middle']" data-voffset="['329','435','50','39']" 
                data-fontsize="['14','18','18','15']"
                data-lineheight="['17','18','18','17']"
                data-width="['130','none','none','none']"
                data-height="none"
                data-whitespace="nowrap"
                data-type="button" 
                data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"https:\/\/duckienad.com\/gioi-thieu\/bao-gia-lam-bien-quang-cao\/","delay":""}]'
                data-responsive_offset="on" 
                data-frames='[{"delay":2050,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(48, 48, 48, 1.00);bg:rgba(232, 232, 232, 1.00);bs:solid;bw:0 0 0 0;"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[15,15,15,15]"
                data-paddingright="[18,18,18,18]"
                data-paddingbottom="[15,15,15,15]"
                data-paddingleft="[18,18,18,18]"
                style="z-index: 8; min-width: 130px; max-width: 130px; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 700; color: rgba(48, 48, 48, 1.00);font-family:Montserrat;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Bảng báo giá
                </div>
                <!-- LAYER NR. 9 -->
                <div class="tp-caption tp-layer-selectable  tp-resizeme" 
                id="slide-12-layer-11" 
                data-x="['left','left','left','left']" data-hoffset="['76','70','250','130']" 
                data-y="['top','top','middle','middle']" data-voffset="['232','224','-30','-38']" 
                data-fontsize="['50','44','40','35']"
                data-lineheight="['56','50','50','40']"
                data-width="['685','583','none','287']"
                data-height="['116','100','none','41']"
                data-whitespace="nowrap"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"delay":990,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 9; min-width: 685px; max-width: 685px; max-width: 116px; max-width: 116px; white-space: nowrap; font-size: 50px; line-height: 56px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;">mà bạn cần!
                </div>
            </li>
            <!-- SLIDE  -->
            <li data-index="rs-13" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://duckienad.com/wp-content/uploads/revslider/the7-construction-slider/slide2-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="https://duckienad.com/wp-content/uploads/revslider/the7-construction-slider/slide2.jpg"  alt="" title="Công ty TNHH Quảng cáo và Nội thất Đức Kiên"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 10 -->
                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                id="slide-13-layer-7" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','1','1']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['1','0','1','1']" 
                data-width="1950"
                data-height="750"
                data-whitespace="normal"
                data-type="shape" 
                data-responsive_offset="on" 
                data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 5;background-color:rgba(18, 18, 18, 0.60);"> </div>
                <!-- LAYER NR. 11 -->
                <div class="tp-caption   tp-resizeme" 
                id="slide-13-layer-1" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['-120','-130','-60','-60']" 
                data-fontsize="['50','44','40','25']"
                data-lineheight="['56','50','50','40']"
                data-fontweight="['400','700','700','700']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"delay":990,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['center','center','center','center']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 6; white-space: nowrap; font-size: 50px; line-height: 56px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;">Công nghệ & Thiết bị hiện đại.</br>
                Công nhân lành nghề </br>& Giàu kinh nghiệm. 
                </div>
                <!-- LAYER NR. 12 -->
                <div class="tp-caption   tp-resizeme" 
                id="slide-13-layer-2" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','924','858']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['25','76','-163','-11']" 
                data-fontsize="['25','16','15','15']"
                data-lineheight="['28','30','28','28']"
                data-color="['rgba(249, 249, 249, 1.00)','rgba(249, 249, 249, 1.00)','rgba(255, 255, 255, 1.00)','rgba(255, 255, 255, 1.00)']"
                data-width="['628','665','583','449']"
                data-height="['58','212','none','none']"
                data-whitespace="normal"
                data-visibility="['on','on','off','off']"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"delay":1350,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['center','center','center','center']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 7; min-width: 628px; max-width: 628px; max-width: 58px; max-width: 58px; white-space: normal; font-size: 25px; line-height: 28px; font-weight: 500; color: rgba(249, 249, 249, 1.00);">Đức Kiên AD tự tin đáp ứng mọi yêu cầu về tiến độ mà vẫn đảm bảo yêu cầu chất lượng. </div>
                <!-- LAYER NR. 13 -->
                <a class="tp-caption rev-btn " 
                href="https://duckienad.com/du-an/gallery-san-pham/" target="_self"			 id="slide-13-layer-4" 
                data-x="['center','center','center','center']" data-hoffset="['-120','-128','0','3']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['140','160','82','55']" 
                data-fontsize="['14','18','18','15']"
                data-lineheight="['17','18','18','17']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="button" 
                data-actions=''
                data-responsive_offset="on" 
                data-frames='[{"delay":1650,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(252, 168, 0, 1.00);bs:solid;bw:0 0 0 0;"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[15,15,15,15]"
                data-paddingright="[18,18,18,18]"
                data-paddingbottom="[15,15,15,15]"
                data-paddingleft="[18,18,18,18]"
                style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(255, 192, 0, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Gallery sản phẩm </a>
                <!-- LAYER NR. 14 -->
                <a class="tp-caption rev-btn " 
                href="https://duckienad.com/gioi-thieu/cac-cam-ket/" target="_self"			 id="slide-13-layer-5" 
                data-x="['center','center','center','center']" data-hoffset="['96','133','2','3']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['140','160','144','116']" 
                data-fontsize="['14','18','18','15']"
                data-lineheight="['17','18','18','17']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="button" 
                data-actions=''
                data-responsive_offset="on" 
                data-frames='[{"delay":2050,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(48, 48, 48, 1.00);bg:rgba(232, 232, 232, 1.00);bc:rgba(37, 37, 37, 1.00);bs:solid;bw:0 0 0 0;"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[15,15,15,15]"
                data-paddingright="[18,18,18,18]"
                data-paddingbottom="[15,15,15,15]"
                data-paddingleft="[18,18,18,18]"
                style="z-index: 9; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 700; color: rgba(48, 48, 48, 1.00);font-family:Montserrat;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Các cam kết chất lượng
                </a>
            </li>
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
                                        <img class="img-icon" alt="null" src="https://duckienad.com/wp-content/uploads/2020/05/tham-my-vs-hien-dai.png"/>
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
                                        <img class="img-icon" alt="null" src="https://duckienad.com/wp-content/uploads/2020/05/dka-support-team-icon.png"/>
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
                                <p style="text-align: justify;">Đội ngũ của Đức Kiên AD với&nbsp;hàng chục năm kinh nghiệm chuyên sâu và hơn nữa là thấu hiểu các giá trị nhất quán mà chúng tôi mong muốn mang đến cho Khách hàng.</p>
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
                                        <img class="img-icon" alt="null" src="https://duckienad.com/wp-content/uploads/2020/05/art-design-icon-1.png"/>
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
                                <p style="text-align: justify;">Tiếp tục công việc thật sáng tạo hoặc dừng lại, chúng tôi luôn chỉ chọn một. Vượt ra các khuôn khổ để mang lại những đột phá cho Khách hàng là sứ mệnh của Đức Kiên AD.</p>
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
                                        <img class="img-icon" alt="null" src="https://duckienad.com/wp-content/uploads/2020/05/art-design-icon-2.png"/>
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
                                <p style="text-align: justify;">Đức Kiên AD mạnh ở việc đáp ứng các nhu cầu <strong>làm biển quảng cáo</strong> phức tạp của Khách hàng với các mức ngân sách linh hoạt và phù hợp mà vẫn đảm bảo được hiệu quả hoạt động.</p>
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
                <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner vc_custom_1535471071874">
                    <div class="wpb_wrapper">
                        <div class="dt-shortcode with-isotope">
                            <div class="filter iso-filter extras-off filter-bg-decoration">
                            <div class="filter-categories" data-default-order="desc" data-default-orderby="date"><a href="https://duckienad.com/" class="show-all act" data-filter="*">Tất cả</a><a href="https://duckienad.com/?term=41" class="backdrop" data-filter=".category-41">BACKDROP</a><a href="https://duckienad.com/?term=43" class="bien-chu-noi" data-filter=".category-43">CHỮ NỔI</a><a href="https://duckienad.com/?term=39" class="bien-cong-ty" data-filter=".category-39">BIỂN CÔNG TY</a><a href="https://duckienad.com/?term=40" class="bien-kim-loai" data-filter=".category-40">BIỂN KIM LOẠI</a><a href="https://duckienad.com/?term=37" class="bien-phong-ban" data-filter=".category-37">BIỂN PHÒNG BAN</a><a href="https://duckienad.com/?term=36" class="cong-trinh-alu" data-filter=".category-36">ALUMINIUM</a><a href="https://duckienad.com/?term=38" class="cong-trinh-led" data-filter=".category-38">LED</a><a href="https://duckienad.com/?term=44" class="gia-chu-x-gia-cuon" data-filter=".category-44">GIÁ CHỮ X</a><a href="https://duckienad.com/?term=45" class="hiflex" data-filter=".category-45">HIFLEX</a><a href="https://duckienad.com/?term=42" class="hop-den" data-filter=".category-42">HỘP ĐÈN</a><a href="https://duckienad.com/?term=48" class="khac" data-filter=".category-48">KHÁC</a></div>
                            </div>
                            <div class="wf-container dt-portfolio-shortcode loading-effect-scale-up iso-container description-on-hover hover-style-one content-align-centre" data-padding="10px" data-cur-page="1" data-posts-per-page="12" data-width="260px" data-columns="4">
                            <div class="wf-cell iso-item category-38" data-post-id="8084" data-date="2022-02-17T17:18:15+07:00" data-name="Màn hình LED">
                                <article class="post post-8084 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-led dt_portfolio_category-38 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/man-hinh-led/" class="layzr-bg" title="z3189688527599_42d88b7855b5d539b782dcdaa47c15a8"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2022/02/z3189688527599_42d88b7855b5d539b782dcdaa47c15a8-485x364.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2022/02/z3189688527599_42d88b7855b5d539b782dcdaa47c15a8-485x364.jpg 485w, https://duckienad.com/wp-content/uploads/2022/02/z3189688527599_42d88b7855b5d539b782dcdaa47c15a8.jpg 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/man-hinh-led-cao-cap-gia-re-viet-nam/" class="project-link no-text" target="_blank" rel="noopener">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-48 category-38" data-post-id="4112" data-date="2018-08-28T14:07:08+07:00" data-name="Trang trí tòa nhà PVI, làm cây thông Noel năm 2017">
                                <article class="post post-4112 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-khac dt_portfolio_category-cong-trinh-led dt_portfolio_category-48 dt_portfolio_category-38 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/trang-tri-toa-nha-pvi-lam-cay-thong-noel-nam-2017/" class="layzr-bg" title="Trang tri toa nha PVI Noel 2017"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/08/Trang-tri-toa-nha-PVI-Noel-2017-485x364.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2018/08/Trang-tri-toa-nha-PVI-Noel-2017-485x364.jpg 485w, https://duckienad.com/wp-content/uploads/2018/08/Trang-tri-toa-nha-PVI-Noel-2017.jpg 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/trang-tri-noel-le-tet/#GalleryON" class="project-link">Xem chi tiết dịch vụ trang trí tòa nhà của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/khac/">KHÁC</a>, <a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-43 category-38" data-post-id="4108" data-date="2018-08-28T13:50:12+07:00" data-name="Biển quảng cáo nóc tòa nhà PVI 154 Nguyễn Thái Học">
                                <article class="post post-4108 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-chu-noi dt_portfolio_category-cong-trinh-led dt_portfolio_category-43 dt_portfolio_category-38 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-quang-cao-noc-toa-nha-pvi-154-nguyen-thai-hoc/" class="layzr-bg" title="Bien quang cao chu noi gan led toa nha PVI Nguyen Thai Hoc"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/08/Bien-quang-cao-chu-noi-gan-led-toa-nha-PVI-Nguyen-Thai-Hoc-485x364.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2018/08/Bien-quang-cao-chu-noi-gan-led-toa-nha-PVI-Nguyen-Thai-Hoc-485x364.jpg 485w, https://duckienad.com/wp-content/uploads/2018/08/Bien-quang-cao-chu-noi-gan-led-toa-nha-PVI-Nguyen-Thai-Hoc.jpg 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/gia-cong-chu-noi/#GalleryON" class="project-link">Xem chi tiết dịch vụ gia công chữ nổi tại Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a>, <a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-41" data-post-id="4104" data-date="2018-08-28T13:40:40+07:00" data-name="Làm backdrop quầy lễ tân công ty VNHK">
                                <article class="post post-4104 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-backdrop dt_portfolio_category-41 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/lam-backdrop-quay-le-tan-cong-ty-vnhk/" class="layzr-bg" title="Backdrop quay le tan VNHK"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/08/Backdrop-quay-le-tan-VNHK-485x364.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2018/08/Backdrop-quay-le-tan-VNHK-485x364.jpg 485w, https://duckienad.com/wp-content/uploads/2018/08/Backdrop-quay-le-tan-VNHK.jpg 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/backdrop-le-tan/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm backdrop quầy lễ tân của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/backdrop/">BACKDROP</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36 category-43 category-42 category-38" data-post-id="4098" data-date="2018-08-28T13:20:42+07:00" data-name="Làm biển quảng cáo đại lý bánh gạo Richy">
                                <article class="post post-4098 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-bien-chu-noi dt_portfolio_category-hop-den dt_portfolio_category-cong-trinh-led dt_portfolio_category-36 dt_portfolio_category-43 dt_portfolio_category-42 dt_portfolio_category-38 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/lam-bien-quang-cao-dai-ly-banh-gao-richy/" class="layzr-bg" title="Bien quang cao aluminium chu mica banh gao Richy"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/08/Bien-quang-cao-aluminium-chu-mica-banh-gao-Richy-485x364.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2018/08/Bien-quang-cao-aluminium-chu-mica-banh-gao-Richy-485x364.jpg 485w, https://duckienad.com/wp-content/uploads/2018/08/Bien-quang-cao-aluminium-chu-mica-banh-gao-Richy.jpg 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/aluminium/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm biển aluminium của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a>, <a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a>, <a href="https://duckienad.com/project-category/hop-den/">HỘP ĐÈN</a>, <a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36 category-43 category-38" data-post-id="4093" data-date="2018-08-28T12:40:48+07:00" data-name="Làm biển quảng cáo aluminium gắn chữ nổi mica led hắt âm VNE Hải Yến">
                                <article class="post post-4093 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-bien-chu-noi dt_portfolio_category-cong-trinh-led dt_portfolio_category-36 dt_portfolio_category-43 dt_portfolio_category-38 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/lam-bien-quang-cao-aluminium-gan-chu-noi-mica-led-hat-am-vne-hai-yen/" class="layzr-bg" title="Bien alu chu noi led VNE Hai Yen"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/08/Bien-alu-chu-noi-led-VNE-Hai-Yen-485x364.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2018/08/Bien-alu-chu-noi-led-VNE-Hai-Yen-485x364.jpg 485w, https://duckienad.com/wp-content/uploads/2018/08/Bien-alu-chu-noi-led-VNE-Hai-Yen.jpg 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/aluminium/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm biển quảng cáo aluminium của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a>, <a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a>, <a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36 category-42 category-38" data-post-id="4082" data-date="2018-08-28T12:02:04+07:00" data-name="Làm biển quảng cáo nhà hàng Bull House">
                                <article class="post post-4082 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-hop-den dt_portfolio_category-cong-trinh-led dt_portfolio_category-36 dt_portfolio_category-42 dt_portfolio_category-38 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/lam-bien-quang-cao-nha-hang-bull-house/" class="layzr-bg" title="Led logo bullhouse"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/08/Led-logo-bullhouse-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/08/Led-logo-bullhouse-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/08/Led-logo-bullhouse.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/led-neon-sign/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm biển led của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a>, <a href="https://duckienad.com/project-category/hop-den/">HỘP ĐÈN</a>, <a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36 category-38" data-post-id="4078" data-date="2018-08-28T11:38:17+07:00" data-name="Biển alu chữ mica gắn led âm VJG Store">
                                <article class="post post-4078 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-cong-trinh-led dt_portfolio_category-36 dt_portfolio_category-38 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-alu-chu-mica-gan-led-am-vjg-store/" class="layzr-bg" title="Bien alu VJG Golf"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/08/Bien-alu-VJG-Golf-485x364.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2018/08/Bien-alu-VJG-Golf-485x364.jpg 485w, https://duckienad.com/wp-content/uploads/2018/08/Bien-alu-VJG-Golf.jpg 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/aluminium/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm biển aluminium của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a>, <a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-44" data-post-id="2362" data-date="2018-07-15T10:18:00+07:00" data-name="In ấn và cung cấp giá chữ X cho công ty DMC">
                                <article class="post post-2362 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-gia-chu-x-gia-cuon dt_portfolio_category-44 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/gia-chu-x-dmc/" class="layzr-bg" title="GIACHUX1"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/GIACHUX1-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/GIACHUX1-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/GIACHUX1.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/san-pham/gia-x-gia-cuon/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm giá chữ X tại Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/gia-chu-x-gia-cuon/" >GIÁ CHỮ X</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36 category-43" data-post-id="2358" data-date="2018-07-13T16:37:49+07:00" data-name="Biển quảng cáo chữ nổi gắn led nhà hàng Bia hơi 36">
                                <article class="post post-2358 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-bien-chu-noi dt_portfolio_category-36 dt_portfolio_category-43 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-quang-cao-chu-noi-gan-led-nha-hang-bia-hoi-36/" class="layzr-bg" title="ChuNoi9"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/ChuNoi9-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/ChuNoi9-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/ChuNoi9.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/gia-cong-chu-noi/#GalleryON" class="project-link">Xem chi tiết dịch vụ gia công chữ nổi tại Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a>, <a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-41 category-43" data-post-id="2354" data-date="2018-07-13T16:35:58+07:00" data-name="Làm backdrop quầy lễ tân công ty JDL Express">
                                <article class="post post-2354 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-backdrop dt_portfolio_category-bien-chu-noi dt_portfolio_category-41 dt_portfolio_category-43 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/backdrop-quay-le-tan-jdl/" class="layzr-bg" title="Backdrop quay le tan JDL"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/Backdrop-quay-le-tan-JDL-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/Backdrop-quay-le-tan-JDL-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/Backdrop-quay-le-tan-JDL.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/backdrop-le-tan/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm backdrop lễ tân tại Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/backdrop/">BACKDROP</a>, <a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36 category-43" data-post-id="2350" data-date="2018-07-13T16:34:43+07:00" data-name="Làm biển quảng cáo cửa hàng thiết bị điện Cường Thủy">
                                <article class="post post-2350 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-bien-chu-noi dt_portfolio_category-36 dt_portfolio_category-43 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/lam-bien-quang-cao-cua-hang-vne-cuong-thuy/" class="layzr-bg" title="Alu93"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/Alu93-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/Alu93-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/Alu93.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/aluminium/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm biển quảng cáo aluminium của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a>, <a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-45" data-post-id="2346" data-date="2018-07-13T16:33:05+07:00" data-name="Biển quảng cáo hàng rào công trình Sunshine Garden">
                                <article class="post post-2346 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-hiflex dt_portfolio_category-45 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-quang-cao-hang-rao-cong-trinh-sunshine-garden/" class="layzr-bg" title="Hiflex5"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/Hiflex5-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/Hiflex5-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/Hiflex5.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/pano-hiflex-ooh/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm biển bạt hiflex của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/hiflex/">HIFLEX</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-43 category-38" data-post-id="2342" data-date="2018-07-13T16:32:01+07:00" data-name="Biển quảng cáo quán cafe Mê Li">
                                <article class="post post-2342 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-chu-noi dt_portfolio_category-cong-trinh-led dt_portfolio_category-43 dt_portfolio_category-38 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-quang-cao-quan-cafe-me-li/" class="layzr-bg" title="led2"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/led2-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/led2-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/led2.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/led-neon-sign/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm biển led của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a>, <a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36 category-43 category-38" data-post-id="2338" data-date="2018-07-13T16:30:45+07:00" data-name="Biển quảng cáo alumi cửa hàng thiết bị điện VNE Quân Nga">
                                <article class="post post-2338 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-bien-chu-noi dt_portfolio_category-cong-trinh-led dt_portfolio_category-36 dt_portfolio_category-43 dt_portfolio_category-38 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-quang-cao-alumi-cua-hang-thiet-bi-dien-vne-quan-nga/" class="layzr-bg" title="Alu92"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/Alu92-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/Alu92-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/Alu92.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/aluminium/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm biển quảng cáo aluminium của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a>, <a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a>, <a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36 category-43 category-38" data-post-id="2334" data-date="2018-07-13T16:05:13+07:00" data-name="Biển quảng cáo thiết bị điện Simon Bà Loan - Thanh Nhàn">
                                <article class="post post-2334 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-bien-chu-noi dt_portfolio_category-cong-trinh-led dt_portfolio_category-36 dt_portfolio_category-43 dt_portfolio_category-38 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-quang-cao-mat-tien-cua-hang-thiet-bi-dien-simon/" class="layzr-bg" title="Alu6"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/Alu6-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/Alu6-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/Alu6.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/aluminium/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm biển quảng cáo aluminium của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a>, <a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a>, <a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36 category-43 category-38" data-post-id="2330" data-date="2018-07-13T16:03:43+07:00" data-name="Biển quảng cáo trên nóc nhà của Simon Electrics">
                                <article class="post post-2330 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-bien-chu-noi dt_portfolio_category-cong-trinh-led dt_portfolio_category-36 dt_portfolio_category-43 dt_portfolio_category-38 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-quang-cao-tren-noc-nha-cua-simon-electrics/" class="layzr-bg" title="Alu9"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/Alu9-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/Alu9-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/Alu9.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/gia-cong-chu-noi/#GalleryON" class="project-link">Xem chi tiết dịch vụ gia công chữ nổi của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a>, <a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a>, <a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36 category-43" data-post-id="2326" data-date="2018-07-13T16:01:39+07:00" data-name="Gia công chữ nổi biển quảng cáo Simon">
                                <article class="post post-2326 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-bien-chu-noi dt_portfolio_category-36 dt_portfolio_category-43 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/gia-cong-chu-noi-mica-gan-led-simon/" class="layzr-bg" title="ChuNoi8"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/ChuNoi8-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/ChuNoi8-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/ChuNoi8.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/gia-cong-chu-noi/#GalleryON" class="project-link">Xem chi tiết dịch vụ gia công chữ nổi của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a>, <a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-43 category-38" data-post-id="2322" data-date="2018-07-13T16:00:17+07:00" data-name="Biển quảng cáo alu, chữ mica nổi Simon Thuận Phát">
                                <article class="post post-2322 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-chu-noi dt_portfolio_category-cong-trinh-led dt_portfolio_category-43 dt_portfolio_category-38 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-quang-cao-alu-chu-noi-mica-simon-thuan-phat/" class="layzr-bg" title="ChuNoi7"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/ChuNoi7-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/ChuNoi7-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/ChuNoi7.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/gia-cong-chu-noi/#GalleryON" class="project-link">Xem chi tiết dịch vụ gia công chữ nổi của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a>, <a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-45 category-48" data-post-id="2318" data-date="2018-07-13T15:58:50+07:00" data-name="Thi công gian hàng hội chợ triển lãm Emperor Cruises">
                                <article class="post post-2318 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-hiflex dt_portfolio_category-khac dt_portfolio_category-45 dt_portfolio_category-48 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/thi-cong-gian-hang-hoi-cho-trien-lam-emperor-cruises/" class="layzr-bg" title="Hiflex4"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/Hiflex4-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/Hiflex4-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/Hiflex4.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://bannersukien.com" class="project-link" target="_blank" rel="noopener">Xem chi tiết dịch vụ làm banner sự kiện của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/hiflex/">HIFLEX</a>, <a href="https://duckienad.com/project-category/khac/">KHÁC</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36 category-43 category-38" data-post-id="2314" data-date="2018-07-13T15:56:06+07:00" data-name="Biển quảng cáo chữ nổi quán cafe Minh">
                                <article class="post post-2314 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-bien-chu-noi dt_portfolio_category-cong-trinh-led dt_portfolio_category-36 dt_portfolio_category-43 dt_portfolio_category-38 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-quang-cao-chu-noi-quan-cafe-minh/" class="layzr-bg" title="Alu91" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/Alu91-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/Alu91-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/Alu91.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/gia-cong-chu-noi/#GalleryON" class="project-link">Xem chi tiết dịch vụ gia công chữ nổi của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a>, <a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a>, <a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36 category-43" data-post-id="2310" data-date="2018-07-13T15:54:06+07:00" data-name="Biển quảng cáo alumi nhà thuốc đông y Ích Sinh Đường">
                                <article class="post post-2310 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-bien-chu-noi dt_portfolio_category-36 dt_portfolio_category-43 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-quang-cao-alumi-nha-thuoc-dong-y-ich-sinh-duong/" class="layzr-bg" title="Alu8" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/Alu8-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/Alu8-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/Alu8.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/aluminium/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm biển quảng cáo aluminium của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a>, <a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-40" data-post-id="2306" data-date="2018-07-13T15:50:52+07:00" data-name="Biển inox ăn mòn lắp dự án của công ty Ecoba Công nghệ Môi trường">
                                <article class="post post-2306 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-kim-loai dt_portfolio_category-40 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-inox-an-mon-du-an-ecoba-cong-nghe-moi-truong/" class="layzr-bg" title="BienKimLoai7" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/BienKimLoai7-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/BienKimLoai7-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/BienKimLoai7.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/an-mon-kim-loai/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm biển inox ăn mòn của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-kim-loai/">BIỂN KIM LOẠI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-45" data-post-id="2302" data-date="2018-07-13T15:48:54+07:00" data-name="Biển quảng cáo bạt hiflex phòng giao dịch FPT Telecom Chương Mỹ">
                                <article class="post post-2302 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-hiflex dt_portfolio_category-45 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-quang-cao-bat-hiflex-phong-giao-dich-fpt-telecom-chuong-my/" class="layzr-bg" title="Hiflex3" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/Hiflex3-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/Hiflex3-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/Hiflex3.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/pano-hiflex-ooh/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm biển quảng cáo bạt hiflex của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/hiflex/">HIFLEX</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-48" data-post-id="2298" data-date="2018-07-13T15:21:52+07:00" data-name="Biển chỉ dẫn công ty Cleverlearn Việt Nam">
                                <article class="post post-2298 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-khac dt_portfolio_category-48 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-chi-dan-cong-ty-cleverlearn-viet-nam/" class="layzr-bg" title="BIENKHAC1" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/07/BIENKHAC1-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/07/BIENKHAC1-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/07/BIENKHAC1.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/bien-chi-dan-bien-bao/#GalleryON" class="project-link">Xem chi tiết dịch vụ làm biển chỉ dẫn của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/khac/">KHÁC</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-43" data-post-id="2093" data-date="2018-06-24T13:40:28+07:00" data-name="Chữ nổi 4">
                                <article class="post post-2093 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-chu-noi dt_portfolio_category-43 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/chu-noi-4-2/" class="layzr-bg" title="ChuNoi4" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/ChuNoi4-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/ChuNoi4-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/ChuNoi4.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/gia-cong-chu-noi/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-45 category-42" data-post-id="2035" data-date="2018-06-23T15:34:27+07:00" data-name="Biển quảng cáo hộp đèn hiflex An Thịnh">
                                <article class="post post-2035 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-hiflex dt_portfolio_category-hop-den dt_portfolio_category-45 dt_portfolio_category-42 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-quang-cao-hop-den-hiflex-an-thinh/" class="layzr-bg" title="HopDen1" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/HopDen1-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/HopDen1-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/HopDen1.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/san-pham/hop-den-sieu-mong/#GalleryON" class="project-link">Chi tiết dịch vụ làm biển hộp đèn của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/hiflex/">HIFLEX</a>, <a href="https://duckienad.com/project-category/hop-den/">HỘP ĐÈN</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36" data-post-id="2029" data-date="2018-06-23T15:09:36+07:00" data-name="Bien alu 5">
                                <article class="post post-2029 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-36 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-alu-5/" class="layzr-bg" title="Alu5" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/Alu5-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/Alu5-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/Alu5.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/aluminium/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36 category-43" data-post-id="2025" data-date="2018-06-23T15:06:11+07:00" data-name="Biển alu 4">
                                <article class="post post-2025 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-bien-chu-noi dt_portfolio_category-36 dt_portfolio_category-43 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-alu-4/" class="layzr-bg" title="Alu4" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/Alu4-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/Alu4-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/Alu4.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/aluminium/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a>, <a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-45" data-post-id="2019" data-date="2018-06-23T14:58:20+07:00" data-name="Biển hiflex 2">
                                <article class="post post-2019 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-hiflex dt_portfolio_category-45 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-hiflex-2/" class="layzr-bg" title="Hiflex2" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/Hiflex2-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/Hiflex2-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/Hiflex2.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/pano-hiflex-ooh/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/hiflex/">HIFLEX</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-43 category-38" data-post-id="2015" data-date="2018-06-23T14:51:07+07:00" data-name="Chữ nổi 3">
                                <article class="post post-2015 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-chu-noi dt_portfolio_category-cong-trinh-led dt_portfolio_category-43 dt_portfolio_category-38 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/chu-noi-3-2/" class="layzr-bg" title="ChuNoi3" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/ChuNoi3-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/ChuNoi3-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/ChuNoi3.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/gia-cong-chu-noi/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a>, <a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36" data-post-id="2011" data-date="2018-06-23T14:45:35+07:00" data-name="Biển alu 3">
                                <article class="post post-2011 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-36 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-alu-3/" class="layzr-bg" title="Alu3" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/Alu3-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/Alu3-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/Alu3.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/aluminium/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36" data-post-id="2007" data-date="2018-06-23T14:38:08+07:00" data-name="Biển alu 2">
                                <article class="post post-2007 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-36 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-alu-2/" class="layzr-bg" title="Alu2" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/Alu2-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/Alu2-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/Alu2.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/aluminium/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-43" data-post-id="2003" data-date="2018-06-23T14:28:31+07:00" data-name="Chữ nổi 4">
                                <article class="post post-2003 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-chu-noi dt_portfolio_category-43 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/chu-noi-4/" class="layzr-bg" title="ChuNoi2" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/ChuNoi2-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/ChuNoi2-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/ChuNoi2.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/gia-cong-chu-noi/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-45" data-post-id="1999" data-date="2018-06-23T14:26:34+07:00" data-name="Biển hiflex">
                                <article class="post post-1999 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-hiflex dt_portfolio_category-45 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-hiflex/" class="layzr-bg" title="Hiflex1" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/Hiflex1-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/Hiflex1-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/Hiflex1.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/pano-hiflex-ooh/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/hiflex/">HIFLEX</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36" data-post-id="1995" data-date="2018-06-23T14:23:30+07:00" data-name="Biển alu 1">
                                <article class="post post-1995 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-36 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-alu-1/" class="layzr-bg" title="Alu1" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/Alu1-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/Alu1-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/Alu1.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/aluminium/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-43 category-38" data-post-id="1991" data-date="2018-06-23T14:18:40+07:00" data-name="Chữ nổi 3">
                                <article class="post post-1991 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-chu-noi dt_portfolio_category-cong-trinh-led dt_portfolio_category-43 dt_portfolio_category-38 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/chu-noi-3/" class="layzr-bg" title="ChuNoi1" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/ChuNoi1-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/ChuNoi1-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/ChuNoi1.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/gia-cong-chu-noi/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a>, <a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-40" data-post-id="1987" data-date="2018-06-23T14:10:21+07:00" data-name="Biển kim loại 6">
                                <article class="post post-1987 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-kim-loai dt_portfolio_category-40 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-kim-loai-6/" class="layzr-bg" title="BienKimLoai6" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai6-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai6-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai6.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/an-mon-kim-loai/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-kim-loai/">BIỂN KIM LOẠI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-39" data-post-id="1983" data-date="2018-06-23T13:51:39+07:00" data-name="Biển công ty 2">
                                <article class="post post-1983 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-cong-ty dt_portfolio_category-39 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-cong-ty-2/" class="layzr-bg" title="CongTy2" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/CongTy2-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/CongTy2-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/CongTy2.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/san-pham/bien-cong-ty/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-cong-ty/">BIỂN CÔNG TY</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-39" data-post-id="1979" data-date="2018-06-23T13:41:33+07:00" data-name="Biển công ty 1">
                                <article class="post post-1979 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-cong-ty dt_portfolio_category-39 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-cong-ty-1/" class="layzr-bg" title="CongTy1" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/CongTy1-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/CongTy1-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/CongTy1.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/san-pham/bien-cong-ty/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-cong-ty/">BIỂN CÔNG TY</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-40" data-post-id="1975" data-date="2018-06-23T13:10:03+07:00" data-name="Kim Loại 5">
                                <article class="post post-1975 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-kim-loai dt_portfolio_category-40 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/kim-loai-5/" class="layzr-bg" title="BienKimLoai5" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai5-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai5-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai5.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/an-mon-kim-loai/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-kim-loai/">BIỂN KIM LOẠI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-40" data-post-id="1971" data-date="2018-06-23T12:53:04+07:00" data-name="Kim Loại 4">
                                <article class="post post-1971 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-kim-loai dt_portfolio_category-40 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/kim-loai-4/" class="layzr-bg" title="BienKimLoai4" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai4-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai4-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai4.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/an-mon-kim-loai/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-kim-loai/">BIỂN KIM LOẠI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-40" data-post-id="1967" data-date="2018-06-23T12:45:00+07:00" data-name="Kim Loại 3">
                                <article class="post post-1967 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-kim-loai dt_portfolio_category-40 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/kim-loai-3/" class="layzr-bg" title="BienKimLoai3" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai3-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai3-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai3.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/an-mon-kim-loai/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-kim-loai/">BIỂN KIM LOẠI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-40 category-37" data-post-id="1962" data-date="2018-06-23T12:21:37+07:00" data-name="Kim Loại 2">
                                <article class="post post-1962 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-kim-loai dt_portfolio_category-bien-phong-ban dt_portfolio_category-40 dt_portfolio_category-37 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/kim-loai-2/" class="layzr-bg" title="BienKimLoai2" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai2-1-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai2-1-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai2-1.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/an-mon-kim-loai/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-kim-loai/">BIỂN KIM LOẠI</a>, <a href="https://duckienad.com/project-category/bien-phong-ban/">BIỂN PHÒNG BAN</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-40" data-post-id="1958" data-date="2018-06-23T11:50:18+07:00" data-name="Kim Loại 1">
                                <article class="post post-1958 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-kim-loai dt_portfolio_category-40 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/kim-loai-1/" class="layzr-bg" title="Biển kim loại - Đồng ăn mòn" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20300%20225&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai1.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/BienKimLoai1.gif 300w" alt="Biển kim loại - Đồng ăn mòn" width="300" height="225"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/an-mon-kim-loai/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-kim-loai/">BIỂN KIM LOẠI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-43" data-post-id="1736" data-date="2018-05-11T12:02:27+07:00" data-name="CHU NOI 2">
                                <article class="post post-1736 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-bien-chu-noi dt_portfolio_category-43 text-centered description-off">
                                    <figure class="rollover-project forward-post">
                                        <a href="https://duckienad.com/project/chu-noi-2/" class="layzr-bg" title="OLYMPUS DIGITAL CAMERA" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20370&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/05/Store_1-485x370.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2018/05/Store_1-485x370.jpg 485w, https://duckienad.com/wp-content/uploads/2018/05/Store_1-970x740.jpg 970w" alt="" width="485" height="370"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-36 category-43" data-post-id="1729" data-date="2018-05-11T12:01:12+07:00" data-name="Biển quảng cáo chữ nổi led Simon BAC">
                                <article class="post post-1729 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-alu dt_portfolio_category-bien-chu-noi dt_portfolio_category-36 dt_portfolio_category-43 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/bien-quang-cao-chu-noi-led-simon-bac/" class="layzr-bg" title="Alu7" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/05/Alu7-485x364.gif" data-srcset="https://duckienad.com/wp-content/uploads/2018/05/Alu7-485x364.gif 485w, https://duckienad.com/wp-content/uploads/2018/05/Alu7.gif 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/gia-cong-chu-noi/#GalleryON" class="project-link">Xem chi tiết dịch vụ gia công chữ nổi của Đức Kiên AD</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-alu/">ALUMINIUM</a>, <a href="https://duckienad.com/project-category/bien-chu-noi/">CHỮ NỔI</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="wf-cell iso-item category-41" data-post-id="1722" data-date="2018-05-11T11:52:44+07:00" data-name="BACKDROP 2">
                                <article class="post post-1722 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-backdrop dt_portfolio_category-41 text-centered description-off">
                                    <figure class="rollover-project rollover-active">
                                        <a href="https://duckienad.com/project/backdrop-2/" class="layzr-bg" title="BACKDROP1" aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2018/05/BACKDROP1-485x364.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2018/05/BACKDROP1-485x364.jpg 485w, https://duckienad.com/wp-content/uploads/2018/05/BACKDROP1.jpg 599w" alt="" width="485" height="364"  /></a>		
                                        <figcaption class="rollover-content">
                                        <div class="links-container"><a href="https://duckienad.com/dich-vu/backdrop-le-tan/" class="project-link no-text">Link</a></div>
                                        <div class="rollover-content-container">
                                            <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/backdrop/">BACKDROP</a></span></div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            </div>
                            <div class="paginator iso-paginator" role="navigation"><span class="nav-prev disabled"><i class="dt-icon-the7-arrow-0-42" aria-hidden="true"></i></span><a href="https://duckienad.com/" class="page-numbers act" data-page-num="1">1</a><a href="https://duckienad.com/page/2/" class="page-numbers " data-page-num="2">2</a><a href="https://duckienad.com/page/3/" class="page-numbers " data-page-num="3">3</a><a href="https://duckienad.com/page/4/" class="page-numbers " data-page-num="4">4</a><a href="https://duckienad.com/page/2/" class="page-numbers nav-next" data-page-num="2"><i class="dt-icon-the7-arrow-0-41" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                </div>
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
                                <a class="aio-icon-box-link" href="https://duckienad.com/gioi-thieu/tam-nhin-su-menh-cac-gia-tri/#Tam-nhin" target=" _blank">
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
                                <a class="aio-icon-box-link" href="https://duckienad.com/gioi-thieu/tam-nhin-su-menh-cac-gia-tri/#Su-menh" target=" _blank">
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
                                <a class="aio-icon-box-link" href="https://duckienad.com/gioi-thieu/tam-nhin-su-menh-cac-gia-tri/#Gia-tri-cot-loi" target=" _blank">
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
                                <a class="aio-icon-box-link" href="https://duckienad.com/gioi-thieu/cac-cam-ket/" target=" _blank">
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
                                <a class="aio-icon-box-link" href="https://duckienad.com/gioi-thieu/tam-nhin-su-menh-cac-gia-tri/#Van-hoa-cong-ty" target=" _blank">
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
                                <a class="aio-icon-box-link" href="https://duckienad.com/gioi-thieu/thong-tin-tuyen-dung/" target=" _blank">
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
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1529765457980">
                <div class="wpb_column vc_column_container vc_col-sm-3">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="stats-block stats-left  accent-icon-bg ">
                            <div class="aio-icon-left">
                            <div class="ult-just-icon-wrapper  ">
                                <div class="align-icon" style="text-align:center;">
                                    <div class="aio-icon advanced " data-animation="bounceIn" data-animation-delay="03" style="color:#ffffff;background:#ffffff;border-style:solid;border-color:#ededed;border-width:3px;width:100px;height:100px;line-height:100px;border-radius:10px;font-size:50px;display:inline-block;">
                                        <i class="Defaults-heart"></i>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="stats-desc" id="counter-responsv-wrap-2910">
                            <div id="counter_158369626663dc91fadd6f1" data-id="counter_158369626663dc91fadd6f1"  data-ultimate-target='#counter-responsv-wrap-2910 .stats-number'  data-responsive-json-new='{"font-size":"desktop:70px;","line-height":"desktop:70px;"}'  class="stats-number ult-responsive" style=" color:#ffffff; color:#ffffff;" data-speed="6" data-counter-value="800" data-separator="," data-decimal=".">0</div>
                            <div class="counter_suffix mycust ult-responsive"  data-ultimate-target='#counter-responsv-wrap-2910 .mycust'  data-responsive-json-new='{"font-size":"desktop:40px;","line-height":"desktop:40px;"}'  style=" color:#dd3333">+</div>
                            <div counter-responsv-wrap-2910  data-ultimate-target='#counter-responsv-wrap-2910 .stats-text'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:26px;"}'  class="stats-text ult-responsive" style="font-size:px; color:#ffffff; font-weight:bold;">Khách hàng</div>
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
                                    <div class="aio-icon advanced " data-animation="bounceIn" data-animation-delay="03" style="color:#ffffff;background:#ffffff;border-style:solid;border-color:#ededed;border-width:3px;width:100px;height:100px;line-height:100px;border-radius:10px;font-size:50px;display:inline-block;">
                                        <i class="Defaults-group users"></i>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="stats-desc" id="counter-responsv-wrap-8282">
                            <div id="counter_97080002263dc91faddacc" data-id="counter_97080002263dc91faddacc"  data-ultimate-target='#counter-responsv-wrap-8282 .stats-number'  data-responsive-json-new='{"font-size":"desktop:70px;","line-height":"desktop:70px;"}'  class="stats-number ult-responsive" style=" color:#ffffff; color:#ffffff;" data-speed="3" data-counter-value="50" data-separator="," data-decimal=".">0</div>
                            <div class="counter_suffix mycust ult-responsive"  data-ultimate-target='#counter-responsv-wrap-8282 .mycust'  data-responsive-json-new='{"font-size":"desktop:40px;","line-height":"desktop:40px;"}'  style=" color:#dd3333">+</div>
                            <div counter-responsv-wrap-8282  data-ultimate-target='#counter-responsv-wrap-8282 .stats-text'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:26px;"}'  class="stats-text ult-responsive" style="font-size:px; color:#ffffff; font-weight:bold;">Nhân sự</div>
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
                                    <div class="aio-icon advanced " data-animation="bounceIn" data-animation-delay="03" style="color:#ffffff;background:#ffffff;border-style:solid;border-color:#ededed;border-width:3px;width:100px;height:100px;line-height:100px;border-radius:10px;font-size:50px;display:inline-block;">
                                        <i class="Defaults-language"></i>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="stats-desc" id="counter-responsv-wrap-7543">
                            <div id="counter_190365587963dc91fadde7d" data-id="counter_190365587963dc91fadde7d"  data-ultimate-target='#counter-responsv-wrap-7543 .stats-number'  data-responsive-json-new='{"font-size":"desktop:70px;","line-height":"desktop:70px;"}'  class="stats-number ult-responsive" style=" color:#ffffff; color:#ffffff;" data-speed="8" data-counter-value="950" data-separator="," data-decimal=".">0</div>
                            <div class="counter_suffix mycust ult-responsive"  data-ultimate-target='#counter-responsv-wrap-7543 .mycust'  data-responsive-json-new='{"font-size":"desktop:40px;","line-height":"desktop:40px;"}'  style=" color:#dd3333">+</div>
                            <div counter-responsv-wrap-7543  data-ultimate-target='#counter-responsv-wrap-7543 .stats-text'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:26px;"}'  class="stats-text ult-responsive" style="font-size:px; color:#ffffff; font-weight:bold;">Dự án lớn</div>
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
                                    <div class="aio-icon advanced " data-animation="bounceIn" data-animation-delay="03" style="color:#ffffff;background:#ffffff;border-style:solid;border-color:#ededed;border-width:3px;width:100px;height:100px;line-height:100px;border-radius:10px;font-size:50px;display:inline-block;">
                                        <i class="Defaults-dashboard tachometer"></i>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="stats-desc" id="counter-responsv-wrap-7758">
                            <div id="counter_122593807263dc91fade22e" data-id="counter_122593807263dc91fade22e"  data-ultimate-target='#counter-responsv-wrap-7758 .stats-number'  data-responsive-json-new='{"font-size":"desktop:70px;","line-height":"desktop:70px;"}'  class="stats-number ult-responsive" style=" color:#ffffff; color:#ffffff;" data-speed="3" data-counter-value="18" data-separator="," data-decimal=".">0</div>
                            <div class="counter_suffix mycust ult-responsive"  data-ultimate-target='#counter-responsv-wrap-7758 .mycust'  data-responsive-json-new='{"font-size":"desktop:40px;","line-height":"desktop:40px;"}'  style=" color:#dd3333">+</div>
                            <div counter-responsv-wrap-7758  data-ultimate-target='#counter-responsv-wrap-7758 .stats-text'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:26px;"}'  class="stats-text ult-responsive" style="font-size:px; color:#ffffff; font-weight:bold;">Năm kinh nghiệm</div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- Row Backgrounds -->
            <div class="upb_color" data-bg-override="ex-full" data-bg-color="#fdbe15" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false"  data-custom-vc-row=""  data-vc="5.0.1"  data-is_old_vc=""  data-theme-support=""   data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""    ></div>
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1529832722393">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div id="ultimate-heading-701263dc91fadf209" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-701263dc91fadf209 uvc-5833 " data-hspacer="icon_only"  data-halign="center" style="text-align:center">
                            <div class="uvc-heading-spacer icon_only" style="top">
                            <div class="ult-just-icon-wrapper  ">
                                <div class="align-icon" style="text-align:center;">
                                    <div class="aio-icon-img " style="font-size:128px;display:inline-block;" >
                                        <img class="img-icon" alt="null" src="https://duckienad.com/wp-content/uploads/2020/05/hand-icon.png"/>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <section class="logos-grid wf-container" data-width="150px" data-columns="6">
                            <div class="wf-cell">
                            <div><img class="lazy-load" src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 140 86&#039;%2F%3E" width="140" height="86" alt="FPT" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/11175010_FPT-1.png 281w" data-src="https://duckienad.com/wp-content/uploads/2018/06/11175010_FPT-1.png" /></div>
                            </div>
                            <div class="wf-cell">
                            <div><img class="lazy-load" src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 140 86&#039;%2F%3E" width="140" height="86" alt="VPbank" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/vpbank.png 281w" data-src="https://duckienad.com/wp-content/uploads/2018/06/vpbank.png" /></div>
                            </div>
                            <div class="wf-cell">
                            <div><img class="lazy-load" src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 140 86&#039;%2F%3E" width="140" height="86" alt="Simon" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/simon.png 281w" data-src="https://duckienad.com/wp-content/uploads/2018/06/simon.png" /></div>
                            </div>
                            <div class="wf-cell">
                            <div><img class="lazy-load" src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 140 86&#039;%2F%3E" width="140" height="86" alt="Thai Metro" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/THAIMETRO.png 281w" data-src="https://duckienad.com/wp-content/uploads/2018/06/THAIMETRO.png" /></div>
                            </div>
                            <div class="wf-cell">
                            <div><img class="lazy-load" src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 140 86&#039;%2F%3E" width="140" height="86" alt="VNE" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/VNE-2.png 281w" data-src="https://duckienad.com/wp-content/uploads/2018/06/VNE-2.png" /></div>
                            </div>
                            <div class="wf-cell">
                            <div><img class="lazy-load" src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 140 86&#039;%2F%3E" width="140" height="86" alt="VHI" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/VHI-1.png 281w" data-src="https://duckienad.com/wp-content/uploads/2018/06/VHI-1.png" /></div>
                            </div>
                            <div class="wf-cell">
                            <div><img class="lazy-load" src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 140 86&#039;%2F%3E" width="140" height="86" alt="Ecoba" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/Ecoba.png 281w" data-src="https://duckienad.com/wp-content/uploads/2018/06/Ecoba.png" /></div>
                            </div>
                            <div class="wf-cell">
                            <div><img class="lazy-load" src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 140 86&#039;%2F%3E" width="140" height="86" alt="jh" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/john-henry.png 281w" data-src="https://duckienad.com/wp-content/uploads/2018/06/john-henry.png" /></div>
                            </div>
                            <div class="wf-cell">
                            <div><img class="lazy-load" src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 140 86&#039;%2F%3E" width="140" height="86" alt="pwc" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/PwC_fl_c.png 281w" data-src="https://duckienad.com/wp-content/uploads/2018/06/PwC_fl_c.png" /></div>
                            </div>
                            <div class="wf-cell">
                            <div><img class="lazy-load" src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 140 86&#039;%2F%3E" width="140" height="86" alt="Sika" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/sika.png 281w" data-src="https://duckienad.com/wp-content/uploads/2018/06/sika.png" /></div>
                            </div>
                            <div class="wf-cell">
                            <div><img class="lazy-load" src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 140 86&#039;%2F%3E" width="140" height="86" alt="WU" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/western_union.png 281w" data-src="https://duckienad.com/wp-content/uploads/2018/06/western_union.png" /></div>
                            </div>
                            <div class="wf-cell">
                            <div><img class="lazy-load" src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 140 86&#039;%2F%3E" width="140" height="86" alt="PVI" data-srcset="https://duckienad.com/wp-content/uploads/2018/06/PVI.png 281w" data-src="https://duckienad.com/wp-content/uploads/2018/06/PVI.png" /></div>
                            </div>
                        </section>
                    </div>
                </div>
                </div>
            </div>
            <!-- Row Backgrounds -->
            <div class="upb_color" data-bg-override="ex-full" data-bg-color="#f7f7f7" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false"  data-custom-vc-row=""  data-vc="5.0.1"  data-is_old_vc=""  data-theme-support=""   data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""    ></div>
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
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
                            <div class="visible wf-cell" data-post-id="8160" data-date="2023-02-03T11:41:59+07:00" data-name="Làm biển quảng cáo, biển nội quy cho các dự án xây dựng">
                                <article class="post project-odd visible post-8160 type-post status-publish format-standard has-post-thumbnail hentry category-lam-bien-quang-cao tag-bien-hang-rao tag-bien-quang-cao-cong-trinh category-71" data-name="Làm biển quảng cáo, biển nội quy cho các dự án xây dựng" data-date="2023-02-03T11:41:59+07:00">
                                    <div class="post-thumbnail-wrap">
                                        <div class="post-thumbnail">
                                        <span class="fancy-categories"><a href="https://duckienad.com/chuyen-muc/tu-van-quang-cao/lam-bien-quang-cao/" rel="category tag" style="background-color:#;color:#;">Làm biển quảng cáo</a></span>
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/lam-bien-quang-cao-bien-noi-quy-cho-cac-du-an-xay-dung/" class="post-thumbnail-rollover layzr-bg layzr-bg"><img class="iso-lazy-load preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20768%20576&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2023/02/bien-quang-cao-cong-trinh-xay-dung-vincons-dream-city-768x576.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2023/02/bien-quang-cao-cong-trinh-xay-dung-vincons-dream-city-768x576.jpg 768w, https://duckienad.com/wp-content/uploads/2023/02/bien-quang-cao-cong-trinh-xay-dung-vincons-dream-city-1152x864.jpg 1152w" alt="" title="bien quang cao cong trinh xay dung vincons dream city" width="768" height="576"  /></a>	
                                        </div>
                                    </div>
                                    <div class="post-entry-content">
                                        <h3 class="entry-title">
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/lam-bien-quang-cao-bien-noi-quy-cho-cac-du-an-xay-dung/" title="Làm biển quảng cáo, biển nội quy cho các dự án xây dựng" rel="bookmark">Làm biển quảng cáo, biển nội quy cho các dự án xây dựng</a>
                                        </h3>
                                        <div class="entry-excerpt">
                                        <p>Các dự án xây dựng, đặc biệt là các khu đô thị và đại đô thị mọc&hellip;</p>
                                        </div>
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/lam-bien-quang-cao-bien-noi-quy-cho-cac-du-an-xay-dung/" class="post-details details-type-link" aria-label="Read more about Làm biển quảng cáo, biển nội quy cho các dự án xây dựng" rel="nofollow">Đọc thêm<i class="dt-icon-the7-arrow-03" aria-hidden="true"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="visible wf-cell" data-post-id="8146" data-date="2022-04-02T13:56:54+07:00" data-name="+50 Mẫu biển quảng cáo đẹp nhất định phải biết!">
                                <article class="post project-odd visible post-8146 type-post status-publish format-standard has-post-thumbnail hentry category-lam-bien-quang-cao category-71" data-name="+50 Mẫu biển quảng cáo đẹp nhất định phải biết!" data-date="2022-04-02T13:56:54+07:00">
                                    <div class="post-thumbnail-wrap">
                                        <div class="post-thumbnail">
                                        <span class="fancy-categories"><a href="https://duckienad.com/chuyen-muc/tu-van-quang-cao/lam-bien-quang-cao/" rel="category tag" style="background-color:#;color:#;">Làm biển quảng cáo</a></span>
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/50-mau-bien-quang-cao-dep-nhat-dinh-phai-biet/" class="post-thumbnail-rollover layzr-bg layzr-bg"><img class="iso-lazy-load preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20768%20576&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2022/01/bien-alu-dep-cho-doanh-nghiep-768x576.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2022/01/bien-alu-dep-cho-doanh-nghiep-768x576.jpg 768w, https://duckienad.com/wp-content/uploads/2022/01/bien-alu-dep-cho-doanh-nghiep-1152x864.jpg 1152w" alt="" title="bien alu dep cho doanh nghiep" width="768" height="576"  /></a>	
                                        </div>
                                    </div>
                                    <div class="post-entry-content">
                                        <h3 class="entry-title">
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/50-mau-bien-quang-cao-dep-nhat-dinh-phai-biet/" title="+50 Mẫu biển quảng cáo đẹp nhất định phải biết!" rel="bookmark">+50 Mẫu biển quảng cáo đẹp nhất định phải biết!</a>
                                        </h3>
                                        <div class="entry-excerpt">
                                        <p>Bạn đang muốn thiết kế mẫu biển quảng cáo đẹp để thu hút khách hàng? Hãy tham&hellip;</p>
                                        </div>
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/50-mau-bien-quang-cao-dep-nhat-dinh-phai-biet/" class="post-details details-type-link" aria-label="Read more about +50 Mẫu biển quảng cáo đẹp nhất định phải biết!" rel="nofollow">Đọc thêm<i class="dt-icon-the7-arrow-03" aria-hidden="true"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="visible wf-cell" data-post-id="8125" data-date="2022-03-09T21:36:41+07:00" data-name="Mẫu chữ nổi nhựa ABS mạ crom siêu đẹp">
                                <article class="post project-odd visible post-8125 type-post status-publish format-standard has-post-thumbnail hentry category-chu-noi category-lam-bien-quang-cao tag-chu-abs-ma-crom category-69 category-71" data-name="Mẫu chữ nổi nhựa ABS mạ crom siêu đẹp" data-date="2022-03-09T21:36:41+07:00">
                                    <div class="post-thumbnail-wrap">
                                        <div class="post-thumbnail">
                                        <span class="fancy-categories"><a href="https://duckienad.com/chuyen-muc/tu-van-quang-cao/chu-noi/" rel="category tag" style="background-color:#;color:#;">Chữ nổi</a><a href="https://duckienad.com/chuyen-muc/tu-van-quang-cao/lam-bien-quang-cao/" rel="category tag" style="background-color:#;color:#;">Làm biển quảng cáo</a></span>
                                        <a href="https://duckienad.com/tu-van-quang-cao/chu-noi/mau-chu-noi-nhua-abs-ma-crom-sieu-dep/" class="post-thumbnail-rollover layzr-bg layzr-bg"><img class="iso-lazy-load preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20581%20436&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2022/03/chu-abs-ma-crom-006_20201024121-581x436.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2022/03/chu-abs-ma-crom-006_20201024121-581x436.jpg 581w" alt="" title="chu abs ma crom 006_20201024121" width="581" height="436"  /></a>	
                                        </div>
                                    </div>
                                    <div class="post-entry-content">
                                        <h3 class="entry-title">
                                        <a href="https://duckienad.com/tu-van-quang-cao/chu-noi/mau-chu-noi-nhua-abs-ma-crom-sieu-dep/" title="Mẫu chữ nổi nhựa ABS mạ crom siêu đẹp" rel="bookmark">Mẫu chữ nổi nhựa ABS mạ crom siêu đẹp</a>
                                        </h3>
                                        <div class="entry-excerpt">
                                        <p>Một số mẫu chữ nổi ABS mạ crom siêu đẹp có tại Đức Kiên AD. Tìm hiểu&hellip;</p>
                                        </div>
                                        <a href="https://duckienad.com/tu-van-quang-cao/chu-noi/mau-chu-noi-nhua-abs-ma-crom-sieu-dep/" class="post-details details-type-link" aria-label="Read more about Mẫu chữ nổi nhựa ABS mạ crom siêu đẹp" rel="nofollow">Đọc thêm<i class="dt-icon-the7-arrow-03" aria-hidden="true"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="visible wf-cell" data-post-id="8123" data-date="2022-03-01T08:23:50+07:00" data-name="Tất tần tật những thông tin cần biết về biển hiệu chữ nổi">
                                <article class="post project-odd visible post-8123 type-post status-publish format-standard has-post-thumbnail hentry category-lam-bien-quang-cao tag-bien-quang-cao-chu-noi tag-chu-noi category-71" data-name="Tất tần tật những thông tin cần biết về biển hiệu chữ nổi" data-date="2022-03-01T08:23:50+07:00">
                                    <div class="post-thumbnail-wrap">
                                        <div class="post-thumbnail">
                                        <span class="fancy-categories"><a href="https://duckienad.com/chuyen-muc/tu-van-quang-cao/lam-bien-quang-cao/" rel="category tag" style="background-color:#;color:#;">Làm biển quảng cáo</a></span>
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/tat-tan-tat-nhung-thong-tin-can-biet-ve-bang-hieu-chu-noi/" class="post-thumbnail-rollover layzr-bg layzr-bg"><img class="iso-lazy-load preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20526%20395&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2020/09/IMG_0893-526x395.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2020/09/IMG_0893-526x395.jpg 526w" alt="" title="IMG_0893" width="526" height="395"  /></a>	
                                        </div>
                                    </div>
                                    <div class="post-entry-content">
                                        <h3 class="entry-title">
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/tat-tan-tat-nhung-thong-tin-can-biet-ve-bang-hieu-chu-noi/" title="Tất tần tật những thông tin cần biết về biển hiệu chữ nổi" rel="bookmark">Tất tần tật những thông tin cần biết về biển hiệu chữ nổi</a>
                                        </h3>
                                        <div class="entry-excerpt">
                                        <p>Bảng hiệu chữ nổi là một sản phẩm thông dụng trong đời sống ngày nay với nhiều&hellip;</p>
                                        </div>
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/tat-tan-tat-nhung-thong-tin-can-biet-ve-bang-hieu-chu-noi/" class="post-details details-type-link" aria-label="Read more about Tất tần tật những thông tin cần biết về biển hiệu chữ nổi" rel="nofollow">Đọc thêm<i class="dt-icon-the7-arrow-03" aria-hidden="true"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="visible wf-cell" data-post-id="8060" data-date="2022-02-15T19:58:28+07:00" data-name="Nổi bật hơn với biển quảng cáo tại sân bay">
                                <article class="post project-odd visible post-8060 type-post status-publish format-standard has-post-thumbnail hentry category-lam-bien-quang-cao category-71" data-name="Nổi bật hơn với biển quảng cáo tại sân bay" data-date="2022-02-15T19:58:28+07:00">
                                    <div class="post-thumbnail-wrap">
                                        <div class="post-thumbnail">
                                        <span class="fancy-categories"><a href="https://duckienad.com/chuyen-muc/tu-van-quang-cao/lam-bien-quang-cao/" rel="category tag" style="background-color:#;color:#;">Làm biển quảng cáo</a></span>
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/noi-bat-hon-voi-bien-quang-cao-tai-san-bay/" class="post-thumbnail-rollover layzr-bg layzr-bg"><img class="iso-lazy-load preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20768%20576&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2020/09/hop-den-bat-khong-gan-1-768x576.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2020/09/hop-den-bat-khong-gan-1-768x576.jpg 768w, https://duckienad.com/wp-content/uploads/2020/09/hop-den-bat-khong-gan-1.jpg 1024w" alt="" title="hop den bat khong gan" width="768" height="576"  /></a>	
                                        </div>
                                    </div>
                                    <div class="post-entry-content">
                                        <h3 class="entry-title">
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/noi-bat-hon-voi-bien-quang-cao-tai-san-bay/" title="Nổi bật hơn với biển quảng cáo tại sân bay" rel="bookmark">Nổi bật hơn với biển quảng cáo tại sân bay</a>
                                        </h3>
                                        <div class="entry-excerpt">
                                        <p>Thị trường biển quảng cáo hiện nay là ngành dịch vụ cực kỳ phát triển bởi nhiều&hellip;</p>
                                        </div>
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/noi-bat-hon-voi-bien-quang-cao-tai-san-bay/" class="post-details details-type-link" aria-label="Read more about Nổi bật hơn với biển quảng cáo tại sân bay" rel="nofollow">Đọc thêm<i class="dt-icon-the7-arrow-03" aria-hidden="true"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="visible wf-cell" data-post-id="8022" data-date="2022-02-12T14:12:11+07:00" data-name="Đặt biển quảng cáo giá rẻ tại Hà Nội">
                                <article class="post project-odd visible post-8022 type-post status-publish format-standard has-post-thumbnail hentry category-lam-bien-quang-cao tag-bien-quang-cao tag-bien-quang-cao-ha-noi tag-dat-bien-quang-cao category-71" data-name="Đặt biển quảng cáo giá rẻ tại Hà Nội" data-date="2022-02-12T14:12:11+07:00">
                                    <div class="post-thumbnail-wrap">
                                        <div class="post-thumbnail">
                                        <span class="fancy-categories"><a href="https://duckienad.com/chuyen-muc/tu-van-quang-cao/lam-bien-quang-cao/" rel="category tag" style="background-color:#;color:#;">Làm biển quảng cáo</a></span>
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/dat-bien-quang-cao-gia-re-tai-ha-noi/" class="post-thumbnail-rollover layzr-bg layzr-bg"><img class="iso-lazy-load preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20533%20400&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2020/09/circle-k-533x400.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2020/09/circle-k-533x400.jpg 533w" alt="" title="circle k" width="533" height="400"  /></a>	
                                        </div>
                                    </div>
                                    <div class="post-entry-content">
                                        <h3 class="entry-title">
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/dat-bien-quang-cao-gia-re-tai-ha-noi/" title="Đặt biển quảng cáo giá rẻ tại Hà Nội" rel="bookmark">Đặt biển quảng cáo giá rẻ tại Hà Nội</a>
                                        </h3>
                                        <div class="entry-excerpt">
                                        <p>Biển quảng cáo là một phương tiện quảng cáo truyền thống nhưng lại mang nhiều lợi ích&hellip;</p>
                                        </div>
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/dat-bien-quang-cao-gia-re-tai-ha-noi/" class="post-details details-type-link" aria-label="Read more about Đặt biển quảng cáo giá rẻ tại Hà Nội" rel="nofollow">Đọc thêm<i class="dt-icon-the7-arrow-03" aria-hidden="true"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="visible wf-cell" data-post-id="8014" data-date="2022-02-09T12:21:58+07:00" data-name="Thi công biển quảng cáo công ty đèn LED uy tín, chất lượng">
                                <article class="post project-odd visible post-8014 type-post status-publish format-standard has-post-thumbnail hentry category-lam-bien-quang-cao category-man-hinh-led tag-bien-quang-cao-led tag-led tag-man-hinh-led category-71 category-410" data-name="Thi công biển quảng cáo công ty đèn LED uy tín, chất lượng" data-date="2022-02-09T12:21:58+07:00">
                                    <div class="post-thumbnail-wrap">
                                        <div class="post-thumbnail">
                                        <span class="fancy-categories"><a href="https://duckienad.com/chuyen-muc/tu-van-quang-cao/lam-bien-quang-cao/" rel="category tag" style="background-color:#;color:#;">Làm biển quảng cáo</a><a href="https://duckienad.com/chuyen-muc/tu-van-quang-cao/man-hinh-led/" rel="category tag" style="background-color:#;color:#;">Màn hình LED</a></span>
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/thi-cong-bien-quang-cao-led/" class="post-thumbnail-rollover layzr-bg layzr-bg"><img class="iso-lazy-load preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20540%20405&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2020/11/thiet-ke-san-khau-3D-540x405.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2020/11/thiet-ke-san-khau-3D-540x405.jpg 540w" alt="Thiết kế 3D sân khấu với màn hình LED" title="thiet ke san khau 3D" width="540" height="405"  /></a>	
                                        </div>
                                    </div>
                                    <div class="post-entry-content">
                                        <h3 class="entry-title">
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/thi-cong-bien-quang-cao-led/" title="Thi công biển quảng cáo công ty đèn LED uy tín, chất lượng" rel="bookmark">Thi công biển quảng cáo công ty đèn LED uy tín, chất lượng</a>
                                        </h3>
                                        <div class="entry-excerpt">
                                        <p>Biển quảng cáo công ty đèn LED là một sản phẩm phổ biến trong lĩnh vực quảng&hellip;</p>
                                        </div>
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/thi-cong-bien-quang-cao-led/" class="post-details details-type-link" aria-label="Read more about Thi công biển quảng cáo công ty đèn LED uy tín, chất lượng" rel="nofollow">Đọc thêm<i class="dt-icon-the7-arrow-03" aria-hidden="true"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="visible wf-cell" data-post-id="8006" data-date="2022-02-08T12:54:03+07:00" data-name="Đơn vị làm biển quảng cáo công ty chất lượng Hà thành">
                                <article class="post project-odd visible post-8006 type-post status-publish format-standard has-post-thumbnail hentry category-lam-bien-quang-cao tag-bien-quang-cao tag-bien-quang-cao-ha-noi tag-lam-bien-quang-cao category-71" data-name="Đơn vị làm biển quảng cáo công ty chất lượng Hà thành" data-date="2022-02-08T12:54:03+07:00">
                                    <div class="post-thumbnail-wrap">
                                        <div class="post-thumbnail">
                                        <span class="fancy-categories"><a href="https://duckienad.com/chuyen-muc/tu-van-quang-cao/lam-bien-quang-cao/" rel="category tag" style="background-color:#;color:#;">Làm biển quảng cáo</a></span>
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/don-vi-lam-bien-quang-cao-cong-ty-chat-luong-ha-thanh/" class="post-thumbnail-rollover layzr-bg layzr-bg"><img class="iso-lazy-load preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20506%20380&#39;%2F%3E" data-src="https://duckienad.com/wp-content/uploads/2021/02/khai-truong-lady-cos-506x380.jpg" data-srcset="https://duckienad.com/wp-content/uploads/2021/02/khai-truong-lady-cos-506x380.jpg 506w" alt="" title="khai truong lady cos" width="506" height="380"  /></a>	
                                        </div>
                                    </div>
                                    <div class="post-entry-content">
                                        <h3 class="entry-title">
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/don-vi-lam-bien-quang-cao-cong-ty-chat-luong-ha-thanh/" title="Đơn vị làm biển quảng cáo công ty chất lượng Hà thành" rel="bookmark">Đơn vị làm biển quảng cáo công ty chất lượng Hà thành</a>
                                        </h3>
                                        <div class="entry-excerpt">
                                        <p>Biển công ty là bộ mặt thương hiệu, thể hiện tất cả những thông tin cơ bản&hellip;</p>
                                        </div>
                                        <a href="https://duckienad.com/tu-van-quang-cao/lam-bien-quang-cao/don-vi-lam-bien-quang-cao-cong-ty-chat-luong-ha-thanh/" class="post-details details-type-link" aria-label="Read more about Đơn vị làm biển quảng cáo công ty chất lượng Hà thành" rel="nofollow">Đọc thêm<i class="dt-icon-the7-arrow-03" aria-hidden="true"></i></a>
                                    </div>
                                </article>
                            </div>
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
@endsection
