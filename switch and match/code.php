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

 $httpCode = 404;

 $message = match($httpCode) {
  200, 201, 204 => "Success",
  301, 302 => "Redirection",
    400, 401, 403 => "Client error",
    404 => "Not found",
    500 => "Server Error",
    default => "Unknown status code" 
 };

 echo "HTTP code $httpCode: $message";
