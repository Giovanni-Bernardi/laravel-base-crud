@extends('layouts.main-layout')
@section('pageTitle')
    Home Page
@endsection
@section('content')

    <main>
        <h1>lista ospiti</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
            </tr>
            @foreach ($employees as $employee)
                <tr>
                    <td>
                        <a href="{{route('employee', $employee -> id)}}">{{$employee -> id}}</a>
                    </td>
                    <td>
                        <a href="{{route('employee', $employee -> id)}}">{{$employee -> firstname}}</a>
                    </td>
                    <td>
                        <a href="{{route('employee', $employee -> id)}}">{{$employee -> lastname}}</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <a id="newEmployee" href="{{route('newEmployee')}}">
            new customer
        </a>
    </main>
    
@endsection