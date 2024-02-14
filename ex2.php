<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2. Таблица сравнения</title>
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

        th,
        td:nth-child(1) {
            background-color: lightgrey;
        }
    </style>
</head>

<body>
    <h1>Задание 2. Таблица сравнения</h1>

    <h2>Таблица гибкого сравнения с помощью "=="</h2>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>true </th>
                <th>false</th>
                <th>1 </th>
                <th>0 </th>
                <th>-1 </th>
                <th>"1" </th>
                <th>null </th>
                <th>"php"</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>true</strong></td> <?php $A = true ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
            <tr>
                <td><strong>false</strong></td> <?php $A = false ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
            <tr>
                <td><strong>1</strong></td> <?php $A = 1 ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
            <tr>
                <td><strong>0</strong></td> <?php $A = 0 ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
            <tr>
                <td><strong>-1</strong></td> <?php $A = -1 ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
            <tr>
                <td><strong>"1"</strong></td> <?php $A = "1" ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
            <tr>
                <td><strong>null</strong></td> <?php $A = null ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
            <tr>
                <td><strong>"php"</strong></td> <?php $A = "php" ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
        </tbody>
    </table>

    <h2>Таблица жесткого сравнения с помощью "==="</h2>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>true </th>
                <th>false</th>
                <th>1 </th>
                <th>0 </th>
                <th>-1 </th>
                <th>"1" </th>
                <th>null </th>
                <th>"php"</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>true</strong></td> <?php $A = true ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
            <tr>
                <td><strong>false</strong></td> <?php $A = false ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
            <tr>
                <td><strong>1</strong></td> <?php $A = 1 ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
            <tr>
                <td><strong>0</strong></td> <?php $A = 0 ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
            <tr>
                <td><strong>-1</strong></td> <?php $A = -1 ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
            <tr>
                <td><strong>"1"</strong></td> <?php $A = "1" ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
            <tr>
                <td><strong>null</strong></td> <?php $A = null ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
            <tr>
                <td><strong>"php"</strong></td> <?php $A = "php" ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>