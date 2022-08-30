<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use stdClass;
use CodeIgniter\API\ResponseTrait;

class Mirror extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $resp = new stdClass();
        $resp->test = 'Look at this go!';
        // echo '<pre>';
        // print_r($this->request);
        // echo '</pre>';
        return $this->response->setJson($this->request);
    }
}
