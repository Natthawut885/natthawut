<?php
	include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard: <?php echo $_SESSION['aname']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { background-color: #f4f6f9; }
        .navbar-brand { font-weight: bold; }
        .main-content { padding: 40px 0; }
        .nav-card {
            transition: transform 0.2s;
            text-decoration: none;
            color: inherit;
        }
        .nav-card:hover {
            transform: translateY(-5px);
            color: inherit;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
        <a class="navbar-brand" href="index2.php">ADMIN SYSTEM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <span class="nav-link text-light">ยินดีต้อนรับคุณ: <strong><?php echo $_SESSION['aname']; ?></strong></span>
                </li>
                <li class="nav-item">
                    <a class="btn btn-danger btn-sm ms-lg-3 mt-2 mt-lg-0" href="logout.php">ออกจากระบบ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container main-content">
    <h2 class="mb-4 text-secondary">Dashboard <small class="text-muted">แผงควบคุมหลัก</small></h2>
    
    <div class="row g-4">
        <div class="col-md-4">
            <a href="products.php" class="card h-100 shadow-sm nav-card">
                <div class="card-body text-center py-5">
                    <i class="bi bi-box-seam display-4 text-primary"></i>
                    <h4 class="card-title mt-3">จัดการสินค้า</h4>
                    <p class="text-muted small">เพิ่ม แก้ไข ลบ รายการสินค้าในระบบ</p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="orders.php" class="card h-100 shadow-sm nav-card">
                <div class="card-body text-center py-5">
                    <i class="bi bi-cart-check display-4 text-success"></i>
                    <h4 class="card-title mt-3">จัดการออเดอร์</h4>
                    <p class="text-muted small">ตรวจสอบคำสั่งซื้อและการชำระเงิน</p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="customers.php" class="card h-100 shadow-sm nav-card">
                <div class="card-body text-center py-5">
                    <i class="bi bi-people display-4 text-info"></i>
                    <h4 class="card-title mt-3">จัดการลูกค้า</h4>
                    <p class="text-muted small">ดูรายชื่อและประวัติสมาชิก</p>
                </div>
            </a>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white font-weight-bold">
                    สถานะระบบล่าสุด
                </div>
                <div class="card-body">
                    <p>เข้าสู่ระบบเมื่อ: <?php echo date("Y-m-d H:i:s"); ?></p>
                    <hr>
                    <p class="mb-0 text-muted">เลือกเมนูด้านบนเพื่อเริ่มต้นจัดการระบบ</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>