<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 13/02/2017
 * Time: 10:43
 */

namespace Application\Service;


class UserManager
{
    protected $status;

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        var_dump('status set: ' . $status);
        $this->status = $status;
    }
    
    public function __construct()
    {
        sleep(5);var_dump('construct');
    }
    
    public function test()
    {
        var_dump($this->getStatus());
        return $this;
    }
    
    public function __toString()
    {
        return $this->status;
    }
}