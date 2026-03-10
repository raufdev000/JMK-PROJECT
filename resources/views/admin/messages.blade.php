@extends('admin.layout')

@section('content')

<h3>Contact Messages</h3>

<table border="1">

<tr>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
</tr>

@foreach($messages as $msg)

<tr>
<td>{{ $msg->name }}</td>
<td>{{ $msg->email }}</td>
<td>{{ $msg->subject }}</td>
<td>{{ $msg->message }}</td>
</tr>

@endforeach

</table>

@endsection