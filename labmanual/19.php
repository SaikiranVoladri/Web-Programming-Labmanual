<?php
    $number = $_POST['t1'];
    // prime number logic
    $flag = 0;
    for($i = 2; $i <= $number/2; ++$i) {
        // condition for non-prime number
        if($number % $i == 0) {
            $flag = 1;
            break;
        }
    }
    if ($flag == 1) {
        echo "$number is not a prime number.";
    }
    else {
        echo "$number is a prime number.";
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

