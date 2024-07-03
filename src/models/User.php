<?php

namespace src\models;

/**
 * Class User
 * Represents a user.
 */
class User
{
    private $id;
    private $name;

    /**
     * User constructor.
     *
     * @param $id: The user ID.
     * @param $name: The name of the user.
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * Retrieves the user ID.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the user ID.
     *
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Retrieves the username.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the username.
     *
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}