  <?php 
    include 'include/check_login.php';
   ?>
  <div class="text-center bg-secondary text-white p-4" style="background-image: url('../img/head1.jpg');background-position:left bottom;background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4 m-2 text-primary">ระบบจัดการข้อมูลยืม-คืนหนังสือ &nbsp;
            <br>&nbsp; ห้องสมุดชุมชน เทศบาลตำบลอากาศอำนวย</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div id="carouselArchitecture" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item">
                <img class="d-block img-fluid" src="https://pingendo.github.io/templates/sections/assets/gallery_architecture_2.jpg" data-holder-rendered="true"> </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="https://pingendo.github.io/templates/sections/assets/gallery_architecture_3.jpg" data-holder-rendered="true"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a href="addhistory.php" class="active nav-link">
            <i class="fa fa-home fa-home"></i>
            <i class="fa fa-home fa-home"></i>หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="savebook.php">จัดการข้อมูลหนังสือ</a>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-dark" href="booknow.php">จัดการข้อมูลการจองหนังสือ</a>
          </li>
        </ul>
        <form class="form-inline m-0">
          <a href="include/logout.php" class="btn btn-secondary">ออกจากระบบ</a>
          <!-- <button >ออกจากระบบ</button> -->
        </form>
      </div>
    </div>
  </nav>