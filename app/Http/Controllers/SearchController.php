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
     /**
      *@SWG\GET(path="/search",
      *  tags={"search"},
      *  summary="搜索",
      *  description="输入搜索内容，返回结果页面",
      *  operationId="search",
      *  @SWG\Parameter(in="path",name="$request",type="string",description="键盘输入内容",required=true,
      *  ),
      *  @SWG\Response(response="default", description="操作成功")
      *  )
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
