<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <title>นัธวุฒิ บัวงาม (มาร์ค)</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fa;
        }

        .form-container {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="form-container">
            <h1 class="text-center mb-4">ฟอร์มสมัครสมาชิก -- ChatGPT</h1>

            <form method="post" action="">
                <div class="mb-3">
                    <label class="form-label">ชื่อ-สกุล *</label>
                    <input type="text" name="fullname" class="form-control" required autofocus>
                </div>

                <div class="mb-3">
                    <label class="form-label">เบอร์โทร *</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">ความสูง (ซม.) *</label>
                    <input type="number" name="height" class="form-control" min="100" max="220" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">สีที่ชอบ</label>
                    <input type="color" name="color" class="form-control form-control-color">
                </div>

                <div class="mb-3">
                    <label class="form-label">สาขาวิชา</label>
                    <select name="major" class="form-select">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" name="Submit" class="btn btn-primary">สมัครสมาชิก</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="button" class="btn btn-success" onclick="window.location='https://www.msu.ac.th';">Go to MSU</button>
                    <button type="button" class="btn btn-secondary" onclick="window.print();">พิมพ์</button>
                </div>
            </form>

            <hr class="my-4">

            <?php
            if (isset($_POST['Submit'])) {
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $height = $_POST['height'];
                $color = $_POST['color'];
                $major = $_POST['major'];

                echo "<div class='alert alert-info mt-3'>";
                echo "ชื่อ-สกุล: " . $fullname . "<br>";
                echo "เบอร์โทร: " . $phone . "<br>";
                echo "ความสูง: " . $height . " ซม.<br>";
                echo "สีที่ชอบ: " . $color . " <div style='width:20px; height:20px; background:{$color}; display:inline-block; border-radius:4px;'></div> <br>";
                echo "สาขาวิชา: " . $major . "<br>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
