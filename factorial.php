<html>
<head>
<h1>FACTORIAL</head>
</head>
<body>
<?php 
function Factorial($number){ 
    if($number <= 1){   
        return 1;   
    }   
    else{   
        return $number * Factorial($number - 1);   
    }   
} 
  
$number = 10; 
$fact = Factorial($number); 
echo "Factorial = $fact"; 
?>
</body>
</html>
