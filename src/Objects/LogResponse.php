<?php


namespace Appino\Blockchain\Objects;


class LogResponse{

    /**
     * @var string
     */
    public $callback;
    /**
     * @var string
     */
    public $called_at;
    /**
     * @var string
     */
    public $raw_response;
    /**
     * @var int
     */
    public $response_code;

    public function __construct($params){
        if(is_null($params))
            return;
        $this->callback = data_get($params,'callback');
        $this->called_at = data_get($params,'called_at');
        $this->raw_response = data_get($params,'raw_response');
        $this->response_code = data_get($params,'response_code');
    }

}
