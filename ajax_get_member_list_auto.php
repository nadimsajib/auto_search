<?php
/**
 * Created by PhpStorm.
 * User: nadim
 * Date: 10/9/18
 * Time: 5:20 PM
 */

$data = array(
    array('name'=>'abcd','fathers_spouse_name'=>'father','branch_name'=>'Branch','samity_name'=>'Samity Name','working_area_name'=>'Working Area','primary_product_id'=>1,'is_migrated'=>1,'id'=>10),
    array('name'=>'abcd','fathers_spouse_name'=>'father','branch_name'=>'Branch','samity_name'=>'Samity Name','working_area_name'=>'Working Area','primary_product_id'=>1,'is_migrated'=>1,'id'=>10),
    array('name'=>'abcd','fathers_spouse_name'=>'father','branch_name'=>'Branch','samity_name'=>'Samity Name','working_area_name'=>'Working Area','primary_product_id'=>1,'is_migrated'=>1,'id'=>10)
);
foreach ($data as $row) {
    $row['name'] = str_replace(',', ' ', $row['name']);
    $row['fathers_spouse_name'] = str_replace(',', ' ', $row['fathers_spouse_name']);
    $row['branch_name'] = str_replace(',', ' ', $row['branch_name']);
    $row['samity_name'] = str_replace(',', ' ', $row['samity_name']);
    $row['working_area_name'] = str_replace(',', ' ', isset($row['working_area_name']) ? $row['working_area_name'] : '');
    echo $row['id'] . ',' . $row['name'] . ',' . $row['branch_name'] . ',' . $row['samity_name'] . ',' . $row['working_area_name'] . ',' . $row['branch_id'] . ',' . $row['samity_id'] . ',' . $row['primary_product_id'] . ',' . $row['is_migrated'] . ',' . $row['fathers_spouse_name'] . "\n";
}
