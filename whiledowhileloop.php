 <?php include 'includes/header.php'?>
<body>
    <h1>While Loop</h1>
    <?php 
        $grade=0;
        //Infinite loop
       // while($grade < 10){
         //   echo '<p>I am less than ten!</P>';
        //}
        //pre-condition loop
        while($grade <10){
            echo '<p> I am less than 10!</p>';
            $grade++;
           
        }
        echo 'EXIT LOOP';
    ?>
    <h1> Do While Loop</h1>
    <?php
    //post-condition loop
    $grade=0;
        do{
            echo'<p>I am a Do while loop</p>';
                $grade++;
        }while($grade<10)

    ?>
</body>
</html>