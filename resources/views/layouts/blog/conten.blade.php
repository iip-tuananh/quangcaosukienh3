  <div class="visible wf-cell" data-post-id="8160" data-date="2023-02-03T11:41:59+07:00"
      data-name="{{ languageName($blog->title) }}">
      <article
          class="post project-odd visible post-8160 type-post status-publish format-standard has-post-thumbnail hentry category-lam-bien-quang-cao tag-bien-hang-rao tag-bien-quang-cao-cong-trinh category-71"
          data-name="{{ languageName($blog->title) }}" data-date="2023-02-03T11:41:59+07:00">
          <div class="post-thumbnail-wrap">
              <div class="post-thumbnail">
                  <span class="fancy-categories"><a href="{{ route('detailBlog', ['slug' => $blog->slug]) }}"
                          rel="category tag" style="background-color:#;color:#;">Làm biển quảng cáo</a></span>
                  <a href="{{ route('detailBlog', ['slug' => $blog->slug]) }}"
                      class="post-thumbnail-rollover layzr-bg layzr-bg"><img
                          class="iso-lazy-load preload-me iso-lazy-load"
                          src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20768%20576&#39;%2F%3E"
                          data-src="{{ $blog->image }}"
                          data-srcset="{{ $blog->image }} 768w, {{ $blog->image }} 1152w" alt=""
                          title="bien quang cao cong trinh xay dung vincons dream city" width="768"
                          height="576" /></a>
              </div>
          </div>
          <div class="post-entry-content">
              <h3 class="entry-title">
                  <a href="{{ route('detailBlog', ['slug' => $blog->slug]) }}" title="{{ languageName($blog->title) }}"
                      rel="bookmark">{{ languageName($blog->title) }}</a>
              </h3>
              <div class="entry-excerpt limit-text-3 ">
                  {{ languageName($blog->description) }}
              </div>
              <a href="{{ route('detailBlog', ['slug' => $blog->slug]) }}" class="post-details details-type-link"
                  aria-label="Read more about {{ languageName($blog->title) }}" rel="nofollow">Đọc thêm<i
                      class="dt-icon-the7-arrow-03" aria-hidden="true"></i></a>
          </div>
      </article>
  </div>
