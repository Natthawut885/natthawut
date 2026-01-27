<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ใบสมัครงาน - Tech Innovate Solutions </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    /* Custom CSS เล็กน้อยเพื่อเน้นส่วนหัวข้อ */
    .form-section-title {
        background-color: #f8f9fa; /* Light gray background */
        padding: 10px 15px;
        margin-top: 20px;
        margin-bottom: 15px;
        border-left: 5px solid #0d6efd; /* Blue border for emphasis */
        font-weight: bold;
    }
</style>
</head>

<body>
<div class="container my-5">
    <div class="card shadow-lg border-primary">
        <div class="card-header bg-primary text-white text-center">
            <h1 class="card-title mb-0"><i class="bi bi-briefcase-fill me-2"></i> ใบสมัครงาน บริษัท **Tech Innovate Solutions** (นัธวุฒิ บัวงาม มาร์ค)</h1>
            <p class="mb-0">"อนาคตดิจิทัล เริ่มต้นที่นี่"</p>
        </div>
        <div class="card-body p-4">
            <form method="post" action="f.php">

                <h4 class="form-section-title">ข้อมูลการสมัคร</h4>
                <div class="mb-3">
                    <label for="position" class="form-label">ตำแหน่งที่ต้องการสมัคร <span class="text-danger">*</span></label>
                    <select class="form-select" id="position" name="position" required>
                        <option value="" disabled selected>เลือกตำแหน่ง</option>
                        <option value="Software Developer">**Software Developer** (พัฒนาซอฟต์แวร์)</option>
                        <option value="Data Analyst">**Data Analyst** (นักวิเคราะห์ข้อมูล)</option>
                        <option value="UX/UI Designer">**UX/UI Designer** (ออกแบบประสบการณ์/ส่วนติดต่อผู้ใช้)</option>
                        <option value="Marketing Specialist">**Digital Marketing Specialist** (ผู้เชี่ยวชาญด้านการตลาดดิจิทัล)</option>
                        <option value="System Administrator">**System Administrator** (ผู้ดูแลระบบ)</option>
                    </select>
                </div>

                <h4 class="form-section-title">ข้อมูลส่วนตัว</h4>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="title" class="form-label">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                        <select class="form-select" id="title" name="title" required>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="อื่นๆ">อื่นๆ</option>
                        </select>
                    </div>
                    <div class="col-md-9 mb-3">
                        <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required autofocus>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="dob" class="form-label">วันเดือนปีเกิด <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>

                <h4 class="form-section-title">ข้อมูลการศึกษา</h4>
                <div class="mb-3">
                    <label for="education" class="form-label">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                    <select class="form-select" id="education" name="education" required>
                        <option value="" disabled selected>เลือกระดับการศึกษา</option>
                        <option value="ปริญญาตรี">**ปริญญาตรี**</option>
                        <option value="ปริญญาโท">**ปริญญาโท**</option>
                        <option value="ปริญญาเอก">**ปริญญาเอก**</option>
                        <option value="ปวส.">ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>
                
                <h4 class="form-section-title">ความสามารถและประสบการณ์</h4>
                <div class="mb-3">
                    <label for="skills" class="form-label">ความสามารถพิเศษ (ภาษาโปรแกรม, ทักษะเฉพาะทาง, หรือภาษาต่างประเทศ)</label>
                    <textarea class="form-control" id="skills" name="skills" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="experience" class="form-label">ประสบการณ์ทำงาน (สรุปโดยย่อ)</label>
                    <textarea class="form-control" id="experience" name="experience" rows="5"></textarea>
                </div>

                <div class="d-grid mt-4">
                    <button type="submit" name="Submit" class="btn btn-success btn-lg">
                        <i class="bi bi-send-fill me-2"></i> **ส่งใบสมัคร**
                    </button>
                </div>

            </form>
        </div>
    </div>

    <hr class="my-5">

    <?php
    if (isset($_POST['Submit'])){
        $position = $_POST['position'];
        $title = $_POST['title'];
        $fullname = $_POST['fullname'];
        $dob = $_POST['dob'];
        $education = $_POST['education'];
        $skills = $_POST['skills'];
        $experience = $_POST['experience'];

        // การแสดงผลลัพธ์
        echo '<div class="card border-success shadow">';
        echo '<div class="card-header bg-success text-white">✅ สรุปข้อมูลใบสมัคร (Tech Innovate Solutions)</div>';
        echo '<div class="card-body">';
        echo "<p><strong>ตำแหน่งที่สมัคร:</strong> <span class='badge bg-primary fs-6'>".$position."</span></p>";
        echo "<p><strong>ชื่อ-สกุล:</strong> ".$title.$fullname."</p>";
        echo "<p><strong>วันเดือนปีเกิด:</strong> ".$dob."</p>";
        echo "<p><strong>ระดับการศึกษา:</strong> ".$education."</p>";
        echo "<p><strong>ความสามารถพิเศษ:</strong></p>";
        echo "<div class='alert alert-info'>".nl2br($skills)."</div>";
        echo "<p><strong>ประสบการณ์ทำงาน:</strong></p>";
        echo "<div class='alert alert-secondary'>".nl2br($experience)."</div>";
        echo '</div>';
        echo '</div>';		
    }
    ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>