<?php
 $id = $_GET['id'];
 $content_api = file_get_contents("http://58.82.183.95/api/token/get_doc_id?id=".$id);
 $result = json_decode($content_api);
 $kp3_result = (object)$result[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>คพ.3</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container pt-4">
    <div class="row mb-4">
      <div class="col-12 text-center">
        <img src="assets/img/icon-header.png" class="img-fluid" width="100" height="100">
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <h5>คําสั่งห้ามใช้ยานพาหนะชั่วคราวหรือห้ามใช้ยานพาหนะเด็ดขาด</h5>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-right">
        <p class="mb-1">
          <span class="mr-2">วันที่</span>
          <span class="border-bottom-dotted"><?= $kp3_result->date_check; ?></span>
        </p>
        <p class="mb-1">
          <span class="mr-2">สถานที่ตรวจสอบ</span>
          <span class="border-bottom-dotted"><?= $kp3_result->location_check; ?></span>
        </p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <label class="p-0 col-form-label pl-5">ด้วย <span>นาย</span>/<span>นาง</span>/<span>นางสาว</span></label>
      <div class="col-5">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="<?= $kp3_result->driver_name; ?>">
      </div>
      <label class="p-0 col-form-label">ตำแหน่ง</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
    </div>

    <div class="row">
      <label class="p-0 col-form-label">สังกัด</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
      <label class="p-0 col-form-label">พนักงานเจ้าหน้าที่ตามพระราชบัญญัติส่งเสริมและรักษาคุณภาพ</label>
    </div>

    <div class="row">
      <label class="p-0 col-form-label">หมายเลขทะเบียนรถ/หมายเลขใบอนุญาตใช้เรือ</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
      <label class="p-0 col-form-label">ซึ่งออกให้โดย (ระบุ)</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
    </div>

    <div class="row">
      <label class="p-0 col-form-label">ยี่ห่อรถ/ชื่อเรือ</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
      <label class="p-0 col-form-label">สีของรถ/เรือ</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
      <label class="p-0 col-form-label">ยี่ห้อเครื่องยนต์ของรถ/เรือ</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
    </div>

    <div class="row">
      <label class="p-0 col-form-label">ประเภทของเครื่องยนต์</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
      <label class="p-0 col-form-label">ประเภทของเชื้อเพลิง</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
    </div>

    <div class="row">
      <label class="p-0 col-form-label">โดยมี (<span>นาย</span>/<span>นาง</span>/<span>นางสาว</span>)</label>
      <div class="col-5">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="<?= $kp3_result->driver_name; ?>">
      </div>
      <label class="p-0 col-form-label">อยู่บ้านเลขที่</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
      <label class="p-0 col-form-label">หมู่ที่</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
    </div>

    <div class="row">
      <label class="p-0 col-form-label">ถนน</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
      <label class="p-0 col-form-label">ตำบล/แขวง</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
      <label class="p-0 col-form-label">อำเภอ/เขต</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
      <label class="p-0 col-form-label">จังหวัด</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
    </div>

    <div class="row">
      <label class="p-0 col-form-label">โทรศัพท์หรือโทรสารที่สามารถติดต่อได้หมายเลข</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center" value="">
      </div>
      <label class="p-0 col-form-label">เป็นเจ้าของหรือผู้ครอบครองยานพาหนะ</label>
    </div>

    <div class="row">
      <label class="p-0 col-form-label">
        ซึ่งพนักงานเจ้าหน้าที่ได้ตรวจสอบยานพาหนะดังกล่าวแล้ว พบว่ามีค่า
        <span class="border-bottom-dotted text-break">ซึ่งพนักงานเจ้าหน้าที่ได้ตรวจสอบยานพาหนะดังกล่าวแล้ว่งพนักงานเจ้าหน้าที่ได้ตรวจสอบยานพาหนะดังกล่าวแล้ว่งพนักงานเจ้าหน้าที่ได้ตรวจสอบยานพาหนะดังกล่าวแล้ว่งพนักงานเจ้าหน้าที่ได้ตรวจสอบยานพาหนะดังกล่าวแล้ว่งพนักงานเจ้าหน้าที่ได้ตรวจสอบยานพาหนะดังกล่าวแล้ว</span>
      </label>
    </div>
    <div class="row">
      <label class="p-0 col-form-label">
        ตามประกาศกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม (ระบุชื่อประกาศ)
        <span class="border-bottom-dotted text-break">ซึ่งพนักงานเจ้าหน้าที่ได้ตรวจสอบยานพาหนะดังกล่าวแล้ว่งพนักงานเจ้าหน้าที่ได้ตรวจสอบยานพาหนะดังกล่าวแล้ว่งพนักงานเจ้าหน้าที่ได้ตรวจสอบยานพาหนะดังกล่าวแล้ว่งพนักงานเจ้าหน้าที่ได้ตรวจสอบยานพาหนะดังกล่าวแล้ว่งพนักงานเจ้าหน้าที่ได้ตรวจสอบยานพาหนะดังกล่าวแล้ว</span>
      </label>
    </div>

    <div class="row">
      <label class="p-0 col-form-label">
        <span class="pl-5"></span> อาศัยอํานาจตามความในมาตรา 65 และมาตรา 66 แห่งพระราชบัญญัติส่งเสริมและรักษาคุณภาพสิ่งแวดล้อม
        แห่งชาติ พ.ศ. 2535 พนักงานเจ้าหน้าที่จึงออกคําสั่งและทําเครื่องหมายห้ามใช้ยานพาหนะชั่วคราว/ห้ามใช้ยานพาหนะ
        เด็ดขาด ตั้งแต่วันที <span class="border-bottom-dotted"><?= $kp3_result->date_check; ?></span> เวลา <span class="border-bottom-dotted"><?= "00:00"; ?></span> นาฬิกา เป็นต้นไปจนกว่าจะยกเลิกคําสั่ง ทั้งนี้ ให้เจ้าของ
        หรือผู้ครอบครองยานพาหนะที่ต้องคําสั่งและถูกทําเครื่องหมายห้ามใช้ยานพาหนะชั่วคราว/ห้ามใช้ยานพาหนะเด็ดขาด นํา
        ยานพาหนะที่แก้ไขปรับปรุงแล้วไปให้พนักงานเจ้าหน้าที่ตรวจสอบหรือมีคําร้องของให้พนักงานเจ้าหน้าที่ตรวจสอบ ณ 
        สถานที่ที่พนักงานเจ้าหน้าที่กําหนด หรือสถานที่ทําการแห่งใดแห่งหนึ่งอันเป็นสถานที่ทําการของพนักงานเจ้าหน้าที่ ภายใน
        ระยะเวลาที่กําหนดไว้ในคําเตือน
      </label>      
    </div>

    <div class="row">
      <label class="p-0 col-form-label ">
        <span class="pl-5"></span>
        เจ้าของหรือผู้ครอบครองยานพาหนะที่ประสงค์จะอุทธรณ์คําสั่งของพนักงานเจ้าหน้าที่ ขอให้ย่นอุทธรณ์เป็น
        หนังสือต่อพนักงานเจ้าหน้าที่ผู้ออกคําสั่งภายในสิบห้าวัน นับแต่วันที่ได้รับทราบคําสั่ง โดยผู้อุทธรณ์จะต้องระบุข้อเท็จจริง
        และข้อกฎหมายที่จะใช้โต้แย้งคําสั่งของพนักงานเจ้าหน้าที่ด้วย และให้ส่งคําอุทธรณ์ไปยัง
        (ระบุชื่อหน่วยงานที่พนักงาน
      </label>
      <label class="p-0 col-form-label ">เจ้าหน้าที่นั้นสังกัด)</label>
      <div class="col-6">
        <input type="text" class="border-bottom-dotted w-100 text-center text-break" value="">
      </div>
      <label class="p-0 col-form-label ">เลขที่</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center text-break" value="">
      </div>
    </div>

    <div class="row">
      <label class="p-0 col-form-label ">ตรอก/ซอย</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center text-break" value="">
      </div>
      <label class="p-0 col-form-label ">ถนน</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center text-break" value="">
      </div>
      <label class="p-0 col-form-label ">ตำบล/แขวง</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center text-break" value="">
      </div>
      <label class="p-0 col-form-label ">อำเภอ/เขต</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center text-break" value="">
      </div>
    </div>

    <div class="row">
      <label class="p-0 col-form-label ">จังหวัด</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center text-break" value="">
      </div>
      <label class="p-0 col-form-label ">รหัสไปรษณีย์</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center text-break" value="">
      </div>
      <label class="p-0 col-form-label ">หมายเลขโทรศัพท์/โทรสาร</label>
      <div class="col">
        <input type="text" class="border-bottom-dotted w-100 text-center text-break" value="">
      </div>
    </div>

    <div class="row justify-content-end mt-4">
      <label class="p-0 col-form-label ">ลงชื่อ</label>
      <div class="col-3">
        <input type="text" class="border-bottom-dotted w-100 text-center text-break" value="">
      </div>
      <label class="p-0 col-form-label ">พนักงานเจ้าหน้าที่</label>
    </div>
    <div class="row justify-content-end" style="margin-right: 112px">
      <label class="p-0 col-form-label ">(</label>
      <div class="col-3 pr-6">
        <input type="text" class="border-bottom-dotted w-100 text-center text-break" value="<?= '' ?>">
      </div>
      <label class="p-0 col-form-label ">)</label>
    </div>

  </div>

  <div class="container py-4">
    <div class="row">
      <div class="col-12">
        <span>หมายเหตุ ข้อความใดไม่ใช่ให้ขีดฆ่าออก และทําเครื่องหมาย ใน ตามที่ต้องการ </span>
      </div>
    </div>
  </div>

  <div class="position-absolute form-kp-absolute">
    <p class="mb-1">แบบ คพ.3</p>
    <p class="mb-1"><input type="checkbox" name="" id=""> บันทึกเข้าคอมพิวเตอร์แล้ว</p>
    <p class="mb-1">เลขที่ 01</p>
  </div>
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>