<?php


include_once("services/UserService.php");

/**
 * Class UserController
 * Controls user-related operations.
 */
class UserController
{
    /**
     * Renders the users page.
     *
     * @return void
     */
    public function getUsersPage()
    {
        include __DIR__ . '/../views/users.php';
    }

    /**
     * Retrieves all users.
     *
     * @return array
     */
    public function listUsers()
    {
        $userService = new UserService();
        return $userService->readAllUsers();
    }
}

?>