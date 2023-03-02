    <?php 
        $title="Index";
    include 'includes/header.php'?>
    <!-- Basic HTML -->
    <h1>Hello world - php primer</h1>
    <br/>
    <?php 
        echo 'hello php!';
        echo '<br/>';
        echo 'second line'; 
         
        $name= 'Amos Mugendi';
        $age=21;

        echo '<br/>';
        //echo variable
        echo $name;
        echo "<h2>My name is: $name <h2/>";
        echo "<h2>My age is: $age <h2/>";

        echo "<h2> My name is: $name <h2/>"
    ?>
        <button type="button" class="btn btn-warning">Click Me!</button>
        <button type="button" class="btn btn-primary">Click Me!</button>
        <button type="button" class="btn btn-sucess">Click Me!</button>
    <?php 
    require 'includes/footer.php'
    ?>