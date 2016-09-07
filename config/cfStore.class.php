<?php

/**
 * Created by PhpStorm.
 * User: maico
 * Date: 07/09/2016
 * Time: 16:01
 */

class cfStore{
    public function dateToBR($dataAmericana){
        $d = explode('-', $dataAmericana);
        $d = $d[2]."/".$d[1]."/".$d[0];
        return $d;
    }
    public function dateToUS($dataBR){
        $d = explode('/', $dataBR);
        $d = $d[2]."-".$d[1]."-".$d[0];
        return $d;
    }
}

?>