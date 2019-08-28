<html>
<head>HCF Program</head>
<?php 
//PHP program to find HCF of two 
// numbers iteratively. 
  
function hcf($a, $b) 
{ 
    while ($a != $b) { 
        if ($a > $b)      
            $a = $a - $b;      
        else
            $b = $b - $a;      
    } 
      
    return $a; 
} 
  
// Driver code 
$a = 10; $b = 95; 
echo hcf($a, $b), "\n";  
      
// This code is contributed by ajit 
?> 
</html>