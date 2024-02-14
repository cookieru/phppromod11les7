<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1. Таблица истинности PHP</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td,
        th {
            width: 50px;
            padding: 10px;
            border: 1px solid gray;
            text-align: center;
        }

        th {
            background-color: lightgrey;
        }
    </style>
</head>

<body>
    <h1>Задание 1. Таблица истинности PHP</h1>

    <table>
        <thead>
            <tr>
                <th><strong>A</strong></th>
                <th><strong>B</strong></th>
                <th><strong>!A</strong></th>
                <th><strong>A || B</strong></th>
                <th><strong>A &amp;&amp; B</strong></th>
                <th><strong>A xor B</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong><?= $A = 0 ?></strong></td>
                <td><strong><?= $B = 0 ?></strong></td>
                <td><?= !$A       ?></td>
                <td><?= $A || $B  ?></td>
                <td><?= $A && $B  ?></td>
                <td><?= $A xor $B ?></td>
            </tr>
            <tr>
                <td><strong><?= $A = 0 ?></strong></td>
                <td><strong><?= $B = 1 ?></strong></td>
                <td><?= !$A       ?></td>
                <td><?= $A || $B  ?></td>
                <td><?= $A && $B  ?></td>
                <td><?= $A xor $B ?></td>
            </tr>
            <tr>
                <td><strong><?= $A = 1 ?></strong></td>
                <td><strong><?= $B = 0 ?></strong></td>
                <td><?= !$A       ?></td>
                <td><?= $A || $B  ?></td>
                <td><?= $A && $B  ?></td>
                <td><?= $A xor $B ?></td>
            </tr>
            <tr>
                <td><strong><?= $A = 1 ?></strong></td>
                <td><strong><?= $B = 1 ?></strong></td>
                <td><?= !$A       ?></td>
                <td><?= $A || $B  ?></td>
                <td><?= $A && $B  ?></td>
                <td><?= $A xor $B ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>