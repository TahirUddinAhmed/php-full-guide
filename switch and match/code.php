<?php
 $paymentStatus = 5;

 switch($paymentStatus) {
   case 1:
     echo "Paid";
     break;
   case 2:
      echo "Payment Decline";
      break;
    case 3:
        echo "Pending payment";
        break;
    default: 
        echo "Unknown payment status";
        break;
 }

 echo "<br>";

 $paymentStatusDispay = match($paymentStatus) {
    1 => 'paid',
    2 => 'payment decline',
    3 => 'Pending payment',
    default => 'Unknown payment status',
 };


 echo $paymentStatusDispay;
