<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Smartphone Samsung</title>
    <style>
        .main-table {
            border: 1px solid black;
            width: 214.5px;
        }

        .box {
            border: 1px solid black;
            padding: 1px;
            margin: 1px;
            display: inline-block;
            width: 97.4%;
        }
    </style>
</head>
<body>

<?php
    $smartphones = [
        "Samsung Galaxy S22",
        "Samsung Galaxy S22+",
        "Samsung Galaxy A03",
        "Samsung Galaxy Xcover 5"
    ];
?>

<table class="main-table">
    <tr>
        <td>
            <div class="box"><strong>Daftar Smartphone Samsung</strong></div>
            <?php
                foreach ($smartphones as $phone) {
                    echo "<div class='box'>$phone</div>";
                }
            ?>
        </td>
    </tr>
</table>

</body>
</html>