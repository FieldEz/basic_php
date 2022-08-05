<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMART BRAIN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
</head>
<body>

  <?php
  include("header.php ")
  ?>
    <br>

<main>
    <div class="container">
    <div class="card">
  <div class="card-header">
    ระบบสมัครสมาชิก
  </div>
  <div class="card-body">
   <form name="form1" action="#" method="post">
        <div class="row">
            <div class="col-md-2"><label for="exampleFormControlInput1" class="form-label">คำนำหน้าชื่อ</label>
            <select class="form-select" aria-label="Default select example">
             <option selected>กดเพื่อเลือก</option>
             <option value="1">นาย</option>
            <option value="2">นาง</option>
             <option value="3">นางสาว</option>
            </select>
        </div>
        <div class="col-md-5"><label for="exampleFormControlInput1" class="form-label">ชื่อ</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="ชื่อของคุณ">
        </div>
        <div class="col-md-5    "><label for="exampleFormControlInput1" class="form-label">นามสกุล</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="นามสกุลของคุณ">
        </div>

        <div class="row">
            <div class="col-md-2"><label for="exampleFormControlInput1" class="form-label">เพศ</label>
            <div class="form-check">
            <input type="radio" class="form-check-input" name="sex" id="sex"> ชาย
            </div>
            <div class="form-check">   
            <input type="radio" class="form-check-input" name="sex" id="sex"> หญิง
        </div>
        </div>
        <div class="col-md-3"><label for="exampleFormControlInput1" class="form-label">วันเกิด</label>
        <input type="date" class="form-control" id="txt_birthdate" name="txt_birthdate"
                                     placeholder="00/00/0000" data-provide="datepicker" data-date-language="th-th">
        </div>

        <div class="col-md-7"><label for="exampleFormControlInput1" class="form-label">ที่อยู่</label>
           <textarea class="form-control" name="txt_address" id="txt_address"></textarea>
        </div>


        <div class="row">

        <div class="col-md-6    "><label for="exampleFormControlInput1" class="form-label">เบอร์โทร</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="เบอร์โทรของคุณ">
        </div>
        <div class="col-md-6    "><label for="exampleFormControlInput1" class="form-label">อีเมล</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="อีเมลของคุณ">
        </div>

</div><br><br><br><br>
    <center>
    <button class="btn btn-success" type="submit"><i class="bi bi-tropical-storm"></i>Submitt</button>
    <button class="btn btn-danger" type="submit"><i class="bi bi-tropical-storm"></i>Cancle</button>
    </center>

    </form>
  </div>
</div>
    </div>
</main>

  <?php
  include("footer.php ")
  ?>



</body>
</html>