<html>
<head>
<meta charset="UTF-8">
<title>Formulário de Contato</title>
<style>
#todoform {
background:#4f4f4f; 
/* cor escura para o fundo do formulário */

font:12px arial, verdana, helvetica, sans-serif; 
/* o tamanho e o tipo da fonte no formulário */

border-top:8px solid #cfcfcf;
/* borda superior de 8px solida na cor cinza clara 
no formulário */

border-left:8px solid #cfcfcf;
/* a borda esquerda do formulário */

border-right:8px solid #696969; 
/* a borda direita do formulário */

border-bottom:8px solid #696969; 
* a borda inferior do formulário */

border-collapse:collapse; 
/* retira as bordas duplas nas células da tabela */

color:#ff9900; /* a cor laranja para as letras */
      } 
#todoform th {
background:#000000;
/* a cor preta para o fundo do título */

padding:3px; 
/* um afastamento de 3px */

font: bold 15px arial, verdana, helvetica, sans-serif; 
/* letras em negrito com 15px e familia arial, verd....*/

border-bottom:1px solid #ff9900; 
/* uma borda inferior solida de 1px na cor laranja */
} 
#todoform input {
background:#b5b5b5; 
/* a cor do fundo dos três campos */

border:1px dashed #ff9900;
/* uma borda de 1px tracejada e na cor laranja para 
o campo */
}   
#todoform textarea {
 background:#b5b5b5; 
 /* a cor do fundo do campo */

border:1px dashed #ff9900; 
/* uma borda de 1px tracejada e na cor 
laranja para o campo */
}
#todoform input.botao {
background:#000000; 
/* a cor do fundo do botão */

color:#ffffff; /* a cor das letras Enviar */
border:2px solid #ffffff;
/* uma borda de 2px solida branca no botão*/
}  
#todoform td {
padding:3px;
}
</style>
</head>
<body>
<form name="todoform" action="mailto:habitsul@gmail.com" 
method="post" >
<table>
<tr> 
<th colspan="2">Formul&aacute;rio 
de contato</th>
</tr>
<tr> 
<td><label>Nome</label></td>
<td><input name="nome" type="text" size="33" 
maxlength="1000"></td>
</tr>
<tr> 
<td><label>*e-mail</label></td>
<td><input name="email" type="text" size="33" 
maxlength="1000"></td>
</tr>
<tr> 
<td><label>Assunto</label></td>
<td><input name="subject" type="text" size="33" 
maxlength="1000"></td>
</tr>
<tr> 
<td><label>*Coment&aacute;rios</label>
</td>
<td><textarea name="comentario" cols="25" 
rows="7" >
</textarea>
</td>
</tr>
<tr> 
<td><input name="submit" type="submit" 
value="Enviar" 
class="botao">
</td>
<td>*Campos de preenchimento obrigat&oacute;rio</td>
</tr>
</table>
</form>
</body>
</html>