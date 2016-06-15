<?php
session_start();
	@$ad = $_POST["fullName"];
	@$company = $_POST["company"];
	@$email = $_POST["email"];
	@$phone = $_POST["phone"];
	@$start = $_POST["start"];
	@$end = $_POST["end"];
	@$txt = $_POST["txt"];
	@$file = $_FILES["sekil"];
	@$file_name = $file["name"];
	@$file_type = $file["type"];
	@$file_tmp_name = $file["tmp_name"];
	@$file_size = $file["size"];
	if (isset($ad)  && isset($company)  && isset($email) && isset($phone)  && isset($start) && isset($end)  && isset($txt) ) {
		if (!empty($ad)  && !empty($company)  && !empty($email) && !empty($phone)  && !empty($start) && !empty($end)  && !empty($txt) ) {
		if($file_size < 2000000){
			if(substr($file_name, -4)== "jpeg" || substr($file_name, -3)== "jpg" || substr($file_name, -3)== "png"){
	if(move_uploaded_file($file_tmp_name, "img/".$file_name)){
	$myfile = fopen("defter.txt", "w+");
	fwrite($myfile, "<img src=img/$file_name></img><span><br>Ad: $ad\r\n<br>company: $company\r\n<br>Mesajiniz: $txt\r\n<br>email: $email\r\n<br>
		phone: $phone\r\n<br>Start date: $start\r\n<br>End date: $end\r\n<br></span>");
	echo file_get_contents("defter.txt");
	echo "";
	}else {
		echo "<span>ŞƏKİLİ YUKLƏNMƏDİ!</span>";
	 }
	}else{
		echo "ŞƏKİLİN formati .jpeg , .jpg ve ya .png olmalidi!!!";
	}
	}else {
		echo "ŞƏKLİN OLCUSU 2MB-DAN COX OLMAMALİDİ";
	 }
}else{
	echo "bow buraxma";
}
}else {
		echo "error";
	}

	
?>