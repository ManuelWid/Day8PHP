<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Exercise one: =====================================
        echo "50 names with for <br/>";
        $name = "Manuel";
        for($i=0; $i<50; $i++){
            echo $name."<br/>";
        }
        echo "<br/>";

        echo "50 names with while <br/>";
        $i = 0;
        while($i < 50){
            echo $name."<br/>";
            $i++;
        }
        echo "<br/>";

        echo "50 names with do/while <br/>";
        $i = 0;
        do{
            echo $name."<br/>";
            $i++;
        }
        while($i < 50);
        echo "<br/>";

    // Exercise two: =====================================
        echo "array with 10 entries <br/>";
        $arr = array(0,1,2,3,4,5,6,7,8,9);
        foreach($arr as $val){
            echo $val."<br/>";
        }
        echo "<br/>";

    // Exercise three: =====================================
        echo "array with 10 random entries, show the max value <br/>";
        $arr;
        for($i = 0; $i < 10; $i++){
            $arr[$i] = rand(1,100);
        }

        function highval($arr){
            return max($arr);
        }
        echo implode(",", $arr)."<br/>";
        echo highval($arr)."<br/><br/>";

    // Exercise four: =====================================
        echo "fizzbuzz <br/>";
        function fizzbuzz($min, $max){
            for($i = $min; $i < ($max+1); $i++){
                $str = "";
                if($i % 3 == 0){
                    $str .= "Back-End ";
                }
                if($i % 5 == 0){
                    $str .= "Front-End";
                }
                if($str == ""){
                    $str = $i;
                }
                echo $str."<br/>";
            }
        }
        fizzbuzz(-50,50);
    ?>
</body>
</html>