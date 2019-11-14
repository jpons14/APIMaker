@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <app-drawer></app-drawer>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="container"></div>

                    <table border="1px" id="tt">
                            @foreach($users as $user)
                                <tr>
                                    @foreach($user as $field)
                                        <td>{{$field}}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
