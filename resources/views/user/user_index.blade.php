@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-warning">
            <div class="box-header">
                <h4>{{ $title }}</h4>
            </div>
            <div class="box-body">
               
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $e=>$dt)
                        <tr>
                            <td>{{ $e+1 }}</td>
                            <td>{{ $dt->name }}</td>
                            <td>{{ $dt->email }}
                            <td>{{ $dt->password }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
 
@endsection
 