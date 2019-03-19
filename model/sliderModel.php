<?php

/**
 *
 */
require_once 'config.php';
$path;
class sliderModel {

	function __construct() {
		$this -> conset = new config();
	}

	public function openDB() {
		$this -> conn = new mysqli($this -> conset -> servername, $this -> conset -> username, $this -> conset -> password, $this -> conset -> dbname);
		if ($this -> conn -> connect_error) {
			die("Connection failed: " . $this -> conn -> connect_error);
		}
	}

	public function closeDB() {
		$this -> conn -> close();
	}

	public function upload() {

		$target_dir = "productimages/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if (isset($_POST["submit"])) {
			$check = getimagesize($_FILES["file"]["tmp_name"]);
			if ($check !== false) {
				echo "<script type='text/javascript'>alert('Fayl şəkildir - " . $check["mime"] . ".')</script>";
				$uploadOk = 1;
			} else {
				echo "<script type='text/javascript'>alert('Fayl şəkil deyil.')</script>";
				$uploadOk = 0;
			}
		}

		// Check file size
		if ($_FILES["file"]["size"] > 500000) {
			echo "<script type='text/javascript'>alert('Daha kiçik şəkil seçin.')</script>";
			$uploadOk = 0;
		}
			// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "<script type='text/javascript'>alert('Şəkil yüklənmədi.')</script>";
			// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
				echo "<script type='text/javascript'>alert('Fayl " . basename($_FILES["file"]["name"]) . " yükləndi.')</script>";
				return $target_file;
			} else {
				echo "<script type='text/javascript'>alert('Şəkil yüklənərkən problem yaşandı.')</script>";
			}
		}

	}

	public function submitadd($adt, $des, $price, $cat, $img, $name, $email, $mob) {
		$this -> openDB();
		$stmt = $this -> conn -> prepare("INSERT INTO addproducts(title, descri, price,cid,image,name,email,mob)VALUES (?,?,?,?,?,?,?,?)");
		$stmt -> bind_param("ssiissss", $adt, $des, $price, $cat, $img, $name, $email, $mob);

		if ($stmt -> execute()) {
			echo "Elan müvəffəqiyyətlə yükləndi!";
		} else {
			echo "<script type='text/javascript'>alert('Yükləndi.')</script>";
		}

		$res = $stmt -> get_result();
		$this -> closeDB();

	}

}
?>
