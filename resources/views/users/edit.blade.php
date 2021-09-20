@extends("layouts.app")

@section("content")
<h1>ユーザー修正</h1>
<form method="POST" action="/users/{{$user->id}}">
  @csrf
  @method("PATCH")
  <div class="form-group">
    <label for="">ユーザー名</label>
    <input type="text" name="name" class="form-control" value="{{$user->name}}">
  </div>
  <div class="form-group">
    <label for="">アドレス</label>
    <input type="text" name="email" class="form-control" value="{{$user->email}}" readonly>
  </div>

  <div class="form-group">
    <label for="">所属チーム</label>
    <select class="custom-select" name="teams_id">
      @foreach($teams as $t_id=>$t_name)
        <option value="{{ $t_id }}" {{($user->teams_id==$t_id) ? "selected":""}}  >{{ $t_name }}</option>
      @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-primary">送信</button>
  <a href="{{route('users.index')}}" class="btn btn-secondary">戻る</a>
</form>
@endsection