<?php
namespace opentrackr\lib\db;

use \morph\Object;
use \morph\property;
use \morph\Storage;

class StorageObject extends Object {

    public static $mongo;
    public function __construct($id = null) {
        parent::__construct($id);
        $this->connect();
    }
    private function connect() {
        //connects to the DB.. prepares stuff etc.
        if (StorageObject::$mongo == null) {
            global $Configuration;
            StorageObject::$mongo = new Mongo();
            Storage::init(StorageObject::$mongo->selectDB($Configuration['db']['db']));
        }
    }


}