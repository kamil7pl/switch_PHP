<html>
    <head>
		<title>PHP - switch</title>
	</head>
    <body>
<?php
    $x = 20;
    switch($x)
    {
        case 0:
            echo "x=0";
            break;
        case 15:
            echo "x=15";
            break;
        case 20:
            echo "x=20";
            break;
        default:
            echo "x nie jest żadną z liczb 0, 15, 20.";
    }

?>
    </body>
</html>

