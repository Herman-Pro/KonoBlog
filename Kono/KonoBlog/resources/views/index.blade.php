@extends('layouts.app')

@section('title', 'Accueil')

@section('banniere')
  <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}"
    alt="Une image en grand format ou un slider d'images d'animés populaires ou de nouveaux articles"
    class="banniere">
@endsection

@section('content')
<div class="pub-contain">
      <div class="news-contain">
        <div class="item">
        <a href="{{ route('news.title') }}">
          <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="" class="picture-news">
        </a>
          <h2 class="delete-space"><a href="news-title.html" class="white delete-space news-title">titre</a></h2>
          <p class="white delete-space news-description">description Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Minus eius
            suscipit a delectus deserunt dolorum corporis vitae placeat. Consectetur, laborum quod enim modi temporibus
            adipisci similique dicta? Fugit, vitae et? <a href="news-title.html" title="Lire_la_suite">Lire la suite...</a></p>
          <p class="news-time"><i class="fi fi-rs-clock-three"></i> date de publication</p>
        </div>
        <div class="item">
        <a href="{{ route('news.title') }}">
          <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="" class="picture-news">
        </a>
          <h2 class="delete-space"><a href="news-title.html" class="white delete-space news-title">titre</a></h2>
          <p class="white delete-space news-description">description Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Minus eius
            suscipit a delectus deserunt dolorum corporis vitae placeat. Consectetur, laborum quod enim modi temporibus
            adipisci similique dicta? Fugit, vitae et? <a href="news-title.html" title="Lire_la_suite">Lire la suite...</a></p>
          <p class="news-time"><i class="fi fi-rs-clock-three"></i> date de publication</p>
        </div>
        <div class="item">
        <a href="{{ route('news.title') }}">
          <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="" class="picture-news">
        </a>
          <h2 class="delete-space"><a href="news-title.html" class="white delete-space news-title">titre</a></h2>
          <p class="white delete-space news-description">description Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Minus eius
            suscipit a delectus deserunt dolorum corporis vitae placeat. Consectetur, laborum quod enim modi temporibus
            adipisci similique dicta? Fugit, vitae et? <a href="news-title.html" title="Lire_la_suite">Lire la suite...</a></p>
          <p class="news-time"><i class="fi fi-rs-clock-three"></i> date de publication</p>
        </div>
        <div class="item">
        <a href="{{ route('news.title') }}">
          <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="" class="picture-news">
        </a>
          <h2 class="delete-space"><a href="news-title.html" class="white delete-space news-title">titre</a></h2>
          <p class="white delete-space news-description">description Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Minus eius
            suscipit a delectus deserunt dolorum corporis vitae placeat. Consectetur, laborum quod enim modi temporibus
            adipisci similique dicta? Fugit, vitae et? <a href="news-title.html" title="Lire_la_suite">Lire la suite...</a></p>
          <p class="news-time"><i class="fi fi-rs-clock-three"></i> date de publication</p>
        </div>
        <div class="item">
        <a href="{{ route('news.title') }}">
          <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="" class="picture-news">
        </a>
          <h2 class="delete-space"><a href="news-title.html" class="white delete-space news-title">titre</a></h2>
          <p class="white delete-space news-description">description Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Minus eius
            suscipit a delectus deserunt dolorum corporis vitae placeat. Consectetur, laborum quod enim modi temporibus
            adipisci similique dicta? Fugit, vitae et? <a href="news-title.html" title="Lire_la_suite">Lire la suite...</a></p>
          <p class="news-time"><i class="fi fi-rs-clock-three"></i> date de publication</p>
        </div>
      </div>
      <aside class="link-side-contain">
        <section>
          <h2 class="asside-title-link">Postes Populaires</h2>
          <div class="asside-decoration"></div>
          <div class="best-news-contain">
          <a href="{{ route('news.title') }}">
          <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="" class="picture-news">
        </a>
            <div class="best-news-info">
              <h3 class="delete-space"><a href="news-title.html" class="delete-space best-news-title">Titre</a></h3>
              <p class="delete-space best-news-time"><i class="fi fi-rs-clock-three"></i> date de publication</p>
            </div>
          </div>
          <div class="best-news-contain">
          <a href="{{ route('news.title') }}">
          <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="" class="picture-news">
        </a>
            <div class="best-news-info">
              <h3 class="delete-space"><a href="news-title.html" class="delete-space best-news-title">Titre</a></h3>
              <p class="delete-space best-news-time"><i class="fi fi-rs-clock-three"></i> date de publication</p>
            </div>
          </div>
          <div class="best-news-contain">
          <a href="{{ route('news.title') }}">
          <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="" class="picture-news">
        </a>
            <div class="best-news-info">
              <h3 class="delete-space"><a href="news-title.html" class="delete-space best-news-title">Titre</a></h3>
              <p class="delete-space best-news-time"><i class="fi fi-rs-clock-three"></i> date de publication</p>
            </div>
          </div>
        </section>
        <section>
          <h2 class="asside-title-link">Catégories</h2>
          <div class="asside-decoration"></div>
          <ul>
            <li><a href="#" class="asside-link" title="Shonen">Shonen</a></li>
            <li><a href="#" class="asside-link" title="Seinen">Seinen</a></li>
            <li><a href="#" class="asside-link" title="Shojo">Shojo</a></li>
            <li><a href="#" class="asside-link" title="Josei">Josei</a></li>
          </ul>
        </section>
      </aside>
    </div>
@endsection