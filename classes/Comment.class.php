<?php
class Comment extends Db{
	
	public function getById($idbaiviet)
	{
		$sql="select * 
			from comment
			where  comment.idbaiviet=:idbaiviet ";
		$arr = array(":idbaiviet"=>$idbaiviet);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data;
		else return array();
	}
	
	public function themComment($idbaiviet, $user, $noidung, $ngaydang)
	{
		$sql="insert into comment (comment_id, idbaiviet, user, noidung, ngaydang) values (NULL,:idbaiviet, :user, :noidung, :ngaydang)";
		$arr = array(":idbaiviet"=>$idbaiviet, ":user"=>$user, ":noidung"=>$noidung, ":ngaydang"=>$ngaydang);
		return $this->exeNoneQuery($sql, $arr);
	}
	
}