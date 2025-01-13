<?php

function convertToCGPA($marks) 
{
    if ($marks >= 80)
     {
        return 4.00;
    }
     elseif ($marks >= 75) 
     {
        return 3.75;
    }
     elseif ($marks >= 70)
      {
        return 3.50;
    } 
    elseif ($marks >= 65)
     {
        return 3.25;
    } 
    elseif ($marks >= 60) 
    {
        return 3.00;
    } 
    elseif ($marks >= 55) 
    {
        return 2.75;
    } 
    elseif ($marks >= 50) 
    {
        return 2.50;
    } 
    elseif ($marks >= 45) 
    {
        return 2.25;
    }
    elseif ($marks >= 40) 
    {
        return 2.00;
    }
   else 
    {
        return 0.00;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')
 {
    $marks = $_POST['marks'];
    $totalCGPA = 0;

    foreach ($marks as $mark) 
    {
        $totalCGPA += convertToCGPA($mark);
    }

    $averageCGPA = $totalCGPA / count($marks);
    

    echo "<body style='background-color:  #e6ccff;'>";
    echo "<h2>Your CGPA is: " . number_format($averageCGPA, 2) . "</h2>";
    echo "</body>";
}
?>