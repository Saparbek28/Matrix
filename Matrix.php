<?php
/**
 * Created by PhpStorm.
 * User: БайназарС
 * Date: 03.03.2020
 * Time: 14:07
 */

class Matrix
{
    public $rows = 3;
    public $cols = 3;
    public $m,$n = 2;

    public function Fmatrix ($rows,$cols,$m){
        for($i=0;$i<$rows;$i=$i+1)
        {
            for($j=0;$j<$cols;$j=$j+1)
            {
                $a[$i][$j]= $m;
                echo $a[$i][$j]." ";
                $l = rand(1,9);
                $m=$m+$l;
            }
        }
    }

    public function Smatrix ($rows,$cols,$n){
        for($i=0;$i<$rows;$i=$i+1)
        {
            for($j=0;$j<$cols;$j=$j+1)
            {
                $a[$i][$j]= $n;
                echo $a[$i][$j]." ";
                $l = rand(1,9);
                $n=$n+$l;
            }
        }
    }


    public function Plus($rows,$cols,$a,$b){
        for($i=0;$i<$rows;$i=$i+1)
        {
            for($j=0;$j<$cols;$j=$j+1)
            {
                $c[$i][$j]=$a[$i][$j]+$b[$i][$j];
                echo $c[$i][$j]." ";
            }
        }
    }

    public function Multi($rows,$cols,$a,$b){
        for($i=0;$i<$rows;$i=$i+1)
        {
            for($j=0;$j<$cols;$j=$j+1)
            {
                $c[$i][$j]=$a[$i][$j]*$b[$i][$j];
                echo $c[$i][$j]." ";
            }
        }
    }

}