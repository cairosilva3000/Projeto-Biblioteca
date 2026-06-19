<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #0d0d0d;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .container {
            background: #1a1a1a;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(128, 0, 255, 0.4);
            width: 350px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #b266ff;
        }

        ul {
            list-style: none;
        }

        li {
            margin-bottom: 12px;
        }

        li a {
            display: block;
            text-decoration: none;
            color: white;
            background: linear-gradient(135deg, #6a0dad, #8a2be2);
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            font-weight: bold;
            transition: 0.3s;
        }

        li a:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 15px rgba(178, 102, 255, 0.8);
            background: linear-gradient(135deg, #8a2be2, #b266ff);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Menu</h1>

    <ul>
        <?php foreach($lista as $item) : ?>
            <li>
                <?= anchor(
                    $item . 'Controller/index',
                    $item
                ) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>