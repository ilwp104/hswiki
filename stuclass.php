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

    <section id="post1" class="post">
      <article class="post-title">
        <?php
          echo "<p>".$_GET['name']."</p>";
        ?>
      </article>

      <article class="post-style">
        <div class="contents">
          <?php
            require_once("dbinfo.php");
            $connect = mysql_connect($hostname,$username,$passwd);
            $db_con=mysql_select_db($dbname,$connect);


            $sql = "select name from ".$_GET['table']." where num=0;";
            $result = mysql_query($sql,$connect);
            $teacher=mysql_fetch_array($result);

            echo "<p class='cltitle'>".$_GET['class']."</p>";
            echo "<p> 담임선생님 : ".$teacher["name"]."</p>";
            echo "
            <table id='student_table'>

            <tr>
              <td class='tnum'>번호</td>
              <td class='tname'>이름</td>
              <td class='tex'>하고 싶은 말</td>
            </tr>";

            $sql = "select * from ".$_GET['table']." where num not in(0);";
            $result = mysql_query($sql,$connect);

            while ($row=mysql_fetch_array($result)) {
              echo("
              <tr>
                <td class='tnum'>$row[num]</td>
                <td class='tname'>$row[name]</td>
                <td class='tex'>$row[ex]</td>
              </tr>
              ");
            }
            echo "</table>";

             mysql_close($connect);
          ?>
        </div>
      </article>
    </section>

    <section id="post2" class="post">
      <article id="addpost" class="post-title">
        <p>추가</p>
      </article>

      <article class="post-style addpost">
        <div class="contents">
          <form action="insert.php" method="post">
            <input type="hidden" name="hname" value="<?php echo $_GET['name'] ?>">
            <input type="hidden" name="hclass" value="<?php echo $_GET['class'] ?>">
            <input type="hidden" name="table" value="<?php echo $_GET['table'] ?>">
            <ul id="input">
              <li class="dbadd">
                <p><input class="sign" type="text" name="num" placeholder="출석 번호를 입력해주세요" maxlength="2" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"></p>
              </li>

              <li class="dbadd">
                <p><input class="sign" type="text" name="name" placeholder="이름 입력" maxlength="5"><br></p>
              </li>

              <li class="dbadd">
                <p><input class="sign" type="text" name="ex" placeholder="설명 (최대 30글자)" maxlength="30"><br></p>
              </li>

              <li class="dbadd">
                <input class="button" type="submit" value="입력완료"><input class="button" type="reset" value ="초기화">
              </li>
            </ul>
          </form>
        </div>
      </article>
    </section>

    <section id="post3" class="post">
      <article id="updatepost" class="post-title">
        <p>수정</p>
      </article>

      <article class="post-style updatepost">
        <div class="contents">
          <form action="update.php" method="post">
            <input type="hidden" name="hname" value="<?php echo $_GET['name'] ?>">
            <input type="hidden" name="hclass" value="<?php echo $_GET['class'] ?>">
            <input type="hidden" name="table" value="<?php echo $_GET['table'] ?>">
            <ul id="input">
              <li class="dbadd">
                <select class="sel_name" name="select_name">
                  <option>수정할 이름 선택</option>
                  <?php
                    require_once("dbinfo.php");
                    $connect = mysql_connect($hostname,$username,$passwd);
                    $db_con=mysql_select_db($dbname,$connect);

                    $sql = "select name from ".$_GET['table'].";";

                    $result = mysql_query($sql,$connect);
                    while ($row=mysql_fetch_array($result)) {
                      echo "<option value=".$row["name"].">".$row["name"]."</option>";
                    }
                  ?>
                </select>
              </li>

              <li class="dbadd">
                <p><input class="sign" type="text" name="upnum" placeholder="수정할 출석 번호를 입력해주세요" maxlength="2" 3></p>
              </li>

              <li class="dbadd">
                <p><input class="sign" type="text" name="upname" placeholder="수정할 이름 입력" maxlength="5"><br></p>
              </li>

              <li class="dbadd">
                <p><input class="sign" type="text" name="upex" placeholder="설명 (최대 30글자)" maxlength="30"><br></p>
              </li>

              <li class="dbadd">
                <input class="button" type="submit" value="수정완료"><input class="button" type="reset" value ="초기화">
              </li>
            </ul>
          </form>
        </div>
      </article>
    </section>
  </section>


  <footer></footer>

  <script type="text/javascript">
    $("header").load("header.html");
    $("footer").load("footer.html");

    $("#addpost").click(function (){
      $(".addpost").slideDown("slow");
      $(".updatepost").slideUp("slow");
    });

    $("#updatepost").click(function (){
      $(".updatepost").slideDown("slow");
      $(".addpost").slideUp("slow");
    });

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

    function open_update(){
      window.open("updatedb.php","idcheck","left=200,top=300,width=400,height=60,scrollbars=no,resizable=yes");

    }
  </script>

</body>

</html>
