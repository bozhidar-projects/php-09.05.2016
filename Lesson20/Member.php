<?php
	//Access Modifiers
	class Member {
		//Properties / Fields - variables inside a class.
		private $firstname;
		private $lastname;
		private $age;
		private $phone;
		private $likes;

		public function __construct($firstname, $lastname, $age, $phone) {
			$this->set_firstname($firstname);
			$this->set_lastname($lastname);
			$this->set_age($age);
			$this->set_phone($phone);
			$this->set_likes(0);
		}

		private function set_likes(int $likes) {
			$this->likes = $likes;
		}

		public function like() {
			$this->likes++;
		} 

		//Only - Getter, No setter -> Like is read only
		public function get_likes() {
			return $this->likes;
		}

		//Accessors - Getters ; Mutators - Setters
		public function get_firstname(): string {
			return $this->firstname;
		}

		public function set_firstname(string $firstname) {
			$this->firstname = $firstname;
		} 

		public function get_lastname(): string {
			return $this->lastname;
		}

		public function set_lastname(string $lastname) {
			$this->lastname = $lastname;
		}

		public function get_age(): int {
			return $this->age;
		}

		public function set_age(int $age) {
			if ($age <= 0) {
				$this->age = 0;
			} else {
				$this->age = $age;
			}
		}

		public function get_phone(): string {
			return $this->phone;
		}

		public function set_phone(string $phone){
			if (strlen($phone) != 10) {
				die("Cannot set member phone. Invalid phone number");
			}
			$this->phone = $phone;
		}

		//Methods - functions inside a class.
		private function get_name() {
			$full_name = $this->firstname . " " . $this->lastname;
			return $full_name;
		}

		public function get_info() {
			$info = $this->get_name() .
					" ".
					$this->age .
					" years old. Phone: " .
					$this->phone;

			return $info;
		}

		public function say_hello() {
			echo "<br>Hello from " . $this->get_name();
		}

		public function __destruct() {
			echo "<br>Member destroyed: " . $this->get_name();
		}
	}
?>