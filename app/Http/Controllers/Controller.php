<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
  /**
     * @OA\Info( version="1.0",
     *        title="API food zero app",
     *        description="All resource to manage food zero app"
     * )
     * @OA\Server(
     *      url = L5_SWAGGER_CONST_HOST
     * )
     */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
