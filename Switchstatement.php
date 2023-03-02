<?php
 $title="Switch Statement";
include 'includes/header.php'?>
<body>
    <h1>Switch statements</h1>
    <?php 
     $grade='F';
     switch($grade){
        case 'A':
            echo '<h2 style="color:green"> YOU are a superstar!</h2>';
            break;
        case 'B':
            echo '<h2 style="color: blue">You did well</h2>';
            break;
        default:
        echo'<h2 style="color:red">You have failed</h2>';
        break;

     }

    ?>
</body>
<?php 
    require 'includes/footer.php'
    ?>