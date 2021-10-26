<?php

namespace App\Services;

use App\Models\M_Notice_Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NotiService
{
    //
    public function get_noti_list(){
        $noti_information =DB::table('m_notice_info')
                        ->select('notice_id','notice_title','notice_content','remarks','data_i_ymd','data_u_ymd')
                        ->get();
        return $noti_information;
    }

    public function delete($id){
        $status ='';
        DB::beginTransaction();
    try{
        $status = '0';
        DB::table('m_notice_info')->where('notice_id','=',$id)->delete();
        DB::commit();
        }
    catch (\Exception $exception){
        $status = '1';
        DB::rollBack();
    }
   // 返却用変数設定
   $ret = array(
    "status" => $status,
    );
    // JSON返却
    return response()->json($ret);
   // return redirect('/noti_manage');
    }
}
