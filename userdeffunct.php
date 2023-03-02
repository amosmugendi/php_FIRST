<?php 
 $title="User defined Functions";
include 'includes/header.php'?>
<body>
    <h1>USer defined functions</h1>
    <?php 
    /*Defining a function in php*/
     
    function writeMessage(){
        echo "You are a really nice person have a nice time! <br/>";
    }
    /*calling a function*/
        writeMessage();
        echo"<hr/>";
        writeMessage();
       
        /*Functions with parameters*/
        function addFunction($num1, $num2){
            $sum= $num1+ $num2;
            $num=$num2+1;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }

        function chnageNUm(&$num){
            $num=$num+10;
        }
        function returnProduct($num1, $num2){
            $prod= $num1 * $num2;
            return $prod;
        }
        $num=500;
        addFunction(10,$num);
        echo $num;
        addFunction("50","10");
         chnageNUm($num);
         echo $num. '<br/>';
             
         $return_value= returnProduct(10,200);
         echo $return_value.'<br/>';

    ?>
</body>
<?php 
    require 'includes/footer.php'
    ?>