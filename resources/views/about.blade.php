@extends('layouts.welcome_all_app')

@section('content')
    <body id="page-top">
    <section class="page-section">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="text-black mt-0">О нашем центре</h1>
                    <hr class="divider" />
                    <p class="text-black-75 mb-4">Всем привет! Это джунгли - детский развлекательный центр в г. Ковылкино! Давайте знакомиться?! Нас зовут Света и Сергей и мы организаторы этого центра!
                        Мы создали это пространство, чтобы дети могли активно и весело проводить свободное время, а взрослые в этот момент, могли отдохнуть в уютной атмосфере (с телефоном и чашечкой кофе).
                        Для нас очень важно - сделать День рождения вашего ребенка ярким и незабываемым!</p>
                    <a class="btn btn-success btn-xl" href="#about">Узнать больше</a>
                </div>
            </div>
        </div>
    </section>
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

@endsection
