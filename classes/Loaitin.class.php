<?php
class Loaitin extends Db{
	
	/*Back-end*/
	public function delete($idloaitin)
	{
		$baiviet = new News();
    $data = $baiviet->getAll();
    $dem = 0;
    foreach ($data as $r) {
    	if ($r["idloaitin"] == $idloaitin)
    		$dem++;
    }
    if ($dem > 0)
    	return 0;
		$sql="delete from loaitin where idloaitin=:idloaitin ";
		$arr =  Array(":idloaitin"=>$idloaitin);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getById($idloaitin)
	{
		$sql="select loaitin.* 
			from loaitin
			where  loaitin.idloaitin=:idloaitin ";
		$arr = array(":idloaitin"=>$idloaitin);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	public function getAll()
	{
		return $this->exeQuery("select * from loaitin");
	}
	
	public function saveEdit()
	{

		$idloaitin = Utils::postIndex("idloaitin", "");
		$name = Utils::postIndex("tenloaitin", "");
		$trangthaihienthi = Utils::postIndex("trangthaihienthi", "");
		$thutu = Utils::postIndex("thutu", "");
		if ($idloaitin =="" || $name=="") return 0;//Error 
		$sql="update loaitin set tenloaitin=:tenloaitin, trangthaihienthi=:trangthaihienthi, thutu=:thutu
		where loaitin.idloaitin=:idloaitin";//where cat_id=:id
		$arr = array(":idloaitin"=>$idloaitin, ":tenloaitin"=>$name, ":trangthaihienthi"=>$trangthaihienthi,":thutu"=>$thutu); //
		return $this->exeNoneQuery($sql, $arr);
		
	}
	public function saveAddNew()
	{
		$name =Utils::postIndex("tenloaitin", "");
		$trangthaihienthi =Utils::postIndex("trangthaihienthi", "");
		$thutu = Utils::postIndex("thutu", "");
		if ($name=="") return 0;//Error $id =="" || 
		$sql="insert into loaitin(idloaitin, tenloaitin, trangthaihienthi, thutu) values(NULL, :tenloaitin, :trangthaihienthi, :thutu) ";
		$arr = array(":tenloaitin"=>$name,":trangthaihienthi"=>$trangthaihienthi,":thutu"=>$thutu);
		return $this->exeNoneQuery($sql, $arr);
		
	}

}
?>