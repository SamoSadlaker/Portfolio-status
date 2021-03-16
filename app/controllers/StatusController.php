<?php
class StatusController
{
    public function getStatus($url, $port)
    {
        $page = @fsockopen($url, $port, $err, $errstr, 10);
        if ($page) {
            return true;
            @fclose($page);
        } else {
            return false;
            @fclose($page);
        }
    }

    public function getDatabase($host, $database, $name, $password)
    {
        try {
            $conn = new PDO("mysql:host=$host;dbname=$database", $name, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } catch (PDOException $e) {
            return false;
        }
        $conn = null;
    }
}
