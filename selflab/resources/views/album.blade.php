@extends('layouts.master')

@section('title')
  Self Laboratory - альбом
@endsection

@section('header')
  <header class="album-header">
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
        <h1>Портфолио</h1>
        <span>вдохновляясь моментом</span>
      </div>
    </div>
  </header>
@endsection

@section('content')
<section class="album-section">
  <!-- Extra block for angled edge -->
  <div class="extra-block"></div>
  <div class="container">
    <h2>
      Наши работы
    </h2>
    <p class="section-quote">
      Подпишитесь на Наш <a href="https://www.instagram.com/self_lab/">Instagram <i class="fa fa-instagram"></i></a>, чтобы увидеть ещё больше фотографий!<br>
    </p>
    <div class="grid" id="instafeed">
      <!-- Here goes Instagram data from app.js -->
    </div>
  </div>
</section>
@endsection