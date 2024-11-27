<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__left">
                <div class="footer__logo">
                    <a href="https://orenprokat.ru/">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="Прокат сноубордов, лыж">
                    </a>
                </div>
            </div>
            
            <div class="footer__right">
                <a href="#price">Цены</a>
                <a href="#about">О нас</a>
                <a href="#where">Где кататься?</a>
                <a href="#reviews">Отзывы</a>
                <a href="#contacts">Контакты</a>
            </div>
        </div>
    </div>

</footer>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js"></script>
<script>
    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 350,
        'tolerance': 70
    });

    function close(eve) {
        eve.preventDefault();
        slideout.close();
        document.getElementById('panel').classList.toggle('hide');
        document.querySelector('#menu-left-products').classList.remove('active');
        document.querySelector('#menu-left-more').classList.remove('active');
    }

    slideout
        .on('beforeopen', function() {
            this.panel.classList.add('panel-open');
        })
        .on('open', function() {
            this.panel.addEventListener('click', close);
        })
        .on('beforeclose', function() {
            this.panel.classList.remove('panel-open');
            this.panel.removeEventListener('click', close);
        });

    // Toggle button
    document.querySelector('.header__btn-menu').addEventListener('click', function() {
        slideout.toggle();
        document.getElementById('panel').classList.toggle('hide')
    });

    document.querySelector('#menu .menu-mob__close-btn').addEventListener('click', function() {
        slideout.toggle();
        document.getElementById('panel').classList.toggle('hide');
        document.querySelector('#menu-left-products').classList.remove('active');
        document.querySelector('#menu-left-more').classList.remove('active');
    });
</script>

<div id="popup__form" class="popup__block" style="display: none">
    <section class="form__section" id="form-section">
    <script data-b24-form="inline/134/gdgyy3" data-skip-moving="true">
        (function(w, d, u) {
            var s = d.createElement('script');
            s.async = true;
            s.src = u + '?' + (Date.now() / 180000 | 0);
            var h = d.getElementsByTagName('script')[0];
            h.parentNode.insertBefore(s, h);
        })(window, document, 'https://cdn-ru.bitrix24.ru/b9504965/crm/form/loader_134.js');
    </script>
        <!-- <div class="container">
            <div class="form__inner">
                <div class="form__block">
                    <div class="form__block-inner">
                        <div class="form__block-title">Пример модального окна</div>
                        <div class="form__block-descr">Пример описания для модальных окон</div>
                        <?php echo do_shortcode('[contact-form-7 id="20" title="Контактная форма 1"]') ?>
                    </div>

                </div>
            </div> -->
        </div>
    </section>
</div>


</body>

<?php wp_footer(); ?>

</html>