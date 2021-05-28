@include('layouts.header')
<div id="app">
  <div class="header">
    <div class="header__main">
      <div class="social">
        <a class="social__item social__item--twitter" href="https://twitter.com/ilovepdf_com" rel="noopener"
          target="_blank" title="Follow us on Twitter!"></a>
        <a class="social__item social__item--facebook" href="https://www.facebook.com/ilovepdfcom-238648522858564/"
          rel="noopener" target="_blank" title="Like us on Facebook!"></a>
      </div>
      <div class="brand">
        <div class="brand__logo">
          <a href="/" title="iLovePDF"><img src="{{asset('assets/img/ilovepdf.svg')}}" alt="iLovePDF" /></a>
        </div>
      </div>
      <div class="header__nav">
        <div class="main-menu" id="menuBig">
        </div>
      </div>
      <div class="top-menu">
        <ul class="nav">
          @guest
          @if (Route::has('login'))
          <!-- <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li> -->
          <li class="nav__item nav__item--gray">
            <a href="{{ route('login') }}"><span>{{ __('Login') }}</span></a>
          </li>
          @endif

          @if (Route::has('register'))
          <!-- <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li> -->
          <li class="nav__item nav__item--red">
            <a href="{{ route('register') }}"><i class="ico ico--user"></i><span>{{ __('Sign Up') }}</span></a>
          </li>
          @endif
          @else
          <!-- <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li> -->

          <li data-account="true" class="nav__item nav__item--sub nav__item--avatar nav__item--registered">
            <a href="https://www.ilovepdf.com/user" title="User area access">
              <img
                src="https://service.ilovepdf.com/avatar/96013becce880bfa039f83683ae218b2/Vtx5gBcQuR_Wz2umW-PbmnyHV4VGD1FG_1621946379?s=30"
                alt="Your avatar"><span>{{ Auth::user()->name }}</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 10 5">
                <polyline fill="#FFF" fill-rule="evenodd" points="160 30 165 35 170 30 160 30"
                  transform="translate(-160 -30)" />
              </svg>
            </a>
            <ul class="user-menu">
              <!-- <li class="user-menu__item ">
                <a href="https://www.ilovepdf.com/user"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                    <path
                      d="M9 0C4.032 0 0 4.032 0 9s4.032 9 9 9 9-4.032 9-9-4.032-9-9-9zm0 2.7c1.494 0 2.7 1.206 2.7 2.7S10.494 8.1 9 8.1 6.3 6.894 6.3 5.4 7.506 2.7 9 2.7zm0 12.6c-2.25 0-4.24-1.097-5.4-2.76C3.627 10.834 7.2 9.9 9 9.9c1.79 0 5.373.935 5.4 2.64-1.16 1.663-3.15 2.76-5.4 2.76z"
                      fill="#fff" fill-rule="evenodd" opacity=".87" />
                  </svg>
                  Account</a>
              </li> -->
              <!-- <li class="user-menu__item ">
                <a href="https://www.ilovepdf.com/user/team"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                    height="18">
                    <path
                      d="M9 0C4.032 0 0 4.032 0 9s4.032 9 9 9 9-4.032 9-9-4.032-9-9-9zM5.4 13.95a2.25 2.25 0 1 1 0-4.5 2.25 2.25 0 1 1 0 4.5zM6.75 5.4a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 1 1-4.5 0zm5.85 8.55a2.25 2.25 0 1 1 0-4.5 2.25 2.25 0 1 1 0 4.5z"
                      fill="#fff" fill-rule="evenodd" />
                  </svg>
                  Team </a>
              </li> -->
              <li class="user-menu__item ">
                <a href="https://www.ilovepdf.com/user/signatures"> <svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" height="21.734051012716918" width="16.934837357292963">
                    <path fill="rgb(255,255,255)" fill-opacity="1" opacity="1" fill-rule="evenodd"
                      d="M0.3437000653459604 9.94626752863985L0.00007451249712670766 20.95218195802797C-0.0027963070489008656 21.044130865796134 0.07764411745387433 21.120766077292352 0.17974322932631168 21.123351493725607C0.24764991284737578 21.125071068482757 0.3111371642765565 21.093123627221182 0.34510392548269986 21.04014028189165L4.250786907054897 14.947827008205202C3.5154008405294928 14.323539954673809 3.3177024122654233 13.30881636524293 3.8438818545712876 12.488050825431877C4.458811398356923 11.528847674622355 5.822820912467978 11.201051761981425 6.89010455512711 11.755988959362732C7.95738819778622 12.310926156744031 8.324176010164875 13.538655113616974 7.709246466379238 14.497858264426496C7.182720974808442 15.319163592167097 6.108087569302616 15.672334587938684 5.140410166203281 15.410389178582905L1.2465760148752687 21.484219952252097C1.1955062825232978 21.563881514585628 1.2258133309035781 21.66574435923436 1.314268702066143 21.71173698369169C1.3730501121331071 21.742300546794198 1.4456987838684605 21.74140980975543 1.5035345051982387 21.70941641736894L11.901936187490863 15.957259487969116C12.196948921580034 15.794065220763422 12.390474235351714 15.516213350448222 12.425203439789646 15.205984205721316L13.183373337296516 8.433401802297341C13.227163074850226 8.04223669935384 13.012211634724272 7.664294274529179 12.634150430443233 7.467720264812693L8.130388027304374 5.125976059455828C7.751810758443671 4.9291337204779735 7.280182957264657 4.950805803207099 6.925818796057154 5.181328021251319L0.8031511888668954 9.164267244979815C0.5232395834965327 9.346356325056156 0.35340532885162335 9.635419575766553 0.3437000653459604 9.94626752863985Z" />
                    <path fill="rgb(255,255,255)" fill-opacity="1" opacity="1" fill-rule="evenodd"
                      d="M14.136356315460514 7.383356423242556L7.489607687382696 3.9273603712712024C7.135786202732468 3.7433898734418825 7.055958207212513 3.271360039041392 7.311306868972364 2.8730522273737384L8.85731670083662 0.4614954614109C9.11266536259647 0.06318764974324854 9.606495338128674 -0.11056707391166905 9.960316822778902 0.07340342391765105L16.607065450856915 3.5293994758891025C16.960886935507133 3.7133699737184225 17.04071493102664 4.185399808118716 16.785366269266785 4.583707619786368L15.239356437402533 6.995264385749207C14.98400777564268 7.393572197416861 14.49017780011074 7.567326921071875 14.136356315460514 7.383356423242556Z" />
                  </svg>
                  Signatures</a>
              </li>
              <!-- <li class="user-menu__item ">
                <a href="/user/history">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                    <path
                      d="M8.996 18C4.06 18 0 13.94 0 9.004 0 4.06 4.06 0 9.004 0S18 4.06 18 9.004C18 13.94 13.94 18 8.996 18zm0-2.311c3.712 0 6.685-2.982 6.685-6.685 0-3.712-2.973-6.694-6.677-6.694A6.68 6.68 0 0 0 2.31 9.004c-.008 3.704 2.982 6.685 6.685 6.685zm.008-5.352c-.476 0-.841-.374-.841-.849V4.256c0-.476.365-.841.841-.841a.83.83 0 0 1 .841.841v4.392h3.143a.83.83 0 0 1 .841.841c0 .476-.365.849-.841.849H9.004z"
                      fill="#ffffff" />
                  </svg>
                  Last tasks</a>
              </li> -->

              <li class="user-menu__item user-menu__item--premium">
                <a href="/user/premium">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14">
                    <path
                      d="M16.2 0H1.8C.8 0 .01.78.01 1.75L0 12.25C0 13.22.8 14 1.8 14h14.4c1 0 1.8-.78 1.8-1.75V1.75C18 .78 17.2 0 16.2 0zm0 12.25H1.8V7h14.4v5.25zm0-8.75H1.8V1.75h14.4V3.5z"
                      fill="#fff" fill-rule="evenodd" />
                  </svg>
                  Upgrade to Premium</a>
              </li>

              <li class="divider"></li>
              <li>
                <a class="logout" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Log Out') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
            </ul>
          </li>

          @endguest

          <li class="nav__item nav__item--sub">
            <i class="ico ico--hamburger"></i>
            <ul>
              <li><a href="index.html"><i class="ico ico--ilovepdf"></i> Home</a></li>
              <li class="nav__item--sub">
                <a><i class="ico ico--product"></i> Product</a>
                <ul class="product__menu">
                  <li><a href="#"><i class="ico ico--desktop"></i> Desktop</a></li>
                  <li><a href="#"><i class="ico ico--app"></i> Mobile</a></li>
                  <li><a href="#"><i class="ico ico--signature"></i> Signature</a></li>
                  <li><a href="/features"><i class="ico ico--features"></i> Features</a></li>
                  <li><a href="#" target="_blank" rel="noopener"><i class="ico ico--developer"></i> API Rest</a></li>
                  <li><a href="#" rel="nofollow noopener" target="_blank"><i class="ico ico--wordpress"></i> Wordpress
                      Plugin</a></li>
                </ul>
              </li>
              <!-- <li class="nav__item--sub">
                          <a><i class="ico ico--solutions"></i> Solutions</a>
                          <ul>
                              <li><a href="business.html"><i class="ico ico--business"></i> Business</a></li>
                              <li><a href="education.html"><i class="ico ico--education"></i> Education</a></li>
                              <li><a href="https://developer.ilovepdf.com/" target="_blank" rel="noopener"><i class="ico ico--app"></i> Developers</a></li>
                          </ul>
                      </li> -->
              <li><a href="/pricing"><i class="ico ico--pricing"></i> Pricing</a></li>

              <!-- <li class="divider"></li>
                      <li class="nav__item--sub"><a href="#"><i class="ico ico--lang"></i> Language</a><span class="lang__current"><i class="ico ico--lang"></i>English <i class="ico ico--down"></i></span>
                          <ul class="lang__menu">
                              <li><a href="index.html"><svg aria-hidden="true" width="12" height="12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M435.848 83.466L172.804 346.51l-96.652-96.652c-4.686-4.686-12.284-4.686-16.971 0l-28.284 28.284c-4.686 4.686-4.686 12.284 0 16.971l133.421 133.421c4.686 4.686 12.284 4.686 16.971 0l299.813-299.813c4.686-4.686 4.686-12.284 0-16.971l-28.284-28.284c-4.686-4.686-12.284-4.686-16.97 0z" class=""></path></svg> English</a></li>
                              <li><a href="es.html"> Español</a></li>
                              <li><a href="fr.html"> Français</a></li>
                              <li><a href="de.html"> Deutsch</a></li>
                              <li><a href="it.html"> Italiano</a></li>
                              <li><a href="pt.html"> Português</a></li>
                              <li><a href="ja.html"> 日本語</a></li>
                              <li><a href="ru.html"> Pусский</a></li>
                              <li><a href="ko.html"> 한국어</a></li>
                              <li><a href="zh-cn.html"> 中文 (简体)</a></li>
                              <li><a href="zh-tw.html"> 中文 (繁體)</a></li>
                              <li><a href="ar.html"> العربية</a></li>
                              <li><a href="bg.html"> Български</a></li>
                              <li><a href="ca.html"> Català</a></li>
                              <li><a href="nl.html"> Dutch</a></li>
                              <li><a href="el.html"> Ελληνικά</a></li>
                              <li><a href="hi.html"> हिन्दी</a></li>
                              <li><a href="id.html"> Bahasa Indonesia</a></li>
                              <li><a href="ms.html"> Bahasa Melayu</a></li>
                              <li><a href="pl.html"> Polski</a></li>
                              <li><a href="sv.html"> Svenska</a></li>
                              <li><a href="th.html"> ภาษาไทย</a></li>
                              <li><a href="tr.html"> Türkçe</a></li>
                              <li><a href="uk.html"> Українська</a></li>
                              <li><a href="vi.html"> Tiếng Việt</a></li>
                          </ul>
                      </li> -->
              <!-- <li class="nav__item--sub"><a ><i class="ico ico--help"></i> Help</a>
                          <ul>
                              <li><a href="help/faq.html"><i class="ico ico--faq"></i> FAQ</a></li>
                              <li><a href="help/documentation.html"><i class="ico ico--documentation"></i> Tools</a></li>
                              <li><a href="help/legal.html"><i class="ico ico--legal"></i> Legal &amp; Privacy</a></li>
                              <li><a href="help/about.html"><i class="ico ico--about"></i> Our Story</a></li>
                              <li><a  href="contact.html"><i class="ico ico--contact"></i> Contact</a></li>
                          </ul>
                      </li> -->
              <!-- <li class="divider"></li>
                      <li><a href="https://www.iloveimg.com/"><i class="ico ico--iloveimg"></i> iLoveIMG</a></li> -->
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </div>

  <main class="main">
    @yield('home')
    @yield('feature')
    @yield('pricing')

  </main>

  <div class="footer">
    <div class="footer__copy">
      &copy; iLovePDF 2021 &reg; - Your PDF Editor </div>
  </div>
  <div id="network" class="network">
    <i class="ico ico--network"></i>
    <div class="network__text">
      Woops! Something is wrong with your Internet connection... </div>
  </div>

  @include('layouts.footer')

  <script>
  var uCookie = {
    'ck': 0,
    'uc': 'RU',
    'content': '<span class=\"txtSmall\">We use own and third party Cookies to develop statistical information and show custom advertising through browsing analysis sharing it with our partners. By using iLovePDF, you agree to <a target=\"_blank\" href=\"/help/cookies\" style=\"text-decoration: underline;\">our use of cookies</a></span>. <br/><a class=\"langtoas langtoas--big\" style=\"width:auto;margin-left: 0px;margin-top:10px;\">Ok</a>',
    'title': 'Cookie European Law'
  }
  </script>
  <script src="{{asset('assets/js/dist/web.e593f0b.js')}}" async="async"></script>
  <script src="{{asset('assets/js/dist/sign.e593f0b.js')}}" async="async"></script>
  <script src="{{asset('assets/js/dist/pages.e593f0b.js')}}" async="async"></script>
</div>
</body>

</html>