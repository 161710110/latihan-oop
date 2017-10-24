<?php
class robot{
	public $suara;
	public $berat;

	public function set_suara($bunyi)
	{
		return $this->suara =$bunyi;
	}
	public function get_suara()
	{
		return $this->suara;
	}
}
$robot = new robot;
$robot->set_suara('ngek ngek' );
echo $robot->get_suara();
?>