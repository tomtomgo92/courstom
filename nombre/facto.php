<?php

function fact($n) {
            $f=1;
            for ($i=1;$i<=$n;$i++) {
              $f *= $i;
            }
            return $f;
           
          }
         
          echo fact ($_GET['a']);
          ?>