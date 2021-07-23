<?php
class database{
	protected $conn = null;
	protected $host = 'localhost';
	protected $user = 'root';
	protected $pass = '';
	protected $name = 'quanlybanhang';
	public function connect(){
		$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->name);
		if (!$this->conn) {
			echo "Kết nối thất bại";
			exit();
		}
	}
	public function __construct(){
		$this->connect();
	}
	//xây dựng hàm update dữ liệu đơn hàng
	public function insert($table, $data = array()){
		//tạo cấu trúc insert
		$keys= array_keys($data);
		$field= implode(',', $keys);
		$value_str = '';
		foreach ($data as $key => $value) {
			$value_str .= "'$value',";
		}
		$value_str = rtrim($value_str, ',');
		$sql = "INSERT INTO $table ($field) VALUES ($value_str)";
	
		//bước 3 chạy câu lệnh sql
		$query = mysqli_query($this->conn, $sql);
		return $query;
	}
	//SELECT * FROM sanpham WHERE 
	//catalog_id = 1 
	//AND thuonghieu IN (1 , 2)
	//AND price BETWEEN 500000 AND 30000000 AND amount BETWEEN 1 AND 200 LIMIT 4,2
	public function get_find_limit($table, $condition = array(), $conditionin = array(), $find = array(), $limits = array() )
	{
		$sql = "SELECT * FROM $table WHERE";
		foreach ($condition as $key => $value)
		{
			$sql.= " $key = '$value' AND";
		}
		$sql = rtrim($sql, 'AND');


		if(isset($conditionin))
		{
			foreach ($conditionin as $key => $a) {
				$sql .= " AND $key IN (";
				foreach ($a as $key => $value) {
					$sql .= "$value".',';
				}
				$sql= rtrim($sql, ',');
				$sql.= ")";
			}
		}

		$between = '';
		if (isset($find))
		{
			foreach ($find as $key => $f)
			{
				$between .= "AND $key BETWEEN ".$f[0]." AND ".$f[1];
			}
			$sql.= $between;
		}
		if (isset($limits))
		{
			
				$sql.=" LIMIT ".$limits[0].",".$limits[1];
			
		}
		$query = mysqli_query($this->conn, $sql);
		return $query;
	}

	//xây dựng hàm lấy dữ liệu có hoặc không có điều kiện
	public function get($table, $condition = array()){
		//bước 1 tạo cấu trúc lệnh truy vấn
		$sql = "SELECT * FROM $table";
		//bước 2 kiểm tra xem có điều kiện không và nối chuỗi tương ứng
		if (!empty($condition)) {
			$sql.= " WHERE";
			foreach ($condition as $key => $value) {
				$sql.= " $key = '$value' AND";
			}
			$sql = trim($sql, 'AND');
		}
		//bước 3 chạy câu lệnh sql
		$query = mysqli_query($this->conn, $sql);
		//bước 4 tạo biến mảng để lạp hết dữ liệu của câu truy vấn vào biến mảng đó
		$result = array();
		if ($query) {
			while ($row = mysqli_fetch_assoc($query)) {
				$result[] = $row;
			}
		}
		//bước 5 trả về giá trị
		return $result;
	}
	public function get_like($table, $column, $value){
		//bước 1 khởi tạo cấu trúc câu lệnh truy vấn
		$sql = "SELECT * FROM $table";
		//bước 2 cộng chuỗi phần điều kiện like
		$sql .= " WHERE $column LIKE '%$value%'";
		//bước 3 chạy câu lệnh
		$query = mysqli_query($this->conn, $sql);
		//bước 4 khởi tạo 1 biến mảng và lặp hết dữ liệu lấy được từ câu truy vấn ở trên vào mảng đó
		$result = array();
		if ($query) {
			while ($row = mysqli_fetch_assoc($query)) {
				$result[] = $row;
			}
		}
		//bước 5 trả kết quả
		return $result;
	}
	public function get_limit($table, $condition = array(), $limit){
		//bước 1 khởi tạo cấu trúc câu lệnh truy vấn
		$sql = "SELECT * FROM $table";
		if (!empty($condition)) {
			$sql.= " WHERE";
			foreach ($condition as $key => $value) {
				$sql.= " $key = '$value' AND";
			}
			$sql = trim($sql, 'AND');
		}
		$sql .= " LIMIT $limit";
		//bước 3 chạy sql
		$query = mysqli_query($this->conn, $sql);
		//bước 4 khởi tạo 1 biến mảng và lặp hết dữ liệu lấy được từ câu truy vấn ở trên vào mảng đó
		$result = array();
		if ($query) {
			while ($row = mysqli_fetch_assoc($query)) {
				$result[] = $row;
			}
		}
		//bước 5 trả kết quả
		return $result;
	}
	public function get_limit_desc($table, $condition = array(),$id, $limit){
		//bước 1 khởi tạo cấu trúc câu lệnh truy vấn
		$sql = "SELECT * FROM $table";
		if (!empty($condition)) {
			$sql.= " WHERE";
			foreach ($condition as $key => $value) {
				$sql.= " $key = '$value' AND";
			}
			$sql = trim($sql, 'AND');
		}
		$sql .= " ORDER BY $id DESC ";
		$sql .= " LIMIT $limit";
		//bước 3 chạy sql
		$query = mysqli_query($this->conn, $sql);
		//bước 4 khởi tạo 1 biến mảng và lặp hết dữ liệu lấy được từ câu truy vấn ở trên vào mảng đó
		$result = array();
		if ($query) {
			while ($row = mysqli_fetch_assoc($query)) {
				$result[] = $row;
			}
		}
		//bước 5 trả kết quả
		return $result;
	}
	
	public function delete($table, $condition = array()){
		$sql = "DELETE FROM $table WHERE";
		foreach ($condition as $key =>$value) {
			$sql.= " $key = '$value' AND";
		}
		$sql = rtrim($sql, 'AND');
		$query = mysqli_query($this->conn, $sql);
		return $sql;
	}
	public function update($table, $data=array(), $condition = array()){
		$str = '';
		foreach($data as $key =>$value){
			$str.= "$key = '$value',";
		}
		$str = trim($str,",");
		$sql = "UPDATE $table SET $str WHERE ";
		foreach($condition as $key => $value) {
			$sql.= "$key = '$value' AND";
		}
		$sql = trim($sql, 'AND');
		$query = mysqli_query($this->conn, $sql);
		return $query;
	}
	public function sendMail($title, $content, $nTo, $mTo,$diachicc=''){
    $nFrom = 'Thế Giới Di Động';
    $mFrom = 'skybn81993@gmail.com';  //dia chi email cua ban 
    $mPass = 'hiuhiu1234';       //mat khau email cua ban
    $mail             = new PHPMailer();
    $body             = $content;
    $mail->IsSMTP(); 
    $mail->CharSet   = "utf-8";
    $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;                    // enable SMTP authentication
    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";        
    $mail->Port       = 465;
    $mail->Username   = $mFrom;  // GMAIL username
    $mail->Password   = $mPass;               // GMAIL password
    $mail->SetFrom($mFrom, $nFrom);
    //chuyen chuoi thanh mang
    $ccmail = explode(',', $diachicc);
    $ccmail = array_filter($ccmail);
    if(!empty($ccmail)){
        foreach ($ccmail as $k => $v) {
            $mail->AddCC($v);
  }
    $mail->Subject    = $title;
    $mail->MsgHTML($body);
    $address = $mTo;
    $mail->AddAddress($address, $nTo);
    $mail->AddReplyTo('skybn81993@gmail.com', 'Thế Giới Di Động');
    if(!$mail->Send()) {
        return 0;
    } else {
        return 1;
    	}
	}
	}
	public function page($table,$condition=array(),$page){
		$sql = "SELECT * FROM $table";
		if (!empty($condition)) {
			$sql.= " WHERE";
			foreach ($condition as $key => $value) {
				$sql.= " $key = '$value' AND";
			}
			$sql = trim($sql, 'AND');
		}
		if (!$page){
			$page = 1;
		}
		$row = 5;
		$from = ($page - 1) * $row;
		$sql .= " ORDER by id_product DESC LIMIT $from,$row";
		$query = mysqli_query($this->conn,$sql);
		$result=array();
		while ($row = mysqli_fetch_assoc($query)) {
			$result[] = $row;
		}
		return $result;
	}

}
?>