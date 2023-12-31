<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/cdn.jsdelivr.net_npm_swiper@10.2.0_swiper-bundle.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Aliance Production</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="/about.html" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Собственные торговые марки</a></li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a></li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контакты</a></li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="geol">
        <svg class="geol-icon" width="24" height="24">
          <use href="img/sprite.svg#geol"></use>
        </svg>
        <address class="mobile-info-address">
          г. Мосвка, Холодильный пер. 4к1с8
        </address>
      </div>
      <!-- /.mobile-info -->
      <div class="mail">
        <svg class="mail-icon" width="24" height="24">
          <use href="img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-emil">
          a.dragunov@tdaliance.ru
        </a>
      </div>
      <!-- /.mobile-info -->
    </div>
    <nav class="navbar">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo"> 
        <svg class="logo2-svg logo">
          <use href="img/sprite.svg#logo"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="#" class="header-nav-limk">О компании</a></li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-limk">Контрактное производство</a></li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-limk">Собственные торговые марки</a></li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-limk">Новости</a></li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-limk">Контакты</a></li>
      </ul>
      <div class="header-phone">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link">
          +7 (499) 686-10-14
        </a>
      </div>
      <!-- sss/.header-phone -->
      <button class="navbar-button button" data-toggle="modal" data-target= "#feedback-modal">
        <svg class="button-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
    <header class="header header-image">
      <div class="container">
        <div class="header-content">
          <div class="seporator"></div>
        <h1 class="header-title">
          <?php echo "Главная страница"; ?>
        </h1>
        <p class="header-text">
          Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.
        </p>
        <div class="button header-button" data-toggle="modal" data-target= "#feedback-modal">Подробнее о компании</div>
        </div>
        <!-- /.header-content -->
           
        <!-- основной блок слайдера -->
        <div class="swiper features-slider">
          <!-- обертка слайдера -->
          <ul class="swiper-wrapper header-features">
            <!-- слайды -->
            <li class="swiper-slide header-features-item"><svg class="logo2-svg" width="36" height="36">
              <use href="img/sprite.svg#1"></use>
            </svg>
            <p class="header-features-text">Непрерывная работа c 2017 года</p></li>
            <li class="swiper-slide header-features-item"><svg class="logo2-svg" width="36" height="36">
              <use href="img/sprite.svg#2"></use>
            </svg>
            <p class="header-features-text">Вся продукция сертифицирована</p></li>
            <li class="swiper-slide header-features-item"> <svg class="logo2-svg" width="36" height="36">
              <use href="img/sprite.svg#3"></use>
            </svg>
            <p class="header-features-text">Контроль качества на всех этапах</p></li>
            <li class="swiper-slide header-features-item"><svg class="logo2-svg" width="36" height="36">
              <use href="img/sprite.svg#Frame 35"></use>
            </svg>
            <p class="header-features-text">Возможны поставки по всей России</p></li>
            <li class="swiper-slide header-features-item"><svg class="logo2-svg" width="36" height="36">
              <use href="img/sprite.svg#5"></use>
            </svg>
            <p class="header-features-text">Оперативное производство</p></li>
          </ul>

          <!-- кнопки навигации вперед/назад -->
          <div class="slider-buttons">
            <div class="slider-button-prev">
              <svg width="36" height="24">
                <use href="img/sprite.svg#P"></use>
              </svg>
            </div>
            <div class="slider-button-next">
              <svg width="36" height="24">
                <use href="img/sprite.svg#N"></use>
              </svg>
            </div>
          </div>
          <!-- /.slider-buttons -->
        </div>
      </div>
      <!-- /.container -->
    </header>
    <section class="section section-light">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">схема работы</h2>

        <!-- основной блок слайдера -->
        <div class="swiper steps-slider">
          <!-- обертка слайдера -->
          <ol class="swiper-wrapper steps">
            <!-- слайды -->
            <li class="swiper-slide steps-item">
              <span class="steps-num">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">
                Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
              </p> 
              <a href="#" class="button-link">Оставить заявку</a>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">02</span>
              <h3 class="steps-title">Заключение договора</h3>
              <p class="steps-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">
                А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">
                В частности, экономическая повестка сегодняшнего дня говорит о возможностях приоритизации разума над эмоциями.
              </p>
            </li>
          </ol>
           <!-- кнопки навигации вперед/назад -->
          <div class="steps-buttons primary-buttons-wrapper">
            <div class="steps-button-prev primary-button-prev">
              <svg width="36" height="24">
                <use href="img/sprite.svg#P"></use>
              </svg>
            </div>
            <div class="steps-button-next primary-button-next">
              <svg width="36" height="24">
                <use href="img/sprite.svg#N"></use>
              </svg>
            </div>
          </div>
          <!-- /.steps-button -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <section class="section production">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Контрактное производство</h2>
        <div class="cards">
          <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Автомобильная химия</h3>
          <p class="card-text">
            Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
          </p>
          </div>
          <!-- /.card-content -->
          <img src="img/A.png" alt="" class="card-imge">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Бытовая химия</h3>
            <p class="card-text">
              А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
            <!-- /.card-content -->
            </div>
          <img src="img/Б.png" alt="" class="card-imge">
          </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Дезинфицирующие средства</h3>
            <p class="card-text">
              Лишь интерактивные прототипы призваны к ответу.</p>
          <!-- /.card-content -->
          </div>
          <img src="img/Д.png" alt="" class="card-imge">
        </a>
        <a href="#" class="card">
          <div class="card-content"><h3 class="card-title">Пищевые аэрозоли</h3>
            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
          </div>
          <!-- /.card-content -->
          <img src="img/Д.png" alt="" class="card-imge">
        </a>
        <a href="#" class="card">
          <div class="card-content"><h3 class="card-title">Косметическая продукция</h3>
            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
          </div>
          <!-- /.card-content -->
          <img src="img/A.png" alt="" class="card-imge">
        </a>
        <a href="#" class="card">
          <div class="card-content"><h3 class="card-title">Краски аэрозольные</h3>
            <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
          </div>
          <!-- /.card-content -->
          <img src="img/Б.png" alt="" class="card-imge">
        </div></div>
      </div>
    </section>
    <?php $block_title = "Собственные торговые марки"; include_once('./template-parts/trademarks-block.php')?>
    <section class="section founder section founder">
      <picture class="founder-photo">
        <source type="image/webp" srcset="iimg/founder.webp">
        <source type="image/jpeg" srcset="img/founder.jpg"> 
        <img src="img/founder.jpg" alt="founder">
      </picture>
      <div class="container">
      <div class="founder-content-wrapper">
        <div class="founder-content">
          <div class="seporator"></div>
          <h2 class="section-title">Отношение к делу и к клиентам</h2>
          <p class="founder-text">Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно, независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную потребность системы массового участия.
        А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в значительной степени обусловливает важность дальнейших направлений развития.</p>
            <a href="#" class="button-link">Подробнее о компании</a>
         </div>
         <!-- /.founder-content -->
      </div>
      <!-- /.founder-content-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <section class="section clients">
      <div class="container">
        <div class="seporator"></div>
        <div class="clients-wrapper">
          <div class="clients-content">
            <h2 class="section-title">Производим аэрозольную продукцию для разных сфер</h2>
            <ul class="clients-list">
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#x"></use>
                </svg>Химические производства
               </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#k"></use>
               </svg>Автомойки
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30"class="clients-list-icon">
            <use href="img/sprite.svg#e"></use>
          </svg>Пищевая продукция</li>
              <li class="clients-list-item">
                <svg width="30" height="30"class="clients-list-icon">
            <use href="img/sprite.svg#b"></use>
          </svg>Лаки и краски</li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
            <use href="img/sprite.svg#o"></use>
          </svg>Косметические средства</li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
            <use href="img/sprite.svg#l"></use>
          </svg>Автомобильная косметика</li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
            <use href="img/sprite.svg#i"></use>
          </svg>Косметика по уходу за одеждой</li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
            <use href="img/sprite.svg#u"></use>
          </svg>Косметика по уходу за обувью</li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
            <use href="img/sprite.svg#y"></use>
          </svg>Строительные материалы</li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
            <use href="img/sprite.svg#m"></use>
          </svg>И многих других</li>
            </ul>
          </div>
          <!-- /.clients-content -->
          <div class="clients-logo-list">
          <a href="#" class="clients-logo-item"><img src="img/BK.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/BK.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/BK.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/BK.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/BK.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/BK.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/BK.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/BK.png" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/BK.png" alt="" class="clients-logo"></a>
          </div>
          <!-- /.clients-logo -->
        </div>
        <!-- /.clients-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <section class="section blog">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Блог экспертов в области производства</h2>
        <!-- основной блок слайдера -->
        <div class="swiper blog-slider">
          <!-- обертка слайдера -->
          <div class="swiper-wrapper">
            <!-- слайды -->
            <a href="#" class="swiper-slide blog-card">
              <img src="img/p1.jpg" alt="" class="blog-card-imge">
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img src="img/p2.jpg" alt="" class="blog-card-imge">
              <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
              <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img src="img/p1.jpg" alt="" class="blog-card-imge">
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
            </a>
            </div>

          <div class="blog-slider-footer">
            <a href="#" class="button-link">Весь блог</a>
            <div class="blog-buttons primary-buttons-wrapper">
              <div class="blog-button-prev primary-button-prev">
                <svg width="36" height="24">
                  <use href="img/sprite.svg#P"></use>
                </svg>
              </div>
              <div class="blog-button-next primary-button-next">
                <svg width="36" height="24">
                  <use href="img/sprite.svg#N"></use>
                </svg>
              </div>
            </div>
            <!-- /.blog-button -->
          </div>
          <!-- /.blog-slider-footer -->
      </div>
      <!-- /.container -->
    </section>
    
    <?php include_once('footer.php');?>