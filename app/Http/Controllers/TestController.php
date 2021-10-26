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

    return  $this->notiService->delete($id);

    }
}
