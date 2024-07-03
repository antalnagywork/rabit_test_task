<?php


use config\DbConfigMySql;
use src\models\User;

include_once("config/DbConfigMySql.php");
include_once("models/User.php");

/**
 * Class UserService
 * Manages user-related data in the database.
 */
class UserService
{

    /**
     * Retrieves all users from the database.
     *
     * @return array
     */
    public function readAllUsers()
    {
        $query = "SELECT id, name FROM rabit_test_db.users";

        $dbConfig = new DBConfigMySql();
        $conn = $dbConfig->getConnection();

        $stmt = $conn->prepare($query);
        $stmt->execute();

        $users = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $users[] = new User($row['id'], $row['name']);
        }
        return $users;
    }

}

?>
