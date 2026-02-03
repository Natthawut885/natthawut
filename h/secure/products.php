<?php
	include_once("check_login.php");
    include_once("connectdb.php"); // สมมติว่าต้องดึงข้อมูลสินค้ามาโชว์
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า - Admin System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index2.php"><i class="bi bi-speedometer2"></i> Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="products.php">จัดการสินค้า</a></li>
                <li class="nav-item"><a class="nav-link" href="orders.php">จัดการออเดอร์</a></li>
                <li class="nav-item"><a class="nav-link" href="customers.php">จัดการลูกค้า</a></li>
            </ul>
            <div class="navbar-nav">
                <span class="nav-link text-info small me-3">ผู้ใช้งาน: <?php echo $_SESSION['aname']; ?></span>
                <a class="btn btn-outline-danger btn-sm" href="logout.php">ออกจากระบบ</a>
            </div>
        </div>
    </div>
</nav>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2><i class="bi bi-box-seam"></i> รายการสินค้าทั้งหมด</h2>
        <a href="product_add.php" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> เพิ่มสินค้าใหม่
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="px-4">ID</th>
                            <th>รูปภาพ</th>
                            <th>ชื่อสินค้า</th>
                            <th>หมวดหมู่</th>
                            <th>ราคา</th>
                            <th class="text-center">จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 align-middle">001</td>
                            <td><img src="images/sample-product.jpg" class="img-thumbnail" style="width: 50px;" alt=""></td>
                            <td class="align-middle fw-bold">รองเท้าวิ่ง Nike</td>
                            <td class="align-middle">เครื่องแต่งกาย</td>
                            <td class="align-middle text-primary fw-bold">2,500 ฿</td>
                            <td class="text-center align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a href="product_edit.php?id=1" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                    <a href="product_delete.php?id=1" class="btn btn-danger" onclick="return confirm('ยืนยันการลบ?')"><i class="bi bi-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>