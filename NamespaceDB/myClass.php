<?php
namespace DB;

class DB
{
    private $db_name;
    private $host;
    
    public function __construct($name, $host)
    {
        $this->db_name = $name;
        $this->host = $host;
    }
    public function getName()
    {
        return $this->db_name;
    }
    public function getHost()
    {
        return $this->host;
    }
}
