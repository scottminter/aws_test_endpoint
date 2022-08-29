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
        return $this->respond($this->request->getBody());
    }
}
