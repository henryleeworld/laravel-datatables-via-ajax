@extends('layouts.app')

@section('content')
    <div class="panel-heading">Carbon 格式</div>
    <div class="panel-body">
        <table class="table table-bordered" id="customers-table">
            <thead>
                <tr>
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
    <script>
      $('#customers-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('api.carbon') }}',
        language: {
            url: "/js/data-tables/1.10.20/plug-ins/i18n/Chinese-traditional.json"
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
