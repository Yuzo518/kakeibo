@extends("layouts.app")

@section("content")
<h1>ユーザー詳細</h1>
<table class="table table-striped">
  <tr>
    <th>ユーザー名</th>
    <td>{{$user->name}}</td>
  </tr>
  <tr>
    <th>アドレス</th>
    <td>{{$user->email}}</td>
  </tr>
  <tr>
    <th>所属チーム</th>
    <td>{{$user->teams_id!=null ? $teams[$user->teams_id] : "--"}}</td>
  </tr>
</table>
<a href="{{route('users.edit', $user)}}" class="btn btn-warning">編集</a>
<a href="{{route('users.index')}}" class="btn btn-secondary">戻る</a>
@endsection