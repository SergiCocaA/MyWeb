<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>MiWeb amb Test BD</title>
</head>
<body>
    <h1>Hola Mön!</h1>
    <p>Web desplegada amb Docker i GitHub Actions.</p>

    <?php
    
    $host = "db";      
    $username = "user"; 
    $password = "password"; 
    $dbname = "demo"; 

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p style='color: green; font-weight: bold;'>onnexió a BD</p>";
    } catch (PDOException $e) {
        echo "<p style='color: red; font-weight: bold;'>Error BD: " . $e->getMessage() . "</p>";
    }
    ?>
</body>
</html>