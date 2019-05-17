<?php include ("conexao.php");?>
<html>
<head>
<title> Curso Completo de PHP Aluno Jorge - www.mjailton.com.br </title>
</head>
<body>



<table width="250" border="0" align="center" cellspacing="0">  
  <tr>
    
      <table width="25%" border="0" cellpadding="0" cellspacing="0" align="center">
		<FORM ACTION="acesso.php" method=post>
          <tr> 
            <td width="41%" height="35" align="right">Login</td>
            <td width="59%" height="35" align="left">  <input type="text" name="login" value=""></td>
          </tr>
		  
          <tr> 
            <td height="35" align="right">Senha</td>
            <td height="35" align="left"> <input type="password" name="senha" value=""><td>
          </tr>
		  
          <tr> 
            <td height="24" colspan="2" align="center"> <input name="submit" type="submit" value="Entrar"></td>
          </tr> 
		</FORM>
        </table>

</body>
</html>