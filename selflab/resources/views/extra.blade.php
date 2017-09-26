@extends('layouts.master')

@section('title')
  Страница в разработке
@endsection

@section('header')
  <header class="main-header">
    <img class="extra-element" id="extra1" src="./assets/extra-element1.svg">
    <img class="extra-element" id="extra2" src="./assets/extra-element2.svg">
    <div class="container">
      <nav>
        <a class="main-link" href="/">Главная</a>
        <a class="main-link" href="/about">О Нас</a>
        <a class="logo-wrap" href="/">
          <img class="logo" src="./images/selflab_logo.png" alt="SelfLaboratory logo">
        </a>
        <a class="main-link" href="/extra">Портфолио</a>
        <a class="main-link" href="/services">Услуги</a>
      </nav>
      <div class="slogan" style="justify-content: center; max-width: 100%;">
        <h1></h1>
        <span style="align-self: center; text-align: center; font-size: 36px">Данная страница<br> находится в разработке</span>
      </div>
    </div>
  </header>
@endsection