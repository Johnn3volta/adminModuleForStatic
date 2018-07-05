<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="server.js"></script>
    <?php require_once 'functions.php'; ?>
</head>
<body onload="user.load()">
<div id="form" style="display: none">
  <div class="form-header">Авторизация</div>
  <div class="form">
    <div class="error"><span id="error-text">Неправильно введен логин или пароль!</span>
    </div>
    <div class="form-items">
      <label for="login">Логин:</label>
      <input type="text" value="" id="login" placeholder="Введите логин"
             onkeypress="checkAuth()"
             required>
      <label for="pass">Пароль:</label>
      <input type="password" value="" id="pass" required
             placeholder="Введите пароль" onkeypress="checkAuth()"><br>
      <button type="button" id="authBtn"
              onclick="auth($('login').value,$('pass').value);" disabled>ВХОД
      </button>
    </div>
  </div>
</div>
<div id="hello" style="display: none;">
  <div class="admin-head">
    <ul class="head-list">
      <li><img src="admin-icon.png" alt="Иконка Админа"></li>
      <li><span id="userName"></span></li>
      <li>
        <button onclick="logout();">Выйти <img src="logout.png" alt=""></button>
      </li>
    </ul>
  </div>
  <hr>
  <h2 style="text-align: center">Этикетки</h2>
  <hr>
  <div class="product-table">
    <div class="item-table">
      <table align="center">
        <tr>
          <th>Название товара</th>
          <th>Цена за ролик</th>
          <th>Цена за коробку</th>
          <th></th>
        </tr>
        <tr>
          <td>
            <span class="gg">$prName0</span><input type="text" name="product" placeholder="Название товара" value="" id="product" onkeypress="check()">
          </td>
          <td><span class="gg">$prPrice0</span><input type="number" name="price" min="1" value=""
                     id="price" onkeypress="check()"></td>
          <td><span class="gg">$priceBox0</span><input type="number" name="priceBox" min="1" value=""
                     id="priceBox" onkeypress="check()"></td>
          <td><input type="button" id="addProduct" value="Добавить товар"
                     disabled
                     onclick="addProduct($('product').value,$('price').value,$('priceBox').value)">
          </td>
        </tr>
          <?php getProducts(); ?>
      </table>
    </div>
  </div>
  <hr>
  <h2 style="text-align: center;">Популярные Этикетки</h2>
  <hr>
  <div class="product-table">
    <div class="item-table">
      <table align="center">
        <tr>
          <th>Название товара</th>
          <th>Цена за ролик</th>
          <th>Цена за коробку</th>
          <th></th>
        </tr>
        <tr>
          <td>
            <span class="gg">$popName0</span><input type="text" name="product" placeholder="Название товара" value="" id="popProduct" onkeypress="checkPop()">
          </td>
          <td><span class="gg">$popPrice0</span><input type="number" name="price" min="1" value=""
                                                      id="popPrice" onkeypress="checkPop()"></td>
          <td><span class="gg">$popPriceBox0</span><input type="number" name="priceBox" min="1" value=""
                                                       id="popPriceBox" onkeypress="checkPop()"></td>
          <td><input type="button" id="addPopular" value="Добавить товар"
                     disabled
                     onclick="addPopular($('popProduct').value,$('popPrice').value,$('popPriceBox').value)">
          </td>
        </tr>
          <?php getPopular(); ?>
      </table>
      <hr>
      <div class="footer" >
        Подвал админки
      </div>
    </div>
  </div>
</div>
</body>
</html>