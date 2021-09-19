@extends("layouts.app")

@section("content")
<h1>チーム詳細</h1>
<table class="table table-striped">
  <tr>
    <th>チーム名</th>
    <td>{{$team->name}}</td>
  </tr>
  <tr>
    <th>チーム代表</th>
    <td>--</td>
  </tr>
  <tr>
    <th>トータルポイント</th>
    <td>--Pt</td>
  </tr>
</table>
<a href="{{route('teams.edit', $team)}}" class="btn btn-warning">編集</a>
<a href="{{route('teams.index')}}" class="btn btn-secondary">戻る</a>
@endsection