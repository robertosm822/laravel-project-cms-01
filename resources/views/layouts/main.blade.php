<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Desenvolvedor Web - Roberto Soares De Melo">
    <meta name="keywords" content="HTML5,CSS3,JSON,JavaScript,jQuery,VUE.JS,NODE.JS,MongoDB,PHP,Laravel,C#,ASP.NET">
    <link href="./img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <title>Sis Web Mobile | Roberto Soares De Melo</title>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#the-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ route('blog') }}">
                <img src="img/logo.png" alt="Logomarca" style="width: 88px; margin-top: -11px;float: left;margin-right: 10px;">
                Roberto S. De Melo
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="the-navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active" id="blog"><a href="{{ route('blog') }}">Blog</a></li>
                <li id="sobre"><a href="#" >Sobre</a></li>
                <li id="contato"><a href="{{ url('contato') }}">Contato</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="copyright">&copy; 2010 - {{date('Y')}} Roberto Soares De Melo</p>
                </div>
                <div class="col-md-4">
                    <nav>
                        <ul class="social-icons">
                            
                            <li><a href="https://www.linkedin.com/in/roberto-soares-melo-b7141125/" class="fab fa-linkedin-in"></a></li>
        
                            <li><a href="https://github.com/robertosm822" class="fab fa-github"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!-- VALIDATE FORM -->
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.js"></script>

    <script>
        let url = window.location.href;
        let urlFinal = url.split('/');

        console.log(urlFinal);
        if(urlFinal[3] == "contato"){
          $('li#contato').attr('class', 'active');
          $('li#blog').attr('class', '');
          $('li#sobre').attr('class', '');
        } 
    </script>
   
</body>
</html>
