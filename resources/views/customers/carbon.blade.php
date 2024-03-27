@extends('layouts.app')

@section('content')
    <div class="card-header">{{ __('Carbon formatting') }}</div>
    <div class="card-body">
        <table class="table table-bordered table-striped" id="customers-table">
            <thead>
                <tr>
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
    <script>
      $('#customers-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('api.carbon') }}',
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.10/i18n/zh-HANT.json"
        },
        columns: [
          { data: 'id', name: 'id' },
          { data: 'first_name', name: 'first_name' },
          { data: 'last_name', name: 'last_name' },
          { data: 'email', name: 'email' },
          { data: 'created_at', name: 'created_at' },
          { data: 'updated_at', name: 'updated_at' }
        ]
      });
    </script>
@endsection
