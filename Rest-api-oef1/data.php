<?php
function get_price($name)
{
	$products = [
		"boek"=>20,
		"pen"=>10,
		"potlood"=>5
	];

	foreach($products as $product=>$price)
	{
		if($product==$name)
		{
			return $price;
			break;
		}
	}
}
