<?php 
    $title="String Manupulation";
include 'includes/header.php'?>
<body>
    <h1>PHP string Manipulation</h1>
    <?php 
        $phrase1="students who came late";
        $phrase2="in class, stand with rock";
        $name="Amos Mugendi";
        echo $phrase1 .",named Tiffany," . $phrase2;
        echo '<br/>';
        echo '<hr/>';
        //string transformation
        echo 'Uppercase first letter:' . ucfirst($name). '<br/>';
        echo 'Uppercase first letter for each word:' . ucwords($name). '<br/>';

        echo 'Upper case: '. strtoupper($name).'</br>';
        echo 'Lower case:'. strtolower("THIS IS WAS IN LOWER CASE").'</br>';
        echo '<hr/>';
        echo 'Repeast String:'. strtoupper(str_repeat('a',10)).'<br/>';
        echo 'Get a substring:'. substr($name,3,10).'</br>';
        echo 'Get position of string:' . strpos($name,'o'). '<br/>';
        echo 'Find Character:' . strchr($name,'o'). '<br/>';
        echo 'Find string length :' . strlen($name). '<br/>';
        echo 'Replace one string with another:' . str_replace("stand","sit", $phrase2). '<br/>';
    ?>
</body>
<?php 
    require 'includes/footer.php'
    ?>