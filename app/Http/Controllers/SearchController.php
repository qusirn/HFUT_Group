<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Model\Student;
use App\Model\Message;
use Illuminate\Http\Request;

class SearchController extends Controller {

    /**
     *
     *
     * @return Response
     */
    public function search(Request $request)
    {
        $lives = \App\Model\Live::where('l_classify', 'like', '%'.$request->keyword.'%')
               ->orderBy('l_looker_num', 'desc')
               ->take(8)
               ->get();
        return view('classify',['lives' => $lives]);
    }
}
