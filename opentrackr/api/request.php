<?php
/* This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://sam.zoy.org/wtfpl/COPYING for more details. */

namespace

class Request {
    public $object;
    public $action;
    public $json;
    public $args = array();

    function __construct($request) {
        $wrapper = json_decode($request);
        $this->json = json_decode($wrapper->{'request'});
        $object = $this->json->{'object'};
        $action = $this->json->{'action'};
        $args = $this->json->{'args'};
    }
    private function parse() {
        //TODO: add 'plugin' support
        switch ($this->object) {
            case "Category": {
                break;
            }
        }
    }
}
