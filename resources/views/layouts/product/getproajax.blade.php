@foreach ($cate->product as $pro)
@php
    $img = json_decode($pro->images);
@endphp
<div class="wf-cell iso-item category-{{$cate->id}} visible shown" data-post-id="8084" data-date="2022-02-17T17:18:15+07:00" data-name="Màn hình LED">
    <article class="post post-8084 dt_portfolio type-dt_portfolio status-publish has-post-thumbnail hentry dt_portfolio_category-cong-trinh-led dt_portfolio_category-38 text-centered ">
        <figure class="rollover-project rollover-active">
            <a href="https://duckienad.com/project/man-hinh-led/" class="layzr-bg" title="z3189688527599_42d88b7855b5d539b782dcdaa47c15a8"  aria-label="Post image"><img class="preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20485%20364&#39;%2F%3E" data-src="{{$img[0]}}" data-srcset="{{$img[0]}} 485w, {{$img[0]}} 599w" alt="" width="485" height="364"  /></a>		
            <figcaption class="rollover-content">
                <div class="links-container"><a href="https://duckienad.com/dich-vu/man-hinh-led-cao-cap-gia-re-viet-nam/" class="project-link no-text" target="_blank" rel="noopener">Link</a></div>
                <div class="rollover-content-container">
                    <div class="entry-meta portfolio-categories"><span class="category-link"><a href="https://duckienad.com/project-category/cong-trinh-led/">LED</a></span></div>
                </div>
            </figcaption>
        </figure>
    </article>
</div>
@endforeach
