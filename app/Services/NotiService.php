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
        DB::beginTransaction();
    try{

        DB::table('m_notice_info')->where('notice_id','=',$id)->delete();
        DB::commit();
        }
    catch (\Exception $exception){
        DB::rollBack();
    }
    }
}
