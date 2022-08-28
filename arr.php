<?php
$arr = [
	'FRUIT' => ['ID' => 12, 'NAME' => 'Фрукт', 'XML_ID' => 'bx_fruit_1'],
	'DRINK' => ['ID' => 42, 'NAME' => 'Напиток', 'XML_ID' => 'bx_drink_1'],
	['ID' => 11, 'NAME' => 'Лодка', 'XML_ID' => 'bx_boat'],
	'NINJA' => ['ID' => 12, 'NAME' => 'Кузя', 'XML_ID' => 'bx_ninja'],
	42 => ['ID' => 121, 'NAME' => 'Этаж'],
	['NAME' => 'Сайт', 'XML_ID' => 'bx_site_s1'],
];

$arr_xml = [];
$arr_id = [];
?>
<pre>
<?php
foreach($arr as $ar){
	if($ar['XML_ID'] && $ar['ID'])
		$arr_xml[$ar['XML_ID']] = $ar['ID'];

	if( $ar['ID'])
		$arr_id[$ar['ID']] = $ar;
}

print_r($arr_xml);
print_r($arr_id);
print_r($arr);
?>
</pre>