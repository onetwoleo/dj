@extends('layouts.welcome_app')

@section('content')
    <body id="page-top">
    <!-- Masthead-->
{{--    <header class="masthead" id="masthead">--}}
        <header id="carouselExampleIndicators" class="carousel masthead slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background: linear-gradient(to bottom, rgba(92, 77, 66, 0.5) 0%, rgba(92, 77, 66, 0.5) 100%), url('/image/slide1.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover; background-attachment: scroll;">
{{--                    <img class="d-block w-100" src="/image/slide1.jpg" alt="Первый слайд">--}}
                </div>
                <div class="carousel-item" style="background: linear-gradient(to bottom, rgba(92, 77, 66, 0.5) 0%, rgba(92, 77, 66, 0.5) 100%), url('/image/slide2.jpeg'); background-position: center; background-repeat: no-repeat; background-size: cover; background-attachment: scroll;">
{{--                    <img class="d-block w-100" src="/image/slide2.jpg" alt="Второй слайд">--}}
                </div>
                <div class="carousel-item" style="background: linear-gradient(to bottom, rgba(92, 77, 66, 0.5) 0%, rgba(92, 77, 66, 0.5) 100%), url('/image/slide3.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover; background-attachment: scroll;">
{{--                    <img class="d-block w-100" src="/image/slide3.jpg" alt="Третий слайд">--}}
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </header>
{{--        <div class="container px-4 px-lg-5 h-100">--}}
{{--            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">--}}
{{--                <div class="col-lg-8 align-self-end">--}}
{{--                    <h1 class="text-white font-weight-bold">О нашем центре</h1>--}}
{{--                    <hr class="divider" />--}}
{{--                </div>--}}
{{--                <div class="col-lg-8 align-self-baseline">--}}
{{--                    <p class="text-white-75 mb-5">Всем привет! Это джунгли - детский развлекательный центр в г. Ковылкино! Давайте знакомиться?! Нас зовут Света и Сергей и мы организаторы этого центра!--}}
{{--                        Мы создали это пространство, чтобы дети могли активно и весело проводить свободное время, а взрослые в этот момент, могли отдохнуть в уютной атмосфере (с телефоном и чашечкой кофе).--}}
{{--                        Для нас очень важно - сделать День рождения вашего ребенка ярким и незабываемым!</p>--}}
{{--                    <a class="btn btn-success btn-xl" href="#about">Узнать больше</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </header>--}}
    <!-- About-->
    <section class="page-section bg-success" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Сделайте праздник ребенка ярким</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Организация важного для ребенка праздника включает оформленную тематическую комнату и праздничный стол с детскими блюдами, роскошным тортом. С детьми работают профессиональные аниматоры, которые поддерживают определенный ритм отдыха.</p>
                    <a class="btn btn-light btn-xl" href="#" data-toggle="modal" data-target="#modal_add_record">Записаться</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Почему выбирают нас</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-clipboard-check fs-1 text-success"></i></div>
                        <h3 class="h4 mb-2">Отличный десткий отдых</h3>
                        <p class="text-muted mb-0">Игровой детский центр - это возможность развлечь детей или организовать торжество в безопасной и дружественной обстановке!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-heart fs-1 text-success"></i></div>
                        <h3 class="h4 mb-2">Родители</h3>
                        <p class="text-muted mb-0">Родители хотят, чтобы их дети были счастливыми и здоровыми, всегда находились в безопасности, много времени проводили в живом общении со сверстниками, развиваясь физически и творчески.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-emoji-smile fs-1 text-success"></i></div>
                        <h3 class="h4 mb-2">Дети</h3>
                        <p class="text-muted mb-0">Дети хотят весело проводить время: познавать Мир, бегать, прыгать, играть, творить, кушать вкусную пиццу и мороженое, общаться и делиться эмоциями со своими друзьями и родителями.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-shield fs-1 text-success"></i></div>
                        <h3 class="h4 mb-2">Профессиональная организация</h3>
                        <p class="text-muted mb-0">Услуги нашего центра предлагают более широкие возможности – тематический сценарий и меню, аниматоры, профессиональное оборудование для коллективной игры, новые игры, знания и навыки.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
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
{{--    price--}}
    <section class="page-section" id="price">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Прайс-лист</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-4 col-md-6 text-center">
                    <img class="img-fluid" src="image/price1.jpg">
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <img class="img-fluid" src="image/price2.jpg">
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <img class="img-fluid" src="image/price3.jpg">
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action-->
    <section class="page-section bg-dark text-white">
        <div class="container px-4 px-lg-5 text-center">
            <div id="testimonial-slider" class="owl-carousel owl-theme">

                <div class="testimonial">
                    <div class="pic">
                        <img src="https://bootstraptema.ru/snippets/slider/2016/testimonials/testimonials-1.jpg" alt="">
                    </div>
                    <h3 class="testimonial-title">Кирилл</h3>
                    <small class="post">Посетитель</small>
                    <p class="description">
                        Отличнейшее место. Ооочень приятное и атмосферное место) Детям безумно понравилось. Всем настоятельно рекомендую посетить это замечательное место! Спасибо большое аниматорам развлекательного центра!
                    </p>
                </div>

                <div class="testimonial">
                    <div class="pic">
                        <img src="https://bootstraptema.ru/snippets/slider/2016/testimonials/testimonials-2.jpg" alt="">
                    </div>
                    <h3 class="testimonial-title">Яна</h3>
                    <small class="post">Посетитель</small>
                    <p class="description">
                        Отмечали день рождения. Интересное меню, все вкусно, быстрая подача, великолепное обслуживание. Бонус - вкусный и красивый торт. Спасибо команде аниматоров за прекрасно проведённое время моего ребенка. Обязательно придём ещё.
                    </p>
                </div>

                <div class="testimonial">
                    <div class="pic">
                        <img src="https://bootstraptema.ru/snippets/slider/2016/testimonials/testimonials-3.jpg" alt="">
                    </div>
                    <h3 class="testimonial-title">Кристиан</h3>
                    <small class="post">Посетитель</small>
                    <p class="description">
                        Не только очень красивое место, но и замечательный сервис. Начиная от персонала и заканчивая мелкими удобствами для гостей. На все наши просьбы нашлось решение. Это просто вау! Нам всем очень понравилось) Обязательно придём ещё.
                    </p>
                </div>

            </div>
            <br>
            @if(auth()->check())<a class="btn btn-light btn-xl" href="#" data-toggle="modal" data-target="#modal_add_review">Оставить отзыв</a>@endif
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Связаться с нами</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Если у вас есть вопросы, заполните эту контактную форму. Спасибо!</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <form id="contactForm" method="POST" action="{{ route('store_application') }}">
                        @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="fio" type="text" name="fio" placeholder="Введите ваше ФИО" required />
                            <label for="fio">ФИО</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
                            <label for="email">Электронная почта</label>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" required />
                            <label for="phone">Номер телефона</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                            <label for="message">Сообщение</label>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-success btn-xl" id="submitButton" type="submit">Отправить</button></div>
                    </form>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <i class="bi-phone fs-2 mb-3 text-muted"></i>
                    <div>+7 (960) 336 07-70</div>
                </div>
            </div>
        </div>
    </section>
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
    @include('admin.modal_store')
    @include('modal_map')
    @include('modal_store_review')
@endsection
