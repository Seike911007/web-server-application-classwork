<!DOCTYPE html>
<html>
<head>
    <title>question 4</title>
    <style type="text/css">
        table,tr{border-collapse: collapse;border:1px solid;}
        td{width: 30px;height: 30px;}
        .color{background: #000;}
    </style>
</head>
<body>
    <table>
<?php
    for($row = 1;$row <= 8;$row++)
    {
        echo '<tr>';
        for($column = 1;$column <= 8; $column++)
        {
            if (($row + $column) % 2) {
                echo '<td></td>';
            } else {
                echo '<td class="color"></td>';
            }
        }
        echo '</tr>';
    }


?>
</table>
</body>
</html> 