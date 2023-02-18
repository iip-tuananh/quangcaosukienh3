@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="page-title title-left solid-bg breadcrumbs-mobile-off page-title-responsive-enabled bg-img-enabled">
    <div class="wf-wrap">
       <div class="page-title-head hgroup">
          <h1 >{{$detail_service->name}}</h1>
       </div>
       <div class="page-title-breadcrumbs">
          <div class="assistive-text">You are here:</div>
          <ol class="breadcrumbs text-small" itemscope itemtype="https://schema.org/BreadcrumbList">
             <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="{{route('home')}}" title=""><span itemprop="name">Home</span></a>
                <meta itemprop="position" content="1" />
             </li>
             <li class="current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">{{$detail_service->name}}</span>
                <meta itemprop="position" content="2" />
             </li>
          </ol>
       </div>
    </div>
 </div>
 <div id="main" class="sidebar-right sidebar-divider-vertical pd-t-10 pd-100">
    <div class="main-gradient"></div>
    <div class="wf-wrap">
       <div class="wf-container-main">
        <div id="content" class="content" role="main">
            {!!languageName($detail_service->content)!!}
        </div>
          <!-- #content -->
          <aside id="sidebar" class="sidebar">
             <div class="sidebar-content">
              <strong> TIN TỨC KHÁC</strong>
                <section id="presscore-blog-posts-3" class="widget widget_presscore-blog-posts">
                   <ul class="recent-posts round-images">
                    @foreach ($servicehome as $item)
                        <li>
                        <article class="post-format-standard">
                            <div class="mini-post-img"><a class="alignleft post-rollover layzr-bg" href="{{route('serviceDetail',['slug'=>$item->slug])}}" aria-label="Post image"><img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%2060%2060&#39;%2F%3E" data-src="{{$item->image}}" data-srcset="{{$item->image}} 60w, {{$item->image}} 120w" width="60" height="60"  alt="" /></a></div>
                            <div class="post-content"><a href="{{route('serviceDetail',['slug'=>$item->slug])}}">{{$item->name}}</a><br /><time class="text-secondary" datetime="2023-02-03T11:41:59+07:00">{{$item->created_at}}</time></div>
                        </article>
                        </li>
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