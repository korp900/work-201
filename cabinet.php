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

        <style>
      .change-btn{
        color:navy;
        cursor:pointer;
      }
      .change-btn:hover{
        color:blue;
      }
      .save-btn{
        color:green;
        cursor:pointer;
      }
      .save-btn:hover{
        color:lime;
      }
      .cancel-btn{
        color:maroon;
        cursor:pointer;
      }
      .cancel-btn:hover{
        color:red;
      }
        </style>
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
    
        <div class="container my-5">
          <div class="col-6 mx-auto">
            <p>Имя: <span><?= $_SESSION['name']?></span> 
              <span class="change-btn">[изменить]</span>
              <span class="save-btn" hidden data-item="name">[сохранить]</span>
              <span class="cancel-btn" hidden>[отменить]</span>
            </p>
            <p>Фамилия: <span><?= $_SESSION['lastname']?></span>
              <span class="change-btn">[изменить]</span>
              <span class="save-btn" hidden data-item="lastname">[сохранить]</span>
              <span class="cancel-btn" hidden>[отменить]</span>
            </p>
            <p>ID: <?= $_SESSION['id']?></p>
          </div>
        </div>
    
        <script>
          let changeBtn = document.getElementsByClassName('change-btn');
          let saveBtn = document.getElementsByClassName('save-btn');
          let cancelBtn = document.getElementsByClassName('cancel-btn');
          for(let i=0; i<changeBtn.length; i++){
            let value = changeBtn[i].previousElementSibling.innerText;
            changeBtn[i].addEventListener('click',()=>{
              value = changeBtn[i].previousElementSibling.innerText;
              changeBtn[i].previousElementSibling.innerHTML = `<input type="text" value="${value}">`;
              changeBtn[i].hidden = true;
              saveBtn[i].hidden = false;
              cancelBtn[i].hidden = false;
            });
            saveBtn[i].addEventListener('click',()=>{
              let value = changeBtn[i].previousElementSibling.firstChild.value;
              let item = saveBtn[i].dataset.item;
              let formData = new FormData();
              formData.append("value",value);
              formData.append("item",item);
              fetch('php/handlerChangeUserData.php',{
                method: "POST",
                body: formData
              }).then(response=>response.json())
                .then(result=>{
                  if(result.result == "success"){ // С сервера приходит "success"
                    changeBtn[i].hidden = false; // Отображаем кнопку изменить
                    saveBtn[i].hidden = true; // Скрываем кнопку сохранить
                    cancelBtn[i].hidden = true; // Скрываем кнопку отменить
                    changeBtn[i].previousElementSibling.innerHTML = value; //Удаляем инпут, а вместо него пишем то, что ввёл пользователь
                  }
                })
            });
            cancelBtn[i].addEventListener('click',()=>{
              changeBtn[i].previousElementSibling.innerHTML = value;
              changeBtn[i].hidden = false; // Отображаем кнопку изменить
              saveBtn[i].hidden = true; // Скрываем кнопку сохранить
              cancelBtn[i].hidden = true; // Скрываем кнопку отменить
            });
          }
        </script>
    
    <!-- Конец навигационной панели -->
    <footer class="container-fluid bg-dark bg-gradient text-white py-3">
      <p class="text-center">&copy; 2021 Korobkov</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>