<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ccc;
            min-height: 100vh;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        form {
            background-color: #333;
            padding: 1rem;
        }
        .label {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .label:first-child {
            margin-bottom: 1rem;
        }
        .label label {
            margin-bottom: .5rem;
        }
    </style>
</head>
<body>
    <!-- enctype: Indica qué tipo de archivo se subirá:
         application/x-www-form-urlencoded (default): Para tipos texto.
         multipart/form-data:                         Para archivos. -->
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="label">
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen">
        </div>
        <div class="label">
            <input type="submit" value="Subir Imagen">
        </div>
    </form>
</body>
</html>