<?php
session_start();
class bhatttransportdb {
    private $host = "localhost";
    private $db_name = "bhatttransport_db";
    private $username = "root";
    private $password = "";
    private $charset = "utf8mb4";
    private $pdo;
    private $error;

    // Constructor automatically creates the connection
    public function __construct() {
        $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset={$this->charset}";
        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo "Connection failed: " . $this->error;
        }
    }

    // Method to get the PDO instance
    public function getConnection() {
        return $this->pdo;
    }

    // Insert data into table
    public function createBooking($customerName, $route, $rate, $kuntal, $bhada, $bookingDate) {
        try{
            $stmt = $this->pdo->prepare("INSERT INTO bookings (customerName, route, rate, kuntal, bhada, bookingDate) VALUES (:customerName, :route, :rate, :kuntal, :bhada, :bookingDate)");
            // Bind values
            $stmt->execute([
                ':customerName' => $customerName,
                ':route'        => $route,
                ':rate'         => $rate,
                ':kuntal'       => $kuntal,
                ':bhada'        => $bhada,
                ':bookingDate'  => $bookingDate
            ]);
            return true;
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Insert data into table
    public static function getBookings($query) {
        try{
            $stmt = (new self())->getConnection()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        }

    
    // Close connection
    public function __destruct() {
        $this->pdo = null;
    }
}
?>