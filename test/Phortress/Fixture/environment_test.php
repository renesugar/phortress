<?php
$glob = 1;
function a() {
	$glob = 4;
}

$b = a();

class A {
	private $b;

	public function testA() {
	}
}
