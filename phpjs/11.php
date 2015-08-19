<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>php</h1>
    <ul>
    <?php
      $list = array("기성용", "박지성", "이천수", "조재진", "이동국");
      $i = 0;
      while($i < count($list)){
        echo "<li>".$list[$i]."</li>";
        $i = $i + 1;
      }
     ?>
   </ul>
    <h1>Java Script</h1>
    <ul>
    <script>
      list = new Array("기성용", "박지성", "이천수", "조재진", "이동국");
      i = 0;
      while(i < list.length){
        document.write("<li>" + list[i] + "</li>");
        i = i + 1;
      }
    </script>
  </ul>
  </body>
</html>
