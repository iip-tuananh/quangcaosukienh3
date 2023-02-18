<!DOCTYPE html>
<html lang="vi" prefix="og: https://ogp.me/ns#" class="no-js over-x-hidden" >
<head class="over-x-hidden">
    <meta charset="UTF-8" />
    <link rel="icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ url('' . $setting->favicon) }}">
    <meta name="robots" content="noodp,index,follow" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <link rel="canonical" href="{{ \Request::url() }}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{ \Request::url() }}" />
    <meta property="og:site_name" content="JicaFood" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:image:secure_url" content="@yield('image')" />
    <meta property="og:image:width" content="548" />
    <meta property="og:image:height" content="343" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:image" content="@yield('image')" />
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/duckienad.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0.2"}};
        /*! This file is auto-generated */
        !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode,e=(p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0),i.toDataURL());return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([129777,127995,8205,129778,127999],[129777,127995,8203,129778,127999])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" href="{{asset('frontend/css/a5ff7.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <style id='wp-block-library-theme-inline-css' type='text/css'>
        .wp-block-audio figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio figcaption{color:hsla(0,0%,100%,.65)}.wp-block-code{border:1px solid #ccc;border-radius:4px;font-family:Menlo,Consolas,monaco,monospace;padding:.8em 1em}.wp-block-embed figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed figcaption{color:hsla(0,0%,100%,.65)}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:hsla(0,0%,100%,.65)}.wp-block-image figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-image figcaption{color:hsla(0,0%,100%,.65)}.wp-block-pullquote{border-top:4px solid;border-bottom:4px solid;margin-bottom:1.75em;color:currentColor}.wp-block-pullquote__citation,.wp-block-pullquote cite,.wp-block-pullquote footer{color:currentColor;text-transform:uppercase;font-size:.8125em;font-style:normal}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;position:relative;font-style:normal}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large,.wp-block-quote.is-style-plain{border:none}.wp-block-search .wp-block-search__label{font-weight:700}:where(.wp-block-group.has-background){padding:1.25em 2.375em}.wp-block-separator.has-css-opacity{opacity:.4}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto}.wp-block-separator.has-alpha-channel-opacity{opacity:1}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table thead{border-bottom:3px solid}.wp-block-table tfoot{border-top:3px solid}.wp-block-table td,.wp-block-table th{padding:.5em;border:1px solid;word-break:normal}.wp-block-table figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video figcaption{color:hsla(0,0%,100%,.65)}.wp-block-template-part.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #FFF;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--accent: #12b24c;--wp--preset--color--dark-gray: #111;--wp--preset--color--light-gray: #767676;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
    </style>
    <link rel="stylesheet" href="{{asset('frontend/css/9977f.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('frontend/css/66230.css')}}" media="all" />
    <style id='ez-toc-inline-css' type='text/css'>
        div#ez-toc-container p.ez-toc-title {font-size: 120%;}div#ez-toc-container p.ez-toc-title {font-weight: 500;}div#ez-toc-container ul li {font-size: 95%;}
    </style>
    <link rel="stylesheet" href="{{asset('frontend/css/9d3e9.css')}}" media="all" />
    <link rel='stylesheet' id='dt-web-fonts-css'  href='https://fonts.googleapis.com/css?family=Roboto:400,500,600,700%7CRoboto+Condensed:400,600,700%7CRaleway:400,600,700%7CQuicksand:400,500,600,700%7COpen+Sans:400,600,700' type='text/css' media='all' />
    <link rel="stylesheet" href="{{asset('frontend/css/c2585.css')}}" media="all" />
    <style id='dt-main-inline-css' type='text/css'>
        body #load {
        display: block;
        height: 100%;
        overflow: hidden;
        position: fixed;
        width: 100%;
        z-index: 9901;
        opacity: 1;
        visibility: visible;
        transition: all .35s ease-out;
        }
        .load-wrap {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-repeat: no-repeat;
        text-align: center;
        }
        .load-wrap > svg {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        }
        #load {
        background-color: #ffffff;
        }
        .uil-default rect:not(.bk) {
        fill: #12b24c;
        }
        .uil-ring > path {
        fill: #12b24c;
        }
        .ring-loader .circle {
        fill: #12b24c;
        }
        .ring-loader .moving-circle {
        fill: #12b24c;
        }
        .uil-hourglass .glass {
        stroke: #12b24c;
        }
        .uil-hourglass .sand {
        fill: #12b24c;
        }
        .spinner-loader .load-wrap {
        
            background-position: center center;
            background-size: 100px;
            height: 100%;
            width: 100%;
        
        background-image: url({{ url('frontend/images/load.svg')}});

        }
        .ring-loader .load-wrap {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='72' height='72' fill='%2312b24c'%3E   %3Cpath opacity='.25' d='M16 0 A16 16 0 0 0 16 32 A16 16 0 0 0 16 0 M16 4 A12 12 0 0 1 16 28 A12 12 0 0 1 16 4'/%3E   %3Cpath d='M16 0 A16 16 0 0 1 32 16 L28 16 A12 12 0 0 0 16 4z'%3E     %3CanimateTransform attributeName='transform' type='rotate' from='0 16 16' to='360 16 16' dur='0.8s' repeatCount='indefinite' /%3E   %3C/path%3E %3C/svg%3E");
        }
        .hourglass-loader .load-wrap {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='72' height='72' fill='%2312b24c'%3E   %3Cpath transform='translate(2)' d='M0 12 V20 H4 V12z'%3E      %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline'  /%3E   %3C/path%3E   %3Cpath transform='translate(8)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.2' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline'  /%3E   %3C/path%3E   %3Cpath transform='translate(14)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.4' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline' /%3E   %3C/path%3E   %3Cpath transform='translate(20)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.6' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline' /%3E   %3C/path%3E   %3Cpath transform='translate(26)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.8' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline' /%3E   %3C/path%3E %3C/svg%3E");
        }
    </style>
    <link rel="stylesheet" href="{{asset('frontend/css/0f940.css')}}" media="all" />
    <link rel='stylesheet' id='ultimate-google-fonts-css'  href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:regular,700' type='text/css' media='all' />
    <link rel="stylesheet" href="{{asset('frontend/css/4e0bc.css')}}" media="all" />
    <script src="{{asset('frontend/js/d805c.js')}}"></script>
    <script type='text/javascript' id='cookie-notice-front-js-extra'>
        /* <![CDATA[ */
        var cnArgs = {"ajaxUrl":"https:\/\/duckienad.com\/wp-admin\/admin-ajax.php","nonce":"3e8522be0f","hideEffect":"fade","position":"top","onScroll":"0","onScrollOffset":"100","onClick":"0","cookieName":"cookie_notice_accepted","cookieTime":"2592000","cookieTimeRejected":"2592000","cookiePath":"\/","cookieDomain":"","redirection":"0","cache":"1","refuse":"0","revokeCookies":"0","revokeCookiesOpt":"automatic","secure":"1"};
        /* ]]> */
    </script>
    <style>
        .img-moblie{
background-image: url('{{$setting->logo}}');
}
    </style>
    <script async src="{{asset('frontend/js/545b0.js')}}"></script>
    <script src="{{asset('frontend/js/new.js')}}"></script>
    <script src="{{asset('frontend/js/ac093.js')}}"></script>
    <script data-cfasync="false">
        window.a2a_config=window.a2a_config||{};a2a_config.callbacks=[];a2a_config.overlays=[];a2a_config.templates={};a2a_localize = {
            Share: "Share",
            Save: "Save",
            Subscribe: "Subscribe",
            Email: "Email",
            Bookmark: "Bookmark",
            ShowAll: "Show all",
            ShowLess: "Show less",
            FindServices: "Find service(s)",
            FindAnyServiceToAddTo: "Instantly find any service to add to",
            PoweredBy: "Powered by",
            ShareViaEmail: "Share via email",
            SubscribeViaEmail: "Subscribe via email",
            BookmarkInYourBrowser: "Bookmark in your browser",
            BookmarkInstructions: "Press Ctrl+D or \u2318+D to bookmark this page",
            AddToYourFavorites: "Add to your favorites",
            SendFromWebOrProgram: "Send from any email address or email program",
            EmailProgram: "Email program",
            More: "More&#8230;",
            ThanksForSharing: "Thanks for sharing!",
            ThanksForFollowing: "Thanks for following!"
        };
        
        (function(d,s,a,b){a=d.createElement(s);b=d.getElementsByTagName(s)[0];a.async=1;a.src="https://static.addtoany.com/menu/page.js";b.parentNode.insertBefore(a,b);})(document,"script");
    </script>
    <style>
        .hotline-phone-ring-circle {
        border-color: #b67848;
        }
        .hotline-phone-ring-circle-fill, .hotline-phone-ring-img-circle, .hotline-bar {
        background-color: #b67848;
        }
    </style>
    <style>
        .hotline-phone-ring-wrap {
        left: 20px;						 
        bottom: 20px;					
        }
    </style>
    <script type="text/javascript" id="the7-loader-script">
        document.addEventListener("DOMContentLoaded", function(event) { 
            var load = document.getElementById("load");
            if(!load.classList.contains('loader-removed')){
                var removeLoading = setTimeout(function() {
                    load.className += " loader-removed";
                }, 300);
            }
        });
    </script>
    <style type="text/css" id="wp-custom-css">
        .archive-header { display: none; }		
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1535471023407{padding-top: 50px !important;padding-bottom: -20px !important;}.vc_custom_1529813033684{padding-top: 20px !important;}.vc_custom_1529765457980{padding-top: 0px !important;}.vc_custom_1529832722393{padding-bottom: 20px !important;}.vc_custom_1495112557524{padding-bottom: 50px !important;}.vc_custom_1495112563645{padding-bottom: 50px !important;}.vc_custom_1495112570142{padding-bottom: 50px !important;}.vc_custom_1495112577073{padding-bottom: 50px !important;}.vc_custom_1535471071874{padding-top: 5px !important;}.vc_custom_1590041539253{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1590041077071{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1590041087872{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1590041097033{margin-bottom: 0px !important;padding-bottom: 20px !important;}</style>
    <noscript>
        <style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style>
    </noscript>
    <style id='the7-custom-inline-css' type='text/css'>
        /* Archives */
        .archive .page-header #page-title { 
        display: none;
        }
    </style>
</head>
<body data-rsssl=1 class="home page-template-default page page-id-363 wp-embed-responsive the7-core-ver-2.5.7.1 slideshow-on dt-responsive-on right-mobile-menu-close-icon ouside-menu-close-icon mobile-hamburger-close-bg-enable mobile-hamburger-close-bg-hover-enable  fade-medium-mobile-menu-close-icon fade-medium-menu-close-icon srcset-enabled btn-flat custom-btn-color custom-btn-hover-color phantom-slide phantom-shadow-decoration phantom-logo-off sticky-mobile-header top-header first-switch-logo-left first-switch-menu-right second-switch-logo-left second-switch-menu-right right-mobile-menu layzr-loading-on no-avatars popup-message-style dt-fa-compatibility the7-ver-9.7.2 wpb-js-composer js-comp-ver-5.0.1 vc_responsive cookies-not-set over-x-hidden">
    <style>
        .over-x-hidden{
            overflow-x: hidden !important;
        }
    </style>
    <!-- The7 9.7.2 -->
    <div id="load" class="spinner-loader">
        <div class="load-wrap"></div>
    </div>
    <div id="page" >
 
        @include('layouts.header.index')
        <style id="the7-page-content-style">
            #main {
            padding-top: 0px;
            padding-bottom: 0px;
            }
            @media screen and (max-width: 778px) {
            #main {
            padding-top: 0px;
            padding-bottom: 0px;
            }
            }
        </style>
        @yield('content')
        <!-- #main -->
        <!-- !Footer -->
        @include('layouts.footer.index')
        <!-- #footer -->
        <a href="#" class="scroll-top"><span class="screen-reader-text">Go to Top</span></a>
    </div>
    <!-- #page -->
    <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
            <a href="tel:{{$setting->phone1}}" class="pps-btn-img">
            <img src="{{asset('frontend/images/icon-2.png')}}" alt="Số điện thoại" width="50" />
            </a>
            </div>
        </div>
        <div class="hotline-bar">
            <a href="tel:{{$setting->phone1}}">
            <span class="text-hotline">&nbsp;&nbsp;&nbsp;{{$setting->phone1}}</span>
            </a>
        </div>
    </div>
    <link rel="stylesheet" href="{{asset('frontend/css/e2c47.css')}}" media="all" />
    <script src="{{asset('frontend/js/5036d.js')}}"></script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
        /* <![CDATA[ */
        var wpcf7 = {"api":{"root":"","namespace":"contact-form-7\/v1"},"cached":"1"};
        /* ]]> */
    </script>
    <script src="{{asset('frontend/js/b68ea.js')}}"></script>
    <script type='text/javascript' id='q2w3_fixed_widget-js-extra'>
        /* <![CDATA[ */
        var q2w3_sidebar_options = [{"sidebar":"sidebar_3","margin_top":57,"margin_bottom":0,"stop_id":"","screen_max_width":600,"screen_max_height":600,"width_inherit":false,"refresh_interval":1500,"window_load_hook":false,"disable_mo_api":false,"widgets":["media_image-5","presscore-contact-info-widget-4","media_image-7","a2a_share_save_widget-2"]},{"sidebar":"sidebar_6","margin_top":57,"margin_bottom":0,"stop_id":"","screen_max_width":600,"screen_max_height":600,"width_inherit":false,"refresh_interval":1500,"window_load_hook":false,"disable_mo_api":false,"widgets":["media_image-6","presscore-contact-info-widget-5","media_image-8","a2a_share_save_widget-3"]},{"sidebar":"sidebar_7","margin_top":57,"margin_bottom":0,"stop_id":"","screen_max_width":600,"screen_max_height":600,"width_inherit":false,"refresh_interval":1500,"window_load_hook":false,"disable_mo_api":false,"widgets":["media_image-12","presscore-contact-info-widget-6"]}];
        /* ]]> */
    </script>
    <script src="{{asset('frontend/js/81209.js')}}"></script>
    <script src="{{asset('frontend/js/f0e1e.js')}}"></script>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)" aria-label="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share" aria-label="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen" aria-label="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out" aria-label="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)" aria-label="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)" aria-label="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
            </div>
        </div>
    </div>
    <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="986520348046499"
        theme_color="#12b24c">
    </div>

</body>
</html>