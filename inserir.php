<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 ?>
 <html>
 <head>
 <title>Inserir</title>
 <meta charset="utf-8">
 <style>
 form{
	 background-color:gray;
	 color:yellow;
	 width:280;
	 border-radius:5px;
	 position:absolute;
	 top:100;
	 left:500;
	 text-color:white;
 }
 </style>
 </head>
 <body>

<form name="dadosPessoa" action="conexao.php" method="POST">
    <table border="2">
        
        <tbody>
            <tr>
                <td>Nome:</td>
                <th><input type="text" name="nome" /></th></td>
            </tr>
            <tr>
                <td>Nascimento:</td>
                <td><input type="date" name="nascimento"  /></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input type="text" name="telefone"  /></td>
            </tr>
			<tr>
                <td>Endereço:</td>
                <td><input type="text" name="endereco"  /></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"  /></td>
            </tr>
			<tr>
                <td>CEP:</td>
                <td><input type="text" name="cep"  /></td>
            </tr>
			
            <tr>
                <td><input type="hidden" name="acao" value="inserir" /></td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>
            </tr>
        </tbody>
    </table>

</form>
</body>
</html>
