@extends('layouts.app')

@section('content')
    <div class="card-header">{{ __('Row details') }}</div>
    <div class="card-body">
        <table class="table table-bordered table-striped" id="customers-table" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th>{{ __('Id') }}</th>
                    <th>{{ __('First name') }}</th>
                    <th>{{ __('Last name') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Created At') }}</th>
                    <th>{{ __('Updated At') }}</th>
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
                    <td>{{ __('Full name:') }}</td>
                    <td>{{first_name}}</td>
                </tr>
                <tr>
                    <td>{{ __('Email:') }}</td>
                    <td>{{email}}</td>
                </tr>
                <tr>
                    <td>{{ __('Extra info:') }}</td>
                    <td>{{ __('And any further details here (images etc)...') }}</td>
                </tr>
            </table>
        @endverbatim
    </script>

    <script>
          var template = Handlebars.compile($("#details-template").html());
          var table = $('#customers-table').DataTable({
            processing: true,
            scrollX: true,
            serverSide: true,
            ajax: '{{ route('api.row_details') }}',
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.13.10/i18n/zh-HANT.json"
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
