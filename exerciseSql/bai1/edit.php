<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Responsive Registration Form | CodingLab </title>
  <link rel="stylesheet" href="style.css">
  <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="row">
        <?php
            include 'action.php';
        ?>

      <?php if(isset($_SESSION['thongbao'])) echo $_SESSION['thongbao']; ?>
      <form action="action.php" class="col-md-12" method="post">
        <h3 class="title">Nhập thông tin sinh viên</h3>
        <table cellspacing="0">
          <tr>
            <td>Tên</td>
            <td>
                <input type="hidden" name="id" value="<?= $id ?>">
              <input class="form-control" type="text" name="ten" id="" value="<?= $ten ?>">
            </td>
          </tr>
          <tr class="mt-2">
            <td>Họ</td>
            <td>
              <input class="form-control" type="text" name="ho" id="" value="<?= $ho ?>">
            </td>
          </tr>
          <tr class="mt-2">
            <td>Địa chỉ</td>
            <td>
              <input class="form-control" type="text" name="diachi" id="" value="<?= $diachi ?>">
            </td>
          </tr>
          <tr class="mt-2">
            <td>ID của lớp</td>
            <td>
              <input class="form-control" type="text" name="id_lop" id="" value="<?= $id_lop ?>">
            </td>
          </tr>
          <tr class="mt-2">
            <td></td>
            <td class="mx-5">
                <button type="submit" class="btn btn-primary" name="update">Sửa</button>
            </td>
          </tr>
        </table>

      </form>
    </div>
  </div>
</body>

</html>