<?php
session_start();
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login: นัธวุฒิ บัวงาม (มาร์ค)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin-top: 100px;
        }
    </style>
</head>
<body>

<div class="container login-container">
    <div class="card shadow-sm">
        <div class="card-body p-4">
            <h3 class="text-center mb-4">เข้าสู่ระบบหลังบ้าน</h3>
            <p class="text-muted text-center small">โดย นัธวุฒิ บัวงาม (มาร์ค)</p>
            
            <form method="post" action="">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="auser" class="form-control" placeholder="กรอกชื่อผู้ใช้" autofocus required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="apwd" class="form-control" placeholder="กรอกรหัสผ่าน" required>
                </div>
                
                <div class="d-grid">
                    <button type="submit" name="Submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if(isset($_POST['Submit'])) {
    include_once("connectdb.php");
    
    $user = $_POST['auser'];
    $pwd = $_POST['apwd'];

    $stmt = mysqli_prepare($conn, "SELECT a_id, a_name, a_password FROM admin WHERE a_username = ? LIMIT 1");
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_array($result);

    if ($data && password_verify($pwd, $data['a_password'])) {
        $_SESSION['aid'] = $data['a_id'];
        $_SESSION['aname'] = $data['a_name'];
        echo "<script>window.location='index2.php';</script>";
    } else {
        echo "<script>
            alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
            window.history.back();
        </script>";
    }
    
    mysqli_stmt_close($stmt);
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>