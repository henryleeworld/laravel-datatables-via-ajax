@extends('layouts.app')

@section('content')
    <div class="card-header">簡單表格</div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th>名</th>
                <th>姓</th>
                <th>電子郵件</th>
                <th>建立時間</th>
                <th>更新時間</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->first_name }}</td>
                    <td>{{ $customer->last_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->created_at }}</td>
                    <td>{{ $customer->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
