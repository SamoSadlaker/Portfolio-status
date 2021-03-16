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
        error_reporting(0);
        $link = mysqli_connect($host, $name, $password, $database);

        if (mysqli_connect_errno()) {
            mysqli_close($link);
            return false;
        }
        mysqli_close($link);
        return true;
    }
}
