<?php
namespace Models;
class Manager
{
    public int $id;
    public string $username;
    public string $email;
    public string $password;
    private \mysqli $conn;
    public function __construct(\mysqli $conn) {
        $this->conn = $conn;
    }
    public function create($username, $email, $password)
    {
        $stmt = mysqli_prepare($this->conn,'INSERT INTO manager (username, email, password) VALUES (?,?,?)');
        mysqli_stmt_bind_param($stmt,'sss',$username,$email,$password);
        $status = mysqli_execute($stmt);
        return $status;
    }
    public function findByUsername($value)
    {
        $result = mysqli_query($this->conn,"SELECT * FROM manager WHERE username = '$value';");
        $data = mysqli_fetch_assoc($result);
        return $data;
    }
}