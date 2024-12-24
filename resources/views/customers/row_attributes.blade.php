@extends('layouts.app')

@section('content')
    <div class="card-header">{{ __('Row attributes') }}</div>
    <div class="card-body">
        <table class="table table-bordered" id="customers-table" style="width:100%">
            <thead>
                <tr>
                    <th>{{ __('Id') }}</th>
                    <th>{{ __('First name') }}</th>
                    <th>{{ __('Last name') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Created At') }}</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
@endsection

@section('javascript')

    <script>
          $('#customers-table').DataTable({
            processing: true,
            scrollX: true,
            serverSide: true,
            ajax: '{{ route('api.row_attributes') }}',
            language: {
                url: "https://cdn.datatables.net/plug-ins/2.1.8/i18n/zh-HANT.json"
            },
            columns: [
              { data: 'id', name: 'id' },
              { data: 'first_name', name: 'first_name' },
              { data: 'last_name', name: 'last_name' },
              { data: 'email', name: 'email' },
              { data: 'created_at', name: 'created_at' },
              { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
          });
    </script>
@endsection
