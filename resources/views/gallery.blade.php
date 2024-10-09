@extends('layouts.master')

@section('content')
    <div class="gdlr-page-title-wrapper">
            <div class="gdlr-page-title-overlay"></div>
            <div class="gdlr-page-title-container container">
                <h1 class="gdlr-page-title">Galerie d'images</h1>
            </div>
        </div>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="gdlr-content">
                <!-- Above Sidebar Section-->

                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                    <div class="with-sidebar-container container">
                        <div class="with-sidebar-left twelve columns">
                            <div class="with-sidebar-content twelve columns">
                                <section id="content-section-1">
                                    <div class="section-container container">
                                        <div class="gdlr-gallery-item gdlr-item" style="margin-bottom: 40px;">
                                            <div class="gallery-column three columns">
                                                <div class="gallery-item">
                                                    <a href="{{ asset('assets/images/gallery/gallery-1.jpg') }}" data-fancybox-group="gdlr-gal-1" data-rel="fancybox">
                                                        <img src="{{ asset('assets/images/gallery/gallery-1.jpg') }}" alt="" width="700" height="400" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gallery-column three columns">
                                                <div class="gallery-item">
                                                    <a href="{{ asset('assets/images/gallery/gallery-2.jpg') }}" data-fancybox-group="gdlr-gal-1" data-rel="fancybox">
                                                        <img src="{{ asset('assets/images/gallery/gallery-2.jpg') }}" alt="" width="700" height="400" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gallery-column three columns">
                                                <div class="gallery-item">
                                                    <a href="{{ asset('assets/images/gallery/gallery-3.jpg') }}" data-fancybox-group="gdlr-gal-1" data-rel="fancybox">
                                                        <img src="{{ asset('assets/images/gallery/gallery-3.jpg') }}" width="700" height="400" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gallery-column three columns">
                                                <div class="gallery-item">
                                                    <a href="{{ asset('assets/images/gallery/gallery-4.jpg') }}" data-fancybox-group="gdlr-gal-1" data-rel="fancybox">
                                                        <img src="{{ asset('assets/images/gallery/gallery-4.jpg') }}" alt="" width="700" height="400" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gallery-column three columns">
                                                <div class="gallery-item">
                                                    <a href="{{ asset('assets/images/gallery/gallery-5.jpg') }}" data-fancybox-group="gdlr-gal-1" data-rel="fancybox">
                                                        <img src="{{ asset('assets/images/gallery/gallery-5.jpg') }}" alt="" width="700" height="400" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gallery-column three columns">
                                                <div class="gallery-item">
                                                    <a href="{{ asset('assets/images/gallery/gallery-6.jpg') }}" data-fancybox-group="gdlr-gal-1" data-rel="fancybox">
                                                        <img src="{{ asset('assets/images/gallery/gallery-6.jpg') }}" alt="" width="700" height="400" />
                                                    </a>
                                                    {{-- <span class="gallery-caption">Educatioin</span> --}}
                                                </div>
                                            </div>
                                            <div class="gallery-column three columns">
                                                <div class="gallery-item">
                                                    <a href="{{ asset('assets/images/gallery/gallery-7.jpg') }}" data-fancybox-group="gdlr-gal-1" data-rel="fancybox">
                                                        <img src="{{ asset('assets/images/gallery/gallery-7.jpg') }}" alt="" width="700" height="400" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gallery-column three columns">
                                                <div class="gallery-item">
                                                    <a href="{{ asset('assets/images/gallery/gallery-8.jpg') }}" data-fancybox-group="gdlr-gal-1" data-rel="fancybox">
                                                        <img src="{{ asset('assets/images/gallery/gallery-8.jpg') }}" alt="" width="700" height="400" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </section>
                            </div>

                            <div class="clear"></div>
                        </div>

                        <div class="clear"></div>
                    </div>
                </div>

                <!-- Below Sidebar Section-->
            </div>
            <!-- gdlr-content -->
            <div class="clear"></div>
        </div>
@endsection
