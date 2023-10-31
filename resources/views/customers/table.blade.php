@extends('layouts.app')

@section('content')
    <div class="card-header">{{ __('Simple table') }}</div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th>{{ __('First name') }}</th>
                <th>{{ __('Last name') }}</th>
                <th>{{ __('Email') }}</th>
                <th>{{ __('Created at') }}</th>
                <th>{{ __('Updated at') }}</th>
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
