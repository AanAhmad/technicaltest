<?php

class UserModel {
	
	private $table = 'users';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllUsers()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}
	public function getAllUser()
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE role="user"');
		return $this->db->resultSet();
	}

	public function getUserById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahUser($data)
	{
		$query = "INSERT INTO driver (name, department, username, password, role) VALUES(:name, :department, :username, :password, :role;)";
		$this->db->query($query);
		$this->db->bind('name',$data['name']);
		$this->db->bind('department',$data['department']);
		$this->db->bind('username',$data['username']);
		$this->db->bind('password',$data['password']);
		$this->db->bind('role',$data['role']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataUser($data)
	{
		$query = "UPDATE driver SET name=:name, department=:department, username=:username, password=:password, role=:role WHERE driver_id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('name',$data['name']);
		$this->db->bind('department',$data['department']);
		$this->db->bind('username',$data['username']);
		$this->db->bind('password',$data['password']);
		$this->db->bind('role',$data['role']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteUser($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE driver_id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}