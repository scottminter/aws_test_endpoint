<?php

namespace App\Controllers;

use stdClass;
use CodeIgniter\API\ResponseTrait;

class Health extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $resp = new stdClass();
        $resp->message = 'API is working!';
        return $this->response->setJson($resp);
    }
}
