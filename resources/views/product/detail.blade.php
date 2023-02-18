@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
@endphp
P2
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="page-title title-left solid-bg breadcrumbs-mobile-off page-title-responsive-enabled bg-img-enabled">
    <div class="wf-wrap">
       <div class="page-title-head hgroup">
          <h1 >{{languageName($product->name)}}</h1>
       </div>
       <div class="page-title-breadcrumbs">
          <div class="assistive-text">You are here:</div>
          <ol class="breadcrumbs text-small" itemscope itemtype="https://schema.org/BreadcrumbList">
             <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="{{route('home')}}" title=""><span itemprop="name">Home</span></a>
                <meta itemprop="position" content="1" />
             </li>
             <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="{{route('allListProCate',['danhmuc'=>$product->cate->slug])}}" title=""><span itemprop="name">{{languageName($product->cate->name)}}</span></a>
                <meta itemprop="position" content="2" />
             </li>
             <li class="current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">{{languageName($product->name)}}</span>
                <meta itemprop="position" content="3" />
             </li>
          </ol>
       </div>
    </div>
 </div>
 <div id="main" class="sidebar-right sidebar-divider-vertical pd-100 pd-t-10">
    <div class="main-gradient"></div>
    <div class="wf-wrap">
       <div class="wf-container-main">
          <div id="content" class="content row" role="main">
            <div>
                <h5 >
               <span class="h5-cus"> CHI TIẾT SẢN PHẨM</span> 
               <span class="lop-phu-h5"></span>
                </h5>
            </div>
            <br>
            <br>
                <div class="album album-cus "  >
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
                object-fit: cover;
                }

                

                .swiper {
                width: 100%;
                height: 300px;
                margin-left: auto;
                margin-right: auto;
                }

                .swiper-slide {
                background-size: cover;
                background-position: center;
                }

                .mySwiper2 {
                height: 80%;
                width: 100%;
                }

                .mySwiper {
                height: 20%;
                box-sizing: border-box;
                padding: 10px 0;
                }

                .mySwiper .swiper-slide {
                width: 25%;
                height: 100%;
                opacity: 0.4;
                }

                .mySwiper .swiper-slide-thumb-active {
                opacity: 1;
                }

                .swiper-slide img {
                display: block;
                width: 100%;
                height: 100%;
                object-fit: cover;
                }
            </style>
</head>

<body>
  <!-- Swiper -->
@php
    $imgs =json_decode($product->images);
@endphp
  <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
    <div class="swiper-wrapper">
        @foreach ($imgs as $item)
            <div class="swiper-slide">
            <img src="{{$item}}" />
            </div>
        @endforeach
 
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <div thumbsSlider="" class="swiper mySwiper">
    <div class="swiper-wrapper">
        @foreach ($imgs as $item)
        <div class="swiper-slide">
        <img src="{{$item}}" />
        </div>
    @endforeach
   
    </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
  </script>
                </div>
             <div class="noidung">
                {!!languageName($product->content)!!}
             </div>
          </div>
          <!-- #content -->
          <aside id="sidebar" class="sidebar">
             <div class="sidebar-content">
               <strong style="color: red">DỊCH VỤ</strong>
                <section id="presscore-custom-menu-one-5" class="widget widget_presscore-custom-menu-one">
                    <ul class="custom-menu dividers-on show-arrow">
                        @foreach ($servicehome as $item)
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1866 first"><a href="{{route('serviceDetail',['slug'=>$item->slug])}}">{{$item->name}}</a></li>
                            
                        @endforeach
                    </ul>
                </section>
                
             </div>
          </aside>
          <!-- #sidebar -->
       </div>
       <!-- .wf-container -->
    </div>
    <!-- .wf-wrap -->
 </div>
 <!-- #main -->
@endsection

