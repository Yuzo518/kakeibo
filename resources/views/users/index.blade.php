@extends('layouts.app')

@section('content')
<h1>ユーザー一覧</h1>
<table class="table">
  <tr>
    <th>No.</th>
    <th>ユーザー名</th>
    <th>所属チーム</th>
    <th>トータルポイント</th>
    <th>リンク</th>
  </tr>
  @foreach($users as $user)
  <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->teams_id!=null ? $teams[$user->teams_id] : "--"}}</td>
    <td>--Pt</td>
    <td>
      <a href="{{route('users.edit', $user)}}" class="btn btn-warning">編集</a>
      <a href="{{route('users.show', $user)}}" class="btn btn-info">詳細</a>
    </td>
  </tr>
  @endforeach
</table>
@endsection