<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Smartphone Samsung</title>
    <style>
        .main-table {
            border: 1px solid black;
            width: 267px;
        }

        .box {
            border: 1px solid black;
            font-size: small;
            padding: 1px;
            margin: 1px;
            display: inline-block;
            width: 97.4%;
        }

        .header-box {
            background-color: red;
            color: black;
            font-size: 20px;
            text-align: center;
            font-weight: bold;
            height: 56px; 
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>

<?php
    $smartphones = [
        "S22" => "Samsung Galaxy S22",
        "S22+" => "Samsung Galaxy S22+",
        "A03" => "Samsung Galaxy A03",
        "Xcover5" => "Samsung Galaxy Xcover 5"
    ];
?>

<table class="main-table">
    <tr>
        <td>
            <div class="box header-box">Daftar Smartphone Samsung</div>
            <?php
                foreach ($smartphones as $key => $phone) {
                    echo "<div class='box'>$phone</div>";
                }
            ?>
        </td>
    </tr>
</table>

</body>
</html>