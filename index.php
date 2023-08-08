<?php
$charset = [
    'abcdefghijklmnopqrstuvwxyz',
    'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
    '0123456789',
    '!@#$%^&*(){}[]',
];

$password = '';

for ($i = 0; $i < 16; $i++) {
    $randomSet = $charset[array_rand($charset)];
    $randomChar = $randomSet[rand(0, strlen($randomSet) - 1)];
    $password .= $randomChar;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Password generator</title>
</head>
<body>
    <h1>Password generator</h1>
    <form method="post">
        <button type="submit">Generate random password</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<p>La tua Password crittografata è: $password</p>";
    }
    ?>
</body>
</html>