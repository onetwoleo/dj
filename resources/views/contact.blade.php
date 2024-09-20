@extends('layouts.welcome_all_app')

@section('content')

    <body id="page-top">

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
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
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
    @include('modal_map')
@endsection
