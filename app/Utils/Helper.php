<?php

namespace App\Utils;

class Helper
{

    public static function readCSV($filename)
    {
        $file = fopen(public_path(sprintf('%s.%s', $filename, 'csv')), 'r');

        $header = null;
        $data = [];

        while ($row = fgetcsv($file)) {
            if (!$header) {
                $header = $row;
            } else {
                $data[] = ['member_code'=>$row[0],'gender'=>$row[5],'email'=>$row['8'],'contact'=>$row[11],'name'=>$row[1],'created_by'=>1,'updated_by'=>1];
            }
        }
        fclose($file);
        return $data;

    }
}