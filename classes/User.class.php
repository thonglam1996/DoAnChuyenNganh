<?php
class User extends Db
{
	/*Backend*/
	public function delete($id)
	{
		$sql="delete from users where user=:id ";
		$arr =  Array(":id"=>$id);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getById($user)
	{
		$sql="select users.* 
			from users
			where  users.user=:user ";
		$arr = array(":user"=>$user);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	public function getAll()
	{
		return $this->exeQuery("select * from users");
	}
	
	public function saveEdit()
	{
		$user =Utils::postIndex("user", "");
		$password =MD5(Utils::postIndex("password", ""));
		$email = Utils::postIndex("email", "");
		$fullname = Utils::postIndex("fullname", "");
		if ($user=="" || $password== "" || $email=="" || $fullname=="") return 0;
		$sql="update users set password=:password, email=:email, fullname=:fullname  where users.user=:id";
		$arr = array(":password"=>$password, ":id"=>$user, ":email"=>$email, ":fullname"=>$fullname);
		return $this->exeNoneQuery($sql, $arr);
		
	}
	public function saveAddNew()
	{
		$user =Utils::postIndex("user", "");
		$password =MD5(Utils::postIndex("password", ""));
		$email = Utils::postIndex("email", "");
		$fullname = Utils::postIndex("fullname", "");
		if ($user=="" || $password== "" || $email=="" || $fullname=="") return 0;
		$sql="insert into users(user, password, email, fullname) values(:user, :password, :email, :fullname) ";
		$arr = array(":user"=>$user,":password"=>$password, ":email"=>$email, ":fullname"=>$fullname);
		return $this->exeNoneQuery($sql, $arr);
	}
	
	/*Font-end*/
	
	public function login($username, $password)
	{
		$sql="select *
			from users
			where users.user = :username and users.password = :password ";
		$arr = array(":username"=>$username, ":password"=>$password);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	public function isUserNameExist($username)
	{
		$sql="select *
			from users
			where users.user = :username";
		$arr = array(":username"=>$username);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return true;
		return false;
	}
	
	public function register($username, $password, $email, $name)
	{
		$sql="insert into users (user, password, email, fullname) values (:username, :password, :email, :name)";
		$arr = array(":username"=>$username, ":password"=>$password, ":email"=>$email, ":name"=>$name);
		return $this->exeNoneQuery($sql, $arr);
	}
}

?>