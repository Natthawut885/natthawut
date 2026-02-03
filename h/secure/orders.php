<?php
	include_once("check_login.php");
    // include_once("connectdb.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ - Admin System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index2.php">ADMIN PANEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="index2.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php">จัดการสินค้า</a></li>
                <li class="nav-item"><a class="nav-link active" href="orders.php">จัดการออเดอร์</a></li>
                <li class="nav-item"><a class="nav-link" href="customers.php">จัดการลูกค้า</a></li>
            </ul>
            <span class="navbar-text text-info me-3 small">
                Admin: <?php echo $_SESSION['aname']; ?>
            </span>
            <a href="logout.php" class="btn btn-outline-danger btn-sm">ออกจากระบบ</a>
        </div>
    </div>
</nav>

<div class="container my-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">จัดการออเดอร์</li>
      </ol>
    </nav>

    <h2 class="mb-4 fw-bold"><i class="bi bi-cart-check"></i> รายการสั่งซื้อสินค้า</h2>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="ps-4">เลขที่ออเดอร์</th>
                            <th>วันที่สั่งซื้อ</th>
                            <th>ชื่อลูกค้า</th>
                            <th>ราคารวม</th>
                            <th>สถานะ</th>
                            <th class="text-center">รายละเอียด</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4">#ORD-67001</td>
                            <td>2024-05-20 14:30</td>
                            <td>คุณสมชาย ใจดี</td>
                            <td class="fw-bold text-primary">1,250.00 ฿</td>
                            <td><span class="badge bg-warning text-dark">รอดำเนินการ</span></td>
                            <td class="text-center">
                                <a href="order_detail.php?id=1" class="btn btn-outline-info btn-sm">
                                    <i class="bi bi-search"></i> ดูข้อมูล
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4">#ORD-67002</td>
                            <td>2024-05-21 09:15</td>
                            <td>คุณสายชล คนเก่ง</td>
                            <td class="fw-bold text-primary">450.00 ฿</td>
                            <td><span class="badge bg-success">ชำระเงินแล้ว</span></td>
                            <td class="text-center">
                                <a href="order_detail.php?id=2" class="btn btn-outline-info btn-sm">
                                    <i class="bi bi-search"></i> ดูข้อมูล
                                </a>
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