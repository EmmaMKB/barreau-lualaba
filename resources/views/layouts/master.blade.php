<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8)]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
    <script></script>

    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />

    <title>Barreau de Lualaba - Accès Équitable à la Justice</title>
    <meta name="description" content="Le Barreau de Lualaba encadre les avocats et assure l'accès à la justice dans une région minière de la RDC, régulant les industries extractives et protégeant les droits des communautés locales." />
    <meta name="keywords" content="Barreau de Lualaba, avocats, RDC, justice, industries extractives, droits des communautés, État de droit" />


    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/superfish/css/superfish.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/dl-menu/component.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/font-awesome-new/css/font-awesome.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/fancybox/jquery.fancybox.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/flexslider/flexslider.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/style-responsive.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/style-custom.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href='{{ asset('assets/js/plugins/revslider/public/assets/css/settings.css') }}'
        type=text/css media=all>

</head>

<body data-rsssl="1" class="home page-template-default page page-id-3928 _masterslider _msp_version_3.4.5">
    <div class="body-wrapper float-menu" data-home="{{ route('home') }}">
        <header class="gdlr-header-wrapper">
            <!-- top navigation -->
            <div class="top-navigation-wrapper">
                <div class="top-navigation-container container">
                    <div class="top-navigation-right">
                        <div class="top-navigation-right-text">
                            <div class="top-bar-right-text-inner">
                                <i class="fa fa-envelope-o"></i> <a href="mailto:barreaulualaba@gmail.com"
                                    class="__cf_email__">barreaulualaba@gmail.com</a>
                            </div>
                            <div class="top-bar-right-text-inner">
                                <i class="fa fa-phone"></i>
                                <a href="tel:+243997766577">(+243) 997 766 577</a>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <!-- logo -->
            <div class="gdlr-header-inner">
                <div class="gdlr-header-container container">
                    <!-- logo -->
                    <div class="gdlr-logo">
                        <a href="{{ route('home') }}"> <img src="{{ asset('assets/images/logo.jpg') }}" alt=""
                                width="391" height="205" /> </a>
                        <div class="gdlr-responsive-navigation dl-menuwrapper" id="gdlr-responsive-navigation">
                            <button class="dl-trigger">Open Menu</button>

                            <ul id="menu-main-menu" class="dl-menu gdlr-main-mobile-menu">
                                <li class="menu-item menu-item-home">
                                    <a href="{{ route('home') }}" aria-current="page">Accueil</a>
                                </li>
                                <li
                                    class="menu-item menu-item-has-children-item menu-item-has-children gdlr-normal-menu">
                                    <a href="#" class="sf-with-ul-pre">Barreau</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="#">L'assemblée générale</a></li>
                                        <li class="menu-item"><a href="#">Conseil de l'ordre</a></li>
                                        <li class="menu-item"><a href="#">Bâtonnier</a></li>

                                    </ul>
                                </li>
                                <li
                                    class="menu-item menu-item-has-children-item menu-item-has-children gdlr-normal-menu">
                                    <a href="#" class="sf-with-ul-pre">L'ordre des avocats</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="#">Le tableau de l'ordre</a></li>
                                        <li class="menu-item"><a href="#">BCG</a></li>
                                    </ul>
                                </li>
                                {{-- <li class="menu-item menu-item-home current-menu-item gdlr-normal-menu">
                                    <a href="#">Publication et documentation</a>
                                </li>
                                <li class="menu-item menu-item-home current-menu-item gdlr-normal-menu">
                                    <a href="{{ route('home') }}">iBarreau</a>
                                </li> --}}
                                <li
                                    class="menu-item menu-item-has-children-item menu-item-has-children gdlr-normal-menu">
                                    <a href="#" class="sf-with-ul-pre">Galerie</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="#">Photos</a></li>
                                        <li class="menu-item"><a href="#">Vidéos</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-home current-menu-item gdlr-normal-menu">
                                    <a href="{{ route('home') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- navigation -->
                    <div class="gdlr-navigation-wrapper">
                        <nav class="gdlr-navigation" id="gdlr-main-navigation" role="navigation">
                            <ul id="menu-main-menu-1" class="sf-menu gdlr-main-menu">
                                <li class="menu-item menu-item-home current-menu-item gdlr-normal-menu">
                                    <a href="{{ route('home') }}">Accueil</a>
                                </li>
                                <li
                                    class="menu-item menu-item-has-children-item menu-item-has-children gdlr-normal-menu">
                                    <a href="#" class="sf-with-ul-pre">Barreau</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="#">L'assemblée générale</a></li>
                                        <li class="menu-item"><a href="#">Conseil de l'ordre</a></li>
                                        <li class="menu-item"><a href="#">Bâtonnier</a></li>

                                    </ul>
                                </li>
                                <li
                                    class="menu-item menu-item-has-children-item menu-item-has-children gdlr-normal-menu">
                                    <a href="#" class="sf-with-ul-pre">L'ordre des avocats</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="#">Le tableau de l'ordre</a></li>
                                        <li class="menu-item"><a href="#">BCG</a></li>
                                    </ul>
                                </li>
                                {{-- <li class="menu-item menu-item-home current-menu-item gdlr-normal-menu">
                                    <a href="#">Publication et documentation</a>
                                </li>
                                <li class="menu-item menu-item-home current-menu-item gdlr-normal-menu">
                                    <a href="{{ route('home') }}">iBarreau</a>
                                </li> --}}
                                <li
                                    class="menu-item menu-item-has-children-item menu-item-has-children gdlr-normal-menu">
                                    <a href="#" class="sf-with-ul-pre">Galerie</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="#">Photos</a></li>
                                        <li class="menu-item"><a href="#">Vidéos</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-home current-menu-item gdlr-normal-menu">
                                    <a href="{{ route('home') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>

        <div id="gdlr-header-substitute"></div>

       @yield('content')

        <footer class="footer-wrapper">
            <div class="footer-container container">
                <div class="footer-column three columns" id="footer-widget-1">
                    <div id="text-2" class="widget widget_text gdlr-item gdlr-widget">
                        <h3 class="gdlr-widget-title">A propos de nous</h3>
                        <div class="clear"></div>
                        <div class="textwidget">
                            Le Barreau de Lualaba, fondé après la réorganisation territoriale de
                            2015 qui a séparé le Lualaba de l’ancien Katanga en RDC, encadre les
                            avocats et facilite un accès équitable à la justice dans cette province
                            minière en plein essor. Depuis sa création, il régule les affaires des
                            industries extractives et défend les droits des communautés locales,
                            s’adaptant aux défis liés à la croissance économique et au respect
                            de l’État de droit.
                            <div class="clear"></div>
                            <div class="gdlr-space" style="margin-top: 20px;"></div>

                        </div>
                    </div>
                </div>
                <div class="footer-column three columns" id="footer-widget-2">
                    <div id="recent-posts-5" class="widget widget_recent_entries gdlr-item gdlr-widget">
                        <h3 class="gdlr-widget-title">Actualités</h3>
                        <div class="clear"></div>
                        <ul>
                            <li>
                                <a href="#">Visite du barreau</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="footer-column three columns" id="footer-widget-3">
                    <div id="text-3" class="widget widget_text gdlr-item gdlr-widget">
                        <h3 class="gdlr-widget-title">Contact</h3>
                        <div class="clear"></div>
                        <div class="textwidget">
                            Adresse du Barreau

                            <div class="clear"></div>
                            <div class="gdlr-space" style="margin-top: 10px;"></div>

                            <i class="gdlr-icon fa fa-mobile" style="color: #fff; font-size: 20px;"></i>
                            <a href="tel:+243997766577">(+243) 997766577</a>

                            <div class="clear"></div>
                            <div class="gdlr-space" style="margin-top: 10px;"></div>

                            <i class="gdlr-icon fa fa-envelope-o" style="color: #fff; font-size: 16px;"></i>
                            <a href="mailto:barreaulualaba@gmail.com"
                                class="__cf_email__">barreaulualaba@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="footer-column three columns" id="footer-widget-4">
                    <div id="nav_menu-5" class="widget widget_nav_menu gdlr-item gdlr-widget">
                        <h3 class="gdlr-widget-title">Liens Utiles</h3>
                        <div class="clear"></div>
                        <div class="menu-business-overview-footer-container">
                            <ul id="menu-business-overview-footer" class="menu">
                                <li class="menu-item"><a href="#">Le barreau</a></li>
                                <li class="menu-item"><a href="#">Galerie
                                        Areas</a></li>
                                <li class="menu-item"><a href="#">iBarreau</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="copyright-wrapper">
                <div class="copyright-container container">
                    <div class="copyright-left">
                        Copyright 2022 Tous droits réservés
                    </div>
                    <div class="copyright-right">

                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </footer>
    </div>
    <!-- body-wrapper -->



    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>


    <script type="text/javascript" src="{{ asset('assets/js/plugins/regenerator-runtime.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/gdlr-lawyer/gdlr-lawyer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/superfish/js/superfish.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/hoverIntent.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/dl-menu/modernizr.custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/dl-menu/jquery.dlmenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/jquery.easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/jquery.transit.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/fancybox/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/fancybox/helpers/jquery.fancybox-media.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/fancybox/helpers/jquery.fancybox-thumbs.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/flexslider/jquery.flexslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/gdlr-script.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script
        src="{{ asset('assets/js/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script
        src="{{ asset('assets/js/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script
        src="{{ asset('assets/js/plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js') }}">
    </script>
    <script
        src="{{ asset('assets/js/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script
        src="{{ asset('assets/js/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script
        src="{{ asset('assets/js/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js') }}">
    </script>

    <script>
        function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c);
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e
                    .gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e
                    .sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                                u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                            }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e
                            .fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) /
                            100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e
                                .fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script>
    <script>
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage =
                "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage +=
                "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style=font-size:16px;color:#BC0C06;>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        }
    </script>
    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script>
        if (setREVStartSize !== undefined) setREVStartSize({
            c: '#rev_slider_1_1',
            gridwidth: [1280],
            gridheight: [750],
            sliderLayout: 'auto'
        });
        var revapi1, tpj;
        (function() {
            if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",
                onLoad);
            else onLoad();

            function onLoad() {
                if (tpj === undefined) {
                    tpj = jQuery;
                    if ("off" == "on") tpj.noConflict();
                }
                if (tpj("#rev_slider_1_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_1_1");
                } else {
                    revapi1 = tpj("#rev_slider_1_1").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "plugins/revslider/public/assets/js/",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            arrows: {
                                style: "uranus",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: '',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 20,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 20,
                                    v_offset: 0
                                }
                            }
                        },
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: 1280,
                        gridheight: 750,
                        lazyType: "none",
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                };
            };
        }());
    </script>
    <script>
        var htmlDivCss = unescape(
            "%23rev_slider_1_1%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_1_1%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_1_1%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A"
        );
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>


</body>

</html>
