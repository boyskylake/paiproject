<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../style.css"> </head>

<body>
   <?php include 'header.php'; ?>

  <div class="text-primary text-left">
    <div class="container">
      <div class="row">
   <?php include 'sidebarleft.php'; ?>

        <div class="col-md-8">
          <ul class="nav nav-pills flex-column">
            <ul class="nav nav-pills flex-column">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="m-2">ข้อมูลผู้ยืม-คืนหนังสือ</h2>
                  <form action="https://formspree.io/YOUREMAILHERE">
                     <div class="form-group form-row">
                      <label class="col-form-label col-form-label-lg col-sm-4">เลขบัตรประจำตัวประชาชน</label>
                      <div class="col-sm-8 col-md-8">
                        <input class="form-control form-control-lg" placeholder="Your name, please"> </div>
                    </div>
                    <div class="form-group form-row">
                      <label class="col-form-label col-form-label-lg col-sm-2">ชื่อ-สุกุล</label>
                      <div class="col-sm-9 col-md-10">
                        <input class="form-control form-control-lg" placeholder="Your name, please"> </div>
                    </div>
                    <div class="form-group form-row">
                    <label class="col-sm-2 col-form-label col-form-label-lg">ที่อยู่</label>
                    <div class="col-sm-10">
                      <input class="form-control form-control-lg" placeholder="บ้านเลขที่/หมู่"> </div>
                  </div>
                  <div class="form-group form-row">
                    <div class="col-sm-10 col-md-10 offset-md-2">
                      <div class="row">
                        <div class="col-md-6">
                          <input class="form-control form-control-lg" placeholder="บ้าน"> </div>
                        <div class="col-md-6">
                          <input class="form-control form-control-lg" placeholder="ตำบล"> </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group form-row">
                        <div class="col-sm-10 col-md-10 offset-md-2">
                          <div class="row">
                            <div class="col-md-6">
                              <input class="form-control form-control-lg" placeholder="อำเภอ"> </div>
                            <div class="col-md-6">
                              <input class="form-control form-control-lg" placeholder="จังวัด"> </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group form-row">
                            <div class="col-sm-10 col-md-5 offset-md-2">
                              <input class="form-control form-control-lg" placeholder="รหัสไปรษณีย์"> </div>
                          </div>
                          <div class="form-group form-row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">เบอร์โทร</label>
                            <div class="col-sm-10 col-md-5">
                              <input class="form-control form-control-lg" placeholder="0x-xxx-xxxx"> </div>
                          </div>
                    <div class="form-group form-row ">                     
                      <label class="col-form-label col-form-label-lg col-sm-2 ">วันที่ยืม</label>
                      <div class="col-sm-10 col-md-5">
                        <input class="form-control form-control-lg" placeholder="Your name, please"> </div>
                    </div>
                     <div class="form-group form-row ">
                      <label class="col-form-label col-form-label-lg col-sm-2 ">วันที่คืน</label>
                      <div class="col-sm-10 col-md-5">
                        <input class="form-control form-control-lg" placeholder="Your name, please"> </div>
                    </div>
                    <div class="col-md-12 p-0">
                      <div class="form-group form-row">
                        <label class="col-form-label col-form-label-lg col-sm-3">ประเภทหนังสือ</label>
                        <div class="col-sm-9 col-md-8">
                          <div class="btn-group btn-group-lg">
                            <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"> ประเภทหนังสือ </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">จุลสาร
                            <br> </a>
                          <a class="dropdown-item" href="#">นิตยสาร
                            <br> </a>
                          <a class="dropdown-item" href="#">สารานุกรมไทย
                            <br> </a>
                          <a class="dropdown-item" href="#">ประชาคมอาเซียน
                            <br> </a>
                          <a class="dropdown-item" href="#">นวนิยาย
                            <br> </a>
                          <a class="dropdown-item" href="#">หนังสือวิจัย
                            <br> </a>
                             <a class="dropdown-item" href="#">หนังสือเยาวชน
                            <br> </a>
                          <a class="dropdown-item" href="#">หนังสือใบลาน
                            <br> </a>
                          <a class="dropdown-item" href="#">000วิทยาการคอมพิวเตอร์ สารสนเทศและความรู้ทั่วไป
                            <br> </a>
                          <a class="dropdown-item" href="#">100ปรัชญา
                            <br> </a>
                          <a class="dropdown-item" href="#">200ศาสนา
                            <br> </a>
                          <a class="dropdown-item" href="#">300สังคมศาสตร์
                            <br> </a>
                          <a class="dropdown-item" href="#">400ภาษา
                            <br> </a>
                          <a class="dropdown-item" href="#">500วิทยาศาสตร์
                            <br> </a>
                          <a class="dropdown-item" href="#">600เทคโนโลยี
                            <br> </a>
                          <a class="dropdown-item" href="#">700ศิลปะนันทนาการ
                            <br> </a>
                            <a class="dropdown-item" href="#">800วรรณคดี
                            <br> </a>
                            <a class="dropdown-item" href="#">900ประวัติศาสตร์และภูมิศาสตร์
                            <br> </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group form-row">
                        <label class="col-form-label col-form-label-lg col-sm-3">ชื่อหนังสือ</label>
                        <div class="col-sm-5">
                          <input class="form-control form-control-lg" placeholder="Your name, please"> </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 py-0 mx-auto">
                  <form action="https://formspree.io/YOUREMAILHERE" class="w-100 text-left text-uppercase">
                   
                  </form>
                          <div class="form-group form-row text-center">
                            <label class="col-form-label col-form-label-lg col-sm-2">สถานะ</label>
                            <div class="col-sm-10 col-md-1">
                              <div class="btn-group btn-group-lg">
                                <button class="btn dropdown-toggle btn-light" data-toggle="dropdown">จอง</button>
                                <div class="dropdown-menu">
                                   <a class="dropdown-item" href="#">ยืม</a>
                                   <a class="dropdown-item" href="#">คืน</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row text-center">
                        <div class="text-center offset-md-2 col-md-4">
                          <a class="btn btn-primary btn-lg" href="booknow.php">บันทัก</a>
                        </div>
                        <div class="text-center m-0 offset-md-3 col-md-5">
                          <a class="btn btn-primary btn-lg text-center" href="#">ยกเลิก</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </ul>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>