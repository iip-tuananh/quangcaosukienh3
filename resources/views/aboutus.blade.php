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
<div class="page-title title-left solid-bg breadcrumbs-mobile-off page-title-responsive-enabled bg-img-enabled">
   <div class="wf-wrap">
      
      <div class="page-title-head hgroup">
         <h1 >Giới thiệu</h1>
      </div>
      <div class="page-title-breadcrumbs">
         <div class="assistive-text">You are here:</div>
         <ol class="breadcrumbs text-small" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
               <a itemprop="item" href="{{route('home')}}" title=""><span itemprop="name">Home</span></a>
               <meta itemprop="position" content="1" />
            </li>
            <li class="current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
               <span itemprop="name">Giới thiệu</span>
               <meta itemprop="position" content="2" />
            </li>
         </ol>
      </div>
   </div>
</div>
<div id="main" class="sidebar-none sidebar-divider-vertical">
   <div class="main-gradient"></div>
   <div class="wf-wrap">
      <div class="wf-container-main">
         <div id="content" class="content" role="main">
            <div class="vc_row wpb_row vc_row-fluid">
               <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner ">
                     <div class="wpb_wrapper"></div>
                  </div>
               </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1531800494056 ">
               <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner ">
                     <div class="wpb_wrapper pd-t-10 pad-30">
                        <div>
                           <h5 >
                          <span class="h5-cus"> GIỚI THIỆU</span> 
                          <span class="lop-phu-h5"></span>
                           </h5>
                       </div>
                        <div class="container">
                           {!!$gioithieu->content!!}
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
