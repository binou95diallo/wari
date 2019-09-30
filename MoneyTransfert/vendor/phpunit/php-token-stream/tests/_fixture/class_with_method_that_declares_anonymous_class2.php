<<<<<<< HEAD
<?php
class Test {
	public function methodOne() {
		$foo = new class {
			public function method_in_anonymous_class() {
				return true;
			}
		};

		return $foo->method_in_anonymous_class();
	}

	public function methodTwo() {
		return false;
	}
}
=======
<?php
class Test {
	public function methodOne() {
		$foo = new class {
			public function method_in_anonymous_class() {
				return true;
			}
		};

		return $foo->method_in_anonymous_class();
	}

	public function methodTwo() {
		return false;
	}
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
