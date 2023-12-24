@extends('layouts.app')
@section('title', 'Events')
@section('content')
<div>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Confirmed</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$event->date_regestartion}}</td>
            <td>{{$event->confirmed}}</td>
        </tr>
    </tbody>
  </table>
</div>
@endsection

