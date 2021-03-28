<? session_start(); ?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/750282b7c8.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>korobkov workgroup 201</title>
  </head>
  <body>
    <!-- Навигационная панель -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">korobkov workgroup 201</a>
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
          <? if(empty($_SESSION['id'])):?>
          <a class="btn btn-success me-3" href="/reg.php">Регистрация</a>
          <a class="btn btn-success" href="/auth.php">Вход</a>
          <? else: ?>
          <a class="btn btn-success" href="/exit.php">Выход</a>
          <? endif; ?>
        </div>
      </div>
    </nav>
    <!-- Конец навигационной панели -->
    <!-- Карусель -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slide1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/slide2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/slide3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
    <!-- Конец карусели -->
    
    <div class="container pt-5">
      <h1 class="text-center">Изучаемые технологии</h1>
      <div class="row text-center mt-3">
        <div class="col-sm-4">
          <i class="fab fa-html5 fa-10x" style="color:#f06529;"></i>
          <h3>HTML</h3>
        </div>
        <div class="col-sm-4">
          <i class="fab fa-css3-alt fa-10x"></i>
          <h3>CSS</h3>
        </div>
        <div class="col-sm-4">
          <i class="fab fa-js-square fa-10x"></i>
          <h3>JavaScript</h3>
        </div>
      </div>
    </div>
    
    <div class="container-fluid py-5" style="background-image: url(img/abstrakcija.jpg); background-size:cover;">
       <div class="col-md-5 mx-auto p-3" style="background:RGBA(0,0,0,0.5); color:white; border:2px solid black;">
         <p>
          <h4>Text</h4>
          Text test text
         </p>
       </div>
    </div>
    
    <div class="container">
      <div class="row py-5">
        <div class="col-sm-4">
          <h3 class="mb-3">Контакты</h3>
          <h5>Адрес:</h5>
          <p>Москва Street </p>
          <h5>Телефон:</h5>
          <p>+7 (999) 999-99-99</p>
          <h5>E-mail:</h5>
          <p>korp900@mail.ru</p>
          <h5>Время работы:</h5>
          <p>ПН - ПТ: с 9 - 14</p>
        </div>
        <div class="col-sm-8">
          <h3 class="text-center mb-3">Форма обратной связи</h3>
          <form onsubmit="sendMail(this); return false;">
            <div class="my-3">
              <input name="name" type="text" placeholder="Имя" class="form-control">
            </div>
            <div class="my-3">
              <input name="email" type="email" placeholder="E-mail" class="form-control">
            </div>
            <div class="my-3">
              <textarea name="text" placeholder="Ваш текст" class="form-control"></textarea>
            </div>
            <input type="submit" class="form-control btn btn-primary">
          </form>
        </div>
      </div>
    </div>
    <!-- Яндекс карта -->
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A02563b99916d715bd73fb0fc178246b4ab84bf311f12ac4f0d7ee29418abdf38&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
    <!-- Конец яндекс карты -->
    <footer class="container-fluid bg-dark bg-gradient text-white py-3">
      <p class="text-center">&copy; korobkov workgroup 201</p>
    </footer>
    
    <script>
      function sendMail(form){
        let formData = new FormData(form);
        fetch('php/handlerMail.php',{
          method: 'POST',
          body: formData
        }).then((response)=>{return response.text()})
          .then((result)=>{
            if(result == 'success')
              form.innerHTML = '<h1>Письмо успешно отправлено</h1>';
            else
              form.innerHTML = '<h1>Произошла ошибка</h1>';
          })
      }
      
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>