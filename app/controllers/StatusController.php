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
}
