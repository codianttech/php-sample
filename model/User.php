<?php
require_once __DIR__.'/../database/dbConnection.php';
require_once __DIR__.'/../config/response-message.php';

session_start();

class User
{
    /**
     * @var Dbconnection
     */
    public $db;

    /**
     * Method __construct
     *
     * @return void
     */
    function __construct()
    {
        $this->db = new Dbconnection();
    }

    /**
     * Method register
     *
     * @param $data $data [Object]
     *
     * @return json
     */
    public function register($data)
    {
        try {
            $connection = $this->db->getConnection();

            $query = "INSERT INTO users (`name`, `email`, `phone_number`, `address`, `password`) VALUES (:name, :email, :phone_number, :address, :password)";

            $password = md5($data['password']);
            $statement = $connection->prepare($query);
            $statement->bindParam(':name', $data['name']);
            $statement->bindParam(':email', $data['email']);
            $statement->bindParam(':phone_number', $data['phone_number']);
            $statement->bindParam(':address', $data['address']);
            $statement->bindParam(':password', $password);
            // Execute the query
            $statement->execute();
            successResponse("Register successfully", []);
        } catch (Exception $e) {
            errorResponse("Something went wrong");
        }
    }

    /**
     * Method login
     *
     * @param $data $data [array]
     *
     * @return json
     */
    public function login($data)
    {
        try {
            $connection = $this->db->getConnection();
            $query = "SELECT name,email,password FROM users WHERE email = :email";
            $statement = $connection->prepare($query);
            $statement->bindParam(':email', $data['email']);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            $password = md5($data['password']);

            if ($statement->rowCount() > 0) {
                if ($result[0]['password'] == $password) {
                    $_SESSION['userName'] = $result[0]['name'];
                    $_SESSION['email'] = $result[0]['email'];
                    successResponse("Login Successfully", []);
                } else {
                    errorResponse("Invalid email or password");
                }
            } else {
                errorResponse("Invalid email or password");
            }
        } catch (Exception $e) {
            errorResponse("Something went wrong");
        }
    }

    /**
     * Method checkEmailExist
     *
     * @param $email $email [string]
     *
     * @return boolean
     */
    public function checkEmailExist($email)
    {
        $connection = $this->db->getConnection();
        $query = "SELECT name,email, password FROM users WHERE email = :email";
        $statement = $connection->prepare($query);
        $statement->bindParam(':email', $email);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Method getUserData
     *
     * @return Object
     */
    public function getUserData()
    {
        $email = $_SESSION['email'];
        $connection = $this->db->getConnection();
        $query = "SELECT name,email,phone_number,address FROM users WHERE email = :email";
        $statement = $connection->prepare($query);
        $statement->bindParam(':email', $email);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    /**
     * Method checkPhoneNumberExist
     *
     * @param $phone $phone [string]
     *
     * @return boolean
     */
    public function checkPhoneNumberExist($phone)
    {
        $connection = $this->db->getConnection();
        $query = "SELECT phone_number, password FROM users WHERE phone_number = :phone_number";
        $statement = $connection->prepare($query);
        $statement->bindParam(':phone_number', $phone);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
?>