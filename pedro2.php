<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <main>
        <?php

$vnome=$_POST["nome"] ; // Se não usar isso, nas linhas 30 e 31 do input tem que
$vemail=$_POST["email"];// tirar o "v" de $vnome e de $vemail.

//echo "Nome: ".$vnome."<br/>Email: ".$vemail."<br/>"; Isso é opcional. Ele mostra 
//nome e e-mail na página 2

?>
        <form method="post" action="enviar.php">
            <div>
                <label>Altura:</label>
                <input type="number" step="0.01" name="altura" required="required" placeholder="Digite sua altura" />
            </div>

            <div>
                <label>Peso:</label>
                <input type="number" step="0.01" name="peso" required="required" placeholder="Digite seu peso" />
            </div>

            <input type="submit" value="Enviar"/>
           
            <input type="hidden" name="nome" value=<?php echo $vnome ?>>
            <input type="hidden" name="email" value=<?php echo $vemail ?>>
        </form>
        
    </main>
</body>
</html>