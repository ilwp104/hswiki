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

    <section id="post2" class="post">
      <article id="addpost" class="post-title">
        <?php
        require_once("dbinfo.php");
          $connect = mysql_connect($hostname,$username,$passwd);
          mysql_select_db($dbname,$connect);

          $table=$_POST["table"];
          $sql = "insert into ".$table." (num ,writer , content)";
          $sql .= "values (".$_POST["pnum"]." ,'".$_POST["name"]."' , '".$_POST["content"]."');";

          $result = mysql_query($sql);

        if ($result) {
            echo "<p style='text-align:center'>성공</p>";
          }
          else {
            echo "<p style='text-align:center'>실패</p>";
          }



      echo "</article>

      <article class='post-style'>
        <div class='contents'>
          <div  style='width:100%;text-align:center;'>";

            if ($result) {
                echo "<p style='text-align:center; font-size:150px; margin:40px 0 40px 0'><i class='fa fa-smile-o' aria-hidden='true'></i></p>";
                echo "<p>성공했습니다</p>";
                echo "<a class='inbu' href='suggest.php'><button class='insert-button'>확인</button></a>";
              }
              else {
                echo "<p style='text-align:center; font-size:150px; margin:40px 0 40px 0'><i class='fa fa-meh-o' aria-hidden='true'></i></p>";
                echo "<p style='text-align:center'>같은 번호 또는 같은 이름이 있습니다</p>";
                echo "<input type='button' value='뒤로가기' class='button' onclick='history.back();'>";
              }



              mysql_close($connect);
            ?>

          </div>

        </div>
      </article>
    </section>


  <footer></footer>

  <script type="text/javascript">
    $("header").load("header.html");
    $("footer").load("footer.html");
  </script>

</body>

</html>
