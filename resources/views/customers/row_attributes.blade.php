@extends('layouts.app')

@section('content')
    <div class="card-header">資料列屬性</div>
    <div class="card-body">
        <table class="table table-bordered" id="customers-table">
            <thead>
                <tr>
                    <th>編號</th>
                    <th>名</th>
                    <th>姓</th>
                    <th>電子郵件</th>
                    <th>建立時間</th>
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
            serverSide: true,
            ajax: '{{ route('api.row_attributes') }}',
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.12.0/i18n/zh-HANT.json"
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
