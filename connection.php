<?php 

class DBHelper {
	static private $dbHelper;

	public static function getDBHelperInstance() {
		if (!self::$dbHelper) {
			self::$dbHelper = new dbHelper();
		}
		return self::$dbHelper;
	}

	private function getDB()
	{
		$db = mysqli_init();
		$db->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
		$db->real_connect("127.0.0.1", "root", "", "se174", 3306);

		if ($db->connect_errno) {
		    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
		}
		echo $db->host_info . "\n";
		return $db;
	}

	private function performQuery($sqlStatement='')
	{
		return $this->getDB()->query($sqlStatement);
	}

	private function closeConnection()
	{
		$this->getDB()->close();
	}

	public function registerUser($name='', $uname='', $pword='', $email='')
	{
		$sqlAddUser = "INSERT INTO user (name, username, password, email) VALUES ('{$name}', '{$uname}', '{$pword}', '{$email}')";
		if ($this->performQuery($sqlAddUser) === TRUE) {
	    	echo "New record created successfully";
		} else {
		    echo "Error: " . $sqlAddUser . "<br>" . $this->getDB()->error;
		}
		$this->closeConnection();
	}

	public function userAuthentication($uname='', $pword='')
	{
		$sqlSelectUser = "SELECT username, password FROM user";
		$result = $this->performQuery("$sqlSelectUser");
		$this->closeConnection();

		return $result->num_rows > 0;
	}

}

/*
	setup the database connection and connect to se174 database
*/




 ?>