<?php

namespace Source\Related;

class User{
    private $job;
    private $firtsName;
    private $lastName;

    public function __construct($job, $firtsName, $lastName){   
        $this->job = $job;
        $this->lastName = $lastName;
        $this->firtsName = $firtsName;
    }

    /**
     * Get the value of job
     */ 
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Get the value of firtsName
     */ 
    public function getFirtsName()
    {
        return $this->firtsName;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }
}
