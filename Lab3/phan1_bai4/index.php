<table border="1" cellpadding="5" cellspacing="5" style="background-color: yellow;">
<?php
for($i = 1; $i <= 7; $i ++) {  
    echo '<tr>';
    for($j = 1; $j <= 7; $j ++) {
        echo "<td>";
        echo ($i * $j);
        echo "</td>";
   
    }
    echo '</tr>';
}
?>
</table>