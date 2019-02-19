<?php

session_start();

$_SESSION['firstName'] = 'Oly';

$_SESSION['LastName'] = 'Hasan';

echo 'First Name is: '.$_SESSION['firstName'];
echo '<br>';

echo 'Last Name is:  '.$_SESSION['LastName'];



?>