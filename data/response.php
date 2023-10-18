
<?php
	//include connection file 
	include_once("connection.php");
	
	$db = new dbObj();
	$connString =  $db->getConnstring();

	$params = $_REQUEST;
	
	$action = isset($params['action']) != '' ? $params['action'] : '';
	$empCls = new Ject($connString);

	switch($action) {
	 case 'add':
		$empCls->insertJect($params);
	 break;
	 case 'edit':
		$empCls->updateJect($params);
	 break;
	 case 'delete':
		$empCls->deleteJect($params);
	 break;
	 default:
	 $empCls->getJect($params);
	 return;
	}
	
	class Ject {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}
	
	public function getJect($params) {
		
		$this->data = $this->getRecords($params);
		
		echo json_encode($this->data);
	}
	function insertJect($params) {
		$data = array();;
		$sql = "INSERT INTO `ject` (id, name, email, tele, course) VALUES('" . $params["id"] . "', '" .   $params["name"] . "','" .    $params["email"] . "','" .   $params["tele"] . "','" . $params["course"] . "');  ";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to insert ject data");
		
	}
	
	
	function getRecords($params) {
		$rp = isset($params['rowCount']) ? $params['rowCount'] : 10;
		
		if (isset($params['current'])) { $page  = $params['current']; } else { $page=1; };  
        $start_from = ($page-1) * $rp;
		
		$sql = $sqlRec = $sqlTot = $where = '';
		
		if( !empty($params['searchPhrase']) ) {   
			$where .=" WHERE ";
			$where .=" ( id LIKE '".$params['searchPhrase']."%' ";
			$where .=" ( name LIKE '".$params['searchPhrase']."%' ";
			$where .=" ( email LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR tele LIKE '".$params['searchPhrase']."%' ";

			$where .=" OR course LIKE '".$params['searchPhrase']."%' )";
	   }
	   if( !empty($params['sort']) ) {  
			$where .=" ORDER By ".key($params['sort']) .' '.current($params['sort'])." ";
		}
	   // getting total number records without any search
		$sql = "SELECT * FROM `ject` ";
		$sqlTot .= $sql;
		$sqlRec .= $sql;
		
		//concatenate search sql if value exist
		if(isset($where) && $where != '') {

			$sqlTot .= $where;
			$sqlRec .= $where;
		}
		if ($rp!=-1)
		$sqlRec .= " LIMIT ". $start_from .",".$rp;
		
		
		$qtot = mysqli_query($this->conn, $sqlTot) or die("error to fetch tot ject data");
		$queryRecords = mysqli_query($this->conn, $sqlRec) or die("error to fetch ject data");
		
		while( $row = mysqli_fetch_assoc($queryRecords) ) { 
			$data[] = $row;
		}

		$json_data = array(
			"current"            => intval($params['current']), 
			"rowCount"            => 10, 			
			"total"    => intval($qtot->num_rows),
			"rows"            => $data   // total data array
			);
		
		return $json_data;
	}
	function updateJect($params) {
		$data = array();
		//print_R($_POST);die;
		$sql = "Update `ject` set id = '" . $params["edit_id"] . "', name='" . $params["edit_name"]."', email= '" . $params["edit_email"] . "', tele = '" . $params["edit_tele"] . "', course='" . $params["edit_course"] . "' WHERE s='".$_POST["edit_s"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to update ject data");
	}
	
	function deleteJect($params) {
		$data = array();
		//print_R($_POST);die;
		$sql = "delete from `ject` WHERE s='".$params["s"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to delete ject data");
	}
}
?>
	