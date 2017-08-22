<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>login</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
</head>

<body>

  <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./css/hsoc.css">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>


  <header onclick="location.href='index.php'">
    <p>Web Hacking</p>
  </header>

  <section class="wrap-post">
    <section class="post">
      <article class="post-title">
        <p>로그인</p>
      </article>

      <article class="post-style">
        <p class="login"><strong>LOGIN</strong></p>
        <form name="login" method="post" action="logindb.php">
    			<div id="login_menu">
    			<input id="id" class="login" type="text" name="id" placeholder="ID" required="ck_blink()"><br>
    			<input id="pw" class="login" type="password" name="pw" placeholder="PASSWORD" required="ck_blink()"><br>
    			<input type="submit" name="login" class="login_button" value="로그인">
    			</div>
		     </form>
      </article>
    </section>
  </section>


  <footer>
    <p style="font-size:15px">Copyright &copy; hsoc.kr</p>

    <p style="margin-bottom : 5px;">
      [04129]서울 마포구 마포대로11길 44-80 (아현동, 한세사이버보안고등학교)<br> 서울 마포구 아현동 771 대표전화) (교무실)02-362-0130~2,(행정실)02-362-0134,(팩스) 02-312-3996
    </p>
  </footer>


</body>

</html>
