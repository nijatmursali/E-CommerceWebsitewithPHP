<?php

/**
 *
 */
require_once 'config.php';
class singupModel {
	function __construct() {
		$this -> conset = new config();
	}

	public function openDB() {
		$this -> conn = new mysqli($this -> conset -> servername, $this -> conset -> username, $this -> conset -> password, $this -> conset -> dbname);
		if ($this -> conn -> connect_error) {
			die("Problem yaşandı. " . $this -> conn -> connect_error);
			}
			}

	public function closeDB() {
		$this -> conn -> close();
	}

	
	

	public function singup($email, $fname, $lname, $mno, $password) {

		$ccn = mysqli_connect("localhost","root","")or die("connecton error");
		mysqli_select_db($ccn,'barter');

		$email = mysqli_real_escape_string($ccn, $email);
		$password = mysqli_real_escape_string($ccn, $password);

		$fname = mysqli_real_escape_string($ccn, $fname);

		$query = "SELECT randSalt from details";

		$select_rand_salt_query = mysqli_query($ccn, $query);
		$row = mysqli_fetch_array($select_rand_salt_query);

		$salt = $row['randSalt'];
		

		$password = crypt($password, $salt);

		$message = "";


		$expiration = time() + (60*60*24*7);

		setcookie($email, $password, $expiration);


		$sql = "select * from details where Email= '$email'";

		$rs = mysqli_query($ccn, $sql);

		$sig = mysqli_num_rows($rs);

		if($sig==0){
			$sqll = " insert into details(Email, FirstName, LastName, Mob, password) values ('$email','$fname','$lname','$mno','$password')";

			mysqli_query($ccn,$sqll);
			echo "<script type='text/javascript'>alert('Qeydiyyatdan keçdiniz.')</script>";

		}else {
			echo "<script type='text/javascript'>alert('User artıq var.')</script>";

		}
		return($password);

	}


	public function login($email, $pass) {
		$this -> openDB();
		
		$stmt = $this -> conn -> prepare("SELECT * FROM details WHERE Email=? AND password=?");
		
		$stmt -> bind_param("ss", $email, $pass);
		if ($stmt -> execute()) {
			$res = $stmt -> get_result();
			$this -> closeDB();
			return $res -> fetch_object();

		} else {
			return FALSE;
		}
	}

	public function logout() {

		session_start();
		session_destroy();
	}

	public function userpanel() {
		//if(isset($_GET['username'])) {
        //$username = $_GET['username'];
		
        $ccn = mysqli_connect("localhost","root","")or die("connecton error");
		mysqli_select_db($ccn,'barter');
        
        $userquery = mysqli_query($ccn,"SELECT * FROM details WHERE Email='javid'") or die("");
        if(mysqli_num_rows($userquery) !=1) {
            die("");
        }
        while($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)) {
            $firstname = $row['FirstName'];
            $lastname = $row['LastName'];
            $email = $row['Email'];
            $mobile = $row['Mob'];
            $pass = $row['password'];

        }
    //}

	}

}
?>
