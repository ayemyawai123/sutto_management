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

        var url = "http://app.phpunit.test/del_notice_id/"+ $('.delete_notice_id').val();
        location.href = url;
       // $("#del_notice_form").submit();
      });

    //Like record
    table.on('click', '.like', function() {
      alert('You clicked on Like button');
    });
  });
