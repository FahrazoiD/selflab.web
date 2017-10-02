@extends('layouts.master')

@section('title')
  Self Laboratory
@endsection

@section('header')
  <header class="main-header">
    <img class="extra-element" src="./images/extra-element.svg">
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
        <h1>Стильная<br>ФотоГрафика</h1>
        <span>вдохновляясь моментом</span>
      </div>
    </div>
  </header>
@endsection

@section('content')
<section class="portfolio-section">
  <div class="container">
    <h2>
      Что мы предлагаем?
    </h2>
    <p class="section-quote">
      Останови время - запечатли свой стиль
    </p>
    <div class="portfolio-slide">
      <div class="portfolio-container">

        <a class="img-unit" style="background-image: url('./images/bns/bns-img(1)-min.jpg')">
          <div class="img-overlay">
            <div class="overlay-wrap">
              <p>Съемка для Вашего бизнеса</p>
              <ul>
                <li>Предметная съемка продукции</li>
                <li>Съемка для сайта</li>
                <li>Бизнес-съемка</li>
                <li>Фото офиса</li>
              </ul>
            </div>
          </div>
        </a> 

        <a class="img-unit" style="background-image: url('./images/idv/idv-img(1)-min.jpg')">
          <div class="img-overlay">
            <div class="overlay-wrap">
              <p>Индивидуальная съемка</p>
              <ul>
                <li>Съемка для одного человека</li>
                <li>Семейная съемка</li>
                <li>Love-story</li>
              </ul>
            </div>
          </div>
        </a> 

        <a class="img-unit" style="background-image: url('./images/wng/wng-img(1)-min.jpg')">
          <div class="img-overlay">
            <div class="overlay-wrap">
              <p>Свадебная съемка</p>
              <ul>
                <li>Love-story для жениха и невесты</li>
                <li>Съемка свадебного торжества</li>
                <li>Утро невесты</li>
              </ul>
            </div>
          </div>
        </a> 

        <a class="img-unit" style="background-image: url('./images/rpg/rpg-img(1)-min.jpg')">
          <div class="img-overlay">
            <div class="overlay-wrap">
              <p>Репортажная съемка</p>
              <ul>
                <li>Дни Рождения</li>
                <li>Корпоративы</li>
                <li>Выпускные</li>
                <li>и другое</li>
              </ul>
            </div>
          </div>
        </a> 

        <a class="img-unit" style="background-image: url('./images/pds/pds-img(1)-min.jpg')">
          <div class="img-overlay">
            <div class="overlay-wrap">
              <p>Тематические фотодни
                <ul>
                  <li>Съемки с животными</li>
                  <li>Подводная съемка</li>
                  <li>Съемка на крыше</li>
                  <li>Образы и другое</li>
                </ul>
              </p>
            </div>
          </div>
        </a> 

        <a class="img-unit" style="background-image: url('./images/srm/srm-img(1)-min.jpg')">
          <div class="img-overlay">
            <div class="overlay-wrap">
              <p>Промо-съемка для Шоу-румов
                <ul>
                  <li>Студийная съемка</li>
                  <li>Выездная съемка</li>
                </ul>
              </p>
            </div>
          </div>
        </a> 

      </div>

      <div class="spec-container">
        <a class="back-arrow">
          <img src="./images/arrow-left.svg">
        </a>
        <div class="img-wrapper">
          <img class="img-spec" alt="Это основное фото выбранного типа съемки">
        </div>
        <div class="spec-wrap">
          <h3 class="spec-title">Здесь будет указан тип съемки</h3>
          <hr>
          <ul class="spec-content">
            Здесь будет список услуг для заданного типа съемки
          </ul>
        </div>
      </div> 
    </div>
  </div>
</section>
@endsection