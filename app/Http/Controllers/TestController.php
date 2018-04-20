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

    public function testCode(Request $request)
    {
        return view('testCode');
    }

    public function codeReader(Request $request)
    {
        return view('codeReader');
    }
}
