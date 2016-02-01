<?php 
// $exo1 = mktime(0, 0, 0, 05, 03, 1469);
echo 'Exo 1 : '. date('l', mktime(0, 0, 0, 05, 03, 1469));
?>
</br>
<?php echo 'Exo 2 :  -700 jours :  '. date('d-m-Y',strtotime('- 700 days')); ?>
</br>
<?php
$exo3_1 = time('0, 0,0, 14, 13, 2015'); 
$exo3_2 = time('0, 0,34, 01, 01, 1970'); 
echo 'Exo 3 :  ' . time($exo3_2-$exo3_1); ?>
</br>
<?php echo 'Exo 4 : 34'?>
</br>
<?php echo 'Exo 5 : +700 jours : '. date('d-m-Y',strtotime('+ 700 days')); ?>
</br>
<?php 
$exo6_1 = strtotime('20, 43, 45, 01, 08, 2045');
$exo6_2 = strtotime('17, 0, 0, 08, 13, 2015');
echo 'Exo 6 : Il reste '. time($exo6_2-$exo6_1) . ' seconde avant le 8 janvier 2045 '; ?>
</br>
<?php echo 'Exo 7 : Nous sommes le '. date('d-m-Y'); ?>
</br>
<?php echo 'Exo 8 : Au format Anglais, nous sommes le : '. date('m-d-Y'); ?>