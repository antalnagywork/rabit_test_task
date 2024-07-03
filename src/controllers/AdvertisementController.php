<?php


include_once("services/AdvertisementService.php");

/**
 * Class AdvertisementController
 * Controls advertisement-related operations.
 */
class AdvertisementController
{
    /**
     * Renders the advertisements page.
     *
     * @return void
     */
    public function getAdvertisementsPage()
    {
        include __DIR__ . '/../views/advertisements.php';
    }

    /**
     * Retrieves all advertisements, and their corresponding users.
     *
     * @return array
     */
    public function listAdvertisements()
    {
        $advertisementService = new AdvertisementService();
        return $advertisementService->readAllAdvertisementsAndUsers();
    }
}