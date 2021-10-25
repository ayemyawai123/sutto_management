$(document).ready(function() {
    $('#datatable').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }

    });

    var table = $('#datatable').DataTable();

    //get row index
    var rowindex = "";
    $("#datatable tbody").on("click", "tr", function () {
        // alert(table.row( this ).index());
        rowindex = table.row(this).index();
    });

    // Edit record
    table.on('click', '.edit', function() {
      $tr = $(this).closest('tr');

      var data = table.row($tr).data();
      alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    });

    // Delete a record
    table.on('click', '.btn-danger', function(e) {
    //  $tr = $(this).closest('tr');
      $notice_id = $(this).attr('value');
      $('.delete_notice_id').val($notice_id);
    //  table.row($tr).remove().draw();
    //  e.preventDefault();
    });


    $(".del_notice_id").click(function(){
   //    window.location.href = "/del_notice_id/"+ $('.delete_notice_id').val();
       $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:  "/del_notice_id/"+ $('.delete_notice_id').val(),
        type: 'get',
        dataType: 'json',

    }).done(function (data) {
        if (data.status === '0') {
            $(".modal-title").text('削除完了');
            $(".modal_message").text('通知の削除プロセスが完了しました。');
            $("#isClose").val(true);
            $("#afterDeleteDialog").modal("show");
        } else {
         //alert(data.status);
            $(".modal-title").text('システムエラー');
            $(".modal_message").text('システムエラーが発生しました。 しばらく待ってから、もう一度削除してください。');
            $("#isClose").val(true);
            $("#afterDeleteDialog").modal("show");
        }
    }).fail(function () {

        $(".modal-title").text('通信エラー');
        $(".modal_message").text('通信エラーが発生しました。 しばらく待ってから、もう一度削除してください。');
        $("#isClose").val(true);
        $("#afterDeleteDialog").modal("show");
    });
      });

    //Like record
    table.on('click', '.like', function() {
      alert('You clicked on Like button');
    });


     // 更新後ダイアログ閉じるボタン押下後イベントハンドラ
 $("#afterDeleteDialog").on("hidden.bs.modal", function (e) {
    if (toBoolean($(this).find("#isClose").val())) {
        $(".form-check-input").each(function () {
            $(this).prop("checked", false);
        });
        location.reload();
    }
    });
  });

function toBoolean(data) {
return data.toLowerCase() === 'true';
}
