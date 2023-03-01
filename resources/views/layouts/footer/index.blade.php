
<footer id="footer" class="footer solid-bg footer-outline-decoration">
   <div class="wf-wrap">
   <div class="wf-container-footer">
      <div class="wf-container">
         
         <section id="text-2" class="widget widget_text wf-cell wf-1-4">
            
               <div class="" style="align-items: center;
               display: flex;
               flex-direction: column;">
               
                  
                       <marquee behavior="alternate" direction="">   <div class="box-cus"><img src ="{{$setting->logo}}" style="width:200px"></div></marquee></span>
                
              
               
               
               
             <style>
  .box-cus{
   width: 100%;
   
  }
             </style>
             <br>
             <br>
               <p style="color: #d1d3d4; padding-bottom: 10px; align: justify;text-align:center">{{$setting->webname}}</p>
               <style type="text/css" data-type="the7_shortcodes-inline-css">#orphaned-shortcode-3c5facf098baaba3f4a72b0826cb35f8.ico-right-side > i {
                  margin-right: 0px;
                  margin-left: 8px;
                  }
                  #orphaned-shortcode-3c5facf098baaba3f4a72b0826cb35f8 > i {
                  margin-right: 8px;
                  }
                  #orphaned-shortcode-3c5facf098baaba3f4a72b0826cb35f8 * {
                  vertical-align: middle;
                  }
               </style>
               <a href="{{route('aboutUs')}}" class="default-btn-shortcode dt-btn dt-btn-s link-hover-off btn-inline-left " id="orphaned-shortcode-3c5facf098baaba3f4a72b0826cb35f8"><span>Giới thiệu công ty</span></a>
               </div>
         </section>
         <section id="presscore-contact-info-widget-3" class="widget widget_presscore-contact-info-widget wf-cell wf-1-4">
               <div class="widget-title">KẾT NỐI VỚI CHÚNG TÔI</div>
               <ul class="contact-info">
                  @if ($setting->address1 != '')
                  <li><span class="color-primary">Địa chỉ 1:</span><br />{{$setting->address1}}</li>
                      
                  @endif
                  @if ($setting->address2 != '')
                  <li><span class="color-primary">Địa chỉ 2:</span><br />{{$setting->address2}}</li>
                      
                  @endif
               <li><span class="color-primary">Giờ làm việc:</span><br />Mon-Sat: 7.45AM - 5.30PM</li>
               <li><span class="color-primary">Thông tin liên hệ:</span><br /><b>* Văn phòng:</b> {{$setting->phone1}}<br>
                  @if($setting->phone1 != '')
                  <b>* Phone1:</b>{{$setting->phone1}} <br>
                  @endif
                  @if($setting->phone2 !="")
                  <b>* Phone2:</b>{{$setting->phone2}}<br>
                  @endif
                 
               </li>
               </ul>
               <div class="soc-ico">
               <p class="assistive-text">Find us on:</p>
               <a title="Facebook page opens in new window" href="javascript:;"  class="facebook"><span class="soc-font-icon"></span><span class="screen-reader-text">Facebook page opens in new window</span></a><a title="Twitter page opens in new window" href="javascript:;"  class="twitter"><span class="soc-font-icon"></span><span class="screen-reader-text">Twitter page opens in new window</span></a><a title="YouTube page opens in new window" href="javascript:;"  class="you-tube"><span class="soc-font-icon"></span><span class="screen-reader-text">YouTube page opens in new window</span></a><a title="Linkedin page opens in new window" href="javascript:;"  class="linkedin"><span class="soc-font-icon"></span><span class="screen-reader-text">Linkedin page opens in new window</span></a><a title="Tumblr page opens in new window" href="javascript:;"  class="tumbler"><span class="soc-font-icon"></span><span class="screen-reader-text">Tumblr page opens in new window</span></a><a title="Pinterest page opens in new window" href="javascript:;"  class="pinterest"><span class="soc-font-icon"></span><span class="screen-reader-text">Pinterest page opens in new window</span></a><a title="Skype page opens in new window" href="javascript:;"  class="skype"><span class="soc-font-icon"></span><span class="screen-reader-text">Skype page opens in new window</span></a><a title="Reddit page opens in new window" href="javascript:;"  class="reddit"><span class="soc-font-icon"></span><span class="screen-reader-text">Reddit page opens in new window</span></a>
               </div>
         </section>
         <section id="presscore-custom-menu-one-3" class="widget widget_presscore-custom-menu-one wf-cell wf-1-4">
               <div class="widget-title">DỊCH VỤ</div>
               <ul class="custom-menu dividers-on show-arrow">
                  @foreach ($servicehome as $item)
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1866 first"><a href="{{route('serviceDetail',['slug'=>$item->slug])}}">{{$item->name}}</a></li>
                  @endforeach
               </ul>
         </section>
         <section id="presscore-blog-posts-2" class="widget widget_presscore-blog-posts wf-cell wf-1-4">
               <div class="widget-title">MAP</div>
               <ul class="recent-posts round-images">
                  {!!$setting->iframe_map!!}
               </ul>
         </section>
         <section id="custom_html-2" class="widget_text widget widget_custom_html wf-cell wf-1-4">
               <div class="textwidget custom-html-widget"></div>
         </section>
      </div>
      <!-- .wf-container -->
   </div>
   <!-- .wf-container-footer -->
   </div>
   <!-- .wf-wrap -->
   <!-- !Bottom-bar -->
   <div id="bottom-bar" class="solid-bg logo-left" role="contentinfo">
   <div class="wf-wrap">
      <div class="wf-container-bottom">
         <div id="branding-bottom"></div>
         <div class="wf-float-left">
               <strong>© 2011 - 2022 {{$setting->company}} 
         <div class="wf-float-right">
               <div class="bottom-text-block">
               <p>-   &nbsp;Website by SBT Sofware.<br />
                 
               </p>
               </div>
         </div>
      </div>
      <!-- .wf-container-bottom -->
   </div>
   <!-- .wf-wrap -->
   </div>
   <!-- #bottom-bar -->
</footer>