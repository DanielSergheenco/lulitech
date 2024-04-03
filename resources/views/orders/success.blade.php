<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comanda plasată cu succes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
    @if(session('notification'))
    <div class="alert alert-success">
        {{ session('notification') }}
    </div>
    @endif
    <div class="container">
        <h1>Comanda plasată cu succes!</h1>
        <p>Vă mulțumim pentru comandă. Vă vom contacta în curând pentru confirmare.</p>
    </div>
</body>
</html>
