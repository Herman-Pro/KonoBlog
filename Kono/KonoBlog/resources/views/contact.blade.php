@extends('layouts.app')

@section('title', 'Contact')

@section('content')
  <div class="pub-contain">
    <div class="contact-contain">
      <h2 class="about-title">Contact</h2>
      <div class="asside-decoration"></div>
      <form>
        <input type="text" class="contact-input" placeholder="Name">
        <input type="email" class="contact-input" placeholder="Email" required>
        <textarea name="message" id="message" class="contact-message" placeholder="Message" required></textarea>
        <button type="submit" class="contact-button">Send</button>
      </form>
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