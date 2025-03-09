@extends('layouts.app')

@section('title', 'À propos')

@section('content')
  <div class="pub-contain">
    <div class="about_us-contain">
      <h2 class="about-title">About Us</h2>
      <div class="asside-decoration"></div>
      <p class="white news-description">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis ratione iste impedit fugiat
        quisquam, facere vero quo hic vitae perspiciatis omnis iusto dignissimos error consequuntur laborum
        laboriosam nisi animi eveniet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
        repellendus consequatur sapiente similique fugiat magnam sit aut et laboriosam, aperiam saepe harum
        quas excepturi mollitia unde id! Voluptatem, asperiores iusto. Lorem ipsum dolor sit amet
        consectetur adipisicing elit. Reiciendis quibusdam praesentium recusandae exercitationem eligendi
        unde perspiciatis numquam ea officiis ad repudiandae, sunt velit veniam placeat sed, at voluptatum,
        culpa officia! <br> <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus voluptatem saepe, asperiores
        distinctio deserunt consequatur possimus excepturi rerum ipsa repudiandae quaerat aliquid, aliquam
        quae voluptatum neque mollitia quibusdam adipisci voluptas. Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Nam, suscipit nostrum accusamus quisquam iusto numquam at quae rerum quod
        provident quasi veritatis alias ullam, ex ab, quam vitae est ad!
        Necessitatibus, fuga quos quis ipsa saepe eligendi voluptate doloribus illum, mollitia optio alias
        est? Architecto maiores consequatur neque, corporis ipsa nostrum, facere porro explicabo voluptate
        aliquid, in voluptates voluptas voluptatem! <br> <br>
        Omnis, corporis vel iusto dolore officia atque earum nam voluptates, tempore eaque quasi. Dolores
        sint laborum enim vero repellat similique aperiam dignissimos? Labore id hic nobis reiciendis animi
        earum cum.
        Quod rerum nisi quas iusto quaerat ipsa eaque velit porro explicabo illum amet odit vero dolorem
        illo cum hic architecto possimus consectetur asperiores vitae voluptas laborum, voluptatum impedit
        cumque? Consectetur? <br> <br>
        Atque quod error illum voluptate earum pariatur aliquid amet quaerat labore voluptatem, vel enim.
        Officia architecto voluptatum labore nulla dignissimos corporis, consequatur laudantium aliquid,
        reiciendis, nobis nostrum rem impedit quam!
        Voluptatibus earum nobis error, illo numquam magnam enim a exercitationem molestias cum fugit
        voluptate nihil aperiam deleniti fugiat sed natus dolorem magni saepe, et dolore voluptates. Iure
        exercitationem voluptates asperiores. <br> <br>
        Ratione, ullam! Sed dolorum quia accusamus doloribus nisi nobis quos aut ea laborum nihil esse ad
        dolores rem, beatae inventore dolor magni molestiae vitae earum delectus, harum corrupti deserunt.
        Laborum.
        Aliquam impedit at odio pariatur officiis quia maxime repellat doloribus molestias. Veniam amet,
        laboriosam atque suscipit deserunt natus cum ducimus quaerat quod animi ex dignissimos explicabo!
        Debitis nam ratione cumque?
        Cum accusamus facere at doloribus modi rem velit, recusandae veniam quae non. Laborum natus totam
        <br><br>
        earum porro voluptatum, beatae eaque accusantium est, omnis quisquam veritatis illum corporis
        possimus nobis a?
        Architecto illo sunt quos, laboriosam ab ex nisi consectetur vel. Totam suscipit voluptatibus
        reprehenderit iure ut vel impedit, minus modi laudantium nulla nisi, fuga temporibus molestiae
        consequuntur architecto ea quia.
      </p>
    </div>

    <!-- Sidebar -->
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