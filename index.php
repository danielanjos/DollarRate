<?php
require_once 'dollarRequest.php';
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Dollar Rate</title>
</head>

<body>

    <main class="container">
        <header>
            <h1>Dollar rate from last 30 days</h1>
        </header>

        <section class="content">
            <table>
                <thead>
                    <tr>
                        <td>Date</td>
                        <td>Value</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < 15; $i++) :

                    ?>
                        <tr>
                            <td><?= $array[$i]["date"] ?></td>
                            <td><?= $array[$i]["value"] != "" ? $array[$i]["value"] : "Not Found" ?></td>
                        </tr>
                    <?php
                    endfor;
                    ?>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr>
                        <td>Date</td>
                        <td>Value</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 15; $i < 30; $i++) :

                    ?>
                        <tr>
                            <td><?= $array[$i]["date"] ?></td>
                            <td><?= $array[$i]["value"] != "" ? $array[$i]["value"] : "Not Found" ?></td>
                        </tr>
                    <?php
                    endfor;
                    ?>
                </tbody>
            </table>
        </section>

        <style>
            table {
                border: 1px solid black;
                border-collapse: collapse;
            }

            table tr td {
                border: 1px solid black;
            }
        </style>
</body>

</html>