@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="gdlr-content">

            <!-- Sidebar With Content Section-->
            <div class="with-sidebar-wrapper">
                {{-- Slider --}}
                <section id="content-section-1">
                    <div class="gdlr-full-size-wrapper gdlr-show-all" style="padding-bottom: 0px; background-color: #ffffff;">
                        <div class="gdlr-master-slider-item gdlr-slider-item gdlr-item" style="margin-bottom: 0px;">

                            <div id=rev_slider_1_1_wrapper class="rev_slider_wrapper fullwidthbanner-container"
                                data-source=gallery
                                style="margin:0px auto;background:#202020;padding:0px;margin-top:0px;margin-bottom:0px;">
                                <div id=rev_slider_1_1 class="rev_slider fullwidthabanner" style=display:none;
                                    data-version=5.4.8.2>
                                    <ul>
                                        <li data-index=rs-1 data-transition=fade data-slotamount=default
                                            data-hideafterloop=0 data-hideslideonmobile=off data-easein=default
                                            data-easeout=default data-masterspeed=300 data-thumb=upload/slider-1-100x50.jpg
                                            data-rotate=0 data-saveperformance=off data-title=Slide data-param1 data-param2
                                            data-param3 data-param4 data-param5 data-param6 data-param7 data-param8
                                            data-param9 data-param10 data-description>
                                            <img src="{{ asset('assets/images/slider/slider-1.jpg') }}" alt title=slider-1 width=1800 height=1000
                                                data-bgposition="center center" data-bgfit=cover data-bgrepeat=no-repeat
                                                class=rev-slidebg data-no-retina>
                                            <div class="tp-caption tp-resizeme" id="slide-1-layer-1" data-x="center"
                                                data-hoffset data-y="center" data-voffset="-182" data-width="['auto']"
                                                data-height="['auto']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 5; white-space: nowrap; font-size: 38px; line-height: 38px; font-weight: 400; color: #b6a281; letter-spacing: 2px; font-family: Open Sans; text-transform: uppercase;">
                                                Nous prônons
                                            </div>
                                            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                                                id="slide-1-layer-3" data-x="center" data-hoffset data-y="center"
                                                data-voffset="-152" data-width="['103']" data-height="['1']"
                                                data-type="shape" data-responsive_offset="on"
                                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 6; background-color: rgb(182, 162, 129);"></div>
                                            <div class="tp-caption tp-resizeme" id="slide-1-layer-4" data-x="center"
                                                data-hoffset data-y="center" data-voffset="-80" data-width="['auto']"
                                                data-height="['auto']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":310,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 7; white-space: nowrap; font-size: 102px; line-height: 102px; font-weight: 700; color: #ffffff; letter-spacing: 8px; font-family: Open Sans; text-transform: uppercase;">
                                                L'intégrité
                                            </div>
                                            <div class="tp-caption tp-resizeme" id="slide-1-layer-5" data-x="center"
                                                data-hoffset data-y="center" data-voffset="33" data-width="['610']"
                                                data-height="['81']" data-visibility="['on','on','off','off']"
                                                data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":530,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textAlign="['center','center','center','center']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 8; min-width: 610px; max-width: 610px; max-width: 81px; max-width: 81px; white-space: normal; font-size: 20px; line-height: 38px; font-weight: 500; color: #dedede; letter-spacing: 0px; font-family: Open Sans;">
                                                Au barreau du Lualaba, c’est la base de la confiance et de la justice que nos avocats incarnent dans la défense des droits.
                                            </div>
                                        </li>
                                        <li data-index=rs-2 data-transition=fade data-slotamount=default
                                            data-hideafterloop=0 data-hideslideonmobile=off data-easein=default
                                            data-easeout=default data-masterspeed=300 data-thumb=upload/slider-2-100x50.jpg
                                            data-rotate=0 data-saveperformance=off data-title=Slide data-param1 data-param2
                                            data-param3 data-param4 data-param5 data-param6 data-param7 data-param8
                                            data-param9 data-param10 data-description>
                                            <img src="{{ asset('assets/images/slider/slider-2.jpg') }}" alt title=slider-2 width=1800 height=1000
                                                data-bgposition="center center" data-bgfit=cover data-bgrepeat=no-repeat
                                                class=rev-slidebg data-no-retina>
                                            <div class="tp-caption tp-resizeme" id="slide-2-layer-1" data-x="center"
                                                data-hoffset data-y="center" data-voffset="-182" data-width="['auto']"
                                                data-height="['auto']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 5; white-space: nowrap; font-size: 38px; line-height: 38px; font-weight: 400; color: #b6a281; letter-spacing: 2px; font-family: Open Sans; text-transform: uppercase;">
                                                Nous croyons en
                                            </div>
                                            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                                                id="slide-2-layer-3" data-x="center" data-hoffset data-y="center"
                                                data-voffset="-152" data-width="['103']" data-height="['1']"
                                                data-type="shape" data-responsive_offset="on"
                                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 6; background-color: rgb(182, 162, 129);"></div>
                                            <div class="tp-caption tp-resizeme" id="slide-2-layer-4" data-x="center"
                                                data-hoffset data-y="center" data-voffset="-80" data-width="['auto']"
                                                data-height="['auto']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":310,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 7; white-space: nowrap; font-size: 102px; line-height: 102px; font-weight: 700; color: #ffffff; letter-spacing: 8px; font-family: Open Sans; text-transform: uppercase;">
                                                L'unité
                                            </div>
                                            <div class="tp-caption tp-resizeme" id="slide-2-layer-5" data-x="center"
                                                data-hoffset data-y="center" data-voffset="33" data-width="['610']"
                                                data-height="['81']" data-visibility="['on','on','off','off']"
                                                data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":530,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textAlign="['center','center','center','center']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 8; min-width: 610px; max-width: 610px; max-width: 81px; max-width: 81px; white-space: normal; font-size: 20px; line-height: 38px; font-weight: 500; color: #dedede; letter-spacing: 0px; font-family: Open Sans;">
                                                la justice puise sa force dans l’unité des avocats, hommes et femmes, qui œuvrent ensemble pour la défense des droits de tous et d’une société équitable.
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                </div>

                            </div>



                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </section>
                {{-- About Us --}}
                <section id="content-section-2">
                    <div class="gdlr-full-size-wrapper gdlr-show-all"
                        style="padding-bottom: 0px; background-color: #ffffff;">
                        <div class="gdlr-service-half-background-item">
                            <div class="gdlr-half-left" style="background: #b1976b;">
                                <div class="half-container">
                                    <div class="gdlr-item-margin">
                                        <div class="gdlr-service-half-background-left-head">
                                            <div class="service-half-background-icon"><i class="fa fa-book"></i></div>
                                            <h3 class="gdlr-left-service-title">A propos du barreau</h3>
                                        </div>
                                        <div class="gdlr-left-service-content">
                                            <p>
                                                Le Barreau de Lualaba a été créé après la réorganisation territoriale
                                                de 2015, lorsque la province du Lualaba a été détachée de l’ancien Katanga en RDC.
                                                Il est né pour encadrer les avocats et assurer un accès équitable à la justice
                                                dans cette région minière en pleine expansion, marquée par des enjeux économiques
                                                et juridiques complexes.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-half-right"
                                style="background: url('{{ asset('assets/images/bg-service-half.jpg') }}') center 0px;">
                                <div class="half-container">
                                    <div class="gdlr-item-margin">
                                        <h3 class="gdlr-right-service-title"></h3>
                                        <div class="gdlr-right-service-caption">
                                            <p>Depuis sa création, le Barreau joue un rôle essentiel dans la
                                                régulation des affaires liées aux industries extractives et à
                                                la défense des droits des communautés locales. Il continue
                                                d’évoluer face aux défis posés par la croissance économique
                                                et le respect de l’État de droit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </section>

                {{-- <section id="content-section-6">
                    <div class="gdlr-color-wrapper gdlr-show-all no-skin"
                        style="background-color: #ffffff; padding-top: 70px; padding-bottom: 0px;">
                        <div class="container">
                            <div class="attorney-item-wrapper">
                                <div class="gdlr-item-title-wrapper gdlr-item pos-center gdlr-nav-container">
                                    <div class="gdlr-item-title-head">
                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Conseil de l'ordre
                                        </h3>
                                        <div class="gdlr-item-title-nav">
                                            <i class="icon-angle-left gdlr-flex-prev"></i><i
                                                class="icon-angle-right gdlr-flex-next"></i>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-item-title-divider"></div>
                                </div>
                                <div class="attorney-item-holder">
                                    <div class="gdlr-attorney-carousel-item gdlr-item">
                                        <div class="flexslider" data-type="carousel"
                                            data-nav-container="attorney-item-holder" data-columns="4">
                                            <ul class="slides">
                                                <li class="gdlr-item gdlr-attorney-item">
                                                    <div class="gdlr-attorney-thumbnail">
                                                        <a href="upload/attorney-1.jpg" data-rel="fancybox"><img
                                                                src="upload/attorney-1-400x300.jpg" alt=""
                                                                width="400" height="300" /></a>
                                                    </div>
                                                    <div class="attorney-content-wrapper">
                                                        <h3 class="attorney-title gdlr-title"><a href="#">Kevin
                                                                Stiller</a></h3>
                                                        <div class="attorney-position">Bank & Financial Lawyer</div>
                                                        <div class="attorney-excerpt">
                                                            Biography Cras justo odio, dapibus ac facilisis in, egestas eget
                                                            quam. Praesent commodo cursus magna, vel scelerisque nisl...
                                                            <div class="clear"></div>
                                                            <a href="#" class="excerpt-read-more">Read Profile</a>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section> --}}

                {{-- <section id="content-section-3">
                    <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin"
                        id="gdlr-parallax-wrapper-1" data-bgspeed="0.1"
                        style="background-image: url('upload/bg-homepage-service.jpg'); padding-bottom: 0px;">
                        <div class="container">
                            <div class="four columns">
                                <div class="gdlr-image-frame-item gdlr-item" style="margin-bottom: 0px;">
                                    <div class="gdlr-frame frame-type-none">
                                        <div class="gdlr-image-link-shortcode"><img src="upload/jack-smith.png"
                                                alt="" width="348" height="568" /></div>
                                    </div>
                                </div>
                            </div>
                            <div class="four columns">
                                <div class="gdlr-item gdlr-content-item" style="margin-bottom: 50px;"></div>
                                <div class="gdlr-ux column-service-ux">
                                    <div class="gdlr-item gdlr-column-service-item gdlr-type-1"
                                        style="margin-bottom: 27px;">
                                        <div class="column-service-icon gdlr-skin-box"><i class="fa fa-car"></i></div>
                                        <div class="column-service-content-wrapper">
                                            <h3 class="column-service-title">Ultricies Ipsum</h3>
                                            <div class="column-service-content gdlr-skin-content">
                                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                                                    ut fermentum massa justo sit amet risus. Sed posuere consec.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-ux column-service-ux">
                                    <div class="gdlr-item gdlr-column-service-item gdlr-type-1"
                                        style="margin-bottom: 27px;">
                                        <div class="column-service-icon gdlr-skin-box"><i class="fa fa-users"></i></div>
                                        <div class="column-service-content-wrapper">
                                            <h3 class="column-service-title">Vehicula Malesuada Nullam</h3>
                                            <div class="column-service-content gdlr-skin-content">
                                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                                                    ut fermentum massa justo sit amet risus. Sed posuere consec.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-ux column-service-ux">
                                    <div class="gdlr-item gdlr-column-service-item gdlr-type-1">
                                        <div class="column-service-icon gdlr-skin-box"><i class="fa fa-bank"></i></div>
                                        <div class="column-service-content-wrapper">
                                            <h3 class="column-service-title">Venenatis Consectetur</h3>
                                            <div class="column-service-content gdlr-skin-content">
                                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                                                    ut fermentum massa justo sit amet risus. Sed posuere consec.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="four columns">
                                <div class="gdlr-item gdlr-content-item" style="margin-bottom: 50px;"></div>
                                <div class="gdlr-ux column-service-ux">
                                    <div class="gdlr-item gdlr-column-service-item gdlr-type-1"
                                        style="margin-bottom: 27px;">
                                        <div class="column-service-icon gdlr-skin-box"><i class="fa fa-support"></i></div>
                                        <div class="column-service-content-wrapper">
                                            <h3 class="column-service-title">Tristique Purus Ridiculus</h3>
                                            <div class="column-service-content gdlr-skin-content">
                                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                                                    ut fermentum massa justo sit amet risus. Sed posuere consec.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-ux column-service-ux">
                                    <div class="gdlr-item gdlr-column-service-item gdlr-type-1"
                                        style="margin-bottom: 27px;">
                                        <div class="column-service-icon gdlr-skin-box"><i class="fa fa-ambulance"></i>
                                        </div>
                                        <div class="column-service-content-wrapper">
                                            <h3 class="column-service-title">Sollicitudin Magna</h3>
                                            <div class="column-service-content gdlr-skin-content">
                                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                                                    ut fermentum massa justo sit amet risus. Sed posuere consec.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-ux column-service-ux">
                                    <div class="gdlr-item gdlr-column-service-item gdlr-type-1">
                                        <div class="column-service-icon gdlr-skin-box"><i class="fa fa-home"></i></div>
                                        <div class="column-service-content-wrapper">
                                            <h3 class="column-service-title">Tortor Lorem Ultricies</h3>
                                            <div class="column-service-content gdlr-skin-content">
                                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                                                    ut fermentum massa justo sit amet risus. Sed posuere consec.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
                <section id="content-section-4">
                    <div class="section-container container">
                        <div class="gdlr-stunning-item-ux gdlr-ux">
                            <div class="gdlr-item gdlr-stunning-item type-normal" style="margin-bottom: 67px;">
                                <h2 class="stunning-item-title">Are you having any problems but can’t consult to anyone?
                                </h2>
                                <div class="stunning-item-caption gdlr-skin-info gdlr-title-font">
                                    <p>Talk to us! We promise we can help you! <strong>Call Now! (1)223-3344-334</strong>
                                    </p>
                                </div>
                                <div class="stunning-item-icon">
                                    <i class="fa fa-phone"></i>
                                    <div class="stunning-item-icon-divider gdlr-left"></div>
                                    <div class="stunning-item-icon-divider gdlr-right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                        <div class="gdlr-item-title-wrapper gdlr-item pos-center">
                            <div class="gdlr-item-title-head">
                                <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Legal Practice Areas</h3>
                            </div>
                            <a class="gdlr-item-title-link" href="practice-areas-modern-3-columns.html">View All
                                Practices<i class="fa fa-long-arrow-right icon-long-arrow-right"></i></a>
                        </div>
                        <div class="practice-item-wrapper type-modern-style gdlr-column-1-4" style="margin-bottom: 40px;"
                            data-ajax="#">
                            <div class="practice-item-holder">
                                <div class="gdlr-isotope" data-type="practice" data-layout="fitRows">
                                    <div class="clear"></div>
                                    <div class="three columns">
                                        <div class="gdlr-item gdlr-modern-practice">
                                            <div class="gdlr-ux gdlr-modern-practice-ux">
                                                <div class="gdlr-practice-thumbnail">
                                                    <img src="upload/photodune-448186-old-law-building-m-400x300.jpg"
                                                        alt="" width="400" height="300" />
                                                    <div class="gdlr-practice-thumbnail-overlay"></div>
                                                    <h3 class="practice-title"><a href="single-practice.html">Bank And
                                                            Financial</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="three columns">
                                        <div class="gdlr-item gdlr-modern-practice">
                                            <div class="gdlr-ux gdlr-modern-practice-ux">
                                                <div class="gdlr-practice-thumbnail">
                                                    <img src="upload/photodune-824920-bodywork-damage-m-400x300.jpg"
                                                        alt="" width="400" height="300" />
                                                    <div class="gdlr-practice-thumbnail-overlay"></div>
                                                    <h3 class="practice-title"><a href="single-practice.html">Car
                                                            Accident</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="three columns">
                                        <div class="gdlr-item gdlr-modern-practice">
                                            <div class="gdlr-ux gdlr-modern-practice-ux">
                                                <div class="gdlr-practice-thumbnail">
                                                    <img src="upload/Fotolia_39975530_Subscription_Monthly_XXL-400x300.jpg"
                                                        alt="" width="400" height="300" />
                                                    <div class="gdlr-practice-thumbnail-overlay"></div>
                                                    <h3 class="practice-title"><a href="single-practice.html">Personal
                                                            Injury</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="three columns">
                                        <div class="gdlr-item gdlr-modern-practice">
                                            <div class="gdlr-ux gdlr-modern-practice-ux">
                                                <div class="gdlr-practice-thumbnail">
                                                    <img src="upload/photodune-10847259-family-sitting-on-sofa-with-parents-arguing-m-400x300.jpg"
                                                        alt="" width="400" height="300" />
                                                    <div class="gdlr-practice-thumbnail-overlay"></div>
                                                    <h3 class="practice-title"><a href="single-practice.html">Family
                                                            Law</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="three columns">
                                        <div class="gdlr-item gdlr-modern-practice">
                                            <div class="gdlr-ux gdlr-modern-practice-ux">
                                                <div class="gdlr-practice-thumbnail">
                                                    <img src="upload/photodune-3332253-man-working-with-modern-devices-m-400x300.jpg"
                                                        alt="" width="400" height="300" />
                                                    <div class="gdlr-practice-thumbnail-overlay"></div>
                                                    <h3 class="practice-title"><a href="single-practice.html">Capital
                                                            Market</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="three columns">
                                        <div class="gdlr-item gdlr-modern-practice">
                                            <div class="gdlr-ux gdlr-modern-practice-ux">
                                                <div class="gdlr-practice-thumbnail">
                                                    <img src="upload/photodune-3290449-concierges-holding-the-cart-and-posing-m-400x300.jpg"
                                                        alt="" width="400" height="300" />
                                                    <div class="gdlr-practice-thumbnail-overlay"></div>
                                                    <h3 class="practice-title"><a href="single-practice.html">Employment
                                                            Law</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="three columns">
                                        <div class="gdlr-item gdlr-modern-practice">
                                            <div class="gdlr-ux gdlr-modern-practice-ux">
                                                <div class="gdlr-practice-thumbnail">
                                                    <img src="upload/Fotolia_3104144_Subscription_Monthly_XXL-400x300.jpg"
                                                        alt="" width="400" height="300" />
                                                    <div class="gdlr-practice-thumbnail-overlay"></div>
                                                    <h3 class="practice-title"><a
                                                            href="single-practice.html">Corporate</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="three columns">
                                        <div class="gdlr-item gdlr-modern-practice">
                                            <div class="gdlr-ux gdlr-modern-practice-ux">
                                                <div class="gdlr-practice-thumbnail">
                                                    <img src="upload/photodune-2277503-businessman-in-front-of-bookcase-m-400x300.jpg"
                                                        alt="" width="400" height="300" />
                                                    <div class="gdlr-practice-thumbnail-overlay"></div>
                                                    <h3 class="practice-title"><a href="single-practice.html">Dispute
                                                            Resolution</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </section>
                <section id="content-section-5">
                    <div class="gdlr-color-wrapper gdlr-show-all gdlr-skin-light-grey"
                        style="background-color: #f5f5f5; padding-top: 65px;">
                        <div class="container">
                            <div class="six columns">
                                <div class="gdlr-testimonial-item-wrapper">
                                    <div class="gdlr-item-title-wrapper gdlr-item pos-left gdlr-nav-container">
                                        <div class="gdlr-item-title-head">
                                            <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Testimonial</h3>
                                            <div class="gdlr-item-title-nav">
                                                <i class="icon-angle-left gdlr-flex-prev"></i><i
                                                    class="icon-angle-right gdlr-flex-next"></i>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-item-title-divider"></div>
                                    </div>
                                    <div class="gdlr-item gdlr-testimonial-item carousel modern-style">
                                        <div class="gdlr-ux gdlr-testimonial-ux">
                                            <div class="flexslider" data-type="carousel"
                                                data-nav-container="gdlr-testimonial-item" data-columns="1">
                                                <ul class="slides">
                                                    <li class="testimonial-item">
                                                        <div class="testimonial-author-image gdlr-skin-border"><img
                                                                src="upload/testi-hp-3.jpg" alt="" width="120"
                                                                height="120" /></div>
                                                        <div class="testimonial-item-outer">
                                                            <div class="testimonial-item-inner gdlr-skin-box">
                                                                <div class="testimonial-content gdlr-skin-content">
                                                                    <p>
                                                                        <span
                                                                            style="font-size: 17px; color: #333; font-weight: 600; margin-bottom: 12px; display: inline-block;">Lawyer
                                                                            Base just saved my life!</span><br />
                                                                        Aenean lacinia bibendum nulla sed cons ectetur.
                                                                        Morbi leo risus, porta ac conse ctet ur ac, vesti
                                                                        bulum at eros. Etiam porta sem mal esuada magna
                                                                        mollis
                                                                        euismod. Etiam porta sem malesuada magna mo llis eu.
                                                                        Donec ullamcorper nulla non metus auctor.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="testimonial-info gdlr-title-font">
                                                                <span
                                                                    class="testimonial-author gdlr-skin-link-color">Oliver
                                                                    Shansder</span><span
                                                                    class="testimonial-position gdlr-skin-info">Father of
                                                                    two sons</span>
                                                            </div>
                                                            <div class="testimonial-gimmick"></div>
                                                        </div>
                                                    </li>
                                                    <li class="testimonial-item">
                                                        <div class="testimonial-author-image gdlr-skin-border"><img
                                                                src="upload/testi-hp-2.jpg" alt="" width="120"
                                                                height="120" /></div>
                                                        <div class="testimonial-item-outer">
                                                            <div class="testimonial-item-inner gdlr-skin-box">
                                                                <div class="testimonial-content gdlr-skin-content">
                                                                    <p>
                                                                        <span
                                                                            style="font-size: 17px; color: #333; font-weight: 600; margin-bottom: 12px; display: inline-block;">I
                                                                            got my money back!</span><br />
                                                                        Aenean lacinia bibendum nulla sed cons ectetur.
                                                                        Morbi leo risus, porta ac conse ctet ur ac, vesti
                                                                        bulum at eros. Etiam porta sem mal esuada magna
                                                                        mollis
                                                                        euismod. Etiam porta sem malesuada magna mo llis eu.
                                                                        Donec ullamcorper nulla non metus auctor.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="testimonial-info gdlr-title-font">
                                                                <span
                                                                    class="testimonial-author gdlr-skin-link-color">Santana
                                                                    White</span><span
                                                                    class="testimonial-position gdlr-skin-info">Car
                                                                    Accident</span>
                                                            </div>
                                                            <div class="testimonial-gimmick"></div>
                                                        </div>
                                                    </li>
                                                    <li class="testimonial-item">
                                                        <div class="testimonial-author-image gdlr-skin-border"><img
                                                                src="upload/testi-hp-1.jpg" alt="" width="120"
                                                                height="120" /></div>
                                                        <div class="testimonial-item-outer">
                                                            <div class="testimonial-item-inner gdlr-skin-box">
                                                                <div class="testimonial-content gdlr-skin-content">
                                                                    <p>
                                                                        <span
                                                                            style="font-size: 17px; color: #333; font-weight: 600; margin-bottom: 12px; display: inline-block;">Now
                                                                            I can get my business running!</span><br />
                                                                        Aenean lacinia bibendum nulla sed cons ectetur.
                                                                        Morbi leo risus, porta ac conse ctet ur ac, vesti
                                                                        bulum at eros. Etiam porta sem mal esuada magna
                                                                        mollis
                                                                        euismod. Etiam porta sem malesuada magna mo llis eu.
                                                                        Donec ullamcorper nulla non metus auctor.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="testimonial-info gdlr-title-font">
                                                                <span class="testimonial-author gdlr-skin-link-color">James
                                                                    Bond</span><span
                                                                    class="testimonial-position gdlr-skin-info">Financial
                                                                    Issue</span>
                                                            </div>
                                                            <div class="testimonial-gimmick"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="six columns">
                                <div class="gdlr-item-title-wrapper gdlr-item pos-left">
                                    <div class="gdlr-item-title-head">
                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Recent News</h3>
                                    </div>
                                    <div class="gdlr-item-title-divider"></div>
                                </div>
                                <div class="blog-item-wrapper">
                                    <div class="blog-item-holder">
                                        <div class="gdlr-item gdlr-blog-widget">
                                            <div class="gdlr-ux gdlr-blog-widget-ux">
                                                <article id="post-2255"
                                                    class="post-2255 post type-post status-publish format-standard has-post-thumbnail hentry category-post-slider tag-blog tag-life-style">
                                                    <div class="gdlr-standard-style">
                                                        <div class="blog-date-wrapper">
                                                            <span class="blog-date-day gdlr-title-font">21</span>
                                                            <span class="blog-date-month">Mar</span>
                                                        </div>
                                                        <header class="post-header">
                                                            <div class="gdlr-blog-title"><a href="singleblog.html">Sem
                                                                    Porta Mollis Parturient</a></div>

                                                            <div class="gdlr-blog-excerpt">
                                                                Lorem ipsum dolor sit amet, consectetur adipisici elit,
                                                                sed...
                                                                <div class="clear"></div>
                                                                <a href="singleblog.html" class="excerpt-read-more">Read
                                                                    More</a>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </header>
                                                        <!-- entry-header -->
                                                        <div class="clear"></div>
                                                    </div>
                                                </article>
                                                <!-- #post -->
                                            </div>
                                        </div>
                                        <div class="gdlr-item gdlr-blog-widget">
                                            <div class="gdlr-ux gdlr-blog-widget-ux">
                                                <article id="post-2254"
                                                    class="post-2254 post type-post status-publish format-standard has-post-thumbnail hentry category-post-slider tag-blog tag-life-style">
                                                    <div class="gdlr-standard-style">
                                                        <div class="blog-date-wrapper">
                                                            <span class="blog-date-day gdlr-title-font">21</span>
                                                            <span class="blog-date-month">Mar</span>
                                                        </div>
                                                        <header class="post-header">
                                                            <div class="gdlr-blog-title"><a href="singleblog.html">Nullam
                                                                    Lorem Mattis Purus</a></div>

                                                            <div class="gdlr-blog-excerpt">
                                                                Lorem ipsum dolor sit amet, consectetur adipisici elit,
                                                                sed...
                                                                <div class="clear"></div>
                                                                <a href="singleblog.html" class="excerpt-read-more">Read
                                                                    More</a>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </header>
                                                        <!-- entry-header -->
                                                        <div class="clear"></div>
                                                    </div>
                                                </article>
                                                <!-- #post -->
                                            </div>
                                        </div>
                                        <div class="gdlr-item gdlr-blog-widget">
                                            <div class="gdlr-ux gdlr-blog-widget-ux">
                                                <article id="post-2249"
                                                    class="post-2249 post type-post status-publish format-standard has-post-thumbnail hentry category-post-slider tag-blog tag-life-style">
                                                    <div class="gdlr-standard-style">
                                                        <div class="blog-date-wrapper">
                                                            <span class="blog-date-day gdlr-title-font">21</span>
                                                            <span class="blog-date-month">Mar</span>
                                                        </div>
                                                        <header class="post-header">
                                                            <div class="gdlr-blog-title"><a href="singleblog.html">Nibh
                                                                    Sem Sit Ullamcorper</a></div>

                                                            <div class="gdlr-blog-excerpt">
                                                                Lorem ipsum dolor sit amet, consectetur adipisici elit,
                                                                sed...
                                                                <div class="clear"></div>
                                                                <a href="singleblog.html" class="excerpt-read-more">Read
                                                                    More</a>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </header>
                                                        <!-- entry-header -->
                                                        <div class="clear"></div>
                                                    </div>
                                                </article>
                                                <!-- #post -->
                                            </div>
                                        </div>
                                        <a class="blog-widget-right-text-link"
                                            href="blog-full-with-right-sidebar.html">Read All News<i
                                                class="fa fa-long-arrow-right icon-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>

                <section id="content-section-7">
                    <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin"
                        id="gdlr-parallax-wrapper-2" data-bgspeed="0"
                        style="background-image: url('upload/bg-contact-hp.jpg'); padding-top: 70px; padding-bottom: 0px;">
                        <div class="container">
                            <div class="six columns">
                                <div class="gdlr-title-item" style="margin-bottom: 45px;">
                                    <div class="gdlr-item-title-wrapper gdlr-item pos-center">
                                        <div class="gdlr-item-title-head">
                                            <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Don't hesitate to
                                                ask</h3>
                                        </div>
                                        <div class="gdlr-item-title-caption gdlr-skin-info">
                                            Law is complicate matter. It can cause you a big problem <br />
                                            if you ignore it. Let us help you!
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-item gdlr-content-item">
                                    <div role="form" class="wpcf7" id="wpcf7-f4260-o1" lang="en-US"
                                        dir="ltr">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>

                                        <form method="post"
                                            action="https://max-themes.net/demos/lawyerbase/contactform/contactengine.php">

                                            <input type="text" name="Name" id="Name" placeholder="Name:"
                                                class="input" />

                                            <input type="text" name="City" id="City" placeholder="City:"
                                                class="input" />

                                            <input type="text" name="Email" id="Email" placeholder="Email:"
                                                class="input" />

                                            <textarea name="Message" rows="20" cols="20" id="Message" placeholder="Message:" class="input"></textarea>

                                            <input type="submit" name="submit" value="Submit" class="submit-button" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="six columns">
                                <div class="gdlr-image-frame-item gdlr-item" style="margin-bottom: 0px;">
                                    <div class="gdlr-frame frame-type-none">
                                        <div class="gdlr-image-link-shortcode"><img src="upload/women-contact.png"
                                                alt="" width="487" height="731" /></div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
                <section id="content-section-8">
                    <div class="gdlr-color-wrapper gdlr-show-all no-skin"
                        style="background-color: #ffffff; padding-top: 70px; padding-bottom: 45px;">
                        <div class="container">
                            <div class="gdlr-banner-item-wrapper">
                                <div class="gdlr-item-title-wrapper gdlr-item pos-center gdlr-nav-container">
                                    <div class="gdlr-item-title-head">
                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Some Of Our Clients
                                        </h3>
                                        <div class="gdlr-item-title-nav">
                                            <i class="icon-angle-left gdlr-flex-prev"></i><i
                                                class="icon-angle-right gdlr-flex-next"></i>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-item-title-divider"></div>
                                </div>
                                <div class="gdlr-banner-images gdlr-item">
                                    <div class="flexslider" data-pausetime="7000" data-slidespeed="600"
                                        data-effect="fade" data-columns="5" data-type="carousel"
                                        data-nav-container="gdlr-banner-images">
                                        <ul class="slides">
                                            <li><img src="upload/banner-1.jpg" alt="" width="230"
                                                    height="117" /></li>
                                            <li><img src="upload/banner-2.jpg" alt="" width="230"
                                                    height="117" /></li>
                                            <li><img src="upload/banner-3.jpg" alt="" width="230"
                                                    height="117" /></li>
                                            <li><img src="upload/banner-4.jpg" alt="" width="230"
                                                    height="117" /></li>
                                            <li><img src="upload/banner-5.jpg" alt="" width="230"
                                                    height="117" /></li>
                                            <li><img src="upload/banner-6.jpg" alt="" width="230"
                                                    height="117" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section> --}}
            </div>

            <!-- Below Sidebar Section-->
        </div>
        <!-- gdlr-content -->
        <div class="clear"></div>
    </div>
@endsection
