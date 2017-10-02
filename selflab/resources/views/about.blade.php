@extends('layouts.master')

@section('title')
  Self Laboratory - о нас
@endsection

@section('header')
  <header class="about-header">
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
        <h1>О Нас</h1>
        <span>Главное — собрать хорошую команду, и тогда один день <br>может изменить всё</span>
      </div>
    </div>
  </header>
@endsection

@section('content')
  <section class="team-section">
    <div class="person person-right">
      <div class="container">
        <div class="person-info person-info-right">
          <div class="person-img" style="background-image: url(./images/person1-min.png)"></div>
          <div class="person-text">
            <h2 class="person-name">
              Владислава Стальнова
            </h2>
            <h3 class="person-status">
              Основатель проекта
            </h3>
            <p class="person-quote">
              Для меня SelfLab – это место, где работа сопоставима с отдыхом. Конечно, всегда нужно думать о результате и не упускать из виду ни одной организационной детали, но процесс съемки завораживает, дает возможность модели раскрыться, показать себя с новой, порой непривычной стороны. И это не может не вдохновлять!
            </p>
            <br>
            <p class="person-quote">
              Мы же, в свою очередь, делаем все, чтобы участники чувствовали себя комфортно и спокойно, даже если они впервые на подобных мероприятиях, создавая теплую и дружескую атмосферу. Каждая модель - уникальная история, которую мы беремся рассказать, используя только индивидуальный подход.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="quote-spacing" style="background-image: url(./images/about-quote1.jpg);">
      <div class="container">
        <div class="quote quote-right">
          <p>
            <big>Self Laboratory</big> – лаборатория стиля, красоты и фотографии в Москве, задумывалась как проект, который объединит настоящих профессионалов своего дела в рамках единой «стильной» фото-концепции. Но по мере реализации мы осознали, что истинное творчество всегда выходит за рамки. Сегодня лаборатория предлагает широкий спектр услуг в сфере фото- и видеосъемки.  
          </p>
        </div>
      </div>
    </div>

    <div class="person person-left">
      <div class="container">
        <div class="person-info person-info-left">
          <div class="person-img" style='background-image: url(./images/person2-min.png)'></div>
          <div class="person-text">
            <h2 class="person-name">
              Алина Фомичева
            </h2>
            <h3 class="person-status">
              Фотограф
            </h3>
            <p class="person-quote">
              Каждая фотосъёмка для меня это нечто большее, чем просто работа. Это возможность реализовать свои новые творческие подходы и креативные идеи, но чтобы добиться идеального результата, требуется работа не только одной меня, но и команды. Моя команда, это SelfLab - окружение профессионалов своего любимого дела, добрых, отзывчивых и компанейских личностей, с которыми мне всегда легко, которые понимают меня, а я их с полу слова.
            </p>
            <br>
            <p class="person-quote">
              Я не боюсь пробовать что-то новое в работе, ведь новое - это всегда интересно и захватывающе. Для реализации всего задуманного мне помогает именно Self_lab. Именно она дает мне крылья...
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="quote-spacing"  style="background-image: url(./images/about-quote2.jpg);"> 
      <div class="container">
        <div class="quote quote-left">
          <p>
            Наша главная цель – создавать что-то необычное, новое, стильное. Именно поэтому в основе нашей работы лежат качественная проработка всех деталей съемки, согласованность действий и реализация только стильных решений.
          </p>
        </div>
      </div>
    </div>

    <div class="person person-right">
      <div class="container">
        <a class="left-arrow">
          <img src="./images/arrow-left.svg">
        </a>
        <div class="person-slider">
          <div class="person-info person-info-right">
            <div class="person-img" style="background-image: url(./images/person3-min.png)"></div>
            <div class="person-text">
              <h2 class="person-name">
                Савина Нино
              </h2>
              <h3 class="person-status">
                Стилист-визажист
              </h3>
              <p class="person-quote">
                Сейчас, пожалуй, сложно себе представить даже самый простой фотопроект без участия стилиста-визажиста. Для меня фотопроекты Self Lab всегда вызов и отличная возможность быть членом команды. Здесь я могу реализоваться не только как свадебный стилист, но и создавать креативные, fashion и вечерние образы. Проекты Self Laboratory обладают неповторимым стилем, и это мне нравится. 
              </p>
              <br>
              <p class="person-quote">
                При слаженной разработке проектов всеми участниками нашей команды всегда получается отличный результат!
              </p>
            </div>
          </div>
          <div class="extra-spacer"></div>
          <div class="person-info person-info-right">
            <div class="person-img" style="background-image: url(./images/person4.png)"></div>
            <div class="person-text">
              <h2 class="person-name">
                Ольга Киселева
              </h2>
              <h3 class="person-status">
                Дизайнер одежды
              </h3>
              <p class="person-quote">
                Однажды судьба свела нас вместе, чему я очень рада! Каждая совместная съёмка - это море положительных эмоций, вдохновения и произведение искусства в качестве результата. Для меня как для творческой личности всегда интересны новые идеи, необычные проекты, а команда профессионалов SelfLab всегда помогает в их качественном осуществлении!
              </p>
            </div>
          </div>
          <div class="extra-spacer"></div>
          <div class="person-info person-info-right">
            <div class="person-img"></div>
            <div class="person-text">
              <h2 class="person-name">
                Кристина Позднякова
              </h2>
              <h3 class="person-status">
                Стилист-визажист
              </h3>
              <p class="person-quote">
                Работать в команде selflab - одно удовольствие! Слаженность и знание своего дела помогает получить качественный результат нашей работы, чтобы мы могли радовать Вас красивыми фотографиями!
              </p>
            </div>
          </div>
        </div>
        <a class="right-arrow">
          <img src="./images/arrow-right.svg">
        </a>
      </div>
    </div>
  </section>
@endsection