@extends('layouts.app')

@section('title', 'Catégories choisies')

@section('content')
  <div class="pub-contain">
    <div class="news-contain">
      <div class="categories-news-choisen-title">
        <p class="news-road">
          <a href="{{ route('home') }}" class="delete-decoration">Accueil</a> > Catégories
        </p>
        <h2 class="asside-title-link">Catégories choisies</h2>
        <div class="asside-decoration"></div>
      </div>

      <div class="item">
        <a href="{{ route('news.title') }}">
          <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="" class="picture-news">
        </a>
        <h2 class="delete-space">
          <a href="{{ route('news.title') }}" class="white delete-space news-title">titre</a>
        </h2>
        <p class="white delete-space news-description">
          description Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus eius
          suscipit a delectus deserunt dolorum corporis vitae placeat. Consectetur, laborum quod enim modi temporibus
          adipisci similique dicta? Fugit, vitae et?
          <a href="{{ route('news.title') }}" title="Lire_la_suite">Lire la suite...</a>
        </p>
        <p class="news-time">
          <i class="fi fi-rs-clock-three"></i> date de publication
        </p>
      </div>

      <div class="item">
        <a href="{{ route('news.title') }}">
          <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="image" class="picture-news">
        </a>
        <h2 class="delete-space">
          <a href="{{ route('news.title') }}" class="white delete-space news-title">titre</a>
        </h2>
        <p class="white delete-space news-description">
          description Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus eius
          suscipit a delectus deserunt dolorum corporis vitae placeat. Consectetur, laborum quod enim modi temporibus
          adipisci similique dicta? Fugit, vitae et?
          <a href="{{ route('news.title') }}" title="Lire_la_suite">Lire la suite...</a>
        </p>
        <p class="news-time">
          <i class="fi fi-rs-clock-three"></i> date de publication
        </p>
      </div>

      <div class="item">
        <a href="{{ route('news.title') }}">
          <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="image" class="picture-news">
        </a>
        <h2 class="delete-space">
          <a href="{{ route('news.title') }}" class="white delete-space news-title">titre</a>
        </h2>
        <p class="white delete-space news-description">
          description Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus eius
          suscipit a delectus deserunt dolorum corporis vitae placeat. Consectetur, laborum quod enim modi temporibus
          adipisci similique dicta? Fugit, vitae et?
          <a href="{{ route('news.title') }}" title="Lire_la_suite">Lire la suite...</a>
        </p>
        <p class="news-time">
          <i class="fi fi-rs-clock-three"></i> date de publication
        </p>
      </div>

      <div class="item">
        <a href="{{ route('news.title') }}">
          <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="image" class="picture-news">
        </a>
        <h2 class="delete-space">
          <a href="{{ route('news.title') }}" class="white delete-space news-title">titre</a>
        </h2>
        <p class="white delete-space news-description">
          description Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus eius
          suscipit a delectus deserunt dolorum corporis vitae placeat. Consectetur, laborum quod enim modi temporibus
          adipisci similique dicta? Fugit, vitae et?
          <a href="{{ route('news.title') }}" title="Lire_la_suite">Lire la suite...</a>
        </p>
        <p class="news-time">
          <i class="fi fi-rs-clock-three"></i> date de publication
        </p>
      </div>

      <div class="item">
        <a href="{{ route('news.title') }}">
          <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="image" class="picture-news">
        </a>
        <h2 class="delete-space">
          <a href="{{ route('news.title') }}" class="white delete-space news-title">titre</a>
        </h2>
        <p class="white delete-space news-description">
          description Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus eius
          suscipit a delectus deserunt dolorum corporis vitae placeat. Consectetur, laborum quod enim modi temporibus
          adipisci similique dicta? Fugit, vitae et?
          <a href="{{ route('news.title') }}" title="Lire_la_suite">Lire la suite...</a>
        </p>
        <p class="news-time">
          <i class="fi fi-rs-clock-three"></i> date de publication
        </p>
      </div>
    </div>

    <aside class="link-side-contain">
      <section>
        <h2 class="asside-title-link">Postes Populaires</h2>
        <div class="asside-decoration"></div>
        <div class="best-news-contain">
          <a href="{{ route('news.title') }}">
            <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="image">
          </a>
          <div class="best-news-info">
            <h3 class="delete-space">
              <a href="{{ route('news.title') }}" class="delete-space best-news-title">Titre</a>
            </h3>
            <p class="delete-space best-news-time">
              <i class="fi fi-rs-clock-three"></i> date de publication
            </p>
          </div>
        </div>
        <div class="best-news-contain">
          <a href="{{ route('news.title') }}">
            <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="image">
          </a>
          <div class="best-news-info">
            <h3 class="delete-space">
              <a href="{{ route('news.title') }}" class="delete-space best-news-title">Titre</a>
            </h3>
            <p class="delete-space best-news-time">
              <i class="fi fi-rs-clock-three"></i> date de publication
            </p>
          </div>
        </div>
        <div class="best-news-contain">
          <a href="{{ route('news.title') }}">
            <img src="{{ asset('img/branden-skeli-NIO1ZDB5kL0-unsplash.jpg') }}" alt="image">
          </a>
          <div class="best-news-info">
            <h3 class="delete-space">
              <a href="{{ route('news.title') }}" class="delete-space best-news-title">Titre</a>
            </h3>
            <p class="delete-space best-news-time">
              <i class="fi fi-rs-clock-three"></i> date de publication
            </p>
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