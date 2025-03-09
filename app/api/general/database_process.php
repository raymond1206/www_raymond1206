<?php require_once(__DIR__.'/path.php');

class DatabaseConnection{
	private static $pdo = null;
	public static function connect(){
		if(self::$pdo === null){
			try{
				self::$pdo = new PDO('sqlite:'.DATABASE_DIR);
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			}catch(PDOException $e){
				error_log('Could not connect to the database: '.$e->getMessage());
				throw new Exception('Database connection failed: '.$e->getMessage());
			}
		}
		return self::$pdo;
	}
}
class DatabaseStatement{
    public $statement;
    private $pdo;

    public function __construct(string $statement){
        $this->statement = $statement;
        $this->pdo = DatabaseConnection::connect();
    }
    public function Operation(array $parameters = []){
        try{
            $stmt = $this->pdo->prepare($this->statement);
            if(!$stmt->execute($parameters)){
                $this->handleQueryError($stmt);
            }
            if(stripos(trim($this->statement), 'SELECT') === 0){
                return $stmt->fetchAll();
            }elseif(
                stripos(trim($this->statement), 'INSERT') === 0 || 
                stripos(trim($this->statement), 'UPDATE') === 0 || 
                stripos(trim($this->statement), 'DELETE') === 0 ||
                stripos(trim($this->statement), 'BEGIN') === 0
            ){
                return $stmt->rowCount(); // Return affected rows for INSERT, UPDATE, DELETE
            }else{
                throw new Exception('Unsupported query type: '.$this->statement);
            }
        }catch(Exception $e){
            $this->handleQueryError($stmt, $e);
        }
    }
    private function handleQueryError(PDOStatement $stmt = null, Exception $e = null){
        $errorInfo = $stmt ? $stmt->errorInfo() : ['', '', 'Unknown error'];
        $errorMessage = 'Query failed: '.$errorInfo[2];
        if($e){
            $errorMessage .= ' - '.$e->getMessage();
        }
        error_log($errorMessage.' - Query: '.$this->statement);
        throw new Exception($errorMessage);
    }
    public function lastInsertId(){
        return $this->pdo->lastInsertId();
    }
}
/*
// SELECT example
$query = new DatabaseStatement('SELECT * FROM user WHERE id = :id');
$result = $query->Operation([':id' => 1]);
print_r($result);

// INSERT example
$query = new DatabaseStatement('INSERT INTO user (username, password) VALUES (:username, :password)');
$query->Operation([':username' => 'May', ':password' => 'password']);

// DELETE example
$query = new DatabaseStatement('DELETE FROM user WHERE id = :id');
$query->Operation([':id' => 1]);
*/