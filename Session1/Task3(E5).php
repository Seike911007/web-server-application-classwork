<!DOCTYPE html>
<html>
<head>
    <title>question 1</title>
</head>
<body>
    <?php 

        $month = date('F',time());
        if($month == "December"){
            echo "It's December, here comes the snow.";
        }
        else{
            echo"It’s not December so you can keep the heating off.";
        }

    ?>
</body>
</html>    
