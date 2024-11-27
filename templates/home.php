<?php
/*
Template Name: Главная

*/

// … остальной код шаблона
?>

<?php get_header('main'); ?>


<section class="prokat__section">
    <div class="container">
        <div class="prokat__inner">
            <h1 class="prokat__title default-title">Прокат зимнего спортивного
                инвентаря в Оренбурге!</h1>
            <p class="prokat__descr">Большой ассортимент сноубордов,
                горных лыж, одежды и защиты</p>
            <div data-fancybox data-src="#popup__form"class="prokat__link">Забронировать
            </div>
        </div>
    </div>
</section>




<section class="action__section default-section" id="action">
    <div class="container">
        <div class="action__inner">
            <h1 class="action__title default-title">Акции</h1>
            <p class="action__descr default-descr">Горячие зимние предложения — арендуй выгодно!</p>
            <div class="action__items">
                <div class="action__item action__item1">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/bb.webp" alt="Оренпрокат">
                    <h5>Отметь нас в соц. сетях</h5>
                    <p>При выкладывании сторис, либо поста с отметкой наших соц. сетей - скидка 10%.</p>
                </div>

                <div class="action__item action__item1">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/bb4.webp" alt="Оренпрокат">
                    <h5>Катайся целый день</h5>
                    <p>При взятии в аренду горнолыжки вечером (за 2 часа до закрытия) и возврат через день до 10 утра аренда будет считаться как одни сутки.<br>Пример: взяли 01.12.2024 в 18:00, а вернули 03.12.2024 до 10:00</p>
                </div>

                <div class="action__item action__item1">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/bb5.webp" alt="Оренпрокат">
                    <h5>Семейный отдых</h5>
                    <p>При взятии в аренду комплектов лыж/сноубордов семьи из 4 человек (2 взрослых, 2 ребенка) скидка на детские комплекты 50%.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="price__section default-section" id="price">
    <div class="container">
        <div class="price__inner">
            <h2 class="price__title default-title">Цены проката</h2>
            <p class="price__descr default-descr">Большой ассортимент сноубордов, горных лыж, одежды и защиты</p>
            <div class="price__items">
                <div class="price__item price__item-top">
                    <div class="price__item-name price__item-title">Оборудование</div>
                    <div class="price__item-price price__item-title2">Цена / сутки</div>
                </div>

                <div class="price__item">
                    <div class="price__item-name">Взрослый комплект (Сноуборд + ботинки / Горные лыжи + ботинки)</div>
                    <div class="price__item-price">650 ₽</div>
                </div>

                <div class="price__item">
                    <div class="price__item-name">Лыжи/сноуборд (взрослый)</div>
                    <div class="price__item-price">350 ₽</div>
                </div>

                <div class="price__item">
                    <div class="price__item-name">Ботинки (взрослый)</div>
                    <div class="price__item-price">300 ₽</div>
                </div>

                <div class="price__item">
                    <div class="price__item-name">Детский комплект (Сноуборд + ботинки / Горные лыжи + ботинки)</div>
                    <div class="price__item-price">550 ₽</div>
                </div>

                <div class="price__item">
                    <div class="price__item-name">Лыжи/сноуборд (детский)</div>
                    <div class="price__item-price">300 ₽</div>
                </div>

                <div class="price__item">
                    <div class="price__item-name">Ботинки (детский)</div>
                    <div class="price__item-price">250 ₽</div>
                </div>

                <div class="price__item">
                    <div class="price__item-name">Горнолыжный шлем</div>
                    <div class="price__item-price">100 ₽</div>
                </div>

                <div class="price__item">
                    <div class="price__item-name">Горнолыжные очки</div>
                    <div class="price__item-price">150 ₽</div>
                </div>

                <div class="price__item">
                    <div class="price__item-name">Защита спины</div>
                    <div class="price__item-price">100 ₽</div>
                </div>

                <div class="price__item">
                    <div class="price__item-name">Защита копчика</div>
                    <div class="price__item-price">100 ₽</div>
                </div>

                <div class="price__item">
                    <div class="price__item-name">Лыжные палки</div>
                    <div class="price__item-price">100 ₽</div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="about__section default-section" id="about">
    <div class="container">
        <div class="about__inner">
            <h2 class="about_-title default-title">Кто мы и чем мы занимаемся?</h2>
            <p class="about__descr default-descr">Компания Оренпрокат - это аренда строительного оборудования, инструментов, спецтехники в Оренбурге.<br>В зимний сезон мы сдаём в аренду горнолыжное снаряжение, лыжи, сноуборды, аксессуары, надувные тюбинги, для взрослых и детей, посуточно.</p>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/orenpr.webp" alt="Оренпрокат">
            <div class="about__items">
                <div class="about__item about__item-left">
                    <h3 class="about__item-title">О компании</h3>
                    <p class="about__item-descr">Пункт проката по адресу: пр.Автоматики 28А, к.3 предлагает свои услуги по аренде горнолыжного оборудования.</p>
                    <p class="about__item-descr">Основной задачей является привлечение всех возрастных групп к ведению здорового образа жизни.</p>
                    <p class="about__item-descr">Желание развивать направление активных видов спорта, а также желание сделать их наиболее доступнее для всех.</p>
                    <p class="about__item-descr">Очень большое время и внимание мы уделяем подбору и регулировке снаряжения, исходя из Вашего опыта и стиля катания.</p>
                    <p class="about__item-descr">Прокат горных лыж и сноубордов в Оренбурге - эта традиция уже не первый год работает в компании Оренпрокат, и мы рады всем!</p>
                </div>

                <div class="about__item about__item-right">
                    <h3 class="about__item-title">Преимущества</h3>
                    <p class="about__item-descr">Почему же так выгодно пользоваться нашими услугами?</p>
                    <ul class="about__item-ul">
                        <li>Большой выбор товаров, комфортные условия проката, грамотные консультации.</li>
                        <li>Разнообразие ассортимента по горным лыжам, сноубордам и снаряжению</li>
                        <li>Ценообразование стабильное, при наличии гибких систем скидок</li>
                        <li>Возможность подбора снаряжения для взрослых и детей младших возрастов</li>
                        <li>Сервисное обслуживание после каждого клиента и проката</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="relax__section default-section" id="where">
    <div class="container">
        <div class="relax__inner">
            <h2 class="relax__title default-title">Горнолыжные центры отдыха</h2>
            <div class="relax__items">
                <div class="relax__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/greb.webp" alt="гребени">
                    <div class="relax__item-text">
                        <h5>ГК "Grebeni"</h5>
                        <p>Расстояние от Оренбурга:<br> <span>• 14 километров</span></p>
                        <p>Протяженность и количество трасс:<br><span>• 450 м длина склона</span></p>
                        <p>Количество подъемников и доп.сервисы:<br><span>• 3 подъемника</span></p>
                    </div>
                </div>

                <div class="relax__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/dolina.webp" alt="долина Кувандык">
                    <div class="relax__item-text">
                        <h5>ГК "Долина"</h5>
                        <p>Расстояние от Оренбурга:<br> <span>• 210 километров</span></p>
                        <p>Протяженность и количество трасс:<br><span>• трассы от 250 до 2500 м</span></p>
                        <p>Количество подъемников и доп.сервисы:<br><span>• 5 подъемников</span></p>
                    </div>
                </div>

                <div class="relax__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/tashla.webp" alt="ташла">
                    <div class="relax__item-text">
                        <h5>ГК в Ташле</h5>
                        <p>Расстояние от Оренбурга:<br> <span>• 110 километров</span></p>
                        <p>Протяженность и количество трасс:<br><span>• длина трассы 600 метров</span></p>
                        <p>Количество подъемников и доп.сервисы:<br><span>• 1 бугельный подъемник</span></p>
                    </div>
                </div>

                <div class="relax__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/abza.webp" alt="абзаково">
                    <div class="relax__item-text">
                        <h5>ГК "Абзаково"</h5>
                        <p>Расстояние от Оренбурга:<br> <span>• 430 километров</span></p>
                        <p>Протяженность и количество трасс:<br><span>• 13 трасс, длиной 15 992 м</span></p>
                        <p>Количество подъемников и доп.сервисы:<br><span>• 6 бугельных подъемников + 2 канатные дороги</span></p>
                    </div>
                </div>

                <div class="relax__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/ban.webp" alt="банное">
                    <div class="relax__item-text">
                        <h5>ГЦ "Банное"</h5>
                        <p>Расстояние от Оренбурга:<br> <span>• 450 километров</span></p>
                        <p>Протяженность и количество трасс:<br><span>• трассы длиной 2500 метров</span></p>
                        <p>Количество подъемников и доп.сервисы:<br><span>• скоростной подъемник 1700 метров</span></p>
                    </div>
                </div>

                <div class="relax__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/mrat.webp" alt="мраткино">
                    <div class="relax__item-text">
                        <h5>ГЦ "Мраткино"</h5>
                        <p>Расстояние от Оренбурга:<br> <span>• 500 километров</span></p>
                        <p>Протяженность и количество трасс:<br><span>• 8 трасс разной сложности</span></p>
                        <p>Количество подъемников и доп.сервисы:<br><span>• 4 подъемника</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="reviews__section default-section" id="reviews">
    <div class="container">
        <div class="reviews__inner">
            <h2 class="reviews__title default-title">Отзывы</h2>
            <p class="reviews__descr default-descr">Что говорят о нас наши клиенты</p>

            <!-- Слайдер Swiper -->
            <div class="reviews__box swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/r1.jpg" alt="отзыв об Оренпрокат">
                    </div>
                    <div class="swiper-slide">
                        <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/r2.jpg" alt="отзыв об Оренпрокат">
                    </div>
                    <div class="swiper-slide">
                        <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/r3.jpg" alt="отзыв об Оренпрокат">
                    </div>
                    <div class="swiper-slide">
                        <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/r4.jpg" alt="отзыв об Оренпрокат">
                    </div>
                    <div class="swiper-slide">
                        <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/r5.jpg" alt="отзыв об Оренпрокат">
                    </div>
                    <div class="swiper-slide">
                        <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/r6.jpg" alt="отзыв об Оренпрокат">
                    </div>
                    <div class="swiper-slide">
                        <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/r7.jpg" alt="отзыв об Оренпрокат">
                    </div>
                    <div class="swiper-slide">
                        <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/r8.jpg" alt="отзыв об Оренпрокат">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="gallery__section">
    <div class="container">
    <h2 class="gallery__title default-title">Галерея</h2>
        <div class="gallery__items">
            <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/g1.webp" alt="галерея Оренпрокат">
            <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/g2.webp" alt="галерея Оренпрокат">
            <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/g3.webp" alt="галерея Оренпрокат">
            <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/g4.webp" alt="галерея Оренпрокат">
           
            <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/g6.webp" alt="галерея Оренпрокат">
            <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/g7.webp" alt="галерея Оренпрокат">
            <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/g8.webp" alt="галерея Оренпрокат">
            <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/g9.webp" alt="галерея Оренпрокат">
            <img data-fancybox src="<?php bloginfo('template_url'); ?>/assets/img/g5.webp" alt="галерея Оренпрокат">
        </div>
    </div>
</section>




<section class="contacts__section default-section" id="contacts">
    <div class="container">
        <div class="contacts__inner">
            <h2 class="contacts__title default-title">Контакты</h2>
            <p class="contacts__descr default-descr">Связаться с нами можно любым удобным способом:<br> звоните, пишите на почту или оставьте заявку ниже.</p>
            <div class="contacts__box">
                <div class="contacts__text">
                    <div class="contacts__text-box">
                        <div>Номер: <a href="tel:+73532295909" class="contacts__tel">+7 (3532) 29 59 09</a></div>
                        <div>Почта: <a href="mailto:orenprokat156@ya.ru" class="contacts__mail">orenprokat156@ya.ru</a></div>
                        <div>Адрес: <a href="https://yandex.ru/maps/-/CDtBiBjM" class="contacts__adress">пр-д Автоматики 28А, к3</a></div>
                        <div class="contacts__graph"><span>График работы: </span>
                            <ul>
                                <li>Пн - Пт: 8:30 - 19:00</li>
                                <li>Сб - Вс: 8:30 - 18:00</li>
                            </ul>
                        </div>
                        <div class="contacts__social">
                            <a href="https://www.instagram.com/orenprokat/profilecard/?igsh=MTlpdmU1amYyYzBwNw==" class="contacts__social-insta"></a>
                            <a href="https://wa.me/79033606877" class="contacts__social-whatsapp"></a>
                            <a href="https://orenprokat.ru/" class="contacts__social-orenprokat"></a>
                            <a href="https://vk.com/orenprokat2015" class="contacts__social-vk"></a>
                            <a href="https://dzen.ru/orenprokat.ru" class="contacts__social-dzen"></a>
                        </div>
                    </div>
                </div>



                <div class="contacts__form">
                    <script data-b24-form="inline/132/lh8u6g" data-skip-moving="true">
                        (function(w, d, u) {
                            var s = d.createElement('script');
                            s.async = true;
                            s.src = u + '?' + (Date.now() / 180000 | 0);
                            var h = d.getElementsByTagName('script')[0];
                            h.parentNode.insertBefore(s, h);
                        })(window, document, 'https://cdn-ru.bitrix24.ru/b9504965/crm/form/loader_132.js');
                    </script>
                </div>
            </div>

            <div class="contacts__map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A180217e415d6daeca4b62d0b574bb63576950e70ae2a98c2cfdfa44871b82b5a&amp;source=constructor" width="711" height="400" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>


<!-- <div id="popup__form" class="popup__form">
    <script data-b24-form="inline/134/gdgyy3" data-skip-moving="true">
        (function(w, d, u) {
            var s = d.createElement('script');
            s.async = true;
            s.src = u + '?' + (Date.now() / 180000 | 0);
            var h = d.getElementsByTagName('script')[0];
            h.parentNode.insertBefore(s, h);
        })(window, document, 'https://cdn-ru.bitrix24.ru/b9504965/crm/form/loader_134.js');
    </script>
</div> -->






<?php get_footer(); ?>