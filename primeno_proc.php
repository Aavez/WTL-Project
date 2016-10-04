<?php

if($_POST)
{
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    
    echo 'prime no';
    for($i=$n1;$i<=$n2;$i++)
    {
         if($i==2 || $i==3 || $i==5 || $i==7)
        {
            echo '<br>'.$i;
        }
        if($i%2!=0 && $i%3!=0 && $i%5!=0 && $i%7!=0)
        {
            echo '<br>'.$i;
        }
    }
}
?>

