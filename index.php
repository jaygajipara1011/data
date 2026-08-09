<?php
date_default_timezone_set('Asia/Kolkata');

$mysql_username = 'if0_42501725';
$mysql_password = 'RC9cpVZnvIM';
$mysql_hostname = 'sql200.infinityfree.com';
$mysql_port     = '3306';

$db_name = 'if0_42501725_data';

$today = date('d-m-Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL Connection Details</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f7f8fa;
            color: #263238;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 0 15px;
        }

        .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .card-title {
            padding: 20px 24px;
            border-bottom: 1px solid #ddd;
            font-size: 20px;
            font-weight: 600;
        }

        .card-body {
            padding: 24px;
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .field {
            margin-bottom: 25px;
        }

        .label {
            color: #607d8b;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        .value {
            font-size: 16px;
            color: #263238;
            word-break: break-all;
        }

        input {
            width: 100%;
            padding: 11px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f5f5f5;
            font-size: 15px;
        }

        .database {
            color: #3949ab;
            font-weight: 500;
        }

        @media(max-width: 600px) {
            .row {
                grid-template-columns: 1fr;
                gap: 0;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- MySQL Connection Details -->
    <div class="card">

        <div class="card-title">
            MySQL Connection Details
        </div>

        <div class="card-body">

            <div class="row">

                <div>
                    <div class="field">
                        <div class="label">MySQL Username</div>
                        <div class="value">
                            <?= htmlspecialchars($mysql_username) ?>
                        </div>
                    </div>

                    <div class="field">
                        <div class="label">MySQL Hostname</div>
                        <div class="value">
                            <?= htmlspecialchars($mysql_hostname) ?>
                        </div>
                    </div>

                    <div class="field">
                        <div class="label">Today's Date</div>
                        <input
                            type="text"
                            value="<?= $today ?>"
                            disabled
                        >
                    </div>
                </div>

                <div>
                    <div class="field">
                        <div class="label">MySQL Password</div>
                        <div class="value">
                            <?= htmlspecialchars($mysql_password) ?>
                        </div>
                    </div>

                    <div class="field">
                        <div class="label">MySQL Port (Optional)</div>
                        <div class="value">
                            <?= htmlspecialchars($mysql_port) ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- Database List -->
    <div class="card">

        <div class="card-title">
            List of MySQL Databases
        </div>

        <div class="card-body">

            <div class="label">
                Database Name
            </div>

            <div class="value database">
                <?= htmlspecialchars($db_name) ?>
            </div>

        </div>

    </div>

</div>

</body>
</html>
