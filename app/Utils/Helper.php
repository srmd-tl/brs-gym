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
                $data[] = array_combine($header, $row);
            }
        }
        fclose($file);
        return $data;

    }
}