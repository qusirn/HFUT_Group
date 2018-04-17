<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Model\Student;
use App\Model\Message;
use Illuminate\Http\Request;

class TestController extends Controller {

    public function test_signal(Request $request)
    {
        return view('testSignal');
    }
}
