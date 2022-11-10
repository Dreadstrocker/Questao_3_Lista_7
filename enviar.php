<?php
 $vnome=$_POST["nome"];
 $vemail=$_POST["email"];
 $valtura=$_POST["altura"];
 $vpeso=$_POST["peso"];
$imc = $vpeso/$valtura**2;

 

echo "Nome: ".$vnome."<br/>Email: ".$vemail."<br/>Altura: ".$valtura."<br/>Peso: ".$vpeso."<br/>";

echo " O imc eh: " .number_format("$imc",2,",",".");
?>
