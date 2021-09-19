@extends('layouts.app')

@section('content')
<h1>チーム一覧</h1>
<a href="{{route('teams.create')}}" class="btn btn-outline-success btn-lg m-3">+登録</a>
<table class="table">
  <tr>
    <th>No.</th>
    <th>チーム名</th>
    <th>代表</th>
    <th>トータルポイント</th>
    <th>リンク</th>
  </tr>
  @foreach($teams as $team)
  <tr>
    <td>{{$team->id}}</td>
    <td>{{$team->name}}</td>
    <td>--</td>
    <td>--Pt</td>
    <td>
      <a href="{{route('teams.edit', $team)}}" class="btn btn-warning">編集</a>
      <a href="{{route('teams.show', $team)}}" class="btn btn-info">詳細</a>
      <form action="/teams/{{$team->id}}" method="POST" style="display:inline;">
        @method("DELETE")
        @csrf
        <button type="submit" class="btn btn-danger" onclick='return confirm("本当に削除しますか？");'>削除</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
@endsection