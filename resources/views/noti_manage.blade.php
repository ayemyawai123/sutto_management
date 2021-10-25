@extends('layouts.manage')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">お知らせ一覧</h4>
                </div>
                <div class="card-body">

                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>タイトル</th>
                                <th>本文</th>
                                <th>投稿日</th>
                                <!-- <th>Age</th> -->
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>タイトル</th>
                                <th>本文</th>
                                <th>投稿日</th>
                                <!-- <th>Age</th> -->
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($noti_list as $key=>$data)
                            <tr>
                                <td> {{ $data->notice_title }}
                                    <input type="hidden"  class="notice_id" value="{{$data->notice_id}}" />

                                </td>
                                <td>{{ $data->notice_content }}</td>
                                <td>{{ $data->data_u_ymd }}</td>
                                <!-- <td>61</td> -->
                                <td class="text-right">
                                    <a href="javascript:;" class="btn btn-info btn-link btn-sm like"><i class="fa fa-heart"></i></a>
                                    <a href="javascript:;" class="btn btn-warning btn-link btn-sm edit"><i class="fa fa-edit"></i></a>
                                    <button  data-toggle="modal" value="{{$data->notice_id}}" data-target="#myModal10" class="btn btn-danger btn-link btn-sm remove notice_id"><i class="fa fa-times"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->
</div>

<!-- 更新後モーダル -->
<div class="modal fade" tabindex="-1" role="dialog" id="afterDeleteDialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <p class="modal_message"></p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button style="margin-right: 10px;" type="button" class="btn btn-secondary"
                    data-dismiss="modal">閉じる</button>
            </div>
            <input type="hidden" id="isClose" />
        </div>
    </div>
</div>
@endsection

