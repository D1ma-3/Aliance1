<section class="cta">
      <div class="bg-gray section-cta">
        <img src="img/cta.png" alt="call to action" class="cta-image" />
        <div class="cta-from-wrapper container">
          <form action="heandler.php" metahod='POST' class="cta-from">
            <h2 class="section-title cta-from-title">Хотите сотрудничать?</h2>
            <p class="cta-from-tex">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
            <div class="input-group-wrapper">
            <div class="input-group">
              <input id="user-n" type="text" name='user-name' class="input" placeholder=" " maxlength="100" required>
              <label class="input-group-label" for="user-n">Имя</label>
            </div>
            <!-- /.input-group -->
            <div class="input-group">
              <input id="user-p" type="tel" name='user-phone' class="input" placeholder=" " maxlength="30" required>
              <label class="input-group-label" for="user-p">Номер телефона</label>
            </div>
            <!-- /.input-group -->
            </div>
            <!-- /.input-group-wrapper -->
            <div class="cta-from-footer">
              <button type="submit" class="button cta-form-button">Отправить заявку</button>
              <div class="notify">
                <svg class="notify-icon" width="14" height="14">
                  <use href="img/sprite.svg#ik"></use></svg>
                <p class="notify-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!</p>
              </div>
            </div>
            <!-- /.cta-from-footer -->
          </form>
        </div>
        <!-- /.cta-from-wrapper -->
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <svg class="logo2-svg footer-logo">
            <use href="img/sprite.svg#logo2"></use>
          </svg>
          <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
          <div class="geol">
            <svg class="geol-icon" width="24" height="24">
              <use href="img/sprite.svg#geol"></use>
            </svg>
            <address class="footer-info-address">
              г. Мосвка, Холодильный пер. 4к1с8
            </address>
          </div>
          <!-- /.footer-info -->
          <div class="mail">
            <svg class="mail-icon" width="24" height="24">
              <use href="img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-emil">
              a.dragunov@tdaliance.ru
            </a>
          </div>
          <!-- /.footer-info -->
        </div>
        <!-- /.footer-top -->
        <div class="footer-social">
          <a href="#" class="footer-social-link">
            <svg class="footer-social-icon" width="24" height="24">
            <use href="img/sprite.svg#wk"></use>
          </svg>
        </a>
          <a href="#" class="footer-social-link">
            <svg class="footer-social-icon" width="24" height="24">
            <use href="img/sprite.svg#in"></use>
          </svg>
        </a>
        </div>
        <!-- /.footer-social -->
      </div>
      <!-- /.footer-top -->
      <div>
      <hr color="#EBEBF0" class="footer-seporator">
      <div class="container">
        <div class="footer-bottom">
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title">Контрактное производство</h2>
          <ul class="footer-menu-list footer-menu-column-2">
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Автомобильная химия</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Бытовая химия</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Дезинфицирующие средства</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Пищевые аэрозоли</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Косметическая продукция</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Краски аэрозольные</a></li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title">Собственные марки</h2>
          <ul class="footer-menu-list">
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Автохимия AG-Tech</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Автохимия AP</a></li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->
        <div class="footer-menu-wrapper">
          <ul class="footer-menu-list">
            <li class="footer-menu-item"><a href="#" class="footer-menu-link footer-menu-link-bold">О компании</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a></li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->
        </div>
        <!-- /.footer-bottom -->
      </div>
      <!-- /.container -->
      <hr color="#EBEBF0" class="footer-seporator">
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="footer-copyriht">
             &copy; <?php echo date('d.m.Y')?> «Aliance Production». Все права защищены.
            </p>
            <a href="#" class="footer-policy">Политики конфиденциальности</a>
           </div>
           <!-- /.footer-legal -->
           <div class="footer-author">
             <span class="made-in">Сделано в</span>
             <svg width="52" height="11">
               <use href="img/sprite.svg#ro"></use>
             </svg>
           </div>
           <!-- /.footer-author -->
        </div>
        <!-- /.footer-wrapper -->
      </div>
      <!-- /.container -->
    </footer>
    <div class="modal">
      <div class="modal-dilog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="#" class="modal-close" data-toggle="modal">
          <svg class="close-icon" width="24" height="24">
            <use href="img/sprite.svg#39"></use>
          </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <form action="handler.php" method="POST" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input id="user-n" type="text" class="modal-input" name="username" placeholder=" ">
              <label class="input-group-label modal-input-label" for="user-45">Имя</label>
            </div>
            <!-- /.input-group -->
            <div class="input-group modal-input-group">
              <input id="user-p" type="tel" class="modal-input" name="userphone" placeholder=" ">
              <label class="input-group-label modal-input-label" for="user-46">Номер телефона</label>
            </div>
            <!-- /.input-group -->
            </div>
            <!-- /.input-group-wrapper -->
            <div class="modal-from-footer">
              <button type="submit" class="button modal-from-button">Отправить заявку</button>
              <div class="notify">
                <svg class="notify-icon" width="14" height="14">
                  <use href="img/sprite.svg#ik"></use></svg>
                <p class="notify-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!</p>
              </div>
            </div>
            <!-- /.modal-from-footer -->
          </form>
        </div>
        </form>
      </div>
    </div>
    <script src="js/cdn.jsdelivr.net_npm_swiper@10.2.0_swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>