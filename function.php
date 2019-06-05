<?php
$fileName = '';
function saveUser(string $firstName,string  $lastName,string  $email,string $password):bool
{
    $file = fopen('users.txt', 'a');

    if ($file === false){
        return false;
    }

    $row = sprintf("%s\t%s\t%s\t%s\n", $firstName, $lastName, $email, $password);
    fputs($file, $row);
    fclose($file);

    return true;
}

function userPrint($fileName)
{
$handle = fopen("$fileName", "r");
if ($handle){
    $x=0;
    while (($buffer = fgets($handle)) !== false){
        $user = explode("\t", $buffer);
        $x++;
        for ($i=0; $i<=$x; $i++) {
            echo($user[$i] . '<br />');
        };
    };
    if (!feof($handle)){
        echo "error";
    }
    fclose($handle);
}
}