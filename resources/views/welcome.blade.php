<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <title>Home - KD's Blog</title>
  <!-- Css -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- AOS library -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<!-- Styles -->
<style>
/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

video {
  max-width: 100%;
  height: auto
}

.bg-white {
  --bg-opacity: 1;
  background-color: #fff;
  background-color: rgba(255, 255, 255, var(--bg-opacity))
}

.bg-gray-100 {
  --bg-opacity: 1;
  background-color: #f7fafc;
  background-color: rgba(247, 250, 252, var(--bg-opacity))
}

.border-gray-200 {
  --border-opacity: 1;
  border-color: #edf2f7;
  border-color: rgba(237, 242, 247, var(--border-opacity))
}

.border-t {
  border-top-width: 1px
}

.flex {
  display: flex
}

.grid {
  display: grid
}

.hidden {
  display: none
}

.items-center {
  align-items: center
}

.justify-center {
  justify-content: center
}

.font-semibold {
  font-weight: 600
}

.h-5 {
  height: 1.25rem
}

.h-8 {
  height: 2rem
}

.h-16 {
  height: 4rem
}

.text-sm {
  font-size: .875rem
}

.text-lg {
  font-size: 1.125rem
}

.leading-7 {
  line-height: 1.75rem
}

.mx-auto {
  margin-left: auto;
  margin-right: auto
}

.ml-1 {
  margin-left: .25rem
}

.mt-2 {
  margin-top: .5rem
}

.mr-2 {
  margin-right: .5rem
}

.ml-2 {
  margin-left: .5rem
}

.mt-4 {
  margin-top: 1rem
}

.ml-4 {
  margin-left: 1rem
}

.mt-8 {
  margin-top: 2rem
}

.ml-12 {
  margin-left: 3rem
}

.-mt-px {
  margin-top: -1px
}

.max-w-6xl {
  max-width: 72rem
}

.min-h-screen {
  min-height: 100vh
}

.overflow-hidden {
  overflow: hidden
}

.p-6 {
  padding: 1.5rem
}

.py-4 {
  padding-top: 1rem;
  padding-bottom: 1rem
}

.px-6 {
  padding-left: 1.5rem;
  padding-right: 1.5rem
}

.pt-8 {
  padding-top: 2rem
}

.fixed {
  position: fixed
}

.relative {
  position: relative
}

.top-0 {
  top: 0
}

.right-0 {
  right: 0
}

.shadow {
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
}

.text-center {
  text-align: center
}

.text-gray-200 {
  --text-opacity: 1;
  color: #edf2f7;
  color: rgba(237, 242, 247, var(--text-opacity))
}

.text-gray-300 {
  --text-opacity: 1;
  color: #e2e8f0;
  color: rgba(226, 232, 240, var(--text-opacity))
}


@media (min-width:640px) {
  .sm\:rounded-lg {
    border-radius: .5rem
  }

  .sm\:block {
    display: block
  }

  .sm\:items-center {
    align-items: center
  }

  .sm\:justify-start {
    justify-content: flex-start
  }

  .sm\:justify-between {
    justify-content: space-between
  }

  .sm\:h-20 {
    height: 5rem
  }

  .sm\:ml-0 {
    margin-left: 0
  }

  .sm\:px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem
  }

}
</style>

<style>
body {
  font-family: 'Nunito', sans-serif;
}
</style>
</head>

<body class="antialiased">
  <div id="wrapper">
    <!-- header -->
    <header class="header">
      <div class="header-text">
        <h1>KD's Blog</h1>
        <h4>Home of verified news...</h4>
      </div>
      <div class="overlay"></div>
    </header>

    <!-- sidebar -->
    <div class="sidebar">
      <span class="closeButton">&times;</span>
      <p class="brand-title"><a href="">KD's Blog</a></p>

      <div class="side-links">
        <ul>
          <li><a class="active" href="{{url('/home')}}">Home</a></li>
          <li><a href="{{route('post')}}">Blog</a></li>
          <li><a href="about">About</a></li>
          <li><a href="contact">Contact</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
      </div>

      <!-- sidebar footer -->
      <footer class="sidebar-footer">
        <div>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
        </div>

        <small>&copy KD's Blog</small>
      </footer>
    </div>
    <!-- Menu Button -->
    <div class="menuButton">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>

    <!-- main -->
    <main class="container">
      <h2 class="header-title">Latest Blog Posts</h2>
      <section class="cards-blog latest-blog">
        <div class="card-blog-content">
          <img src="{{ asset('uploads') }}" alt="" />
          <p>
            2 hours ago
            <span style="float: right">Written By KD Nimavat</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">Benefits of Paul's Photography capturing your Wedding</a>
          </h4>
        </div>

        <div class="card-blog-content" data-aos="fade-left">
          <img src="{{ asset('images/pic2.jpg') }}" alt="" />
          <p>
            23 hours ago
            <span style="float: right">Written By KD Nimavat</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">Benefits of Using Drones in Aerial Photography</a>
          </h4>
        </div>

        <div class="card-blog-content" data-aos="fade-up">
          <img src="{{ asset('images/pic3.jpg') }}" alt="" />
          <p>
            2 days ago
            <span style="float: right">Written By KD Nimavat</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">Best Location Ideas for Your Next Photo Shoot</a>
          </h4>
        </div>

        <div class="card-blog-content" data-aos="fade-left">
          <img src="{{ asset('images/pic4.jpg') }}" alt="" />
          <p>
            3days ago
            <span style="float: right">Written By KD Nimavat</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">8 Most Popular Photography Genres</a>
          </h4>
        </div>
      </section>
    </main>

    <!-- Main footer -->
    <footer class="main-footer">
      <div>
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
      </div>
      <small>&copy KD's Blog</small>
    </footer>
  </div>

  <!-- Click events to menu and close buttons using javaascript-->
  <script>
  document
    .querySelector(".menuButton")
    .addEventListener("click", function() {
      document.querySelector(".sidebar").style.width = "100%";
      document.querySelector(".sidebar").style.zIndex = "5";
    });

  document
    .querySelector(".closeButton")
    .addEventListener("click", function() {
      document.querySelector(".sidebar").style.width = "0";
    });
  </script>

  <!-- Cards animations -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
  AOS.init({
    offset: 400,
    duration: 3000,
  });
  document
    .querySelectorAll("img")
    .forEach((img) => img.addEventListener("load", () => AOS.refresh()));
  </script>
</body>

</html>