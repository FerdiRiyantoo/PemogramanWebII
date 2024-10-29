<?php
class Handphone {
  public $name;
  public $color;
  public $ram;

  public function set_name($name) {
    $this->name = $name;
  }
  public function get_name() {
    return $this->name;
  }
  public function set_color($color) {
    $this->color = $color;
  }
  public function get_color() {
    return $this->color;
  }
  public function set_ram($ram) {
    $this->ram = $ram;
  }
  public function get_ram() {
    return $this->ram;
  }
}

$hape1 = new Handphone();
$hape1->set_name('Poco');
$hape1->set_color('Hitam');
$hape1->set_ram('6 GB');

echo $hape1->get_name();
echo "<br>";
echo $hape1->get_color();
echo "<br>";
echo $hape1->get_ram();
?>