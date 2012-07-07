<?php
header('content-type: application/json; charset=utf-8');

$to = "atsneves@gmail.com";
$subject = "Cotação de material";

$message = "
<html>
<head>
<title>Cotação</title>
</head>
<body>
<p>E-mail de cotação de pedidos</p>
<table>
<tr>
<th>Nome</th>
<th>E-mail</th>
<th>Telefone</th>
</tr>
<tr>
<td>".$_GET["p1"]."</td>
<td>".$_GET["p2"]."</td>
<td>(".$_GET["p3"].") ".$_GET["p4"]."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: <marketing@acotubo.com.br>' . "\r\n";
$headers .= 'Cc: anderson@agneves.com.br' . "\r\n";

$result = 'success';

if(mail($to,$subject,$message,$headers))
{
	echo json_encode($result);
}
?>
var retorno = 1;