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

	public function singup($email, $fname, $lname, $mno, $pass) {

		$ccn = mysqli_connect("localhost","root","")or die("connecton error");
		mysqli_select_db($ccn,'barter');

		$sql = "select * from details where Email= '$email'";

		$rs = mysqli_query($ccn, $sql);

		$sig = mysqli_num_rows($rs);

		if($sig==0){
			$sqll = " insert into details(Email, FirstName, LastName, Mob, password) values ('$email','$fname','$lname','$mno','$pass')";

			mysqli_query($ccn,$sqll);
			echo "<script type='text/javascript'>alert('Qeydiyyatdan keçdiniz.')</script>";

		}else {
			echo "<script type='text/javascript'>alert('User artıq var.')</script>";

		}

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
		session_start();
		session_destroy();
	}

}
?>
