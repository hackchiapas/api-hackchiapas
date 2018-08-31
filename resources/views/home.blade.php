@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th> id</th>
                        <th> name</th>
                        <th> email </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hackers as $user)
                        <tr>
                            <td> {{$user->id}} </td>
                            <td> {{$user->nombre}} </td>
                            <td> {{$user->email}} </td>
                        </tr>
                    @endforeach
                </tbody>            
            </table>
        </div>
    </div>
</div>
@endsection
