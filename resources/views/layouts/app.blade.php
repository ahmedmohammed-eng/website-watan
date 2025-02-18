<!DOCTYPE html>
<html data-wf-domain="yteam.webflow.io" data-wf-page="63de72ed01f0368567bf7e89" data-wf-site="63c40d3f58ee2efaea8cdba4">

<head>
    <meta charset="utf-8" />
    <title>Business WATAN</title>
    <meta content="Business - Webflow HTML website template" property="og:title" />
    <meta content="https://uploads-ssl.webflow.com/5c6eb5400253230156de2bd6/5cdc268dd7274d5c05c6009a_Business%20SEO.jpg"
        property="og:image" />
    <meta content="Business - Webflow HTML website template" property="twitter:title" />
    <meta content="https://uploads-ssl.webflow.com/5c6eb5400253230156de2bd6/5cdc268dd7274d5c05c6009a_Business%20SEO.jpg"
        property="twitter:image" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="{{ './style.css' }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: [
                    "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic",
                    "Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic"
                ]
            }
        });
    </script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
    <link href="https://uploads-ssl.webflow.com/63c40d3f58ee2efaea8cdba4/63c44f75d3e27ee8faa6cca8_Untitled-1.png"
        rel="shortcut icon" type="image/x-icon" />
    <link href="https://uploads-ssl.webflow.com/63c40d3f58ee2efaea8cdba4/63c44f6f3b2b767bdcaffd8b_Untitled-1%D8%A1.png"
        rel="apple-touch-icon" />
</head>

<body>

    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease"
        role="banner" class="navigation w-nav">
        <div class="navigation-wrap">
            <div class="div-block-71"><a href="/" class="logo-link w-nav-brand" aria-label="home"><img
                        src="https://uploads-ssl.webflow.com/63e4f2f746e8c22161309955/63e4f2f746e8c20d1f309a6e_YCash%20New%20Logo%2020235-01.png"
                        loading="lazy" alt="" class="image-33"></a>
                <div data-w-id="d724f4fd-eee5-8700-779b-1c3fa62cb9d1" class="toggle-parent"
                    style="background-color: rgb(216, 216, 216);">
                    <div data-w-id="d724f4fd-eee5-8700-779b-1c3fa62cb9d2" class="toggle-button"
                        style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-color: rgb(138, 138, 138);">
                    </div>
                </div>
                <div class="div-block-72">
                    <div class="text-block-32"></div>
                </div>
            </div>

            <select class="form-control Langchange">
                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>عربي</option>
            </select>
            <div class="div-block-75">
                <nav role="navigation" class="navigation-items w-nav-menu">
                    <div data-w-id="f28fab83-faaa-51f4-3c8f-03cadf67fa62" class="seach-parent-2"
                        style="width: 45px; height: 45px;">
                        <form action="/search" class="search-2 w-clearfix w-form"><input type="search"
                                class="search-input-2 w-input" maxlength="256" name="query" placeholder="Search…"
                                id="search" required="" style="opacity: 0;"><input type="submit" value=""
                                class="search-button-2 w-button">
                        </form>
                    </div><a href="/styleguide" class="navigation-item w-nav-link">{{ __('lang.وطن للعميل') }} </a><a
                        href="/projects" class="navigation-item w-nav-link"> {{ __('lang.وطن للمنطمات') }}</a><a
                        href="/team" aria-current="page" class="navigation-item w-nav-link">
                        {{ __('lang.وطن للأعمال') }}</a><a href="/contact"
                        class="navigation-item w-nav-link">{{ __('lang.وطن للبنوك') }}</a>
                    <div data-hover="true" data-delay="10"
                        class="nav-dropdown-toggle-copy-copy navigation-item w-dropdown">
                        <div class="dropdown-toggle-2 dropdown-toggle-3 dropdown-toggle-4 dropdown-toggle-5 dropdown-toggle-6 dropdown-toggle-7 dropdown-toggle-8 current w-dropdown-toggle"
                            id="w-dropdown-toggle-0" aria-controls="w-dropdown-list-0" aria-haspopup="menu"
                            aria-expanded="false" role="button" tabindex="0">
                            <div class="text-block-9">{{ __('lang.وطن للعميل') }}</div>
                        </div>
                        <nav class="dropdown-list-4 w-dropdown-list" id="w-dropdown-list-0"
                            aria-labelledby="w-dropdown-toggle-0"><a href="{{ url('Paymentwallet') }}"
                                class="dropdown-link-4 w-dropdown-link"
                                tabindex="0">{{ __('lang.محفظةالدفع') }}</a><a href="#"
                                class="dropdown-link55 w-dropdown-link" tabindex="0">
                                {{ __('lang.الخدمات المالية') }}</a><a href="#"
                                class="dropdown-link55 w-dropdown-link" tabindex="0">{{ __('lang.خدمة السداد') }}
                            </a><a href="#" class="dropdown-link-55 w-dropdown-link" tabindex="0">
                                {{ __('lang.التسويق الرقمي') }}</a></nav>
                    </div>
                    <div data-hover="true" data-delay="10"
                        class="nav-dropdown-toggle-copy-copy navigation-item w-dropdown" style="">
                        <div class="dropdown-toggle-2 dropdown-toggle-3 dropdown-toggle-4 dropdown-toggle-5 dropdown-toggle-6 dropdown-toggle-7 dropdown-toggle-8 current w-dropdown-toggle"
                            id="w-dropdown-toggle-1" aria-controls="w-dropdown-list-1" aria-haspopup="menu"
                            aria-expanded="false" role="button" tabindex="0">
                            <div class="text-block-9">{{ __('lang.وطن للمنطمات') }}</div>
                        </div>
                        <nav class="dropdown-list-4 w-dropdown-list" id="w-dropdown-list-1"
                            aria-labelledby="w-dropdown-toggle-1"><a href="{{ url('Humantransfers') }}"
                                class="dropdown-link-4 w-dropdown-link" tabindex="0">
                                {{ __('lang.منصة التحويلات الأنسانية') }}</a>
                        </nav>
                    </div>
                    <div data-hover="true" data-delay="10"
                        class="nav-dropdown-toggle-copy-copy navigation-item w-dropdown" style="">
                        <div class="dropdown-toggle-2 dropdown-toggle-3 dropdown-toggle-4 dropdown-toggle-5 dropdown-toggle-6 dropdown-toggle-7 dropdown-toggle-8 current w-dropdown-toggle"
                            id="w-dropdown-toggle-2" aria-controls="w-dropdown-list-2" aria-haspopup="menu"
                            aria-expanded="false" role="button" tabindex="0">
                            <div class="text-block-9">{{ __('lang.وطن للأعمال') }}</div>
                        </div>
                        <nav class="dropdown-list-4 w-dropdown-list" id="w-dropdown-list-2"
                            aria-labelledby="w-dropdown-toggle-2"><a href="/about"
                                class="dropdown-link-4 w-dropdown-link"
                                tabindex="0">{{ __('lang.تطبيق الأعمال') }}</a>
                            <a href="{{ url('Collectionservice') }}" class="dropdown-link55 w-dropdown-link"
                                tabindex="0"> {{ __('lang.خدمةالتحصيل') }}</a>
                            <a href="#" class="dropdown-link55 w-dropdown-link"
                                tabindex="0">{{ __('lang.التجارة الألكترونية') }}
                            </a>
                            <a href="{{ url('Businessapp') }}" class="dropdown-link55 w-dropdown-link"
                                tabindex="0"> {{ __('lang.التطبيقات المصغرة') }}</a>
                            <a href="/work/project-1" class="dropdown-link55 w-dropdown-link"
                                tabindex="0">{{ __('lang.التمويل الرقمي') }}
                            </a>
                            <a href="#" class="dropdown-link55 w-dropdown-link"
                                tabindex="0">{{ __('lang.سلسلة التوريد') }}
                            </a>
                            <a href="#" class="dropdown-link-55 w-dropdown-link" tabindex="0">
                                {{ __('lang.وكيل الخدمات المالية') }}
                            </a>
                        </nav>
                    </div>
                    <div data-hover="true" data-delay="10"
                        class="nav-dropdown-toggle-copy-copy navigation-item w-dropdown" style="">
                        <div class="dropdown-toggle-2 dropdown-toggle-3 dropdown-toggle-4 dropdown-toggle-5 dropdown-toggle-6 dropdown-toggle-7 dropdown-toggle-8 w-dropdown-toggle"
                            id="w-dropdown-toggle-3" aria-controls="w-dropdown-list-3" aria-haspopup="menu"
                            aria-expanded="false" role="button" tabindex="0">
                            <div class="text-block-9">{{ __('lang.وطن للبنوك') }} </div>
                        </div>
                        <nav class="dropdown-list-4 w-dropdown-list" id="w-dropdown-list-3"
                            aria-labelledby="w-dropdown-toggle-3"><a href="{{ url('Electronicpaymentsystem') }}"
                                aria-current="page" class="dropdown-link-4 w-dropdown-link"
                                tabindex="0">{{ __('lang.نظام المدفوعات الفورية') }}
                            </a>
                            <a href="#" class="dropdown-link55 w-dropdown-link"
                                tabindex="0">{{ __('lang.نظام اصدار بطائق الدفع') }}
                            </a>
                            <a href="#" class="dropdown-link-55 w-dropdown-link" tabindex="0">
                                {{ __('lang.نظام ادارة الصرافات الالية') }}
                            </a>
                        </nav>
                    </div>
                    <div data-hover="true" data-delay="10"
                        class="nav-dropdown-toggle-copy-copy navigation-item w-dropdown" style="">
                        <div class="dropdown-toggle-2 dropdown-toggle-3 dropdown-toggle-4 dropdown-toggle-5 dropdown-toggle-6 dropdown-toggle-7 dropdown-toggle-8 current w-dropdown-toggle"
                            id="w-dropdown-toggle-4" aria-controls="w-dropdown-list-4" aria-haspopup="menu"
                            aria-expanded="false" role="button" tabindex="0">
                            <div class="text-block-9">{{ __('lang.الشركة') }}</div>
                        </div>
                        <nav class="dropdown-list-4 w-dropdown-list" id="w-dropdown-list-4"
                            aria-labelledby="w-dropdown-toggle-4"><a href="/about"
                                class="dropdown-link-4 w-dropdown-link" tabindex="0">{{ __('lang.من نحن') }}</a>
                            <a href="#" class="dropdown-link55 w-dropdown-link"
                                tabindex="0">{{ __('lang.مقالات') }}</a><a href="#"
                                class="dropdown-link55 w-dropdown-link" tabindex="0">
                                {{ __('lang.تواصل معنا') }}</a>

                            <a href="#" class="dropdown-link55 w-dropdown-link" tabindex="0">
                                {{ __('lang.مركز التكنولوجيا المالية') }}
                            </a>
                            <a href="/work/project-1" class="dropdown-link55 w-dropdown-link" tabindex="0">
                                {{ __('lang.المسؤولية الأجتماعية') }}
                                </a>
                            <a href="#" class="dropdown-link55 w-dropdown-link" tabindex="0">   {{ __('lang.الحوكمة المؤسسية') }}
                                </a>
                            <a href="#" class="dropdown-link-55 w-dropdown-link" tabindex="0"></a>
                        </nav>
                    </div>
                    <a href="/work/project-1" class="button w-inline-block">
                        <div class="text-block">{{ __('lang.تسجيل الدخول') }}</div>
                    </a>
                </nav>
                <div class="menu-button w-nav-button" style="-webkit-user-select: text;" aria-label="menu"
                    role="button" tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu"
                    aria-expanded="false"><img
                        src="https://uploads-ssl.webflow.com/63b9a023f28c5014ed3cdbbc/63b9a024f28c5094703cdbe1_menu-icon.png"
                        width="22" alt="" class="menu-icon">
                    <div data-w-id="01591ef9-20ab-9f27-ce9e-972610523023" class="menu-parent">
                        <div data-w-id="01591ef9-20ab-9f27-ce9e-972610523024" class="menu-bar"
                            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        </div>
                        <div data-w-id="01591ef9-20ab-9f27-ce9e-972610523025" class="menu-bar"
                            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        </div>
                        <div data-w-id="01591ef9-20ab-9f27-ce9e-972610523026" class="menu-bar"
                            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
        <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
    </div>
    <div class="section cc-cta">
        <div class="container">
            <div class="cta-wrap">
                <div>
                    <div class="cta-text">
                        <div class="heading-jumbo-small"><br></div>
                        <div class="paragraph-bigger cc-bigger-light"><br></div>
                    </div>
                    <a href="/contact" class="button cc-jumbo-button w-inline-block">
                        <div></div>
                    </a>
                </div>
            </div>
        </div>
    </div>







    @yield('content')









    <div class="section">
        <div class="footer-2">
            <div class="footer-column-large"><a href="/" aria-current="page"
                    class="link-block-2 w-inline-block w--current"><img
                        src="https://uploads-ssl.webflow.com/63c40d3f58ee2efaea8cdba4/63c40d3f58ee2e514c8cdbe7_%D8%A7%D9%84%D8%AA%D8%B7%D8%A8%D9%8A%D9%82-72.png"
                        width="130" alt="logo" class="footer-logo" /></a>
                <a href="mailto:Info@ycash.company?subject=You&#x27;ve%20got%20mail!"
                    class="button cc-contact-us w-inline-block"><img
                        src="https://uploads-ssl.webflow.com/5d01778cda7c6cc8a63e0b64/5d1324fd4b05c818c6fbecc1_mail.svg"
                        width="19" alt="" class="footer-icon" />
                    <p class="footer-text-02">Info@ycash.company<br /></p>
                </a>
                <div class="footer-social-block-three-2"><a href="#"
                        class="footer-social-link-three w-inline-block"><img
                            src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a705912aaeb_facebook%20big%20filled.svg"
                            loading="lazy" alt="" /></a><a href="#"
                        class="footer-social-link-three w-inline-block"><img
                            src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124ab37a12aaf0_twitter%20big.svg"
                            loading="lazy" alt="" /></a><a href="#"
                        class="footer-social-link-three w-inline-block"><img
                            src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a61f512aaed_instagram%20big.svg"
                            loading="lazy" alt="" /></a><a href="#"
                        class="footer-social-link-three w-inline-block"><img
                            src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a717f12aaea_youtube%20small.svg"
                            loading="lazy" alt="" /></a>
                </div>
            </div>
            <div class="container-flex">
                <div class="w-layout-grid grid-14">
                    <div class="footer-column">
                        <div class="footer-title">{{ __('lang.وطن للمنطمات') }} </div>
                        <a href="/projects" class="footer-link-3"> {{ __('lang.منصة التحويلات الأنسانية') }}</a>
                    </div>
                    <div class="footer-column">
                        <div class="footer-title">{{ __('lang.وطن للعميل') }} </div><a href="#"
                            class="footer-link-3">{{ __('lang.محفظةالدفع') }}
                        </a>
                        <div data-hover="false" data-delay="4" class="dropdown-3 w-dropdown">
                            <div class="dropdown-toggle-9 w-dropdown-toggle">
                                <div class="text-block-31"> {{ __('lang.الخدمات المالية') }}</div>
                                <div class="icon-6 w-icon-dropdown-toggle">
                                </div>
                            </div>
                            <nav class="w-dropdown-list"><a href="#" class="w-dropdown-link"></a>
                                <a href="#" class="w-dropdown-link"></a>
                                <a href="#" class="w-dropdown-link"></a>
                            </nav>
                        </div><a href="#" class="footer-link-3"> {{ __('lang.الخدمات المالية') }}</a>
                        <a href="#" class="footer-link-3"> {{ __('lang.خدمة السداد') }}</a><a href="#"
                            class="footer-link-3"> {{ __('lang.التسويق الرقمي') }}</a>
                    </div>
                    <div class="footer-column">
                        <div class="footer-title">{{ __('lang.وطن للأعمال') }} </div><a href="#"
                            class="footer-link-3">{{ __('lang.تطبيق الأعمال') }}
                        </a>
                        <a href="{{ url('Collectionservice') }}" class="footer-link-3"> {{ __('lang.خدمةالتحصيل') }}
                        </a>
                        <a href="#" class="footer-link-3"> {{ __('lang.التجارة الألكترونية') }}</a>
                        <a href="#" class="footer-link-3"> {{ __('lang.التطبيقات المصغرة') }}</a><a
                            href="/blog" class="footer-link-3"> {{ __('lang.التمويل الرقمي') }}</a>
                        <a href="#" class="footer-link-3"> {{ __('lang.سلسلة التوريد') }}</a>
                        <a href="#" class="footer-link-3"> {{ __('lang.وكيل الخدمات المالية') }}</a>
                    </div>
                    <div class="footer-column">
                        <div class="footer-title">{{ __('lang.وطن للبنوك') }} </div><a href="/contact"
                            class="footer-link-3">{{ __('lang.نظام المدفوعات الفورية') }}
                        </a>
                        <a href="#" class="footer-link-3">{{ __('lang.نظام اصدار بطائق الدفع') }} </a><a
                            href="#" class="footer-link-3"> {{ __('lang.نظام ادارة الصرافات الالية') }}</a>
                    </div>
                    <div class="footer-column">
                        <div class="footer-title">{{ __('lang.الشركة') }}</div><a href="/about"
                            class="footer-link-3">{{ __('lang.من نحن') }} </a><a href="#"
                            class="footer-link-3">{{ __('lang.مقالات') }}</a>
                        <a href=""{{ url('/centerinfo') }}"" class="footer-link-3">
                            {{ __('lang.مركز التكنولوجيا المالية') }}</a>
                        <a href="#" class="footer-link-3">          {{ __('lang.المسؤولية الأجتماعية') }} </a>
                        <a href="{{ url('/centerinfo') }}" class="footer-link-3"> {{ __('lang.الحوكمة المؤسسية') }}</a>
                        <a href="#" class="footer-link-3">  {{ __('lang.تواصل معنا') }}</a> </a><a href="{{ url('/centerinfo') }}"
                            class="footer-link-3">{{ __('lang.الوظائف') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63c40d3f58ee2efaea8cdba4"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="https://uploads-ssl.webflow.com/63c40d3f58ee2efaea8cdba4/js/webflow.f81a11dfa.js" type="text/javascript">
    </script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script>
              <![endif]-->


    <script type="text/javascript">
        var url = "{{ route('LangChange') }}";
        $(".Langchange").change(function() {
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script>
</body>

</html>
