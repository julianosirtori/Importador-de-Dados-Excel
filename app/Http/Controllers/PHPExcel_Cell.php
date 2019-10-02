<?php


namespace App\Http\Controllers;


class PHPExcel_Cell
{

    private static $collumnsChar = ["A", "B", "C", "D", "F", "G"];

    public static function columnIndexFromString(string $cellString)
    {
        $collumnChar = substr($cellString,0,1);
        $count = 1;
        foreach (self::$collumnsChar as  $col){
            if($collumnChar == $col){
                return $count;
            }else{
                $count++;
            }
        }
        return 0;

    }
}
