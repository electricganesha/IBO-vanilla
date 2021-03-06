<?php
if(!$_COOKIE["company"]) {
  header("location: index.html");
}else{
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
    <title>PUSH IBO - Immersive Box Office</title>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
    <link rel="stylesheet" href="css/font-awesome.css">
    <style>
        @font-face {
            font-family: osb;
            src: url(fonts/OpenSans-Bold.ttf);
        }
        @font-face {
            font-family: osr;
            src: url(fonts/OpenSans-Regular.ttf);
        }
        @font-face {
            font-family: ossb;
            src: url(fonts/OpenSans-Semibold.ttf);
        }
        @font-face {
            font-family: osl;
            src: url(fonts/OpenSans-Light.ttf);
        }
        body {
        margin: 0;
        overflow-x:hidden;
        overflow-y:hidden;
        }

        .ui-datepicker-calendar{
          margin: auto;
          width: 90%;
          font-family: osl;
          color: #344b5d;
        }

        .ui-datepicker-title{
          font-family: osb;
          color: #e54b65;
          border-bottom: solid 2px #344b5d;
          text-transform: uppercase;
        }

        .ui-datepicker-calendar a {
          font-family: osl;
          color: #FFF;
          text-decoration: none;
        }

        .ui-datepicker-calendar a:hover {
          color: #1bbc9b;
        }

        .ui-datepicker-calendar thead {
          font-family: osb;
          color: #e54b65;
          pointer-events: all;
          cursor: auto;
        }

        @-webkit-keyframes coloranim {
            0%     {background-color:#1cbb9b;}
            50.0%  {background-color:#e54b65;}
            100.0%  {background-color:#1cbb9b;}
        }

        @keyframes coloranim {
            0%     {background-color:#1cbb9b;}
            50.0%  {background-color:#e54b65;}
            100.0%  {background-color:#1cbb9b;}
        }

        @-webkit-keyframes coloranimbt {
            0%     {background-color:rgba(0, 0, 0, 0.7);}
            50.0%  {background-color:#e54b65;}
            100.0%  {background-color:rgba(0, 0, 0, 0.7);}
        }

        @keyframes coloranimbt {
            0%     {background-color:rgba(0, 0, 0, 0.7);}
            50.0%  {background-color:#e54b65;}
            100.0%  {background-color:rgba(0, 0, 0, 0.7);}
        }

        @-webkit-keyframes coloranimLoading {
            0%     {color:#ffffff;}
            50.0%  {color:#000000;}
            100.0%  {color:#ffffff;}
        }

        @keyframes coloranimLoading {
            0%     {color:#ffffff;}
            50.0%  {color:#000000;}
            100.0%  {color:#ffffff;}
        }
    </style>
  </head>
  <body>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script>
    function detectmob() {
      if( navigator.userAgent.match(/Android/i)
      || navigator.userAgent.match(/webOS/i)
      || navigator.userAgent.match(/iPhone/i)
      || navigator.userAgent.match(/iPad/i)
      || navigator.userAgent.match(/iPod/i)
      || navigator.userAgent.match(/BlackBerry/i)
      || navigator.userAgent.match(/Windows Phone/i)){
        return true;

      }
      else{
        return false;
      }
    }

    if (detectmob()){
      document.write('<video id="video" loop style="display:none" preload="none" muted> <source src="video\/pushshowreel.mp4" type="video\/mp4"><\/video>')
      document.write("<script src='cinema_mobile.js'><\/script>");
    }else{
      document.write('<video id="video" loop style="display:none" preload="none"> <source src="video\/pushshowreel.mp4" type="video\/mp4"><\/video>')
      document.write("<script src='cinema.js'><\/script>");
    }
    </script>
  </body>

</html>
<?php } ?>
