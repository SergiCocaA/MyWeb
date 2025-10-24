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
    // Test connexió BD (credencials del docker-compose.yml)
    $host = "db";       // Host intern de Docker
    $username = "user"; // Usuari
    $password = "password"; // Contrasenya
    $dbname = "demo";   // Nom BD

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p style='color: green; font-weight: bold;'>✅ Connexió a BD 'demo' OK! 😊</p>";
    } catch (PDOException $e) {
        echo "<p style='color: red; font-weight: bold;'>❌ Error connexió BD: " . $e->getMessage() . "</p>";
    }
    ?>
</body>
</html>