@extends("layouts.app")

@section("content")
<h1>チーム修正</h1>
<form method="POST" action="/teams/{{$team->id}}">
  @csrf
  @method("PATCH")
  <div class="form-group">
    <label for="">チーム名</label>
    <input type="text" name="name" class="form-control" value="{{$team->name}}">
  </div>

  <button type="submit" class="btn btn-primary">送信</button>
  <a href="{{route('teams.index')}}" class="btn btn-secondary">戻る</a>
</form>
@endsection