<?php

//パスワードを記録したファイルの場所
echo __FILE__;
// /Applications/MAMP/htdocs/php/php_test_20220126/section2/mainte/test.php

echo '<br>';
//パスワード(暗号化)
echo(password_hash('password123', PASSWORD_BCRYPT));
//$2y$10$s20CJjgJra4BiV7vdJTKae5.kIphkZH4ugnoDx5.tkU2yA0gWW8ES
