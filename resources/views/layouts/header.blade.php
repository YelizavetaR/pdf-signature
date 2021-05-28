<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Sign PDF online. Digital signature of documents.</title>
  <meta name="description"
    content="Need to get a document signed? Draw your signature or request signatures easily. Add certificated signatures to PDF or eSign documents for free." />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta name="keywords" content="Sign to PDF" />
  <!-- <meta name="google-play-app" content="app-id=com.ilovepdf.www">-->
  <!-- <link rel="apple-touch-icon" href="{{asset('assets/img/app-icon.png')}}"> -->

  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons-pdf/favicon-32x32.png')}}">
  <meta property="og:site_name" content="iLovePDF - Online Signature for PDF" />
  <meta property="og:title" content="Sign PDF online. Digital signature of documents." />

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="preload" href="{{asset('assets/font/rawline-700.woff2')}}" as="font" type="font/woff2"
    crossorigin="anonymous">
  <link rel="preload" href="{{asset('assets/font/rawline-600.woff2')}}" as="font" type="font/woff2"
    crossorigin="anonymous">
  <link rel="preload" href="{{asset('assets/font/rawline-500.woff2')}}" as="font" type="font/woff2"
    crossorigin="anonymous">
  <link rel="preload" href="{{asset('assets/font/rawline-400.woff2')}}" as="font" type="font/woff2"
    crossorigin="anonymous">
  <link rel="prefetch" href="{{asset('assets/js/plupload/plupload.full.min.js')}}" crossorigin="anonymous">
  <script async src="{{asset('assets/js/securepubads.g.doubleclick.net/tag/js/gpt.js')}}"></script>
  <script>
  window.googletag = window.googletag || {
    cmd: []
  };
  googletag.cmd.push(function() {
    googletag.defineSlot('/22379932707/ILOVEPDF_Banner', [
      [728, 90],
      [970, 90],
      [320, 50],
      [320, 100],
      [300, 50]
    ], 'div-gpt-ad-1619852245510-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
  </script>
  <script>
  window.__browserSupports__ = [];
  try {
    var grid_supported = typeof document.createElement('div').style.grid === 'string';
    if (grid_supported) window.__browserSupports__.push('grid');
  } catch (e) {}

  document.addEventListener("DOMContentLoaded", function(event) {
    document.body.setAttribute("data-browser-supports", window.__browserSupports__.join(" "));
  });
  </script>
  <link rel="stylesheet" href="{{asset('assets/css/web.e593f0b.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/sign.e593f0b.css')}}">

</head>

<body class="lang-en-US tool-sign">
  <script>
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', "{{asset('assets/js/www.google-analytics.com/analytics.js')}}", 'ga');
  ga('create', 'UA-12651114-1 ', 'auto');
  ga('send', 'pageview');
  </script>