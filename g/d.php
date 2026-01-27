<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>นัธวุฒิ บัวงาม (มาร์ค)</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .chart-container { display: flex; gap: 20px; flex-wrap: wrap; margin-top: 20px; }
        .box { width: 45%; min-width: 300px; }
    </style>
</head>
<body>
    <h1>นัธวุฒิ บัวงาม (มาร์ค)</h1>
    <table border="1" cellpadding="5" style="border-collapse: collapse;">
        <tr><th>ประเทศ</th><th>ยอดขาย</th></tr>
        <?php
            include_once("connectdb.php");
            $sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country`" ;
            $rs = mysqli_query($conn, $sql);
            $labels = []; $data = [];
            while ($row = mysqli_fetch_array($rs)){
                $labels[] = $row['p_country'];
                $data[] = $row['total'];
                echo "<tr><td>{$row['p_country']}</td><td align='right'>".number_format($row['total'])."</td></tr>";
            }
        ?>
    </table>

    <div class="chart-container">
        <div class="box"><canvas id="barChart"></canvas></div>
        <div class="box"><canvas id="pieChart"></canvas></div>
    </div>

    <script>
        const ctxL = <?php echo json_encode($labels); ?>;
        const ctxD = <?php echo json_encode($data); ?>;
        const config = (type) => ({
            type: type,
            data: {
                labels: ctxL,
                datasets: [{ label: 'ยอดขาย', data: ctxD, backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'] }]
            },
            options: { responsive: true }
        });

        new Chart(document.getElementById('barChart'), config('bar'));
        new Chart(document.getElementById('pieChart'), config('pie'));
    </script>
</body>
</html>