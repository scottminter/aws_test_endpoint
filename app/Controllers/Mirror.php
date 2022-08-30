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
        $host = (string) $this->request->getHeader('host');
        // echo $host . '<br>';
        $auth = (string) $this->request->getHeader('authorization');
        // echo $auth . '<br>';
        $resp = [];
        $resp['host'] = $host; // $this->request->getHeader('host');
        $resp['authorization'] = $auth; // $this->request->getHeader('authorization');
        $resp['requestBody'] = json_decode($this->request->getBody());

        // $this->devout($resp);
        // $this->devout($this->request->getHeader('Host')->name);
        // $this->devout($this->request->getHeader('authorization'));
        // $this->devout($this->request->getBody());

        return $this->response->setJson($resp);
    }

    private function devout($obj)
    {
        echo '<pre>';
        print_r($obj);
        echo '</pre>';
    }
}
