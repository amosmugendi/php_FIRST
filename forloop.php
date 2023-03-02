<?php include 'includes/header.php'?>
<body>
    <h1>For Loops</h1>
    <?php
    //for loops

    for($count =0; $count < 10; $count++){
        echo '<p>Hello world </p>';
    }

    for($count=0; $count<10; $count++){
        echo "<p>The count is:$count</p>";
    }
    ?>
</body>
<?php 
    require 'includes/footer.php'
    ?>