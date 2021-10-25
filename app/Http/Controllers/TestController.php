<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\NotiService;
class TestController extends Controller
{
    //
    private $notiService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(NotiService $notiService)
    {
        $this->middleware(['auth']);
        $this->notiService = $notiService;
    }
    public function index(){
        $noti_list = $this->notiService->get_noti_list();
        return view('noti_manage',compact('noti_list'));
    }
    public function delete($id){

    $status = $this->notiService->delete($id);
    // 返却用変数設定
     $ret = array(
        "status" => $status,
    );
    // JSON返却
    return response()->json($ret);
       // return redirect('/noti_manage');

    }
}
