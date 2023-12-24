@extends('layouts.app')
@section('title', 'Users')
@section('content')
<div>
    <br>
    <blockquote>
    Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci
    </blockquote>
    <br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Date of regestration</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
        @include('user.parts.raw', ['user' => $user])
    @endforeach
  </tbody>
</table>
</div>
@endsection

