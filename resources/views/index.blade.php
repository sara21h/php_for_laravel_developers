<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header{
            background: #E5DEEC;
            padding: 1.5em;
            text-align: center;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th{
            border: 1px solid black;
            padding: 8px;
        }
        td{
            border: 1px solid black; padding: 8px;
            padding: 8px;
        }
    </style>
</head>
<body>
<header>
<h1>
    <?=$greeting;?> <!--saluda a la persona i li mostrarà la taula amb les tasques-->
</h1>
</header>
    <table>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Completed</th>
        </tr>


        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?=$task->id;?>></td>
                <td><?=$task->title;?>></td>
                <td><?=$task->description;?>></td>
                <td><?=$task->completed;?>></td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>