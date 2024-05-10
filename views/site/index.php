<?php
$this->Title = 'Головна сторінка';
?>
<style>
    * {
        font-family: "Montserrat", sans-serif;
        font-weight: 1000;
    }
    h2, h5{
        font-weight: 1000;
    }
    h3{
        font-weight: 600;
    }

    .carousel-item {
        height: 100vh;
        min-height: 300px;
    }

    .carousel-caption {
        bottom: 300px;
        z-index: 2;
    }

    .carousel-caption h5 {
        font-size: 45px;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 25px;
    }

    .carousel-caption p {
        width: 60%;
        margin: auto;
        font-size: 18px;
        line-height: 1.9;
    }

    .carousel-inner::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    .w-100 {
        width: 100%;
        height: 100%;
    }

    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .carousel-caption {
            bottom: 370px;
        }

        .carousel-caption p {
            width: 100%;
        }
    }

    @media only screen and (max-width: 767px) {
        .carousel-caption {
            bottom: 125px;
        }

        .carousel-caption h5 {
            font-size: 17px;
        }

        .carousel-caption a {
            padding: 10px 15px;
        }

        .carousel-caption p {
            width: 100%;
            line-height: 1.6;
            font-size: 12px;
        }
    }

    #director {
        margin-top: 50px;
    }

    #services {
        margin-top: 50px;
    }
    #portfolio {
        margin-top: 50px;
    }
    #team{
        margin-top: 50px;
    }
    #registration{
        margin-top: 50px;
    }
    .card-body i{
        font-size: 50px;
    }
    #team .card {
        flex: 1;
        margin-bottom: 20px;
    }

    #team .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }




</style>
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/photos/slide2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>Ласкаво просимо до ліцею №69!</h5>
                <p>Ми раді нашим учням та гостям сайту!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/photos/slide1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>Файний колектив</h5>
                <p>Вчителі є професіоналами у своїй справі, а діти поглинають усі необхідні знання!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/photos/slide3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>Не втрачай можливостей!</h5>
                <p>Запишись на курси з улюбленої справи та отримай необхідні навички!</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<section id="director" class="about-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="director-img">
                    <img src="/photos/victorichka67.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="director-text">
                    <h2>Слово директора</h2>
                    <p>Привіт! Мене звати Француз Вікторія Георгіївна. Я вже понад 15-ти років є директором даного
                        навчального закладу.
                        Згідно даних газети "Житомирський штурвал", ліцей №69 займає перше місце серед усіх ліцеїв міста за усіма
                        параметрами:
                        якістю освіти, ремонту класів, харчуванню, а також по красі молоденьких вчительок.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services" class="services section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Що ми пропонуємо?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="fa-solid fa-book"></i>
                            <h3 class="card-title">Необхідні знання</h3>
                            <p>Наш ліцей надасть дитині лише найнеобхідніший спектр знань. Крім математичних
                                формул та правил граматики ми можемо навчити, як сплачувати податки або як
                                оформлювати документи.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="fa-solid fa-person-chalkboard"></i>
                            <h3 class="card-title">Чудові вчителі</h3>
                            <p>Наші вчителі дуже люблять дітей та вміють з ними працювати.
                                Вони виступають категорично проти булінгу своїх власних учнів.
                                Педагоги ніколи не кинуть Вас у біді та допоможуть Вам краще освоїти матеріал.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <h3 class="card-title">Прекрасні учні</h3>
                            <p>Діти є добрими створіннями. У нашому ліцеї вчаться виключно
                                розумні та чемні учні. У нас відсутній булінг, а якщо подібне
                            з'являється, то адміністрація миттєво та справедливо карає саме кривдників.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="portfolio section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Наші випускники</h2>
                    <p>Усі наші випускники мають гарантоване успішне майбутнє!</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-center bg-white pb-2">
                    <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="/photos/graduate1.png" alt="" class="img-fluid">
                        </div>
                        <h3 class="card-title">Рево Максим</h3>
                        <p class="card-text">Почав поглиблено вивчати програмування,
                        завдяки чому зміг хакнути сервер "ПриватБанку".</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-center bg-white pb-2">
                    <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="/photos/graduate2.png" alt="" class="img-fluid">
                        </div>
                        <h3 class="card-title">Бляхер Данило</h3>
                        <p class="card-text">Круглий відмінник, який після випуску влаштувався
                        в багатомільярдну компанію(в McDonald's).</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-center bg-white pb-2">
                    <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="/photos/graduate3.png" class="img-fluid">
                        </div>
                        <h3 class="card-title">Гуцул Ярина</h3>
                        <p class="card-text">Відкрила власний салон краси та інтернет-магазин страйкбольного обладнання.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="team" class="team section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Вчителі року</h2>
                    <p>Декілька наших вчителів уже встигли отримати звання "Вчитель року".</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="/photos/math.jpg" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Трахтенберг Сара Ааронівна</h3>
                        <p class="card-text">Вчитель математики</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="/photos/fizruk.jpg" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Непийпиво Юрій Богданович</h3>
                        <p class="card-text">Вчитель фізкультури</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="/photos/Henry.jpeg" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Морганов Генрі Олегович</h3>
                        <p class="card-text">Вчитель мистецтва</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="/photos/history.jpeg" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Кравчук Аліна Олександрівна</h3>
                        <p class="card-text">Вчитель історії</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="registration" class="registration-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Хочете у нас навчатися?</h2>
                </div>
            </div>
            <div class="col-md-8 offset-md-2">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="email" class="form-label">Електронна пошта</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Номер телефону</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="files" class="form-label">Документ у форматі PDF</label>
                        <input type="file" class="form-control" id="files" name="files[]" multiple accept="application/pdf">
                    </div>
                    <button type="submit" class="btn btn-primary">Надіслати</button>
                </form>
            </div>
        </div>
    </div>
</section>


