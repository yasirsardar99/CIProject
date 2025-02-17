<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ShopController extends BaseController
{
    public function index()
    {
        return view("shop");
    }

    public function product()
    {
        return view("product");
    }
}
