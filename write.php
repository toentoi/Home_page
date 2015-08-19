<?php
$conn = mysqli_connect("localhost", "root", 467913);
mysqli_select_db($conn, "opentutorials");
$result = mysqli_query($conn, "SELECT * FROM topic");
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<link rel="stylesheet" type="text/css" href="http://localhost:8080/style.css">
<!-- Bootstrap -->
  <link href="http://localhost:8080/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="target">
<div class="container-floid">
  <header class ="jumbotron text-center">
      <img src="http://img.naver.net/static/www/u/2013/0731/nmms_224940510.gif" alt="네이버" class="img-circle">
      <h1><a href="http://localhost:8080/index.php">JavaScript</a></h1>
  </header>
  <div class = "row">
    <nav class = "col-md-3">
        <ol class = "nav nav-pills nav-stacked">
          <?php
          while($row = mysqli_fetch_assoc($result)){
          echo '<li><a href="http://localhost:8080/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
          }
        ?>
      </ol>
    </nav>

    <div class="col-md-9">

  <article>
    <?php
    if(empty($_GET['id']) === false ){
      $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo'<h2>'.htmlspecialchars($row['title']).'</h2>';
      echo strip_tags($row['description'].'<a><h1><h2><h3><h4><h5><ol><ul>');
    }
    ?>
    <form action="process.php" method="post">
      <div class="form-group">
          <label for="form-title">제목</label>
          <input type="text" class="form-control" name= "title" id="exampleInputEmail1" placeholder="제목을 입력하세요.">
        </div>

      <div class="form-author">
          <label for="exampleInputEmail1">작성자</label>
          <input type="text" class="form-control" name= "author" id="exampleInputEmail1" placeholder="작성자를 적어주세요.">
      </div>
      <div class="form-group">
          <label for="form-description">본문</label>
          <textarea class = "form-control" rows="10" class="form-control"  name= "description" id="exampleInputEmail1" placeholder="제목을 입력하세요."></textarea>
        </div>

      <input type="submit" name="name" class="btn btn-default">
    </form>
  </article>
  <hr>
  <div id="control">
    <input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default btn-lg"/>
    <input type="button" value="black" onclick="document.getElementById('target').className='black'" class="btn btn-default btn-lg"/>
    <a href="http://localhost:8080/write.php" class="btn btn-success btn-lg">쓰기</a>
  </div>
  </div>
</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
  <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="http://localhost:8080/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
