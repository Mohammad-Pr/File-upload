<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="Style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

<link rel="icon" href="data:image/jpeg;base64,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">
<title> Upload image </title>
<meta name="viewport" content="width=device-width">
<meta name="description" content="Upload image in php">
<meta charset="UTF-8">
</head>
    <body>
                        <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
   <b style="color: rgb(0, 225, 255, 1);">صفحه آپلود</b> <a  class="navbar-brand" href="#"> <?php  date_default_timezone_set("Asia/Tehran");   $date1 = date("Y/m/d | h:i:sa"); echo $date1;?> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a   style="color: rgba(0, 225, 255, 1);"   class="nav-link active" aria-current="page" href="index.php"><b style="color: rgb(0, 255, 0);"></b>آپلود فایل</b></a>
          </li>
          <li class="nav-item">
            <a style="color: rgba(255, 98, 0, 1);" class="nav-link" href="index.php">خانه</a>
          </li>
          <li class="nav-item dropdown">
            <a style="color: rgb(0, 255, 0);" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              لیست
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a style="color: gold;" class="dropdown-item" href="#">---</a></li>
              <li><a style="color: gold;" class="dropdown-item" href="#">---</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a style="color: gold;" class="dropdown-item" href="#">---</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
        <br>
        <br>
        <br>
<div style="text-align: center;">
 <img src="upimg2/img.jpg" style="width: 555px; text-align: center; border-radius: 10px;">
 <form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="inp_file" class="inp_file">
  <br>
  <br>
    <input type="submit" name="inp_sub" class="inp_sub">
  <br>
 </form>
</div>
<?php
if(isset($_POST['inp_sub'])){
$target_dir = "upimg2";
$target_file = $target_dir . basename($_FILES['inp_file']['name']);
if(move_uploaded_file ($_FILES["inp_file"]["tmp_name"] , "upimg2/img.jpg")){
echo '<div class="div4">
             موفقیت آمیز
        </div>
        ';
}else{

    echo '<div class="div3">
           خطا
        </div>';
}
}
?>
    </body>
</html>