<?php 
 $title="If Statement";
include 'includes/header.php'?>
<body>
    <h3 style="COLOR: RED"></h3>
    <?php  
    //an if statement that will carry ouut an action based on the value of the variable.
    echo '<h2> If statement</h2>';

    $grade= 70;
    if($grade >= 50){
        echo '<h3 style="color:green"> YOU HAVE PASSED!</h3>';
    }
    else{
        echo '<h3 style="color:red">You have failed</h3>';
    }
    //if-else if-else
    $grade='A';
    if($grade =='A' || $grade==70){
        echo '<h2 style="color:green"> YOU ARE A SUPERSTAR</h2>';
    }
    ELSEIF($grade=='B'|| $grade==60){
        echo '<h2style="color:blue">you did well</h2>';

    }
    else{
        echo '<h3 style="color:red">You have failed</h3>';
    }


    
    ?>
</body>
<?php 
    require 'includes/footer.php'
    ?>