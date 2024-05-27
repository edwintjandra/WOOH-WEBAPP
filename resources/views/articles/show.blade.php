<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WOOH - The best water quality</title>
      
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
       <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
       <link href="{{ asset('css/navbar.css') }}" rel="stylesheet" />
       <style>

        .hero-header{
            background: url('{{ asset('assets/img/ocean-2.jpg') }}') no-repeat center center;
            background-size: cover;
            color:whitesmoke;
            padding:120px;
        }

        .article-content {
            width: 60%;
            margin: auto;
            margin-top:40px;
        }

        .image-header img {
            height: 300px; 
            width: 100%; 
            object-fit: cover; 
        }
    </style>
        
    </head>
    <body>
       <!-- Navigation-->
       <nav class="custom-navbar">
            <div class="custom-navbar-container">
                <a class="custom-navbar-brand" href="/">WOOH</a>
                <div class="custom-nav-links">
                    <a href="{{ route('water-machines.index') }}">Find Machines</a>
                    <a href="{{ route('water-packages.index') }}">Buy Packages</a>
                    <a href="/forum">Forum</a>
                    <a href="{{ route('articles.index') }}">Articles</a>
                    <a href="{{ route('login') }}">Sign In</a>
                </div>
            </div>
        </nav>
      
       <!-- Hero Header -->
       <div class="hero-header"  class="jumbotron bg-cover text-white">
        <div class="container py-5 text-center">
            <h1 class="display-4 font-weight-bold">{{ $article->title }}</h1>
            <p class="font-italic mb-0">
              {{ $article->subtitle }}
              <br>
              Created At {{ $article->created_at->format('F j, Y') }}
            </p>
         </div>
      </div>

    
    
      <div class="article-content">
          <p>
              {{ $article->content }}
          </p>
      </div>
    
 
      
  
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Core theme JS-->
      <script src="js/scripts.js"></script>
      <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
      <!-- * *                               SB Forms JS                               * *-->
      <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
      <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
      <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>