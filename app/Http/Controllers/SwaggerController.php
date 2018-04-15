<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SwaggerController extends Controller
{

    /**
     * 返回JSON格式的Swagger定义
     *
     * 这里需要一个主`Swagger`定义：
     * @SWG\Swagger(
     *   @SWG\Info(
     *     title="5A小组API文档",
     *     version="1.0.0"
     *   )
     * )
     */
    public function getJSON()
    {
        $swagger = \Swagger\scan(app_path('Http/Controllers/'));

        return response()->json($swagger, 200);
    }

    public function getMyData()
    {

    }
}
