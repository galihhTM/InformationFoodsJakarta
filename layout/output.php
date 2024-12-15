<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    // $email = htmlspecialchars($_POST['email']);
    // $phone = htmlspecialchars($_POST['phone']);
    // $city = htmlspecialchars($_POST['city']);
    $project = htmlspecialchars($_POST['project']);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        p {
            font-size: 16px;
            color: #555;
        }
        .container {
            display: flex;
            flex-direction: column;
            max-width: 600px;
            margin: auto;
            background: white;
            align-items: flex-start;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .container p {
            width: 100%; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kritik Dan Saran</h1>
        <p>Nama Lengkap : <?php echo $username; ?></p>
        <!-- <p>Email        : <?php echo $email; ?></p>
        <p>Nomor Telepon: <?php echo $phone; ?></p>
        <p>Kota         : <?php echo $city; ?></p> -->
        <p>Proyek       : <?php echo $project; ?></p>
    </div>
</body>
</html>