<?php 
     $title="Date and Time Manupulation";
include 'includes/header.php'?>
<body>
    <h1>Date and Time Manipulation</h1>
    <?php 
        $dateno=getdate();
        echo "Today's Date: <br/>";
        echo $dateno['mday'].'<br/>';
        echo $dateno['mon']."</br>";
        echo $dateno['year']."</br>";
        echo "Today's Date:".$dateno['mday'].'/'.$dateno['mon'].'/'.$dateno['year'].'<br/>';

        echo time();

        print date("m/d/y G.I.S <br>", time()).'<br>';
        print "Today is";
        print date ("j of F Y, \a\\t g.i a", time());

    
    ?>
</body>
<?php 
    require 'includes/footer.php'
    ?>