<?php
function dir_items($dir=__DIR__,$order='ASC',$flag='REGULAR',$exc=0){
    $items = scandir($dir, SCANDIR_SORT_ASCENDING, null);
    $order = strtoupper($order);
    $flag = strtoupper($flag);
    if($order === 'ASC'){
        if($flag === 'REGULAR'){
            sort($items);
        }elseif($flag === 'NUM'){
            sort($items, SORT_NUMERIC);
        }elseif($flag === 'STR'){
            sort($items, SORT_STRING);
        }elseif($flag === 'NAT'){
            natsort($items);
        }else{
            sort($items);
        }
    }
    if($order === 'DESC'){
        $items = array_reverse($items);
    }
    if($exc === 0){
        return $items;
    }elseif($exc === 1){
        return array_diff($items, array('..', '.'));
    }elseif($exc === 2){
        return array_diff($items, array('..', '.', basename(__FILE__)));
    }else{
        return $items;
    }
    //print_r(dir_items(__DIR__, 'desc', 'nat', 2));
}