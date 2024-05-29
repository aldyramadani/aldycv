<?php

namespace App\Controllers;

use App\Models\MyModels;

class Home extends BaseController
{
    public function index()
    {
        $model = new MyModels();
        $data['about'] = $model->first();
        return view('index', $data);
    }
}
