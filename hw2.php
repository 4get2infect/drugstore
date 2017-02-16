<p>
  <?php
    $mas = array(mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100));

    $c = count($mas);
    print_r($mas);
    echo "Елементи массиву, що є простими числами";
    foreach ($mas as &$value) {
      if(gmp_prob_prime($mas[j] != 0 )) 
        echo ($mas[j]);
    }
    unset($mas);
	
	 echo "Непарні елементи массиву";
	for($i = 0; $i <= $c; $i++) {
      $a = ($mas[i] % 2 );
	  if ($a = 1 )
        echo ($mas[i]);
    }
  ?>
</p>