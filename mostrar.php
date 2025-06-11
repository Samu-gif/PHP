<?php include_once "config.php"; ?>
<?php
echo $nome = $_POST['nome'] ;
echo $cnpj = $_POST['cnpj'] ;

$sql = "INSERT INTO tbclientes(nome, cnpj)VALUES('$nome', '$cnpj')";

        if (mysqli_query($conn,$sql)){
            header("Location: add.php");
        } else{
            echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
        }
            mysqli_close($conn);
?>