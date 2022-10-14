<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$country=$_POST['country'];

print_r( 'Name: '.$name. '<br>');
print_r('Email: '.$email. '<br>');
print_r('Date of Birth: '.$birthday. '<br>');
print_r( 'Gender: '.$gender. '<br>');
print_r( 'Country: '.$country. '<br>');
?>

<?php
$filename='./userdata.csv';
$registered=fopen($filename, 'a');
fwrite($registered, "$name, $email, $birthday ,$gender,$country \n");
fclose($registered);
?>