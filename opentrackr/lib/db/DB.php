<?php
namespace opentrackr\lib\db;
class DB {
    private static $server;

    function connect() {
        global $Configuration;
        if (DB::$server == null) {
            DB::$server = new \Settee\SetteeServer($Configuration['db']['url']);
        }
    }
    function getDB($db = null) {
        global $Configuration;
        if ($db == null) {
            $db = $Configuration['db']['db'];
        }
        $this->connect();
        return DB::$server->get_db($db);
    }

}