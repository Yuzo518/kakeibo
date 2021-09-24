@extends("layouts.app")

@section("content")
<h1>総当たり表作成</h1>
<table class="table table-bordered table-hover">
  <thead class="thead-light">
    <tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">Test1</th>
      <th scope="col">Test2</th>
      <th scope="col">Test3</th>
      <th scope="col" style="border-left:3px double green;">順位</th>
    </tr>
  </thead>
  <tbody class="text-center align-items-center">
  <tr>
    <td scope="row">Test1</td>
    <td class="bg-light"></td>
    <td><i class="far fa-circle text-success"></i><br>(2 - 1)</td>
    <td>-<br>(0 - 0)</td>
    <td style="border-left:3px double green;">1位<br>(+3)</td>
  </tr>
  <tr>
    <td scope="row">Test2</td>
    <td><i class="fas fa-times text-success"></i><br>(1 - 2)</td>
    <td class="bg-light"></td>
    <td>-<br>(0 - 0)</td>
    <td style="border-left:3px double green;">2位<br>(+0)</td>
  </tr>
  <tr>
    <td scope="row">Test3</td>
    <td>-<br>(0 - 0)</td>
    <td>-<br>(0 - 0)</td>
    <td class="bg-light"></td>
    <td style="border-left:3px double green;">3位<br>(-3)</td>
  </tr>
  </tbody>
</table>
<div>
  <table class="table table-bordered table-sm">
    <thead class="thead-dark">
      <tr class="text-center align-items-center">
        <th>#</th>
        <th colspan="2">対戦カード</th>
        <th colspan="3">試合結果</th>
      </tr>
    </thead>
    <tbody  class="text-center align-items-center">
      <tr>
        <td>1</td>
        <td>
          Test1<br>
          <input type="number" value="2" disabled>
        </td>
        <td>
          Test2<br>
          <input type="number" value="1" disabled>
        </td>
        <td><a href="#" class="btn btn-secondary" style="pointer-events:none;">試合終了</a></td>
        <td><a href="#" class="btn btn-success">内容修正</a></td>
        <td><a href="#" class="btn btn-secondary" style="pointer-events:none;">無効試合</a></td>
      </tr>
      <tr>
        <td>2</td>
        <td>
          Test1<br>
          <input type="number" value="0">
        </td>
        <td>
          Test3<br>
          <input type="number" value="0">
        </td>
        <td><a href="#" class="btn btn-primary">試合終了</a></td>
        <td><a href="#" class="btn btn-secondary" style="pointer-events:none;">内容修正</a></td>
        <td><a href="#" class="btn btn-warning">無効試合</a></td>
      </tr>
      <tr>
        <td>3</td>
        <td>
          Test2<br>
          <input type="number" value="0">
        </td>
        <td>
          Test3<br>
          <input type="number" value="0">
        </td>
        <td><a href="#" class="btn btn-primary">試合終了</a></td>
        <td><a href="#" class="btn btn-secondary" style="pointer-events:none;">内容修正</a></td>
        <td><a href="#" class="btn btn-warning">無効試合</a></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection