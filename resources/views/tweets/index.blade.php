<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        :root {
          --bs-emphasis-color: #000000; /* Set emphasis color to black */
        }
        body {
            background-color: var(--bs-emphasis-color); /* Apply emphasis color to body background */
            color: white; /* Ensure text is readable on black background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
        }
        .container {
            width: 300px;
            height: 90px;
            background-color: black;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: auto;
            position: absolute;
            top: 0;
            left: 0;
        }
      </style>
</head>
<body>
    <div class="container">
        <p>Silahkan Login Dahulu</p>
        <p>Ayo Login</p>   
    </div>
    <div>
        <a href="#">Beranda</a>
        <a href="#">Explore</a>
        <a href="#">Login</a>
    </div>
    
</body>
</html>
