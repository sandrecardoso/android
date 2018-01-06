
<?php 
if($_POST["acao"]=="inserir")
{ 
   inserirPessoa();
}
function inserirPessoa(){ 
   $nome=$_POST['nome'];
   $nascimento=$_POST['nascimento'];
   $endereco=$_POST['endereco'];
   $telefone=$_POST['telefone'];
   $email=$_POST['email'];
   $cep=$_POST['cep'];
   $conexao=new mysqli("localhost","root","10182400","agenda")or die(mysql_error());
   $sql="INSERT INTO pessoa(nome,nascimento,endereco,telefone,email,cep)VALUES('$nome','$nascimento','$endereco','$telefone','$email','$cep')";
   $conexao->query($sql);
   $conexao->close();
}
header("Location:index.php");


 

