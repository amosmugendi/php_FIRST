<?php
     $title="Array";
include 'includes/header.php'?>
<body>
    <h1>ARRAYS</h1>
    <?php
    //a variable  
    $num=3;
    //an array
    //only one datatype/ homogenous array
    $numbers=array(1,2,33,4,43,34,55,45,65,77,65,67,88,68,54,88,76,44);
    echo "<p>$numbers[9]</p>";
    $size= count($numbers);
    echo "<p> Array Number is size:$size</p>";

     for($count=0; $count<$size; $count++){
        echo"<P>$numbers[$count]</p>";
     }

    ?>
</body>
<?php 
    require 'includes/footer.php'
    ?>