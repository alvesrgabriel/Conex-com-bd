<meta charset = "utf-8"> 

<?php 

    $host = "localhost:3306"; 
    $user = "root"; 
    $pass = ""; 
    $base = "carros3";
    $conexao = mysqli_connect($host, $user, $pass, $base); 
    $resultadoQueryMySQL = mysqli_query($conexao, "select * from carros"); 


    echo "<table border = 3px> <tr> <td> ID do Carro </td> <td> Marca </td> <td> Modelos </td> </tr>"; 
    
    while ($escrever=mysqli_fetch_array($resultadoQueryMySQL)) {

        echo "</td> <td>" . $escrever['id_carros'] . "</td> <td>" . $escrever['marca'] . "</td> <td>" . $escrever['modelo'] . "</td> <tr>"; 
        
    }

    echo "</table>"; 

    echo "</br> </br>"




?> 