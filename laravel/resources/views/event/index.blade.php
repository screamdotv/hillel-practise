@extends('layouts.app')
@section('title', 'Events')
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
      <th scope="col">Event</th>
    </tr>
  </thead>
  <tbody>
    @foreach($events as $event)
        @include('event.parts.raw', ['event' => $event])
    @endforeach
  </tbody>
</table>
</div>
@endsection

