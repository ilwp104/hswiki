<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
</head>

<body>

  <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./css/hswiki.css">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>


  <header></header>

  <section class="wrap-post">

    <nav class="side-menu">
      <article class="side-title">
        <p>목차</p>
      </article>
      <article class="post-style">
        <p onclick="focusclick(1)">학교에게</p>
        <p onclick="focusclick(2)">hswiki에게</p>
      </article>
    </nav>

    <section id="post1" class="post">
      <article class="post-title">
        <p>학교에게</p>
      </article>


      <article class="post-style">
        <div class="suggestdiv">
        <ul style="list-style: none; padding : 0">
          <?php
            require_once("dbinfo.php");
            $connect = mysql_connect($hostname,$username,$passwd);
            $db_con=mysql_select_db($dbname,$connect);
            $sql = "select * from toschool";
            $result = mysql_query($sql,$connect);
            $snum=0;
            while ($row=mysql_fetch_array($result)) {
              echo "
                <li>
                  <p class='writer'>작성자 : $row[writer]</p>
                  <textarea readonly='readonly'>$row[content]</textarea>
                </li>";
                $snum++;
              };
        echo "</ul>
            </div>";

           mysql_close($connect);
        ?>
        <form action="suginsert.php" method="post">
          <input type="hidden" name="table" value="toschool">
          <input type="hidden" name="pnum" value="<?php echo $snum?>">
          <ul id="input">
            <li class="dbadd">
              <p><input class="sign" type="text" name="name" placeholder="작성자" maxlength="10"><br></p>
            </li>

            <li class="dbadd">
              <textarea name="content" rows="4" cols="30" placeholder="하고 싶은 말 (최대 150글자)" maxlength="150"></textarea>
            </li>

            <li class="dbadd subu">
              <input class="subutton" type="submit" value="입력완료"><input class="subutton" type="reset" value ="초기화">
            </li>
          </ul>
        </form>
      </article>
    </section>

    <section id="post2" class="post">
      <article class="post-title">
        <p>hswiki에게</p>
      </article>

      <article class="post-style">
        <div class="suggestdiv">
        <ul style="list-style: none; padding : 0">
          <?php
            require_once("dbinfo.php");
            $connect = mysql_connect($hostname,$username,$passwd);
            $db_con=mysql_select_db($dbname,$connect);
            $sql = "select * from tohswiki";
            $result = mysql_query($sql,$connect);
            $hnum=0;
            while ($row=mysql_fetch_array($result)) {
              echo "
                <li>
                  <p class='writer'>작성자 : $row[writer]</p>
                  <textarea readonly='readonly'>$row[content]</textarea>
                </li>";
                $hnum++;
              };
        echo "</ul>
            </div>";

           mysql_close($connect);
        ?>
        <form action="suginsert.php" method="post">
          <input type="hidden" name="table" value="tohswiki">
          <input type="hidden" name="pnum" value="<?php echo $hnum?>">
          <ul id="input">
            <li class="dbadd">
              <p><input class="sign" type="text" name="name" placeholder="작성자" maxlength="10"><br></p>
            </li>

            <li class="dbadd">
              <textarea name="content" rows="4" cols="30" placeholder="하고 싶은 말 (최대 150글자)" maxlength="150"></textarea>
            </li>

            <li class="dbadd subu">
              <input class="subutton" type="submit" value="입력완료"><input class="subutton" type="reset" value ="초기화">
            </li>
          </ul>
        </form>
      </article>
    </section>
  </section>


  <footer></footer>

  <script type="text/javascript">
    $("header").load("header.html");
    $("footer").load("footer.html");

    function focusclick(num) {
      var offset = $("#post" + num).offset().top - 70;
      if (num == 1) {
        $("body").animate({
          scrollTop: 0
        }, 400);
      } else {
        $("body").animate({
          scrollTop: offset
        }, 400);
      }
    }

  </script>

</body>

</html>
