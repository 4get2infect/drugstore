<p>
  <?php
    $mas = array(mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),
                 mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100));
     
     function ShellSort($elements,$length) {
       $k=0;
       $gap[0] = (int) ($length / 2);

       while($gap[$k] > 1) {
         $k++;
         $gap[$k]= (int)($gap[$k-1] / 2);
       }//end while

       for($i = 0; $i <= $k; $i++){
         $step=$gap[$i];

         for($j = $step; $j < $length; $j++) {
           $temp = $elements[$j];
           $p = $j - $step;
           while($p >= 0 && $temp < $elements[$p]) {
             $elements[$p + $step] = $elements[$p];
             $p= $p - $step;
           }//end while
           $elements[$p + $step] = $temp;
         }//endfor j
       }//endfor i

        return $elements;
      }// end function

    $c = count($mas);
    print_r($mas);
    ShellSort($mas,$c);
    print_r($mas);
  ?>
</p>