<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Bmazaj</title>
    <meta name='robots' content='max-image-preview:large' />
    <!-- Google Tag Manager for WordPress by gtm4wp.com -->
    <script data-cfasync="false" data-pagespeed-no-defer type="text/javascript">
        var gtm4wp_datalayer_name = "dataLayer";
        var dataLayer = dataLayer || [];
    </script>
    <!-- End Google Tag Manager for WordPress by gtm4wp.com -->
    <style id="tf_lazy_style">
        [data-tf-src] {
            opacity: 0
        }

        .tf_svg_lazy {
            transition: filter .3s linear !important;
            filter: blur(25px);
            opacity: 1;
            transform: translateZ(0)
        }

        .tf_svg_lazy_loaded {
            filter: blur(0)
        }

        .module[data-lazy],
        .module[data-lazy] .ui,
        .module_row[data-lazy]:not(.tb_first),
        .module_row[data-lazy]:not(.tb_first)>.row_inner,
        .module_row:not(.tb_first) .module_column[data-lazy],
        .module_row:not(.tb_first) .module_subrow[data-lazy],
        .module_subrow[data-lazy]>.subrow_inner {
            background-image: none !important
        }
    </style>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <noscript>
        <style>
            [data-tf-src] {
                display: none !important
            }

            .tf_svg_lazy {
                filter: none !important;
                opacity: 1 !important
            }
        </style>
    </noscript>
    <style id="tf_lazy_common">
        /*chrome bug,prevent run transition on the page loading*/
body{
    background-image: url('{{ asset( asset('storage/'.$logo->bg_image)) }}');
    background-repeat: no-repeat;
    background-size: cover;
}
        body:not(.page-loaded),
        body:not(.page-loaded) #header,
        body:not(.page-loaded) a,
        body:not(.page-loaded) img,
        body:not(.page-loaded) figure,
        body:not(.page-loaded) div,
        body:not(.page-loaded) i,
        body:not(.page-loaded) li,
        body:not(.page-loaded) span,
        body:not(.page-loaded) ul {
            animation: none !important;
            transition: none !important
        }

        body:not(.page-loaded) #main-nav li .sub-menu {
            display: none
        }

        img {
            max-width: 100%;
            height: auto
        }

        .tf_fa {
            display: inline-block;
            width: 1em;
            height: 1em;
            stroke-width: 0;
            stroke: currentColor;
            overflow: visible;
            fill: currentColor;
            pointer-events: none;
            vertical-align: middle
        }

        #tf_svg symbol {
            overflow: visible
        }

        .tf_lazy {
            position: relative;
            visibility: visible;
            display: block;
            opacity: .3
        }

        .wow .tf_lazy {
            visibility: hidden;
            opacity: 1;
            position: static;
            display: inline
        }

        div.tf_audio_lazy audio {
            visibility: hidden;
            height: 0;
            display: inline
        }

        .mejs-container {
            visibility: visible
        }

        .tf_iframe_lazy {
            transition: opacity .3s ease-in-out;
            min-height: 10px
        }

        .tf_carousel .tf_swiper-wrapper {
            display: flex
        }

        .tf_carousel .tf_swiper-slide {
            flex-shrink: 0;
            opacity: 0
        }

        .tf_carousel .tf_lazy {
            contain: none
        }

        .tf_swiper-wrapper>br,
        .tf_lazy.tf_swiper-wrapper .tf_lazy:after,
        .tf_lazy.tf_swiper-wrapper .tf_lazy:before {
            display: none
        }

        .tf_lazy:after,
        .tf_lazy:before {
            content: '';
            display: inline-block;
            position: absolute;
            width: 10px !important;
            height: 10px !important;
            margin: 0 3px;
            top: 50% !important;
            right: 50% !important;
            left: auto !important;
            border-radius: 100%;
            background-color: currentColor;
            visibility: visible;
            animation: tf-hrz-loader infinite .75s cubic-bezier(.2, .68, .18, 1.08)
        }

        .tf_lazy:after {
            width: 6px !important;
            height: 6px !important;
            right: auto !important;
            left: 50% !important;
            margin-top: 3px;
            animation-delay: -.4s
        }

        @keyframes tf-hrz-loader {
            0% {
                transform: scale(1);
                opacity: 1
            }

            50% {
                transform: scale(.1);
                opacity: .6
            }

            100% {
                transform: scale(1);
                opacity: 1
            }
        }

        .tf_lazy_lightbox {
            position: fixed;
            background: rgba(11, 11, 11, .8);
            color: #ccc;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 999
        }

        .tf_lazy_lightbox .tf_lazy:after,
        .tf_lazy_lightbox .tf_lazy:before {
            background: #fff
        }

        .tf_video_lazy video {
            width: 100%;
            height: 100%;
            position: static;
            object-fit: cover
        }
    </style>
    <noscript>
        <style>
            body:not(.page-loaded) #main-nav li .sub-menu {
                display: block
            }
        </style>
    </noscript>
    <link rel="prefetch" href="/front_assets/js/themify.script.min.js" as="script" importance="low" />
    <link rel="preload" href="/front_assets/js/themify.builder.script.min.js" as="script" importance="low" />
    <link rel="preload" href="https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fBBc4.woff2" as="font"
        type="font/woff2" crossorigin importance="high" />
    <link rel="preload" href="https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4mxK.woff2" as="font"
        type="font/woff2" crossorigin importance="high" />
    <link rel="preload" href="https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBBc4.woff2" as="font"
        type="font/woff2" crossorigin importance="high" />
    <link rel="preload" href="https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBBc4.woff2" as="font"
        type="font/woff2" crossorigin importance="high" />
    <link rel="preload" href="https://fonts.gstatic.com/s/robotocondensed/v25/ieVl2ZhZI2eCN5jzbjEETS9weq8-19K7DQ.woff2"
        as="font" type="font/woff2" crossorigin importance="high" />
    <link rel="preload"
        href="https://fonts.gstatic.com/s/robotocondensed/v25/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCQYbw.woff2"
        as="font" type="font/woff2" crossorigin importance="high" />
    <link rel="preload"
        href="https://fonts.gstatic.com/s/robotoslab/v23/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjo0oSmb2Rj.woff2"
        as="font" type="font/woff2" crossorigin importance="high" />
    <link rel="preload" importance="high" href="/front_assets/css/themify-2365787280.min.css" as="style">
    <link importance="high" id="themify_concate-css" rel="stylesheet"
        href="/front_assets/css/themify-2365787280.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="dns-prefetch" href="//www.google-analytics.com" />
    <link rel="alternate" type="application/rss+xml" title="bmazaj &raquo; Feed" href="https://mtn.bmazaj.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="bmazaj &raquo; Comments Feed"
        href="https://mtn.bmazaj.com/comments/feed/" />
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <script src='/front_assets/js/jquery.min.js' id='jquery-core-js'></script>
    <link rel="https://api.w.org/" href="https://mtn.bmazaj.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://mtn.bmazaj.com/wp-json/wp/v2/pages/17" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://mtn.bmazaj.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="https://mtn.bmazaj.com/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.0" />
    <link rel="canonical" href="https://mtn.bmazaj.com/" />
    <link rel='shortlink' href='https://mtn.bmazaj.com/' />
    <link rel="alternate" type="application/json+oembed"
        href="https://mtn.bmazaj.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmtn.bmazaj.com%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://mtn.bmazaj.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmtn.bmazaj.com%2F&#038;format=xml" />
    <!-- Google Tag Manager for WordPress by gtm4wp.com -->
    <!-- GTM Container placement set to automatic -->
    <script data-cfasync="false" data-pagespeed-no-defer type="text/javascript">
        var dataLayer_content = {
            "pagePostType": "frontpage",
            "pagePostType2": "single-page",
        };
        dataLayer.push(dataLayer_content);
    </script>
    <script data-cfasync="false">
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.' + 'js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', '0');
    </script>
    <!-- End Google Tag Manager -->
    <!-- End Google Tag Manager for WordPress by gtm4wp.com -->
    <style>
        .tf-tile.size-square-large,
        .tf-tile.size-square-large .map-container {
            width: 480px;
            height: 480px;
            max-width: 100%;
        }

        .tf-tile.size-square-small,
        .tf-tile.size-square-small .map-container {
            width: 240px;
            height: 240px;
            max-width: 100%;
        }

        .tf-tile.size-landscape,
        .tf-tile.size-landscape .map-container {
            width: 480px;
            height: 240px;
            max-width: 100%;
        }

        .tf-tile.size-portrait,
        .tf-tile.size-portrait .map-container {
            width: 240px;
            height: 480px;
            max-width: 100%;
        }
    </style>
    <style>
        :root {
            --builder-tiles-gutter: 0px
        }
    </style>
    <style id="tb_inline_styles">
        .tb_animation_on {
            overflow-x: hidden
        }

        .themify_builder .wow {
            visibility: hidden;
            animation-fill-mode: both
        }

        .themify_builder .tf_lax_done {
            transition-duration: .8s;
            transition-timing-function: cubic-bezier(.165, .84, .44, 1)
        }

        [data-sticky-active].tb_sticky_scroll_active {
            z-index: 1
        }

        [data-sticky-active].tb_sticky_scroll_active .hide-on-stick {
            display: none
        }

        @media screen and (min-width:1025px) {
            .hide-desktop {
                width: 0 !important;
                height: 0 !important;
                padding: 0 !important;
                visibility: hidden !important;
                margin: 0 !important;
                display: table-column !important;
                background: none !important
            }
        }

        @media screen and (min-width:769px) and (max-width:1024px) {
            .hide-tablet_landscape {
                width: 0 !important;
                height: 0 !important;
                padding: 0 !important;
                visibility: hidden !important;
                margin: 0 !important;
                display: table-column !important;
                background: none !important
            }
        }

        @media screen and (min-width:481px) and (max-width:768px) {
            .hide-tablet {
                width: 0 !important;
                height: 0 !important;
                padding: 0 !important;
                visibility: hidden !important;
                margin: 0 !important;
                display: table-column !important;
                background: none !important
            }
        }

        @media screen and (max-width:480px) {
            .hide-mobile {
                width: 0 !important;
                height: 0 !important;
                padding: 0 !important;
                visibility: hidden !important;
                margin: 0 !important;
                display: table-column !important;
                background: none !important
            }
        }
    </style>
    <noscript>
        <style>
            .themify_builder .wow,
            .wow .tf_lazy {
                visibility: visible !important
            }
        </style>
    </noscript>
</head>

<body class="home page-template-default page page-id-17 skin-white sidebar-none default_width tb_animation_on">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627" />
                    <feFuncG type="table" tableValues="0 0.49803921568627" />
                    <feFuncB type="table" tableValues="0 0.49803921568627" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 0.27843137254902" />
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0" />
                    <feFuncG type="table" tableValues="0 0.64705882352941" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.94901960784314" />
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.66274509803922" />
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <!-- GTM Container placement set to automatic -->
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe data-tf-not-load="1" src="https://www.googletagmanager.com/ns.html?id=" height="0"
            width="0" style="display:none;visibility:hidden" aria-hidden="true"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="pagewrap" class="hfeed site">
        <div id="headerwrap" class="tf_scrollbar">
            <a id="menu-icon" href="#"></a>
            <div id="mobile-menu" class="sidemenu sidemenu-off tf_scrollbar">
                <header id="header" class="pagewidth tf_clearfix" itemscope="itemscope"
                    itemtype="https://schema.org/WPHeader">
                    <div class="header-padding">
                        <div id="site-logo"><a href="https://mtn.bmazaj.com"
                                title="bmazaj"><span>Ivorycell</span></a>
                        </div>
                        <div id="site-description" class="site-description"><span>Ivorycell</span>
                        </div>
                        <div class="social-widget">
                            <div class="rss">
                                <a class="hs-rss-link" href="https://mtn.bmazaj.com/feed/">
                                    <svg aria-label="RSS" role="img" class="tf_fa tf-fas-rss">
                                        <use href="#tf-fas-rss"></use>
                                    </svg><span class="screen-reader-text">RSS</span></a>
                            </div>
                        </div>
                        <!-- /.social-widget -->
                        <div id="searchform-wrap">
                            <form method="get" id="searchform" action="https://mtn.bmazaj.com/"> <i
                                    class="icon-search"></i>
                                <input type="text" name="s" id="s" title="Search"
                                    value="" />
                            </form>
                        </div>
                        <!-- /searchform-wrap -->
                    </div>
                    <!-- /header-padding -->
                    <nav id="main-nav-wrap" itemscope="itemscope"
                        itemtype="https://schema.org/SiteNavigationElement">
                        <ul id="main-nav" class="main-nav tf_clearfix tf_box">
                            <li class="page_item page-item-17 current_page_item"><a href="/"
                                    aria-current="page">Home</a></li>
                        </ul>
                        <!-- /#main-nav -->
                    </nav>
                </header>
                <!-- /#header -->
            </div>
            <!-- /mobile-menu-panel -->
        </div>
        <!-- /#headerwrap -->
        <div id="body" class="tf_clearfix">
            <!-- layout-container -->
            <div id="layout" class="pagewidth tf_clearfix">
                <!-- content -->
                <main id="content" class="tf_clearfix">
                    <div id="page-17" class="type-page">
                        <!-- page-title -->
                        <time datetime="2022-05-28"></time>
                        <h1 itemprop="name" class="page-title">Home </h1>
                        <div class="page-content entry-content">
                            <!--themify_builder_content-->
                            <div id="themify_builder_content-17" data-postid="17"
                                class="themify_builder_content themify_builder_content-17 themify_builder tf_clear">
                                <!-- module_row -->
                                <div id="ffsasds" data-lazy="1"
                                    class="module_row themify_builder_row tb_ql4j664 tb_first tf_clearfix">
                                    <div class="row_inner col_align_top col-count-2 tf_box tf_w tf_rel"
                                        data-basecol="2" data-col_tablet="column4-2" data-col_mobile="column4-2">
                                        <div data-lazy="1"
                                            class="module_column tb-column col2-1 first tb_hx00665 tf_box">
                                            <div class="tb-column-inner tf_box tf_w">
                                                <!-- module image -->
                                                <div class="module module-image tb_h6yj95   image-left tf_mw"
                                                    data-lazy="1">
                                                    <a href="{{ url('/') }}">
                                                        @if ($logo)
                                                            <div class="image-wrap tf_rel tf_mw"> 
                                                                <img
                                                                    decoding="async" data-tf-not-load="1"
                                                                    importance="high"
                                                                    src="{{ asset('/storage/' . $logo->logo) }}"
                                                                    width="150" height="82"
                                                                    class="wp-post-image wp-image-238" title="Bmazaj"
                                                                    alt="Bmazaj"
                                                                    srcset="{{ asset('/storage/' . $logo->logo) }} 2048w"
                                                                    sizes="(max-width: 150px) 100vw, 150px" /> 
                                                            </div>
                                                        @endif
                                                    </a>
                                                    <!-- /image-wrap -->
                                                </div>
                                                <!-- /module image -->
                                            </div>
                                        </div>
                                        <div data-lazy="1"
                                            class="module_column tb-column col2-1 last tb_l56q666 tf_box">
                                            <div class="tb-column-inner tf_box tf_w">
                                                <!-- module image -->
                                                <div class="module module-image tb_l1x8311   image-right tf_mw"
                                                    data-lazy="1">
                                                    <div class="image-wrap tf_rel tf_mw"> </div>
                                                    <!-- /image-wrap -->
                                                </div>
                                                <!-- /module image -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row_inner -->
                                </div>
                                <!-- /module_row -->

                                <!-- Content from yield ========================================================================================================== -->
                                @yield('content')
                                <!-- // Content from yield ======================================================================================================= -->

                            </div>
                            <!--/themify_builder_content-->
                            <!-- /comments -->
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!-- /.type-page -->
                </main>
                <!-- /content -->
            </div>
            <!-- /layout-container -->
        </div>
        <!-- /body -->
        <div id="footerwrap">

            <footer id="footer" class="pagewidth">


                <div class="footer-widgets tf_clearfix">

                    <div class="col3-1 first">
                    </div>
                    <div class="col3-1 ">
                    </div>
                    <div class="col3-1 ">
                    </div>

                </div>
                <!-- /.footer-widgets -->


                <div class="footer-text tf_clearfix">
                    <div class="one">&copy; <a href="https://mtn.bmazaj.com">bmazaj</a> 2022</div>
                    <div class="two">Powered by <a href="javascript:;" target="_blank">Ivorycell</a></div>
                </div>
                <!-- /footer-text -->

            </footer>
            <!-- /#footer -->

        </div>
        <!-- /#footerwrap -->
    </div>
    <!-- /#pagewrap -->

    <!-- wp_footer -->
    <!--googleoff:all-->
    <!--noindex-->
    <script type="text/template" id="tf_vars">
        var tbLocalScript = {"builder_url":"https://mtn.bmazaj.com/wp-content/themes/themify-stack/themify/themify-builder","js_modules":{"b":{"u":"/js/themify.builder.script.min.js","v":"5.6.2"},"sh":{"u":"/js/themify.scroll-highlight.min.js","v":"5.6.2"},"sty":{"u":"sticky.min.js","v":"5.6.2"}},"breakpoints":{"tablet_landscape":[769,1024],"tablet":[481,768],"mobile":480},"fullwidth_support":"","scrollHighlight":{"speed":900.009999999999990905052982270717620849609375},"addons":{"bgzs":{"match":".builder-zoom-scrolling","js":"https://mtn.bmazaj.com/wp-content/themes/themify-stack/themify/themify-builder/js/modules/bgzoom_scroll.js"},"bgzm":{"match":".builder-zooming","js":"https://mtn.bmazaj.com/wp-content/themes/themify-stack/themify/themify-builder/js/modules/bgzoom.js"},"p":{"match":".builder-parallax-scrolling","js":"https://mtn.bmazaj.com/wp-content/themes/themify-stack/themify/themify-builder/js/modules/parallax.js"},"fwv":{"match":"[data-tbfullwidthvideo]","js":"https://mtn.bmazaj.com/wp-content/themes/themify-stack/themify/themify-builder/js/modules/fullwidthvideo.js"},"fwr":{"match":".fullwidth.module_row,.fullwidth_row_container.module_row","js":"https://mtn.bmazaj.com/wp-content/themes/themify-stack/themify/themify-builder/js/modules/fullwidthRows.js"},"bgs":{"selector":":scope>.tb_slider","js":"https://mtn.bmazaj.com/wp-content/themes/themify-stack/themify/themify-builder/js/modules/backgroundSlider.js"},"rd":{"selector":".module-text-more","js":"https://mtn.bmazaj.com/wp-content/themes/themify-stack/themify/themify-builder/js/modules/readMore.js"},"cl":{"selector":"[data-tb_link]","js":"https://mtn.bmazaj.com/wp-content/themes/themify-stack/themify/themify-builder/js/modules/clickableComponent.js"},"fr":{"match":".tb_row_frame_wrap","css":"https://mtn.bmazaj.com/wp-content/themes/themify-stack/themify/themify-builder/css/modules/frames.css"},"bgz":{"match":".themify-bg-zoom","css":"https://mtn.bmazaj.com/wp-content/themes/themify-stack/themify/themify-builder/css/modules/bg-zoom.css"},"cv":{"selector":".builder_row_cover","css":"https://mtn.bmazaj.com/wp-content/themes/themify-stack/themify/themify-builder/css/modules/cover.css"}}};
    var themifyScript = {"expand":"<i class=\"ti-angle-down\" title=\"Expand\"><\/i>","collapse":"<i class=\"ti-close\" title=\"Collapse\"><\/i>","infiniteEnable":"0"};
    var themify_vars = {"version":"5.6.2","url":"https://mtn.bmazaj.com/wp-content/themes/themify-stack/themify","wp":"6.0","ajax_url":"https://mtn.bmazaj.com/wp-admin/admin-ajax.php","includesURL":"https://mtn.bmazaj.com/wp-includes/","emailSub":"Check this out!","nop":"Sorry, no posts found.","lightbox":{"contentImagesAreas":".type-gallery","i18n":{"tCounter":"%curr% of %total%"}},"s_v":"5.3.9","js_modules":{"fxh":{"u":"fixedheader.min.js","v":"5.6.2"},"lb":{"u":"lightbox.min.js","v":"5.6.2"},"gal":{"u":"themify.gallery.min.js","v":"5.6.2"},"sw":{"u":"swiper/swiper.min.js","v":"5.6.2"},"tc":{"u":"themify.carousel.min.js","v":"5.6.2"},"map":{"u":"map.min.js","v":"5.6.2"},"at":{"u":"autoTiles.min.js","v":"5.6.2"},"iso":{"u":"isotop.min.js","v":"5.6.2"},"is":{"u":"jquery.isotope.min.js","v":"5.6.2"},"inf":{"u":"infinite.min.js","v":"5.6.2"},"lax":{"u":"lax.min.js","v":"5.6.2"},"lx":{"u":"themify.lax.min.js","v":"5.6.2"},"video":{"u":"video-player.min.js","v":"5.6.2"},"audio":{"u":"audio-player.min.js","v":"5.6.2"},"side":{"u":"themify.sidemenu.min.js","v":"5.6.2"},"edge":{"u":"edge.Menu.min.js","v":"5.6.2"},"wow":{"u":"tf_wow.min.js","v":"5.6.2"},"sharer":{"u":"sharer.min.js","v":"5.6.2"},"mega":{"u":"megamenu.js","v":"5.6.2"},"drop":{"u":"themify.dropdown.min.js","v":"5.6.2"},"wc":{"u":"wc.min.js","v":"5.6.2"},"as":{"u":"ajax-search.min.js","v":"5.6.2"},"t":{"u":"tooltip.min.js","v":"5.6.2"}},"css_modules":{"sw":{"u":"swiper/swiper.min.css","v":"5.6.2"},"an":{"u":"animate.min.css","v":"5.6.2"},"video":{"u":"video.min.css","v":"5.6.2"},"audio":{"u":"audio.min.css","v":"5.6.2"},"drop":{"u":"dropdown.min.css","v":"5.6.2"},"lb":{"u":"lightbox.min.css","v":"5.6.2"},"t":{"u":"tooltip.min.css","v":"5.6.2"}},"menu_tooltips":[],"is_min":"1","wp_embed":"https://mtn.bmazaj.com/wp-includes/js/wp-embed.min.js","sw":{"site_url":"https://mtn.bmazaj.com","plugins_url":"plugins","sw_refresh":true},"theme_v":"5.6.0","theme_js":"https://mtn.bmazaj.com/wp-content/themes/themify-stack/js/themify.script.min.js","theme_url":"https://mtn.bmazaj.com/wp-content/themes/themify-stack","menu_point":"1200","done":{"tb_parallax":true,"tf_search_form":true,"tb_image":true,"tb_image_left":true,"tb_image_right":true,"tb_style":true}};
    </script>
    <!--/noindex-->
    <!--googleon:all-->
    <script nomodule defer src="/front_assets/js/fallback.min.js"></script>
    <link rel="preload" href="/front_assets/css/style.css" as="style" />
    <link rel='stylesheet' id='themify-tiles-css' href='/front_assets/css/style.css' media='all' />
    <script defer="defer" src='/front_assets/js/main.min.js' id='themify-main-script-js'></script>
    {{-- <script
        src='https://mtn.bmazaj.com/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-contact-form-7-tracker.js?ver=1.15.2'
        id='gtm4wp-contact-form-7-tracker-js'></script> --}}
    <script id='themify-tiles-js-extra'>
        var ThemifyTiles = {
            "ajax_nonce": "b9b1167049",
            "version": "1.3.0",
            "url": "https:\/\/mtn.bmazaj.com\/wp-content\/plugins\/themify-tiles\/",
            "ajax_url": "https:\/\/mtn.bmazaj.com\/wp-admin\/admin-ajax.php",
            "includes_url": "https:\/\/mtn.bmazaj.com\/wp-includes\/",
            "networkError": "Unknown network error. Please try again later.",
            "termSeparator": ", ",
            "galleryFadeSpeed": "300",
            "galleryEvent": "click",
            "transition_duration": "750",
            "isOriginLeft": "1",
            "gmap_key": "",
            "fluid_tiles": "yes",
            "fluid_tile_rules": [{
                "query": "screen and (max-width: 600px)",
                "size": "2"
            }, {
                "query": "screen and (min-width: 601px) and (max-width: 1001px)",
                "size": "4"
            }]
        };
    </script>
    <script defer="defer" src='/front_assets/js/script.js' id='themify-tiles-js'></script>
    <svg id="tf_svg" style="display:none">
        <defs>
            <symbol id="tf-fas-rss" viewBox="0 0 28 32">
                <path
                    d="M8 25.969q0 1.656-1.156 2.844t-2.813 1.188-2.844-1.188-1.188-2.844 1.188-2.813T4.031 22t2.813 1.156T8 25.969zm11 2.969q0 .438-.281.75t-.719.313h-3q-.438 0-.719-.281T14 29.064q-.375-5.25-4.094-8.969T.937 16.001q-.375 0-.656-.281T0 15.001v-3q0-.438.313-.719t.75-.281q7.25.438 12.375 5.563t5.563 12.375zm9 0q0 .438-.281.75t-.719.313h-3q-.438 0-.719-.281T23 29.064q-.375-9-6.719-15.344T.937 7.001q-.375 0-.656-.281T0 6.001v-3q0-.438.313-.719t.75-.281q5.375.188 10.281 2.406t8.5 5.781 5.781 8.469T28 28.938z">
                </path>
            </symbol>
            <style id="tf_fonts_style">
                .tf_fa.tf-fas-rss {
                    width: 0.875em
                }
            </style>
        </defs>
    </svg>

    <!-- SCHEMA BEGIN -->
    <script type="application/ld+json">
        [{
            "@context": "https:\/\/schema.org",
            "@type": "WebSite",
            "url": "https:\/\/mtn.bmazaj.com",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https:\/\/mtn.bmazaj.com?s={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }, {
            "@context": "https:\/\/schema.org",
            "@type": "WebPage",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https:\/\/mtn.bmazaj.com\/"
            },
            "headline": "Home",
            "datePublished": "2022-05-28T13:54:48+00:00",
            "dateModified": "2022-06-04T14:22:35+00:00",
            "description": ""
        }]
    </script><!-- /SCHEMA END -->
</body>

</html>
