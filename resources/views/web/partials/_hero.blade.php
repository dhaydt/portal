<style>
    .floating-group {
        z-index: 1;
        position: absolute;
        bottom: 80px;
        right: 100px;
    }

    .floating-button {
        margin-top: 20px;
        margin-bottom: 20px;
        padding: 0;
        transition: 0.5s;
    }

    .floating-button .card {
        transition: 0.5s;
    }

    .floating-button:hover{
        box-shadow: 1px -1px 31px 3px rgba(236, 45, 44, 0.75);
        -webkit-box-shadow: 1px -1px 31px 3px rgba(236, 45, 44, 0.75);
        -moz-box-shadow: 1px -1px 31px 3px rgba(236, 45, 44, 0.75);
    }

    .floating-button .card:hover {
        color: var(--oxpins-primary);
        background-color: var(--primary-color);
        box-shadow: 1px -1px 31px 3px rgba(236, 45, 44, 0.75);
        -webkit-box-shadow: 1px -1px 31px 3px rgba(236, 45, 44, 0.75);
        -moz-box-shadow: 1px -1px 31px 3px rgba(236, 45, 44, 0.75);
    }

    @media(min-width: 900px) {
        .floating-group {
            width: 50vw;
        }

        .floating-button {}

        .title-floating i {
            font-size: 25px;
            text-align: center;
        }

        .title-floating span {
            font-size: 11px;
            text-align: center;
        }
    }

</style>
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Main Slider Start-->
<section class="main-slider clearfix">


    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>

        <div class="swiper-wrapper">
            <div class="floating-group">
                <div class="row w-100 justify-content-evenly d-flex pe-2 ms-2">
                    <div class="floating-button col-md-2">
                        <a href="javascript" class="card w-100 shadow-sm">
                            <div class="card-body title-floating d-flex flex-column">
                                <i class="fas fa-hands-helping"></i>
                                <span>Pengaduan</span>
                            </div>
                        </a>
                    </div>
                    <div class="floating-button col-md-2">
                        <a href="javascript" class="card shadow-sm">
                            <div class="card-body title-floating d-flex flex-column">
                                <i class="fas fa-file"></i>
                                <span>Perizinan</span>
                            </div>
                        </a>
                    </div>
                    <div class="floating-button col-md-2">
                        <a href="javascript" class="card shadow-sm">
                            <div class="card-body title-floating d-flex flex-column">
                                <i class="fas fa-vihara"></i>
                                <span>Kecamatan</span>
                            </div>
                        </a>
                    </div>
                    <div class="floating-button col-md-2">
                        <a href="javascript" class="card shadow-sm">
                            <div class="card-body title-floating d-flex flex-column">
                                <i class="fas fa-video"></i>
                                <span>CCTV</span>
                            </div>
                        </a>
                    </div>
                    <div class="floating-button col-md-2">
                        <a href="javascript" class="card shadow-sm">
                            <div class="card-body title-floating d-flex flex-column">
                                <i class="fas fa-gavel"></i>
                                <span>Hukum</span>
                            </div>
                        </a>
                    </div>
                    <div class="floating-button col-md-2">
                        <a href="javascript" class="card shadow-sm">
                            <div class="card-body title-floating d-flex flex-column">
                                <i class="fas fa-newspaper"></i>
                                <span>Berita</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-1.png);">
                </div>
                <!-- /.image-layer -->

                <div class="main-slider-shape-1"
                    style="background-image: url(assets/images/shapes/main-slider-shape-1.jpg);">
                </div>
                <div class="main-slider-shape-2 float-bob-x">
                    <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">Always donate for childrens</p>
                                <h2 class="main-slider__title">Lend a Helping Hand to Those in Need</h2>
                                <div class="main-slider__btn-box">
                                    <a href="about.html" class="thm-btn main-slider__btn"> Telusuri</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-2.png);">
                </div>
                <!-- /.image-layer -->
                <div class="main-slider-shape-1"
                    style="background-image: url(assets/images/shapes/main-slider-shape-1.jpg);">
                </div>
                <div class="main-slider-shape-2 float-bob-x">
                    <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">Always donate for childrens</p>
                                <h2 class="main-slider__title">Lend a Helping Hand to Those in Need</h2>
                                <div class="main-slider__btn-box">
                                    <a href="about.html" class="thm-btn main-slider__btn"> Telusuri</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-3.png);">
                </div>
                <!-- /.image-layer -->

                <div class="main-slider-shape-1"
                    style="background-image: url(assets/images/shapes/main-slider-shape-1.jpg);">
                </div>
                <div class="main-slider-shape-2 float-bob-x">
                    <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">Always donate for childrens</p>
                                <h2 class="main-slider__title">Lend a Helping Hand to Those in Need</h2>
                                <div class="main-slider__btn-box">
                                    <a href="about.html" class="thm-btn main-slider__btn"> Telusuri</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow"></i>
            </div>
        </div>

    </div>
</section>
<!--Main Slider End-->
