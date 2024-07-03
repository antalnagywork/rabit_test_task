<?php

namespace src\models;

/**
 * Class Advertisement
 * Represents an advertisement and the corresponding user information.
 */
class Advertisement
{

    private $id;
    private $userid;
    private $title;
    private $username;

    /**
     * Advertisement constructor.
     *
     * @param $id: The advertisement ID.
     * @param $userid: The ID of the user who created the advertisement.
     * @param $title: The title of the advertisement.
     * @param $username: The username of the user who created the advertisement.
     */
    public function __construct($id, $userid, $title, $username)
    {
        $this->id = $id;
        $this->userid = $userid;
        $this->title = $title;
        $this->username = $username;
    }

    /**
     * Retrieves the advertisement ID.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the advertisement ID.
     *
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Retrieves the user ID.
     *
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Sets the user ID.
     *
     * @param mixed $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * Retrieves the advertisement title.
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the advertisement title.
     *
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Retrieves the username.
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the username.
     *
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }


}