<?php
class Baiviet extends Db{
	private $_page_size = 5;//Một trang hiển thị 5 tin
	private $_page_count;
	
	public function delete($idbaiviet)
	{
		$sql="delete from baiviet where idbaiviet=:idbaiviet ";
		$arr =  Array(":idbaiviet"=>$idbaiviet);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getDetail($idbaiviet)
	{
		$sql="select * from baiviet, loaitin where baiviet.idloaitin = loaitin.idloaitin and idbaiviet=@idbaiviet ";
		$arr = array("@idbaiviet"=>$idbaiviet);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	public function getAll($currPage=1)
	{
		$offset = ($currPage -1) * $this->_page_size;
		$sql="SELECT
				Count(*)
				FROM
				loaitin
				INNER JOIN baiviet ON baiviet.idloaitin = loaitin.idloaitin";
				$n  = $this->count($sql);
				$this->_page_count = ceil($n / $this->_page_size);
		$sql="SELECT
				baiviet.idbaiviet,
				baiviet.tenbaiviet,
				baiviet.anhminhhoa,
				baiviet.ngaydang,
				baiviet.tomtat,
				baiviet.noidung,
				baiviet.idloaitin,
				baiviet.trangthaihienthi,
				baiviet.thutu,
				loaitin.tenloaitin
				FROM
				baiviet
				INNER JOIN loaitin ON baiviet.idloaitin = loaitin.idloaitin ORDER BY baiviet.idbaiviet DESC
				limit $offset, " . $this->_page_size;
		
		return $this->exeQuery($sql);
	}
	
	public function getAllByCategory($currPage=1, $idloaitin)
	{
		$offset = ($currPage -1) * $this->_page_size;
		$sql="SELECT
				Count(*)
				FROM
				loaitin
				INNER JOIN baiviet ON baiviet.idloaitin = loaitin.idloaitin
				where loaitin.idloaitin = :idloaitin
				";
				$arr = array(":idloaitin"=>$idloaitin);
				$n  = $this->count($sql, $arr);
				$this->_page_count = ceil($n / $this->_page_size);
		$sql="SELECT *
				FROM
				baiviet
				INNER JOIN loaitin ON baiviet.idloaitin = loaitin.idloaitin
				where loaitin.idloaitin = :idloaitin
				ORDER BY baiviet.ngaydang DESC
				limit $offset, " . $this->_page_size;
				$arr = array(":idloaitin"=>$idloaitin);
		
		return $this->exeQuery($sql, $arr);
	}
	
	public function search($currPage=1, $key)
	{
		$arr = array(":s"=>"%". $key ."%");
		
		$offset = ($currPage -1) * $this->_page_size;
		$sql="SELECT
				Count(*)
				FROM
				baiviet
				INNER JOIN loaitin ON baiviet.idloaitin = loaitin.idloaitin
				where baiviet.tenbaiviet like :s and baiviet.trangthaihienthi != 0";
				$n  = $this->count($sql, $arr);
				$this->_page_count = ceil($n/$this->_page_size);
		$sql="SELECT
				*
				FROM
				baiviet
				INNER JOIN loaitin ON baiviet.idloaitin = loaitin.idloaitin
				where baiviet.tenbaiviet like :s	
				ORDER BY baiviet.ngaydang DESC
				limit $offset, " . $this->_page_size;
						
		return $this->exeQuery($sql, $arr);
	}
	
	public function count($sql, $arr=array())
	{
		return $this->countItems($sql, $arr);
	}
	
	public function getPageCount()
	{
		return $this->_page_count;	
	}
	
	/*font-end*/
	public function getById($idbaiviet)
	{
		$sql="select *
			from baiviet
			where baiviet.idbaiviet=:idbaiviet ";
		$arr = array(":idbaiviet"=>$idbaiviet);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	
	public function getLoaiTin($idbaiviet)
	{
		$sql="select loaitin.* from loaitin join baiviet on baiviet.idloaitin = loaitin.idloaitin
	where baiviet.idbaiviet = :idbaiviet";
		$arr = array(":idbaiviet"=>$idbaiviet);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	public function tangView($idbaiviet)
	{
		$sql="select baiviet.luotxem from loaitin join baiviet on baiviet.idloaitin = loaitin.idloaitin
	where baiviet.idbaiviet = :idbaiviet";
		$arr = array(":idbaiviet"=>$idbaiviet);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0)
		{
			$luotview = $data[0]["luotxem"]+1;
			$sql="update baiviet set baiviet.luotxem = :luotview where baiviet.idbaiviet = :idbaiviet";
			$arr = array(":luotview"=>$luotview,":idbaiviet"=>$idbaiviet);
			$this->exeNoneQuery($sql, $arr);
		}
	}
	
	/*
	public function getAll()
	{
		return $this->exeQuery("select * from baiviet join loaitin on baiviet.idloaitin = loaitin.idloaitin");
	}
	*/
	private function checkHienThi($idbaiviet)
	{
		$sql="select * from baiviet where idbaiviet=:idbaiviet ";
		$arr = array(":idbaiviet"=>$idbaiviet);
		$data = $this->exeQuery($sql, $arr);
		
		if(count($data) != 0)
		{
			if($data[0]["trangthaihienthi"] == 0)
				return false;
			
			$idloaitin = $data[0]["idloaitin"];
			$sql="select * from loaitin where idloaitin=:idloaitin ";
			$arr =  Array(":idloaitin"=>$idloaitin);
			$data = $this->exeQuery($sql, $arr);
			if($data[0]["trangthaihienthi"] == 0)
				return false;
		}
		else return false;
		return true;
	}
	
	public $baiviettrentrangchu = array();
	public $baiviettrentrangchitiet = array();
	public $baiviettrentrangloaitin = array();
	
	public function getBaiVietMoi($sobaiviet, &$dsbaiviettrentrang = array())
	{
		$sql = "select * from baiviet join loaitin on baiviet.idloaitin = loaitin.idloaitin
		ORDER BY baiviet.ngaydang DESC ";
		
		$dsbaiviet = array();
		$stm = $this->getPDOstm($sql);
		$data = $stm->fetch(PDO::FETCH_ASSOC);
		if($data == false)
				return $dsbaiviet;
		$i = 0;
		while($i < $sobaiviet)
		{
			if($this->checkHienThi($data["idbaiviet"]) && (!in_array($data["idbaiviet"],$dsbaiviettrentrang)))
			{
				$dsbaiviettrentrang[] = $data["idbaiviet"];
				$dsbaiviet[] = $data;
				$i++;
			}
			$data = $stm->fetch(PDO::FETCH_ASSOC);
			if($data == false)
				break;
		}
		return $dsbaiviet;
	}

	
	
	public function getBaiVietMoiTheoLoai($sobaiviet, $idloaitin, &$dsbaiviettrentrang = array())
	{
		$sql = "select * from baiviet join loaitin on baiviet.idloaitin = loaitin.idloaitin
		where baiviet.idloaitin = :idloaitin ";
		
		$arr_bind = array(":idloaitin"=>$idloaitin);
		
		$stm = $this->getPDOstm($sql, $arr_bind);
		$data = $stm->fetch(PDO::FETCH_ASSOC);
		
		$dsbaiviet = array();

		if($data == false)
			return $dsbaiviet;
		$i = 0;
		while($i < $sobaiviet)
		{
			if($this->checkHienThi($data["idbaiviet"]) && (!in_array($data["idbaiviet"],$dsbaiviettrentrang))) //
			{
				$dsbaiviettrentrang[] = $data["idbaiviet"]; //
				$dsbaiviet[] = $data;
				$i++;
			}
			$data = $stm->fetch(PDO::FETCH_ASSOC);
			if($data == false)
				break;
		}
		return $dsbaiviet;
	}
	
	public function getBaiVietDocNhieu($sobaiviet, &$dsbaiviettrentrang = array())
	{
		$sql = "select * from baiviet join loaitin on baiviet.idloaitin = loaitin.idloaitin
		ORDER BY baiviet.luotxem DESC ";
		
		$dsbaiviet = array();
		$stm = $this->getPDOstm($sql);
		$data = $stm->fetch(PDO::FETCH_ASSOC);
		if($data == false)
				return $dsbaiviet;
		$i = 0;
		while($i < $sobaiviet)
		{
			if($this->checkHienThi($data["idbaiviet"]) && (!in_array($data["idbaiviet"],$dsbaiviettrentrang)))
			{
				$dsbaiviettrentrang[] = $data["idbaiviet"];
				$dsbaiviet[] = $data;
				$i++;
			}
			$data = $stm->fetch(PDO::FETCH_ASSOC);
			if($data == false)
				break;
		}
		return $dsbaiviet;
	}
	
	public function getBaiVietDocNhieuTheoLoai($sobaiviet, $idloaitin, &$dsbaiviettrentrang = array())
	{
		$sql = "select * from baiviet join loaitin on baiviet.idloaitin = loaitin.idloaitin
		where baiviet.idloaitin = :idloaitin ORDER BY baiviet.luotxem DESC ";
		
		$arr_bind = array(":idloaitin"=>$idloaitin);
		
		$dsbaiviet = array();
		$stm = $this->getPDOstm($sql, $arr_bind);
		$data = $stm->fetch(PDO::FETCH_ASSOC);
		if($data == false)
				return $dsbaiviet;
		$i = 0;
		while($i < $sobaiviet)
		{
			if($this->checkHienThi($data["idbaiviet"]) && (!in_array($data["idbaiviet"],$dsbaiviettrentrang)))
			{
				$dsbaiviettrentrang[] = $data["idbaiviet"];
				$dsbaiviet[] = $data;
				$i++;
			}
			$data = $stm->fetch(PDO::FETCH_ASSOC);
			if($data == false)
				break;
		}
		return $dsbaiviet;
	}
	
	public function getBaiVietNgauNhien($sobaiviet, &$dsbaiviettrentrang = array())
	{
		$sql = "select * from baiviet join loaitin on baiviet.idloaitin = loaitin.idloaitin
		ORDER BY rand() ";
		
		$dsbaiviet = array();
		$stm = $this->getPDOstm($sql);
		$data = $stm->fetch(PDO::FETCH_ASSOC);
		if($data == false)
				return $dsbaiviet;
		$i = 0;
		while($i < $sobaiviet)
		{
			if($this->checkHienThi($data["idbaiviet"]) && (!in_array($data["idbaiviet"],$dsbaiviettrentrang)))
			{
				$dsbaiviettrentrang[] = $data["idbaiviet"];
				$dsbaiviet[] = $data;
				$i++;
			}
			$data = $stm->fetch(PDO::FETCH_ASSOC);
			if($data == false)
				break;
		}
		return $dsbaiviet;
	}
}
?>