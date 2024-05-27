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
                background: url('{{ asset('assets/img/ocean-1.jpg') }}') no-repeat center center;
                background-size: cover;
                color:whitesmoke;
                padding:120px;
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
                    <a href="{{ route('forum.index') }}">Forum</a>
                    <a href="{{ route('articles.index') }}">Articles</a>
                    <a href="{{ route('login') }}">Sign In</a>
                </div>
            </div>
        </nav>

        <!-- Hero Header -->
        <div class="hero-header"  class="jumbotron bg-cover text-white">
            <div class="container py-5 text-center">
                <h1 class="display-4 font-weight-bold">Discover the Purest Mineral Water</h1>
                <p class="font-italic mb-0">Experience the essence of nature with our premium quality mineral water, sourced from pristine natural springs.</p>
                <!-- Search form -->
                <div class="row">
                    <div class="col-12">
                        <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                            <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                            <button class="btn btn-primary">Search</button>
                        </form>
                    </div>                
                </div>    
             </div>
        </div>

        <div class="container" style="margin-top:50px;">
            <div class="row">
                @foreach ($articles as $index => $article)
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="thumbnail">
                                    <img src="{{ asset($article->thumbnail_url) }}" alt="Image" class="img-responsive">
                                </div>
                                <div class="caption">
                                    <h3>{{ $article->title }}</h3>
                                    <p class="meta">Created At {{ $article->created_at->format('F j, Y') }}</p>
                                    <p class="briefContent">{{ Str::limit($article->content, 100, '...') }}</p>
                                    <a href="{{ route('articles.show',$article->id) }}" class="btn btn-info">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    @if (($index + 1) % 3 == 0)
                        <div class="clearfix"></div>
                    @endif
                @endforeach
            </div>
        </div>
        
         

        </div>
        
    
      <script>
        var briefContentElements = document.querySelectorAll(".briefContent");

        briefContentElements.forEach(function(element) {
            var substringBriefContent = element.textContent.substr(0, 100);

            element.textContent = substringBriefContent + (element.textContent.length > 100 ? "..." : "");
        });

      </script>

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
