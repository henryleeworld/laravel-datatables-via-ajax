@extends('layouts.app')

@section('content')
    <div class="card-header">資料列詳細資料</div>
    <div class="card-body">
        <table class="table table-bordered" id="customers-table">
            <thead>
                <tr>
                    <th></th>
                    <th>編號</th>
                    <th>名</th>
                    <th>姓</th>
                    <th>電子郵件</th>
                    <th>建立時間</th>
                    <th>更新時間</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection

@section('javascript')

    <script id="details-template" type="text/x-handlebars-template">
        @verbatim
            <table class="table">
                <tr>
                    <td>Full name:</td>
                    <td>{{first_name}}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{email}}</td>
                </tr>
                <tr>
                    <td>Extra info:</td>
                    <td>And any further details here (images etc)...</td>
                </tr>
            </table>
        @endverbatim
    </script>

    <script>
          var template = Handlebars.compile($("#details-template").html());
          var table = $('#customers-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('api.row_details') }}',
            language: {
                url: "/js/data-tables/1.10.23/plug-ins/i18n/Chinese-traditional.json"
            },
            columns: [
              {
                "className":      'details-control',
                "orderable":      false,
                "searchable":     false,
                "data":           null,
                "defaultContent": ''
              },
              { data: 'id', name: 'id' },
              { data: 'first_name', name: 'first_name' },
              { data: 'last_name', name: 'last_name' },
              { data: 'email', name: 'email' },
              { data: 'created_at', name: 'created_at' },
              { data: 'updated_at', name: 'updated_at' },
            ],
            order: [[1, 'asc']]
          });

          $('#customers-table tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row( tr );

            if ( row.child.isShown() ) {
              // This row is already open - close it
              row.child.hide();
              tr.removeClass('shown');
            }
            else {
              // Open this row
              row.child( template(row.data()) ).show();
              tr.addClass('shown');
            }
          });

    </script>
@endsection
