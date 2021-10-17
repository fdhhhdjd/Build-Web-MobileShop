<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem kết quả</title>
    <link rel="stylesheet" href="style.css">
  <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            include('config.php');
            include('action.php');
            $query = 'SELECT * FROM sv';
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();
        ?>
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($_SESSION['thongbao'])){ ?>
                    <div class="alert alert-success" role="alert">
                        <?= $_SESSION['thongbao']; ?>
                    </div>  
                <?php } unset($_SESSION['thongbao']); ?>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th class="text-center" colspan="5"><h2>Thông tin sinh viên</h2></th>
                    </tr>
                    <tr>
                        <th>Mã sinh viên</th>
                        <th>Họ</th>
                        <th>Tên</th>
                        <th>Địa chỉ</th>
                        <th>Mã lớp</th>
                    </tr>

                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $row['MaSV']; ?></td>
                            <td><?= $row['Ho']; ?></td>
                            <td><?= $row['Ten']; ?></td>
                            <td><?= $row['DiaChi']; ?></td>
                            <td><?= $row['ID_Lop']; ?></td>
                            <td>
                                <a href="action.php?delete=<?= $row['MaSV'] ?>"
                                onclick="return confirm('Bạn có chắc muốn xóa?');">Xóa</a>
                            </td>
                            <td>
                                <a href="edit.php?mssv=<?= $row['MaSV'] ?>">Sửa</a>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="5">
                            <a href="javascript:window.history.back(-1);">Quay về trang trước</a>
                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
</body>
</html>