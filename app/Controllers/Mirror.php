<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class Mirror extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $host = $this->request->getHeader('host')->getValue();
        // $this->devOut($host);
        // echo $host . '<br>';

        $auth = $this->request->getHeader('authorization') ? $this->request->getHeader('authorization')->getValue() : '';
        // $this->devOut($auth);
        // echo $auth . '<br>';

        $method = $this->request->getMethod();
        $urlParms = $this->request->getGet();
        // $this->devOut($urlParms);
        // $this->devOut($this->request->getBody());
        $resp = [];
        $resp['host'] = $host;
        $resp['method'] = $method;
        $resp['authorization'] = $auth;
        $resp['urlParams'] = $urlParms;
        $resp['requestBody'] = json_decode($this->request->getBody());

        return $this->response->setJson($resp);
    }

    public function delete()
    {
        $resp = [];
        $resp['host'] = $this->request->getHeader('host')->getValue();
        $resp['method'] = $this->request->getMethod();
        $resp['authorization'] = $this->request->getHeader('authorization') ? $this->request->getHeader('authorization')->getValue() : '';
        $resp['urlParams'] = $this->request->getGet();
        $resp['requestBody'] = $this->request->getBody() ? json_decode($this->request->getBody()) : [];
        return $this->response->setJson($resp);
    }

    private function devOut($obj)
    {
        echo '<pre>';
        print_r($obj);
        echo '</pre>';
    }
}
