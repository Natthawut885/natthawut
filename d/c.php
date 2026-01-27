<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ฟอร์มสมัครสมาชิก</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<div class="container my-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h1 class="card-title mb-0">ฟอร์มสมัครสมาชิก -- นัธวุฒิ บัวงาม (มาร์ค) - Gemini</h1>
        </div>
        <div class="card-body">
            <form method="post" action="">

                <div class="mb-3">
                    <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="mb-3">
                    <label for="height" class="form-label">ความสูง (ซม.) <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="height" name="height" min="100" max="220" required>
                    <small class="form-text text-muted">ต้องอยู่ระหว่าง 100 ถึง 220 ซม.</small>
                </div>

                <div class="mb-3">
                    <label for="color" class="form-label">สีที่ชอบ</label>
                    <input type="color" class="form-control form-control-color" id="color" name="color" value="#0d6efd" title="เลือกสีของคุณ">
                </div>

                <div class="mb-3">
                    <label for="major" class="form-label">สาขาวิชา</label>
                    <select class="form-select" id="major" name="major">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>

                <div class="d-grid gap-2 d-md-block mt-4">
                    <button type="submit" name="Submit" class="btn btn-success">
                        <i class="bi bi-person-check-fill"></i> สมัครสมาชิก
                    </button>
                    <button type="reset" class="btn btn-warning text-dark">
                        <i class="bi bi-arrow-counterclockwise"></i> Reset
                    </button>
                    <button type="button" class="btn btn-info text-white" onClick="window.location='https://www.msu.ac.th';">
                        <i class="bi bi-globe"></i> go to MSU
                    </button>
                    <button type="button" class="btn btn-secondary" onClick="window.print();">
                        <i class="bi bi-printer-fill"></i> พิมพ์
                    </button>
                </div>

            </form>
        </div>
    </div>

    <hr class="my-5">

    <?php
    if (isset($_POST['Submit'])){
        $fullname = $_POST['fullname'] ;
        $phone = $_POST['phone'] ;
        $height = $_POST['height'] ;
        $color = $_POST['color'] ;
        $major = $_POST['major'] ;
        
        echo '<div class="card border-success">';
        echo '<div class="card-header bg-success text-white">✅ ข้อมูลที่ถูกส่ง:</div>';
        echo '<div class="card-body">';
        echo "<p><strong>ชื่อ-สกุล:</strong> ".$fullname."</p>";
        echo "<p><strong>เบอร์โทร:</strong> ".$phone."</p>";
        echo "<p><strong>ความสูง:</strong> ".$height." ซม.</p>";
        echo "<p><strong>สีที่ชอบ:</strong> ".$color." <span class='d-inline-block border border-dark rounded' style='width: 30px; height: 30px; background-color: {$color}; margin-left: 5px;'></span></p>";
        echo "<p><strong>สาขาวิชา:</strong> ".$major."</p>";
        echo '</div>';
        echo '</div>';		
    }
    ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>
</html>