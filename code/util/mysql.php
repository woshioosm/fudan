<?php 

class PdoMysql{		
	public $dbhost = 'localhost';
 	public $dbport = '3306';
 	public $dbname = 'fudan';
 	public $dbuser = 'root';
 	public $dbpass = 'fudan123';
 	public $charset = 'utf8';
 	public $stmt = null;
 	public $dbh = null;
 	public $connect = true; // 是否長连接
 	public $debug = false;
	private static $_instance = null;
	 
	public static function getInstance(){
		 if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
	}
	public function __construct() {
		$this->dbh = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname.';port='.$this->dbport,
		$this->dbuser, $this->dbpass, array(PDO::ATTR_PERSISTENT=>true));    		
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);   
        $this->dbh->exec("SET CHARACTER SET ".$this->charset);  
	}
	private function __clone() {}
	
	public function query($strSql, $queryMode = 'All', $debug = false){
        if ($debug === true) $this->debug($strSql);
        $recordset = $this->dbh->query($strSql);
       
        if ($recordset) {
            $recordset->setFetchMode(PDO::FETCH_ASSOC);
            if ($queryMode == 'All') {
                $result = $recordset->fetchAll();
            } elseif ($queryMode == 'Row') {
                $result = $recordset->fetch();
            }
        } else {
            $result = null;
        }
        return $result;
    }
	
	public function getPeople(){
		$this->stmt = $this->dbh->prepare('SELECT * FROM tb_people');
		$this->stmt->setFetchMode(PDO::FETCH_ASSOC);
		$this->stmt->execute();		
		return $this->stmt->fetchAll();
	}
	public function getPeopleDetail($id){
		$this->stmt = $this->dbh->prepare('SELECT * FROM tb_people where id=:id');
		$this->stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$this->stmt->setFetchMode(PDO::FETCH_ASSOC);
		$this->stmt->execute();		
		return $this->stmt->fetchAll();
	}
	public function saveNews($type,$title,$subContent,$content,$contentdate,$contentLocation){
		$time = time();	
		$this->stmt = $this->dbh->prepare("INSERT INTO tb_news (title,type,subContent,content,date,contentdate,contentLocation) VALUES (:title,:type,:subContent,:content,:date,:contentdate,:contentLocation)");
	    $this->stmt->bindValue(':title', $title, PDO::PARAM_STR);
		$this->stmt->bindValue(':type', $type, PDO::PARAM_INT);
		$this->stmt->bindValue(':subContent', $subContent, PDO::PARAM_STR);
		$this->stmt->bindValue(':content', $content, PDO::PARAM_STR);
		$this->stmt->bindValue(':date', date("Y-m-d",$time));
		$this->stmt->bindValue(':contentdate', $contentdate);
		$this->stmt->bindValue(':contentLocation', $contentLocation, PDO::PARAM_STR);
		return $this->stmt->execute();	
	}
	
	

	public function getAllNews($type){
		$this->stmt = $this->dbh->prepare('SELECT * FROM tb_news where type=:type');
        $this->stmt->bindValue(':type', $type, PDO::PARAM_INT);		
		$this->stmt->setFetchMode(PDO::FETCH_ASSOC);
		$this->stmt->execute();		
		return $this->stmt->fetchAll();
	}
	
	public function getNews($id){
		$this->stmt = $this->dbh->prepare('SELECT * FROM tb_news where id=:id');
		$this->stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$this->stmt->setFetchMode(PDO::FETCH_ASSOC);
		$this->stmt->execute();		
		return $this->stmt->fetchAll();
	}
	
	public function getAllPublications($type){
		$this->stmt = $this->dbh->prepare('SELECT * FROM tb_publication where type=:type');
        $this->stmt->bindValue(':type', $type, PDO::PARAM_INT);		
		$this->stmt->setFetchMode(PDO::FETCH_ASSOC);
		$this->stmt->execute();		
		return $this->stmt->fetchAll();
	}
	
	public function getPublictaion($id){
		$this->stmt = $this->dbh->prepare('SELECT * FROM tb_publication where id=:id');
        $this->stmt->bindValue(':id', $id, PDO::PARAM_INT);		
		$this->stmt->setFetchMode(PDO::FETCH_ASSOC);
		$this->stmt->execute();		
		return $this->stmt->fetchAll();
	}
}

?>  