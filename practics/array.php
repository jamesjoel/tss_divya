<?php
$data=array();
$data[]='red';
$data[]='green';
$data[]=100;
$data[]=true;
$data[]=54.71;

// echo $data[2]+$data[4];

// print_r($data);

$data=array('red', 'green', 'blue', 500);
// print_r($data);

$data = array('a'=>'red','b'=>'blue', 'c'=>'green');
// print_r($data);
$data=array();
$data['a']='green';
$data['b']='blue';
$data['c']='red';
// print_r($data);

$arr1=array('ujjain','indore','mumbai', $data);

$arr2=array('name'=>'rohit', 'age' => 25, 'info'=>$arr1);

// echo $arr2['info'][3]['a'];

echo $arr2['name']."-".$arr2['info'][3]['b']."-".$arr1['2'];


?>