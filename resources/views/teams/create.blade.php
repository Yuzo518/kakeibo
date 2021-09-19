@extends("layouts.app")

@section("content")
<h1>テーム新規登録</h1>
<form method="POST" action="/teams">
  @csrf
  <div class="form-group">
    <label for="">チーム名</label>
    <input type="text" name="name" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">送信</button>
  <a href="{{route('teams.index')}}" class="btn btn-secondary">戻る</a>
</form>
@endsection