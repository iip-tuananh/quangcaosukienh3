<div class="masthead classic-header left logo-center widgets full-height surround shadow-decoration shadow-mobile-header-decoration medium-mobile-menu-icon show-sub-menu-on-hover show-device-logo show-mobile-logo"  role="banner">
<div class="top-bar top-bar-line-hide">
<div class="top-bar-bg" ></div>
<div class="left-widgets mini-widgets"><span class="mini-contacts address show-on-desktop in-menu-first-switch in-menu-second-switch"><i class="fa-fw the7-mw-icon-address-bold"></i>{{$setting->address1}}</span><span class="mini-contacts clock show-on-desktop in-menu-first-switch in-menu-second-switch"><i class="fa-fw the7-mw-icon-clock-bold"></i>Mon-Sat: 7.45AM - 5.30PM</span><span class="mini-contacts phone show-on-desktop hide-on-first-switch hide-on-second-switch"><i class="fa-fw the7-mw-icon-phone-bold"></i>{{$setting->phone1}}</span><span class="mini-contacts email show-on-desktop in-menu-first-switch in-menu-second-switch"><i class="fa-fw the7-mw-icon-mail-bold"></i>{{$setting->email}}</span></div>
<div class="right-widgets mini-widgets">
    <div class="soc-ico show-on-desktop in-menu-first-switch in-menu-second-switch custom-bg disabled-border border-off  hover-disabled-border  hover-border-off"><a title="Facebook page opens in new window" href="{{$setting->facebook}}"  class="facebook"><span class="soc-font-icon"></span><span class="screen-reader-text">Facebook page opens in new window</span></a><a title="Twitter page opens in new window" href="javascript:;"  class="twitter"><span class="soc-font-icon"></span><span class="screen-reader-text">Twitter page opens in new window</span></a><a title="Linkedin page opens in new window" href="javascript:;"  class="linkedin"><span class="soc-font-icon"></span><span class="screen-reader-text">Linkedin page opens in new window</span></a><a title="Skype page opens in new window" href="javascript:;"  class="skype"><span class="soc-font-icon"></span><span class="screen-reader-text">Skype page opens in new window</span></a><a title="Tumblr page opens in new window" href="javascript:;"  class="tumbler"><span class="soc-font-icon"></span><span class="screen-reader-text">Tumblr page opens in new window</span></a><a title="Pinterest page opens in new window" href="javascript:;"  class="pinterest"><span class="soc-font-icon"></span><span class="screen-reader-text">Pinterest page opens in new window</span></a><a title="Reddit page opens in new window" href="javascript:;"  class="reddit"><span class="soc-font-icon"></span><span class="screen-reader-text">Reddit page opens in new window</span></a><a title="YouTube page opens in new window" href="javascript:;"  class="you-tube"><span class="soc-font-icon"></span><span class="screen-reader-text">YouTube page opens in new window</span></a></div>
</div>
</div>
<header class="header-bar">
<div class="branding">
    <div id="site-title" class="assistive-text">{{$setting->company}}</div>
    <div id="site-description" class="assistive-text">{{$setting->webname}}</div>
    <a class="" href="{{route('home')}}"><img class=" preload-me" src="{{$setting->logo}}" srcset="{{$setting->logo}} 269w, {{$setting->logo}} 269w" width="269" height="64"   sizes="269px" alt="{{$setting->company}}" /><img class="mobile-logo preload-me" src="{{$setting->logo}}" srcset="{{$setting->logo}} 179w" width="179" height="43"   sizes="179px" alt="{{$setting->company}}" /></a>
    <div class="mini-widgets">
        <div class="text-area show-on-desktop hide-on-first-switch hide-on-second-switch">
            <table style="height: 89px; width: 482px;">
            <tbody>
                <tr>
                    <td style="width: 60px;"><a href="tel:0946095000"><img src="{{asset('frontend/images/phone_left.png')}}" alt="Gọi điện đặt làm biển quảng cáo" width="60" height="60" title="Gọi điện đặt làm biển quảng cáo"></a></td>
                    <td style="width: 291.017px;"><span style="font-size: 15px; line-height: 17px; color: #923929;">TƯ VẤN KHÁCH HÀNG 24/7</span><br /> <span style="font-size: 32px; line-height: 32px; color: #923929;">{{$setting->phone1}}</span></td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
    <div class="mini-widgets">
        <div class="text-area show-on-desktop hide-on-first-switch hide-on-second-switch">
            <p><img style="float: right;" src="{{asset('frontend/images/phone_RIGHT-3.png')}}" alt="Năng lực làm biển quảng cáo hàng đầu" width="277" height="80"  title="Năng lực làm biển quảng cáo hàng đầu"></p>
        </div>
    </div>
</div>
<nav class="navigation">
    <ul id="primary-menu" class="main-nav underline-decoration upwards-line level-arrows-on" role="menubar">
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-363 current_page_item menu-item-1601 act first" role="presentation"><a href='{{route('home')}}' data-level='1' role="menuitem"><i class="fa fa-home"></i><span class="menu-item-text"><span class="menu-text">TRANG CHỦ</span></span></a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3344 " role="presentation">
            <a href='{{route('aboutUs')}}'  data-level='1' role="menuitem"><i class="fa fa-list-alt"></i><span class="menu-item-text"><span class="menu-text">GIỚI THIỆU</span></span></a>
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1599 has-children" role="presentation">
            <a href='javascript' class='not-clickable-item' data-level='1' role="menuitem"><i class="fa fa-folder-open"></i><span class="menu-item-text"><span class="menu-text">DỊCH VỤ</span></span></a>
            <ul class="sub-nav hover-style-bg level-arrows-on" role="menubar">
                @foreach ($servicehome as $item)
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8155 first" role="presentation"><a href='{{route('serviceDetail',['slug'=>$item->slug])}}' data-level='2' role="menuitem"><span class="menu-item-text"><span class="menu-text">{{$item->name}}</span></span></a></li>
            @endforeach
            </ul>
        </li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4807 has-children" role="presentation">
            <a href="{{route('allProduct')}}"  data-level='1' role="menuitem"><i class="fa fa-rocket"></i><span class="menu-item-text"><span class="menu-text">BIỂN QUẢNG CÁO</span></span></a>
            <ul class="sub-nav hover-style-bg level-arrows-on" role="menubar">
                @foreach ($categoryhome as $cate)
                     <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7916 first" role="presentation"><a href='{{route('allListProCate',['danhmuc'=>$cate->slug])}}' data-level='2' role="menuitem"><span class="menu-item-text"><span class="menu-text">{{languageName($cate->name)}}</span></span></a></li>
                @endforeach
         
            </ul>
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1598" role="presentation"><a href='{{route('allListBlog')}}' data-level='1' role="menuitem"><i class="fa fa-newspaper-o"></i><span class="menu-item-text"><span class="menu-text">BLOG &#038; NEWS</span></span></a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1609" role="presentation"><a href='{{route('lienHe')}}' data-level='1' role="menuitem"><i class="fa fa-phone-square"></i><span class="menu-item-text"><span class="menu-text">LIÊN HỆ</span></span></a></li>
   
        
    </ul>
    <div class="mini-widgets">
        <div class="mini-search show-on-desktop near-logo-first-switch in-menu-second-switch popup-search custom-icon">
            <form class="searchform mini-widget-searchform" role="search" method="post" action="{{route('search_result')}}">
                @csrf
            <div class="screen-reader-text">Search:</div>
            <a href="" class="submit"><i class=" mw-icon the7-mw-icon-search-bold"></i><span>Tìm kiếm</span></a>
            <div class="popup-search-wrap">
                <input type="text" class="field searchform-s" name="keyword" value="" placeholder="Type and hit enter …" title="Search form"/>
                <a href="" class="search-icon"><i class="the7-mw-icon-search-bold"></i></a>
            </div>
            <input type="submit" class="assistive-text searchsubmit" value="Go!"/>
            </form>
        </div>
    </div>
</nav>
</header>
</div>
<div class="dt-mobile-header mobile-menu-show-divider">
<div class="dt-close-mobile-menu-icon">
<div class="close-line-wrap"><span class="close-line"></span><span class="close-line"></span><span class="close-line"></span></div>
</div>
<ul id="mobile-menu" class="mobile-main-nav" role="menubar">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-363 current_page_item menu-item-1601 act first" role="presentation"><a href='{{route('home')}}' data-level='1' role="menuitem"><i class="fa fa-home"></i><span class="menu-item-text"><span class="menu-text">TRANG CHỦ</span></span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3344 " role="presentation">
    <a href='{{route('aboutUs')}}'  data-level='1' role="menuitem"><i class="fa fa-list-alt"></i><span class="menu-item-text"><span class="menu-text">GIỚI THIỆU</span></span></a>
   
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1599 has-children" role="presentation">
    <a href='javascript:;' class='not-clickable-item' data-level='1' role="menuitem"><i class="fa fa-folder-open"></i><span class="menu-item-text"><span class="menu-text">DỊCH VỤ</span></span></a>
    <ul class="sub-nav hover-style-bg level-arrows-on" role="menubar">
        @foreach ($servicehome as $item)
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8155 first" role="presentation"><a href='{{route('serviceDetail',['slug'=>$item->slug])}}' data-level='2' role="menuitem"><span class="menu-item-text"><span class="menu-text">{{$item->name}}</span></span></a></li>
            
        @endforeach
    </ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4807 has-children" role="presentation">
    <a href="{{route('allProduct')}}"   data-level='1' role="menuitem"><i class="fa fa-rocket"></i><span class="menu-item-text"><span class="menu-text">BIỂN QUẢNG CÁO</span></span></a>
    <ul class="sub-nav hover-style-bg level-arrows-on" role="menubar">
        @foreach ($categoryhome as $cate)
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7916 first" role="presentation"><a href='{{route('allListProCate',['danhmuc'=>$cate->slug])}}' data-level='2' role="menuitem"><span class="menu-item-text"><span class="menu-text">{{languageName($cate->name)}}</span></span></a></li>
            
        @endforeach
    </ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1598" role="presentation"><a href='{{route('allListBlog')}}' data-level='1' role="menuitem"><i class="fa fa-newspaper-o"></i><span class="menu-item-text"><span class="menu-text">BLOG &#038; NEWS</span></span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1609" role="presentation"><a href='{{route('lienHe')}}' data-level='1' role="menuitem"><i class="fa fa-phone-square"></i><span class="menu-item-text"><span class="menu-text">LIÊN HỆ</span></span></a></li>
</ul>
<div class='mobile-mini-widgets-in-menu'></div>
</div>