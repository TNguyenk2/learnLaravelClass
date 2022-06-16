<?php

namespace App\Http\Controllers; // Khai báo đường dẫn

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;  // Khai báo thư viện
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
