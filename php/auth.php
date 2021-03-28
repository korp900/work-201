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
    
    <div class="container">
      <div class="col-sm-5 mx-auto my-5">
        <h1 class="text-center my-3">Авторизация на сайте</h1>
        <form onsubmit="sendForm(this); return false;">
          <div class="mb-3">
            <input name="email" type="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <input name="pass" type="password" class="form-control" placeholder="Пароль" required>
            <p id="info" style="color:red;"></p>
          </div>
          <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" value="Войти на сайт">
          </div>
        </form>
      </div>
    </div>
    
    <script>
    let info = document.getElementById('info');
      function sendForm(form){
        let formData = new FormData(form);
        fetch('php/handlerAuth.php',{
          method: 'POST',
          body: formData
        }).then(response=>response.json())
          .then(result=>{
            if(result.result == "success"){
              location.href = "/cabinet.php";
            }else{
              info.innerText = "Логин или пароль введён неверено!";
            }
            });
      }
    </script>
    
         <!-- footer -->
        <footer class="container-fluid bg-dark bg-gradiebt text-white py-3">
            <p class="text-center">&copy; 2021 Korobkov  workgroup 201</p>
        </footer>
        <!-- footer end -->
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>