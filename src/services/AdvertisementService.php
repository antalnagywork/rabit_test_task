<?php

use config\DbConfigMySql;
use src\models\Advertisement;

include_once("config/DbConfigMySql.php");
include_once("models/Advertisement.php");

/**
 * Class AdvertisementService
 * Manages advertisement-related data in the database.
 */
class AdvertisementService
{
    /**
     * Retrieves all advertisements, and their corresponding users from the database
     *
     * @return array
     */
    public function readAllAdvertisementsAndUsers()
    {

        $query = "SELECT adv.id, adv.title, adv.userid, usr.name AS username 
                  FROM rabit_test_db.advertisements adv 
                  LEFT JOIN rabit_test_db.users usr ON adv.userid = usr.id";

        $dbConfig = new DBConfigMySql();
        $conn = $dbConfig->getConnection();

        $stmt = $conn->prepare($query);
        $stmt->execute();

        $advertisements = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $advertisements[] = new Advertisement($row['id'], $row['userid'], $row['title'], $row['username']);
        }

        return $advertisements;

    }
}