@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido administrador</div>
            </div>
            <table class="table">
            
                <thead class="thead-dark" style="background-color: #212121">
                    <td style="background-color: #00C853; color: #FAFAFA" colspan="3">Lista de alumnos confirmados</td>
                    <tr>
                        <th scope="col" style="color: #FAFAFA"> id</th>
                        <th scope="col" style="color: #FAFAFA" > name</th>
                        <th scope="col" style="color: #FAFAFA"> email </th>
                    </tr>
                </thead>
                <tbody>
                    @php ($NotUser = "") @endphp
                    @foreach($Hackers as $user)
                        @if(($user->confirmado) === 1)
                            <tr>
                                <th scope="row"> {{$user->id}} </th>
                                <td> {{$user->nombre}} </td>
                                <td> {{$user->email}} </td>
                            </tr>
                        @else
                            @php ($NotUser = $NotUser.$user->id.",".$user->nombre.",".$user->email."]") @endphp
                        @endif
                    @endforeach
                </tbody>            
            </table>

            <table class="table" style="margin-top: 50px;">
                <thead class="thead-dark" style="background-color: #212121">
                    <td style="background-color: #D50000; color: #FAFAFA" colspan="3">Lista de alumnos sin confirmar</td>
                    <tr>
                        <th scope="col" style="color: #FAFAFA"> id</th>
                        <th scope="col" style="color: #FAFAFA" > name</th>
                        <th scope="col" style="color: #FAFAFA"> email </th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $arrayNotUser = explode ("]", $NotUser); 
                    @endphp
                    @for ($i = 0; $i < count( $arrayNotUser) - 1; $i++)
                        @php  $data = explode(",", $arrayNotUser[$i]); @endphp
                        <tr>
                            <th scope="row"> {{ $data[0] }} </th>
                            <td> {{ $data[1] }} </td>
                            <td> {{ $data[2] }} </td>
                        </tr>
                    @endfor
                </tbody>            
            </table>
        </div>
    </div>
</div>
@endsection
