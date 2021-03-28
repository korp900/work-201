<?php
session_start();
if(empty($_SESSION['id'])){
  header('Location: http://korp9000.beget.tech/');
  exit;
}
?>
<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="shortcut icon" type="image/x-icon" href="https://cdn.icrypto.media/images/455100ed_3aff_4e2a_b843_d91c932062ea.jpeg" />
        <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/bootstrap-reboot.css">
            <link rel="stylesheet" href="css/bootstrap-grid.css">
            <link rel="stylesheet" href="css/bootstrap-grid.min.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/bootstrap.css.map">
            <link rel="stylesheet" href="css/bootstrap-reboot.css.map">
            <link rel="stylesheet" href="css/bootstrap-grid.css.map">
            <link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
            <link rel="stylesheet" href="css/bootstrap.min.css.map">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/05a1b08970.js" crossorigin="anonymous"></script>

        <title>korobkov workgroup 201 </title>

       
    </head>
      
    <body>
    <!-- Навигационная панель -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Workgroup 201 Korobkov</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact-us.php">Контакты</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
    
        
        
        
        <!-- carousel-item-->
        <div class="row text-center">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                 <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.webhat.in/wp-content/uploads/2017/03/missilinous-banner.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                         <img src="http://pbsutf8.neleryapiyoruz.com/data/blog/4tNn8aLYtcFmn1jI.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item" >
                         <img src="http://pbsutf8.neleryapiyoruz.com/data/blog/4tNn8aLYtcFmn1jI.jpg" class="d-block w-100" alt="">
                    </div>
                </div>
            </div>
        </div>  
        
        <!-- carousel-item end-->
        
        <!-- container forma -->
        <div class="container">
            <div class="row py-5">
                <div class="col-sm-4">
                    <h3 class="mb-3">Контакты</h3>
                    <h5><i class="fas fa-home"></i> Адрес:</h5>
                    <p>Moscow street big 5</p>
                    <h5><i class="fas fa-mobile-alt"></i> Телефон:</h5>
                    <p>+7 999 987 85 22</p>
                    <h5><i class="fas fa-envelope"></i> E-mail:</h5>
                    <p>korp900@mail.ru</p>
                    <h5><i class="fas fa-clock"></i> Время работы</h5>
                    <p>9:00 - 14:00</p>
                </div>    
                <div class="col-sm-8">
                    <h3 class="text-center mb-3">Форма обратной связи</h3>
                    <form action="">
                        <div class="my-3">
                            <input type="text" placeholder="name" class="form-control">
                        </div>
                        <div class="my-3">
                            <input type="email" placeholder="e-mail" class="form-control">
                        </div>
                        <div class="my-3">
                            <textarea placeholder="text" class="form-control"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary">
                    </form>
                    <div>
                        <a class="btn btn-social-icon  btn-twitter ">
                            <span class = "fa fa-twitter"> </span>
                        </a>
                        <a class="btn btn-social-icon  btn-vk ">
                            <span class = "fa fa-vk"> </span>
                        </a>
                        <a class="btn btn-social-icon  btn-youtube ">
                            <span class = "fa fa-youtube"> </span>
                        </a>
                        <div><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A59e60e6a15a5443fb331bd6480e199269f9555e56ac8aecd45412677230965c2&amp;width=100%25&amp;height=320&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <!-- container forma end-->
        <!-- footer -->
        <footer class="container-fluid bg-dark bg-gradiebt text-white py-3">
            <p class="text-center">&copy; 2021 Korobkov  workgroup 201</p>
        </footer>
        <!-- footer end -->
        
        
            

        <!-- Optional JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        
    </body>
</html>