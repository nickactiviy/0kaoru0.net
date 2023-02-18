<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title; ?></title>

    <!-- CDN Bootstrap -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <div class="row">

            <h4 class="center">Detail Ip address, OS dan Platform yang digunakan</h4>

            <table class="table table-striped table-bordered">

                <tr>

                    <td>Ip Address</td>

                    <td><?= $ip_address; ?></td>

                </tr>

                <tr>

                    <td>Sistem Operasi</td>

                    <td><?= $os; ?></td>

                </tr>

                <tr>

                    <td>Browser details</td>

                    <td><?= $browser . " - " . $versi_browser ?></td>

                </tr>

            </table>

        </div>

    </div>

</body>

</html>
