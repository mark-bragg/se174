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

	public function registerUser($name='', $uname='', $pword='pword YO!', $email='')
	{
		$sqlAddUser = "INSERT INTO user (name, username, password, email) VALUES ('{$name}', '{$uname}', '{$pword}', '{$email}')";
		echo "SQLADDUSER:   {$sqlAddUser}";
		if ($this->performQuery($sqlAddUser) === TRUE) {
	    	echo "New record created successfully";
		} else {
		    echo "Error: " . $sqlAddUser . "<br>" . $this->getDB()->error;
		}
		$this->closeConnection();
	}

	public function userAuthentication($uname, $pword)
	{
		$sql="SELECT username,password FROM user";
		$toReturn = false;

		if ($result=mysqli_query($this->getDB(),$sql))
		{
		  	while ($obj=mysqli_fetch_object($result))
		    {
		    	printf("\n\nusername: %s \n passwords: ---%s (%s)\n\n\n",$obj->username,$pword,$obj->password);

		    	if ($toReturn = password_verify($pword, $obj->password)) {
		    		return $toReturn;
		    	}
		    }
		  	// Free result set
		  	mysqli_free_result($result);
		}

		mysqli_close($this->getDB());

		
		return $toReturn;
	}

}

/*
	setup the database connection and connect to se174 database
*/




 ?>