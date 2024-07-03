<?php

/**
 * Class HomeController
 * Controls homepage-related operations.
 */
class HomeController
{
    /**
     * Renders the homepage.
     *
     * @return void
     */
    public function getHomePage()
    {
        include __DIR__ . '/../views/home.php';
    }

}