<?php
global $config;
$key = openssl_get_publickey($config['cert']);
class Response {

    public $data = array();
    public $code;

    public function send($signature = null) {
        $json = array(
            'code' => $this->code,
            'data' => $this->data
        );
        if ($signature == true) {
            global $key;
            openssl_sign($this->data, $sig, $key);
            $json['signature'] = base64_encode($sig);
        }
        echo json_encode($json);
        die(0);

    }
}

class ErrorResponse extends Response {
    function __construct($code) {
        $this->code = $code;
    }
}