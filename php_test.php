<?php echo '<p>Привет, мир!</p>'; ?>
<p>
    Сформированоо
    <?php echo date('Y-m-d H:i:s'); ?>
</p>

<?php 
$a= ["1. e2-e4 e7-e5", "2. Kg1-f3 Kb8-c6", "3. Cf1-c4 Cf8-c5"];
$a_length = count($a);
for($i=0; $i<$a_length; ++$i){
    echo $a[$i];
    echo '<br>';
}
?>
