@extends('layouts.admin')

@section('content')
  <h1 class="text-center">Messages</h1>

  @if(count($messages) > 0)
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Option</th>
          <th>Message</th>
          <th>Date</th>
        </tr>
      </thead>
      @foreach($messages as $message)
        <tbody>
          <tr>
            <td>{{ $message->name }}</td>
            <td>{{ $message->email }}</td>
            <td>{{ $message->phone }}</td>
            <td>{{ $message->contact_options_id }}</td>
            <td>{{ str_limit($message->message, $limit = 60, $end = '...') }}</td>
            <td>{{ $message->created_at }}</td>
          </tr>
        </tbody>
      @endforeach
    </table>
    {{ $messages->links() }}
  @endif
@endsection