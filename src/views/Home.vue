<template>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="http://unpkg.com/ress/dist/ress.min.css">
      <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      <header>
        <div class="flex between">
          <h1 class="header-logo">Logo</h1>
          <nav class="header-nav">
            <ul>
              <li><a href="#">Menu</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Acsece</a></li>
            </ul>
          </nav>
        </div>
      </header>
  
      <div id="cafe">
      </div>

      <div id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav class="menu-content">
        <p class="menu-title">Cafe</p>
        <ul class="menu-content_inner">
          <li><a href="#">Menu</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Acsece</a></li>
        </ul>
      </nav>

      <div id="concept" class="wrap">
        <h2 class="section-title">Concept</h2>
        <div class="flex around">
          <div class="concept-left">
            <img src="img/バリスタの概念が変わるカフェ、原宿「dotcom space Tokyo」のコピー.jpeg">
          </div>
          <div class="concept-right">
            <h3>ここにタイトルが入ります。ここにタイトルが入ります。
ここにタイトルが入ります。ここにタイトルが入ります。
            </h3>
            <p>ここにテキストが入ります。ここにテキストが入ります。
             ここにテキストが入ります。ここにテキストが入ります。
             ここにテキストが入ります。ここにテキストが入ります。
             ここにテキストが入ります。ここにテキストが入ります。
             ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
        </div>
      </div>

      <div id="news">
        <h2 class="section-title">News</h2>
        <div class="flex around business-wrap">
          <div class="news-cat">
            <img src="img/SAKUZAN_Sara コーヒーカップ グレー　- スタイルストア.jpeg">
            <h3>ここにタイトルが入ります</h3>
            <p>ここに説明が入ります。ここに説明が入ります。
             ここに説明が入ります。ここに説明が入ります。</p>
          </div>
      
          <div class="news-cat">
            <img src="img/SAKUZAN_Sara コーヒーカップ グレー　- スタイルストア.jpeg">
            <h3>ここにタイトルが入ります</h3>
            <p>ここに説明が入ります。ここに説明が入ります。
             ここに説明が入ります。ここに説明が入ります。</p>
          </div>

          <div class="news-cat">
            <img src="img/SAKUZAN_Sara コーヒーカップ グレー　- スタイルストア.jpeg">
            <h3>ここにタイトルが入ります</h3>
            <p>ここに説明が入ります。ここに説明が入ります。
               ここに説明が入ります。ここに説明が入ります。</p>
          </div>
       </div>
      </div>

      <div class="contact">
        <h2 class="section-title">Contact</h2>
        <form class="from" method="post">
          <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="user_name">
          </div>
          <div>
            <label for="mail">E-mail:</label>
            <input type="email" id="mail" name="user_mail">
          </div>
          <div>
            <label for="tell">Tell:</label>
            <input type="tell" id="tell" name="user_name">
          </div>
          <div>
            <label for="msg">Message:</label>
            <textarea id="msg" name="user_message"></textarea>
          </div>
          <div class="button-submit">
            <button class="button" type="submit">Button</button>
          </div>
        </form>
      </div>

      <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
    </body>
  </html>
</template>

