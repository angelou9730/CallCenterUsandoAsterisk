<?php

$pass=password_hash('1234',PASSWORD_DEFAULT,['cost'=>12]);

echo $pass;

?>