<?php
class News extends Db{
	
	/*Back-end*/
	public function delete($idbaiviet)
	{
		$sql="delete from baiviet where idbaiviet=:idbaiviet ";
		$arr =  Array(":idbaiviet"=>$idbaiviet);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getById($idbaiviet)
	{
		$sql="select * 
			from baiviet join loaitin on baiviet.idloaitin = loaitin.idloaitin
			where  baiviet.idbaiviet=:idbaiviet ";
		$arr = array(":idbaiviet"=>$idbaiviet);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}

	/*public function getById($idbaiviet)
	{
		$sql="select baiviet.* 
			from baiviet
			where  baiviet.idbaiviet=:idbaiviet ";
		$arr = array(":idbaiviet"=>$idbaiviet);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}*/
	public function getAll()
	{
		return $this->exeQuery("select * from baiviet join loaitin on baiviet.idloaitin = loaitin.idloaitin");
	}
	
	public function saveEdit()
	{
		$idbaiviet =Utils::postIndex("idbaiviet", "");
		$tenbaiviet =Utils::postIndex("tenbaiviet", "");
		if (isset($_FILES["anhminhhoa"]) && $_FILES["anhminhhoa"]["name"] != "")
		{
			$ten_hinh = $_FILES["anhminhhoa"]["name"];
			$src = $_FILES["anhminhhoa"]["tmp_name"];
			move_uploaded_file($src,"../images/".$ten_hinh);
		}
		else $ten_hinh = Utils::postIndex("anhminhhoatwo", "");
			
		//}
		$now = getdate();
		$ngaydang = $now["mday"] . "." . $now["mon"] . "." . $now["year"]; 
		//$ngay_dang =Utils::postIndex("ngay_dang", ""); 
		//$short_content=Utils::postIndex("short_content", "");
		$tomtat=Utils::postIndex("tomtat", "");
		$string=Utils::postIndex("noidung", "");
		$noidung = stripslashes($string); 
		$idloaitin =Utils::postIndex("idloaitin", "");
		$trangthaihienthi =Utils::postIndex("trangthaihienthi", "");
		$thutu = Utils::postIndex("thutu", "");
		//if ($name=="") return 0;//Error $id =="" || 
		$sql="
			update baiviet 
			set tenbaiviet=:tenbaiviet, 
			anhminhhoa=:anhminhhoa, 
			ngaydang=:ngaydang, 
			tomtat=:tomtat, 
			noidung=:noidung, 
			idloaitin=:idloaitin,
			trangthaihienthi=:trangthaihienthi,
			thutu=:thutu
			where baiviet.idbaiviet=:idbaiviet";//where cat_id=:id
		
		$arr = array(":tenbaiviet"=>$tenbaiviet, ":anhminhhoa"=>$ten_hinh,":ngaydang"=>$ngaydang, ":tomtat"=>$tomtat, ":noidung"=>$noidung, ":idloaitin"=>$idloaitin, ":trangthaihienthi"=>$trangthaihienthi, ":thutu"=>$thutu, ":idbaiviet"=>$idbaiviet);
		return $this->exeNoneQuery($sql, $arr);
		
	}
	
	public function saveAddNew()
	{
		//print_r($_POST);
		$tenbaiviet =Utils::postIndex("tenbaiviet", "");
		//if (isset($_FILES["anhminhhoa"]))
		//{
			$ten_hinh = $_FILES["anhminhhoa"]["name"];
			$src = $_FILES["anhminhhoa"]["tmp_name"];
			move_uploaded_file($src,"../images/".$ten_hinh);
				//return 0;}			
		//}
		$now = getdate();
		$ngaydang = $now["mday"] . "." . $now["mon"] . "." . $now["year"]; 
		//$ngay_dang =Utils::postIndex("ngay_dang", ""); 
		//$short_content=Utils::postIndex("short_content", "");
		$tomtat=Utils::postIndex("tomtat", "");
		$string=Utils::postIndex("noidung", "");
		$noidung = stripslashes($string); //loại bỏ \ ra khỏi chuỗi.
		$idloaitin =Utils::postIndex("idloaitin", "");
		$trangthaihienthi =Utils::postIndex("trangthaihienthi", "");
		$thutu = Utils::postIndex("thutu", "");
		
		$sql="
			insert into baiviet (
				idbaiviet, 
				tenbaiviet, 
				anhminhhoa, 
				ngaydang, 
				tomtat, 
				noidung, 
				idloaitin,
				trangthaihienthi,
				thutu) values(NULL, :tenbaiviet, :anhminhhoa, :ngaydang, :tomtat, :noidung, :idloaitin, :trangthaihienthi, :thutu) ";
		$arr = array(":tenbaiviet"=>$tenbaiviet, ":anhminhhoa"=>$ten_hinh, ":ngaydang"=>$ngaydang, ":tomtat"=>$tomtat, ":noidung"=>$noidung, ":idloaitin"=>$idloaitin, ":trangthaihienthi"=>$trangthaihienthi,":thutu"=>$thutu);
		
		return $this->exeNoneQuery($sql, $arr);
		
	}
}
?>