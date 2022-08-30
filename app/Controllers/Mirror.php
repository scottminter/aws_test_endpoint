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
        $host = $this->request->getHeader('host')->getValue();
        // $this->devout($host);
        // echo $host . '<br>';
        $auth = $this->request->getHeader('authorization')->getValue();
        // $this->devout($auth);
        // echo $auth . '<br>';

        // $this->devout($this->request->getBody());
        $resp = [];
        $resp['host'] = $host;
        $resp['authorization'] = $auth;
        $resp['requestBody'] = json_decode($this->request->getBody());

        return $this->response->setJson($resp);
    }

    private function devout($obj)
    {
        echo '<pre>';
        print_r($obj);
        echo '</pre>';
    }
}
