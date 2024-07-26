<html>
<head>
    <title> Display Images Randomly </title>
</head>
<body>
<?php
    srand((double) microtime() * 1000000);
    $num = rand( 1, 4 );
    
    switch( $num )
    {
    case 1: $image_file = "images/alfa.jpg";
            break;
    case 2: $image_file = "images/ferari.jpg";
            break;
    case 3: $image_file = "images/jaguar.jpg";
            break;
    case 4: $image_file = "images/porsche.jpg";
            break;
    }
    echo "Random image : <br><img src=$image_file />";
?>
</body>
</html>