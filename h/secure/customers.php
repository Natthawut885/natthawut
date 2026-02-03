<?php
	include_once("check_login.php");
    // include_once("connectdb.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการลูกค้า - Admin System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .avatar-circle {
            width: 40px;
            height: 40px;
            background-color: #e9ecef;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #6c757d;
        }
    </style>
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
                <li class="nav-item"><a class="nav-link" href="orders.php">จัดการออเดอร์</a></li>
                <li class="nav-item"><a class="nav-link active" href="customers.php">จัดการลูกค้า</a></li>
            </ul>
            <div class="d-flex align-items-center">
                <span class="text-light me-3 small">แอดมิน: <span class="text-info"><?php echo $_SESSION['aname']; ?></span></span>
                <a href="logout.php" class="btn btn-sm btn-outline-danger">ออกจากระบบ</a>
            </div>
        </div>
    </div>
</nav>

<div class="container my-5">
    <div class="row mb-4">
        <div class="col-md-6">
            <h2 class="fw-bold"><i class="bi bi-people-fill"></i> รายชื่อลูกค้า</h2>
        </div>
        <div class="col-md-6">
            <form class="d-flex">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="ค้นหาชื่อ, อีเมล หรือเบอร์โทร...">
                    <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">ลูกค้า</th>
                            <th>อีเมล</th>
                            <th>เบอร์โทรศัพท์</th>
                            <th>วันที่สมัคร</th>
                            <th class="text-center">จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle me-3">S</div>
                                    <div>
                                        <div class="fw-bold">Somchai Jaidee</div>
                                        <small class="text-muted">ID: CUST-001</small>
                                    </div>
                                </div>
                            </td>
                            <td>somchai@email.com</td>
                            <td>081-234-5678</td>
                            <td>12 ม.ค. 2024</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-primary me-1" title="ดูประวัติการซื้อ">
                                    <i class="bi bi-clock-history"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" onclick="return confirm('ระงับการใช้งานลูกค้าท่านนี้?')">
                                    <i class="bi bi-person-x"></i>
                                </button>
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