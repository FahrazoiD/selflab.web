@extends('layouts.master')

@section('title')
  Self Laboratory - услуги
@endsection

@section('header')
  <header class="services-header">
    <div class="container">
      <nav>
        <a class="main-link" href="/">Главная</a>
        <a class="main-link" href="/about">О Нас</a>
        <a class="logo-wrap" href="/">
          <img class="logo" src="./images/selflab_logo.png" alt="SelfLaboratory logo">
        </a>
        <a class="main-link" href="/album">Портфолио</a>
        <a class="main-link" href="/services">Услуги</a>
      </nav>
      <div class="slogan">
        <h1>Услуги</h1>
            <span>ваши желания - наши возможности</span>
      </div>
    </div>
  </header>
@endsection

@section('content')
<section class="services-section">
  <div class="service-info">
    <div class="container">
      <div class="service-upper">
        <h2>
          Пакеты услуг для часовой индивидуальной съёмки
        </h2>
        <p>
          <i>Стоимость фотосъемок и предоставляемых услуг, в зависимости от конкретного случая, желаний клиента, даты проведения съемки, оговаривается у организатора</i>
        </p>
      </div>

      <div class="service-wrap">
        <div class="service service-min">
          <img src="./images/cam_1.svg" alt="Light icon" class="service-icon">
          <h2 class="service-name">
            Пакет услуг<br>Light
          </h2>
          <p class="price">
            от 7 000 &#8381;
          </p>
          <br>
          <ul class="service-list">
            <li>В стоимость услуг входят:</li>
            <li>Работа профессионального фотографа в течение 60 минут</li>
            <li>Аренда студии или оборудования + организация</li>
            <li>Мастер-класс по позированию</li>
          </ul>
          <br>
        </div>

        <div class="service service-med">
          <img src="./images/cam_2.svg" alt="Optimal icon" class="service-icon">
          <h2 class="service-name">
            Пакет услуг<br>Optimal
          </h2>
          <p class="price">
            от 9 800 &#8381;
          </p>
          <br>
          <ul class="service-list">
            <li>В стоимость услуг входят:</li>
            <li>Работа профессионального фотографа в течение 60 минут</li>
            <li>Услуги профессионального стилиста-визажиста (прическа + макияж)</li>
            <li>Аренда студии или оборудования + организация</li>
            <li>Мастер-класс по позированию</li>
          </ul>
          <br>
        </div>

        <div class="service service-max">
          <img src="./images/cam_3.svg" alt="Premium icon" class="service-icon">
          <h2 class="service-name">
            Пакет услуг<br>Premium
          </h2>
          <p class="price">
            от 16 000 &#8381;
          </p>
          <br>
          <ul class="service-list">
            <li>В стоимость услуг входят:</li>
            <li>Работа профессионального фотографа в течение 60 минут</li>
            <li>Услуги профессионального стилиста-визажиста (прическа + макияж)</li>
            <li>Дополнительные детали декора, аренда платья, украшений, животных и др.</li>
            <li>Аренда студии или оборудования + организация</li>
            <li>Мастер-класс по позированию</li>
          </ul>
          <br>
        </div>

      </div>

      <div class="service-extra">
        <p>
          Количество фото на выходе: 40-50 фото в авторской обработке (цветокоррекция), 
          8 лучших фотографий пройдут журнальную ретушь.
        </p>
        <br>
        <p>
          Возможны разные комбинации услуг.
        </p>
      </div>
    </div>
  </div>

  <div class="service-special">
    <div class="container">
      <div class="etc">
        <img src="./images/etc.svg" alt="Additional services icon" class="spec-icon">
        <div class="info">
          <h2>
            Другие услуги
          </h2>
          <ul>
            <li>Профессиональное видео от нашего видеографа по любому поводу и без</li>
            <li>Печать фотографий, альбомов, интерьерная печать</li>
            <li>Видеоролик – backstage с Вашей съемки </li>
            <li>Создание элементов декора и фотозон</li>
          </ul>
        </div>
      </div>
      <div class="edu">
        <img src="./images/edu.svg" alt="Educational services icon" class="spec-icon">
        <div class="info">
          <h2>
            Мастер-классы
          </h2>
          <ul>
            <li>Урок от профессионального стилиста-визажиста «Макияж для себя»</li>
            <li>Урок от профессионального фотографа: «Тонкости портретной съемки»</li>
            <li>Урок от профессионального фотографа: «Основы профессиональной ретуши фотографий»</li>
          </ul>
        </div>
      </div>
      <div class="sert">
        <img src="./images/sert.svg" alt="Sertificates icon" class="spec-icon">
        <div class="info">
          <h2>
            Подарочный сертификат
          </h2>
          <ul>
            <li>Cъемка от команды SelfLab</li>
            <li>Обучающий урок или мастер-класс, посвященный фотографии/созданию образа</li>
            <li>Образ от стилиста</li>
            <li>Наряд от нашего дизайнера Ольги Киселевой</li>
            <li class="ps"> Все детали и возможные варианты обсуждаются с организатором</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection