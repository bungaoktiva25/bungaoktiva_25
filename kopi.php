<?php


class kopi
{
	var $a;
	var $b;
	var $c;

	function kopi_a(){
		return "Kopi ukuran kecil seharga Rp.15000";
		echo "<br>";
	}
	function kopi_b(){
		return "Kopi ukuran sedang seharga Rp.20000";
		echo "<br>";
	}
	function kopi_c(){
		return "Kopi ukuran besar seharga Rp.25000";
		echo "<br>";
	}
}

$kopi = new kopi();
$kopi = new kopi();
$kopi = new kopi();

echo $kopi -> kopi_a();
echo $kopi -> kopi_b();
echo $kopi -> kopi_c();

?>