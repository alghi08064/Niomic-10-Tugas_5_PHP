<?php
$logika1t = true && true;
$logika2f = true && false;
$f2 = (int) $logika2f;
$logika3f = false && true;
$f3 = (int) $logika3f;
$logika4f = false && false;
$f4 = (int) $logika4f;

$logika5t = true || true;
$logika6t = true || false;
$logika7t = false || true;
$logika8f = false || false;
$f8 = (int) $logika8f;


echo "<br>";
echo "Tabel Logika $logika1t$f2$logika1t$f2$logika1t$f2";
echo "<br>";echo "<br>";
echo "<table width = 500 border =1>
<tr>
<td>INPUT 1</td>
<td>INPUT 2</td>
<td>AND</td>
<td>OR</td>
</tr>
<tr>
<td>FALSE</td>
<td>FALSE</td>
<td>$f4</td>
<td>$f8</td>
</tr>
<tr>
<td>FALSE</td>
<td>TRUE</td>
<td>$f3</td>
<td>$logika7t</td>
</tr>
<tr>
<td>TRUE</td>
<td>FALSE</td>
<td>$f2</td>
<td>$logika6t</td>
</tr>
<tr>
<td>TRUE</td>
<td>TRUE</td>
<td>$logika1t</td>
<td>$logika5t</td>
</tr>
</table>";

?>
