<?
	class Car {
		private $brand; 
		private $model;

		private $is_loaded;
		private $current_speed;
		private $is_powered_on;

		public function __construct($brand, $model) {
			$this->brand = $brand;
			$this->model = $model;

			$this->is_loaded = false;
			$this->current_speed = 0;
			$this->is_powered_on = false;
		}

		public function get_brand() {
			return $this->brand;
		}

		public function get_model() {
			return $this->model;
		}

		public function load() {
			$this->is_loaded = true;
		}		

		public function unload() {
			$this->is_loaded = false;
		}

		public function power_on() {
			echo "Brmmm. Brmm...<br>";
			$this->is_powered_on = true;
		}

		public function power_off() {
			echo "Fushhh..<br>";
			$this->is_powered_on = false;
			$this->set_speed(0);
		}

		public function set_speed($speed) {
			$this->current_speed = $speed;
			echo "Speed changed to " . $speed . "<br>";
		}

		public function drive() {
			if ($this->is_powered_on) {
				if ($this->current_speed<=0){
					echo "Please speed up first.<br>";
				} else {
					$speed = $this->current_speed;
					if ($this->is_loaded) {
						$speed = $speed - 10;
					} 
					if ($speed <= 0) {
						echo "Car is too loaded and cannot speed up<br>";
					} else { 
						echo "Car is driving with " . $speed . "km/h<br>";
					}
				}
			} else {
				echo "Car is not powered on. Please power it first.<br>";
			}
		}
	}

?>