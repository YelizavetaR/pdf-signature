<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>iLovePDF, login to your account</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="description"
    content="Access to your iLovePDF account and get more features: more MB, more files at same time, see last processed images and much more!" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta name="author" content="ilovepdf.com" />
  <meta name="keywords" content="Sign to PDF" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons-pdf/favicon-32x32.png')}}">
  <meta property="og:site_name" content="iLovePDF - Online Signature for PDF" />
  <meta property="og:title" content="iLovePDF, login to your account" />
  <meta property="og:description"
    content="Access to your iLovePDF account and get more features: more MB, more files at same time, see last processed images and much more!" />
  <link rel="preload" href="{{asset('assets/font/rawline-700.woff2')}}" as="font" type="font/woff2"
    crossorigin="anonymous">
  <link rel="preload" href="{{asset('assets/font/rawline-600.woff2')}}" as="font" type="font/woff2"
    crossorigin="anonymous">
  <link rel="preload" href="{{asset('assets/font/rawline-500.woff2')}}" as="font" type="font/woff2"
    crossorigin="anonymous">
  <link rel="preload" href="{{asset('assets/font/rawline-400.woff2')}}" as="font" type="font/woff2"
    crossorigin="anonymous">
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
  <link rel="stylesheet" href="{{asset('assets/css/app.e593f0b.css')}}">
</head>

<body class="clean   lang-en-US ">
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
  <div class="main">

    <div class="auth">
      <div class="auth__form">
        <div class="auth__box">
          <div class="brand">
            <div class="brand__logo">
              <a href="/" title="iLovePDF"><img src="{{asset('assets/img/ilovepdf.svg')}}" alt="iLovePDF" /></a>
            </div>
          </div>
          <h2 class="form__title">Login to your account</h2>
          <div class="social-auth">
            <div id="w0" class="social-auth--big-buttons">
              <ul class="auth-clients">
                <li><a class="facebook auth-link"
                    href="https://www.facebook.com/dialog/oauth?client_id=127502793959418&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fwww.ilovepdf.com%2Fauth%2Fauth%3Fauthclient%3Dfacebook&amp;xoauth_displayname=My%20Application&amp;scope=email&amp;state=05b975ec0e7ce1621c266d77c80c4e51c8bce1873511197ec4929dc9d72d1876"
                    title="Facebook"><span class="auth-icon facebook"></span><span class="auth-link__text">Log in
                      with Facebook</span></a></li>
                <li><a class="google auth-link"
                    href="https://accounts.google.com/o/oauth2/auth?client_id=391438661644-2uum636mg2ckariol0if8h3364a1h6dc.apps.googleusercontent.com&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fwww.ilovepdf.com%2Fauth%2Fauth%3Fauthclient%3Dgoogle&amp;xoauth_displayname=My%20Application&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&amp;state=7e6425aa8e7faba8f286c8ee9ddcb08a9a3ff56c0fbf10313aab5b07aeaafe30"
                    title="Google"><span class="auth-icon google"></span><span class="auth-link__text">Log in with
                      Google</span></a></li>
              </ul>
            </div>
          </div>
          <form id="loginForm" action="{{ route('login') }}" method="post">
            @csrf

            <div class="form__group">
              <div class="field-loginEmail required" style="display: block;">
                <div class="input--icon input--email">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                  <input type="text" id="loginEmail" class="form-control" />
                </div>
                <div class="help-block"></div>
              </div>
            </div>
            <div class="form__group ">
              <div class="field-inputPasswordAuth required" style="display: block;">
                <div class="input--icon input--pwd">

                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                  <div class="help-block"></div>
                </div>
              </div>
              <div class="forget-password">
                <p>
                  @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}" id="forget-password">
                    {{ __('Forgot Your Password?') }}
                  </a>
                  @endif
                </p>
              </div>


              <div class="form-actions">
                <input type="hidden" name="remember" id="rememberAuth" value="1">
                <button type="submit" data-loading-text="Checking..." class="btn btn--red" id="loginBtn">
                  {{ __('Login') }} <i class="m-icon-swapright m-icon-white"></i>
                </button>
              </div>
              <div class="create-account">
                <p>
                  Don't have an account?&nbsp;&nbsp;<a href="/register" id="goRegister">Create an account</a>
                </p>
              </div>
              <script>
              // For inline register page; This logic is also present in "AbstractAuthState"
              (function() {
                function defer(method) {
                  if (window.Cookies) {
                    method();
                  } else {
                    setTimeout(function() {
                      defer(method)
                    }, 50);
                  }
                }
                defer(function() {
                  if (Intl && Intl.DateTimeFormat()) {
                    var tzNewValue = Intl.DateTimeFormat().resolvedOptions().timeZone;
                    if (tzNewValue) {
                      window.Cookies.set('auth_tz', tzNewValue);
                      var tzElem = document.querySelector("#signupform-timezone");
                      if (tzElem) tzElem.value = tzNewValue;
                    }
                  }
                });
              })();
              </script>
          </form>
        </div>
      </div>
      <div class="auth__info">
        <div class="auth__box auth__box--login-txt">
          <h1 class="title1">Log in to your workspace</h1>
          <p>Enter your email and password to access your iLovePDF account. You are one step closer to boosting your
            document productivity.</p>


        </div>

        <script>
        var toogle = document.querySelector('.toggle');
        toogle.addEventListener('click', function() {
          var toggleContent = document.querySelector('.toggle__content');
          if (toggleContent.style['display'] !== 'block') { //better to check that it is not the value you have
            toggleContent.style['display'] = 'block';
          } else {
            toggleContent.style['display'] = '';
          }
        })
        </script>
      </div>
    </div>
  </div>
  <script>
  var siteData = {
    csrfParam: '_csrf-ilovepdf',
    csrfToken: 'qzc4SMlzivAsp9q86i4Kr15m5RnqYAdFfe8P3uHsDyjOY3JlmjWnlk_RtPWBRkeabgepTdoDRDI2oF2Vt4J7Yw=='
  };
  var lang = 'en-US';
  var brand = 'iLovePDF';
  var brand_ref = 'ilovepdf';
  var nds = {
    'ck': 0,
    'content': '<p>We hope you like it and find it easier to use.<br>If you run into any issues, please <a href=\"/contact\">let us know</a>.<br>We can fix any problem if we know about it.</p>',
    'title': '<span style="color:#1D9D58">Welcome to the newly designed iLovePDF</span>'
  };
  </script>
  <script src="{{asset('assets/js/dist/js/app.e593f0b.js')}}" async="async"></script>
</body>


</html>