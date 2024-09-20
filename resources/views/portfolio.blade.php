@extends('layouts.welcome_all_app')

@section('content')
    <body id="page-top">

    <!-- Portfolio-->
    <div id="portfolio" class="pt-5">
        <div class="container-fluid pt-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="text-center">Фотогаллерея</h2>
                    <hr class="divider" />
                </div>
            </div>
            <div class="row g-3 px-5">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" data-fancybox="gallery-1" href="image/gallery/fullsize/gal1.jpg" title="Фотогалерея">
                        <img class="img-fluid" src="image/gallery/update/gal1.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Фотогалерея</div>
                            <div class="project-name">Изображение</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" data-fancybox="gallery-1" href="image/gallery/fullsize/gal2.jpg" title="Project Name">
                        <img class="img-fluid" src="image/gallery/update/gal2.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Фотогалерея</div>
                            <div class="project-name">Изображение</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" data-fancybox="gallery-1" href="image/gallery/fullsize/gal3.jpg" title="Project Name">
                        <img class="img-fluid" src="image/gallery/update/gal3.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Фотогалерея</div>
                            <div class="project-name">Изображение</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" data-fancybox="gallery-1" href="image/gallery/fullsize/gal4.jpg" title="Project Name">
                        <img class="img-fluid" src="image/gallery/update/gal4.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Фотогалерея</div>
                            <div class="project-name">Изображение</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" data-fancybox="gallery-1" href="image/gallery/fullsize/gal5.jpg" title="Project Name">
                        <img class="img-fluid" src="image/gallery/update/gal5.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Фотогалерея</div>
                            <div class="project-name">Изображение</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" data-fancybox="gallery-1" href="image/gallery/fullsize/gal6.jpg" title="Project Name">
                        <img class="img-fluid" src="image/gallery/update/gal6.jpg" alt="..." />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Фотогалерея</div>
                            <div class="project-name">Изображение</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="footer-cta py-5">
                <div class="align-items-start justify-content-center text-center row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <a class="fs-1 bi-geo-alt-fill" href="#" data-toggle="modal" data-target="#modal_map"></a>
                            <div class="cta-text">
                                <h4>Адрес</h4>
                                <span>Ковылкино, ул. Пролетарская, д 25 Б, 2 этаж</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <a href="#" class="fs-1 bi-telephone-fill"></a>
                            <div class="cta-text">
                                <h4>Номер телефона</h4>
                                <span>+7 (960)336 07-70</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <a href="#" class="fs-1 bi-chat-dots-fill"></a>
                            <div class="cta-text">
                                <h4>Социальные сети</h4>
                                <span>Мы в вк</span> <a href="https://vk.com/junglekov"><i class="fs-2 fa fa-vk"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @include('modal_map')

@endsection
