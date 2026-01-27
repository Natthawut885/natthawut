<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ผลการส่งใบสมัคร - Tech Innovate Solutions</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
<div class="container my-5">
    <div class="card shadow-lg border-success">
        <div class="card-header bg-success text-white text-center">
            <h1 class="card-title mb-0"><i class="bi bi-check2-circle me-2"></i> ส่งใบสมัครสำเร็จ!</h1>
            <p class="mb-0">บริษัท Tech Innovate Solutions ได้รับข้อมูลของคุณแล้ว</p>
        </div>
        <div class="card-body p-4">

            <?php
            // ตรวจสอบว่ามีการส่งข้อมูลแบบ POST มาหรือไม่
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                
                // 1. รับค่าจากฟอร์ม
                $position = isset($_POST['position']) ? htmlspecialchars($_POST['position']) : 'ไม่ได้ระบุ';
                $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '';
                $fullname = isset($_POST['fullname']) ? htmlspecialchars($_POST['fullname']) : 'ไม่ได้ระบุ';
                $dob = isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : 'ไม่ได้ระบุ';
                $education = isset($_POST['education']) ? htmlspecialchars($_POST['education']) : 'ไม่ได้ระบุ';
                $skills = isset($_POST['skills']) ? htmlspecialchars($_POST['skills']) : 'ไม่มี';
                $experience = isset($_POST['experience']) ? htmlspecialchars($_POST['experience']) : 'ไม่มี';

                // 2. แสดงผลข้อมูลที่ได้รับ
                echo '<h4>สรุปข้อมูลที่คุณได้ส่งมา:</h4>';
                
                echo '<table class="table table-bordered table-striped mt-3">';
                echo '<tbody class="align-middle">';
                
                echo '<tr><th><i class="bi bi-briefcase-fill"></i> ตำแหน่งที่สมัคร</th><td><span class="badge bg-primary fs-6">'.$position.'</span></td></tr>';
                echo '<tr><th><i class="bi bi-person-fill"></i> ชื่อ-สกุล</th><td>'.$title.$fullname.'</td></tr>';
                echo '<tr><th><i class="bi bi-calendar"></i> วันเดือนปีเกิด</th><td>'.$dob.'</td></tr>';
                echo '<tr><th><i class="bi bi-mortarboard-fill"></i> ระดับการศึกษา</th><td>'.$education.'</td></tr>';
                
                // สำหรับข้อมูลที่มีความยาว (Skills/Experience)
                echo '<tr><th><i class="bi bi-tools"></i> ความสามารถพิเศษ</th><td>';
                echo '<div class="alert alert-info py-2 mb-0">'.nl2br($skills).'</div>';
                echo '</td></tr>';
                
                echo '<tr><th><i class="bi bi-award-fill"></i> ประสบการณ์ทำงาน</th><td>';
                echo '<div class="alert alert-secondary py-2 mb-0">'.nl2br($experience).'</div>';
                echo '</td></tr>';
                
                echo '</tbody>';
                echo '</table>';

                echo '<div class="alert alert-warning mt-4" role="alert">';
                echo 'ขอบคุณที่ให้ความสนใจ! ทางบริษัทจะติดต่อกลับภายใน 3-5 วันทำการ';
                echo '</div>';


            } else {
                // หากไม่มีข้อมูลถูกส่งมา (เช่น เข้าถึง f.php โดยตรง)
                echo '<div class="alert alert-danger" role="alert">';
                echo '<h4 class="alert-heading">❌ ข้อผิดพลาด!</h4>';
                echo 'ไม่พบข้อมูลการส่งฟอร์ม กรุณากรอกแบบฟอร์มใบสมัครอีกครั้ง';
                echo '</div>';
                echo '<a href="index.html" class="btn btn-primary mt-3"><i class="bi bi-arrow-left"></i> กลับไปหน้าสมัครงาน</a>';
            }
            ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>