# Singleton Pattern
One real-world example of Singleton pattern in PHP is a database connection object. In a typical web application, there are multiple pages that require access to the database. However, establishing a new database connection for each page can be resource-intensive and time-consuming, especially if the database server is located on a remote host.

By using the Singleton pattern, we can create a single database connection object that can be shared across multiple pages. This object will ensure that only one instance of the database connection is created and used throughout the application. This will not only save server resources, but it will also improve the performance of the application.

Here's an example of a Singleton pattern implementation for a database connection object in PHP:

```
class Database {

    // Hold the instance of the database connection
    private static $instance = null;
   
    // Database connection details
    private $host = 'localhost';
    private $username = 'root';
    private $password = 'password';
    private $database = 'mydb';
    
    // Private constructor prevents an instance of this class from being created
    private function __construct() {
        // Create a new database connection using PDO
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->database;
            $this->connection = new PDO($dsn, $this->username, $this->password);
        }
        catch(PDOException $e) {
            die("Connection Failed: " . $e->getMessage());
        }
    }
    
    // Prevent cloning of this instance
    private function __clone() { }
    
    // Singleton pattern implementation: Returns the single instance of this class
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    
    //Returns the pdo connection
    public function getConnection(): PDO
    {
        return $this->connection;
    }
    
    // Other database methods can be added here using $this->connection
}
```
### Index file
```
//Get the only instance of the database class
$db = Database::getInstance();

//Get the connection
$connection = $db->getConnection();

//Make a query to the database
$query = "INSERT INTO users VALUES (1, 'moaaz', 'moaaz@gmail.com')";
$connection->query($query);
```
