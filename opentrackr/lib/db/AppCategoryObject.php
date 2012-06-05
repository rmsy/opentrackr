<?php
namespace opentrackr\lib\db;

use \morph\Object;
use \morph\property;

class AppCategoryObject extends StorageObject {

    public function __construct($id = null) {
        parent::__construct($id);
        $this->addProperty(new property\Integer("id"))
            ->addProperty(new property\String("name"))
            ->addProperty(new property\Integer("apps"))
            ->addProperty(new property\String("iconurl"));
    }

    public static function getCategories() {
        $query = new \morph\Query();
        $book = new AppCategoryObject();
        $resultsets = $book->
    }
}