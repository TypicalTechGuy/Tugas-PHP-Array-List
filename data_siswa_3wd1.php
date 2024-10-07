<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: left;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .card {
            border: 1px solid black;
            border-radius: 10px;
            padding: 15px;
            width: 200px;
            background-color: #f4f4f4;
        }

        .card-title {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
            text-align: center;
        }

        .card-content {
            font-size: 16px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    echo "<h2>Daftar Siswa 3WD1</h2>";
    $siswa = array("Farras", "Javier", "Irza", "RB", "Fikhri");
    $id_siswa = array("1000", "1001", "1002", "1003", "1004");
    ?>

    <table>
        <tr>
            <th>Nama</th>
            <th>ID Siswa</th>
        </tr>
        <?php 
        for ($i = 0; $i < count($siswa); $i++) {
            echo "<tr>";
            echo "<td>" . $siswa[$i] . "</td>";
            echo "<td>" . $id_siswa[$i] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <div class="card-container">
        <?php 
        for ($i = 0; $i < count($siswa); $i++) {
            echo "<div class='card'>";
            echo "<div class='card-title'>Nama: " . $siswa[$i] . "</div>";
            echo "<div class='card-content'>ID Siswa: " . $id_siswa[$i] . "</div>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>

