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
    <title>ГРУППА 0201</title>
  </head>
  <body>
    <!-- Навигационная панель -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">ГРУППА 0201</a>
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
        <h1 class="text-center my-3">Регистрация на сайте</h1>
        <form onsubmit="sendForm(this); return false;">
          <div class="mb-3">
            <input name="name" type="text" class="form-control" placeholder="Имя" required>
          </div>
          <div class="mb-3">
            <input name="lastname" type="text" class="form-control" placeholder="Фамилия" required>
          </div>
          <div class="mb-3">
            <input name="email" type="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <input name="pass" type="password" class="form-control" placeholder="Пароль" required>
          </div>
          <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" value="Зарегистрироваться">
          </div>
        </form>
      </div>
    </div>
    
    <script>
      function sendForm(form){
        let formData = new FormData(form);
        fetch('php/handlerReg.php',{
          method: 'POST',
          body: formData
        }).then(response=>response.text())
          .then(result=>console.log(result));
      }
    </script>
    
    <!-- Конец навигационной панели -->
         <!-- footer -->
        <footer class="container-fluid bg-dark bg-gradiebt text-white py-3">
            <p class="text-center">&copy; 2021 Korobkov  workgroup 201</p>
        </footer>
        <!-- footer end -->
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>