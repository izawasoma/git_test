<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gitの練習</title>
</head>
<body>
    <h1>Gitの練習を行います</h1>
    <p>---------------------------------------</p>
    <h2>足し算を行う</h2>
    <table>
        <tr>
            <th><?php echo htmlspecialchars('<項番>', ENT_QUOTES, 'UTF-8'); ?></th>
            <th>値１</th>
            <th>+</th>
            <th>値２</th>
            <th>=</th>
            <th>合計</th>
        </tr>
        <?php for($i=0; $i<count($num1); $i++): ?>
            <tr>
                <th>Q<?php echo $i + 1; ?></th>
                <td><?php echo $num1[$i]; ?></td>
                <td>+</td>
                <td><?php echo $num2[$i]; ?></td>
                <td>=</td>
                <td><?php echo $add_ans[$i]; ?></td>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>