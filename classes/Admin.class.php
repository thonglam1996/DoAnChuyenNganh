<?php
class Admin extends Db{
	
	
	public function delete($idadmin)
	{
		$sql="delete from admin where idadmin=:id ";
		$arr =  Array(":id"=>$idadmin);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getById($idadmin)
	{
		$sql="select admin.* 
			from admin
			where  admin.idadmin=:id";
		$arr = array(":id"=>$idadmin);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	public function getAll()
	{
		return $this->exeQuery("select * from admin");
	}
	
	public function saveEdit()
	{
		$idadmin=Utils::postIndex("idadmin", "");
		$admin =Utils::postIndex("admin", "");
		$tenadmin=Utils::postIndex("tenadmin", "");
		$password =MD5(Utils::postIndex("password", ""));
		if (isset($_FILES["hinhdaidien"]))
		{
			$hinhdaidien = $_FILES["hinhdaidien"]["name"];
			$src = $_FILES["hinhdaidien"]["tmp_name"];
			if (!move_uploaded_file($src,"img/".$hinhdaidien)) {
				return 0;}
			
		}
		if ($admin=="" || $password=="" || $tenadmin== "") return 0;
		$sql="update admin set admin=:admin, password=:password, tenadmin=:tenadmin, hinhdaidien=:hinhdaidien  where admin.idadmin=:id";
		$arr = array(":id"=>$idadmin, ":admin"=>$admin, ":password"=>$password, ":tenadmin"=>$tenadmin, ":hinhdaidien"=>$hinhdaidien); //
		return $this->exeNoneQuery($sql, $arr);
		
	}
	//UPDATE `the_loai` SET `name_the_loai` = 'im into you' WHERE `the_loai`.`id_the_loai` = 10;
	public function saveAddNew()
	{
		$admin =Utils::postIndex("admin", "");
		$tenadmin=Utils::postIndex("tenadmin", "");
		$password =MD5(Utils::postIndex("password", ""));
		if (isset($_FILES["hinhdaidien"]))
		{
			$hinhdaidien = $_FILES["hinhdaidien"]["name"];
			$src = $_FILES["hinhdaidien"]["tmp_name"];
			if (!move_uploaded_file($src,"img/".$hinhdaidien)) {
				return 0;}
			
		}
		if ($admin=="" || $password=="" || $tenadmin== "") return 0; 
		$sql="insert into admin(idadmin, admin, password, tenadmin, hinhdaidien) values(NULL, :admin, :password, :tenadmin, :hinhdaidien) ";
		$arr = array(":admin"=>$admin,":password"=>$password, ":tenadmin"=>$tenadmin, ":hinhdaidien"=>$hinhdaidien);
		return $this->exeNoneQuery($sql, $arr);
		
	}

}
?>