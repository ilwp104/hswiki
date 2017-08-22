
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
        <p onclick="focusclick(1)">정규동아리</p>
        <p onclick="focusclick(2)">자율동아리</p>
      </article>
    </nav>

    <section id="post1" class="post">
      <article class="post-title">
        <p>정규동아리</p>
      </article>

      <article class="post-style">
        <p class="cirp">하는 요일 : 매월 셋째 주 화요일 5~7교시에 운영</p>
        <p class="cirp">탈퇴 : 다음 학년이 될 때까지 바꿀 수 없는 것이 일반적이다.</p>
        <p class="cirp">특징 : 모든 학생이 정규 동아리 하나를 꼭 가입해야 한다</p>
        <!-- <div class="" style="display : block; height : auto"> -->
            <ul class="wrap-circles">
              <li class="mcircle">
                <article class="post-title">
                  <p>전공동아리</p>
                </article>
                <article class="post-style incircle">
                  <p>W.A.D (Web. App. Development)</p>
                  <p>게임 개발반</p>
                  <p>PL반 (Programming Language)</p>
                  <p>포렌식반</p>
                  <p>게임 기획반</p>
                  <p>네트워크 보안반</p>
                  <p>시스템 보안 연구반</p>
                  <p>보안 관제센터 운영반</p>
                  <p>C.R.C</p>
                  <p>멀티 미디어 활용반</p>
                  <p>네트워크 솔루션 개발반</p>
                  <p>공모전반 (기획)</p>
                  <p>스마트 보안반</p>
                  <p>웹 취약점 분석반</p>
                </article>
              </li>
              <li class="mcircle">
                <article class="post-title">
                  <p>비전공동아리</p>
                </article>
                <article class="post-style">
                  <p>낚시반</p>
                  <p>영어회화반</p>
                  <p>당구반</p>
                  <p>체력단련반</p>
                  <p>캘리그라피반</p>
                  <p>문화체험반</p>
                  <p>제과제빵반</p>
                  <p>테니스반</p>
                  <p>서울 둘레길 탐사반</p>
                  <p>과학 탐사반</p>
                  <p>공연 예술반</p>
                  <p>영어 동화책 만들기반</p>
                  <p>밴드반</p>
                  <p>문학 기행반</p>
                  <p>방송반</p>
                  <p>볼링반</p>
                  <p>일본 문화 연구반</p>
                </article>
              </li>
            </ul>

        <!-- </div> -->
      </article>
    </section>

    <section id="post2" class="post">
      <article class="post-title">
        <p>자율동아리</p>
      </article>

      <article class="post-style">
        <p class="cirp">하는 요일 : 화요일, 금요일 방과 후에 자율적으로 운영</p>
        <p class="cirp">탈퇴 : 자유롭다(복잡한 경우도 있다)</p>
        <p class="cirp">특징 : 학과마다 들어갈 수 있는 동아리가 다를 수도 있다.</p>
        <!-- <div class="" style="display : block; height : auto"> -->

            <ul class="wrap-circles">
              <li class="mcircle">
                <article class="post-title">
                  <p>전공동아리</p>
                </article>
                <article class="post-style">
                  <p>스마트 보안반</p>
                  <p>멀티 미디어 활용반</p>
                  <p>시스템 보안 연구반</p>
                  <p>네트워크 보안반</p>
                  <p>PL반 (Programming Language)</p>
                  <p>포렌식반</p>
                  <p>네트워크반</p>
                  <p>네트워크 솔루션 개발반 </p>
                  <p>게임 개발반</p>
                  <p>게임 기획반</p>
                  <p>게임 그래픽 디자인반</p>
                  <p>해킷반</p>
                  <p>C.R.C</p>
                </article>
              </li>
              <li class="mcircle">
                <article class="post-title">
                  <p>비전공동아리</p>
                </article>
                <article class="post-style">
                  <p>방송반</p>
                  <p>RCY</p>
                  <p>또래 상담반</p>
                  <p>도서반</p>
                  <p>밴드반</p>
                  <p>일본어 회화반</p>
                  <p>족구반</p>
                </article>
              </li>
            </ul>

        <!-- </div> -->
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
