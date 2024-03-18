<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    $Dosen = [
        "Nama" => "Elok Nur Hamdana",
        "Domisili" => "Malang",
        "Jenis Kelamin" => "Perempuan"
    ];
    ?>
    <h2>Data Dosen</h2>
    <table>
        <tr>
            <th>Attribute</th>
            <th>Value</th>
        </tr>
        <?php
        foreach ($Dosen as $attribute => $value) {
            echo "<tr>";
            echo "<td>{$attribute}</td>";
            echo "<td>{$value}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
