@extends("layouts.layouts")

@section("content")

<h1>家計簿詳細</h1>
<table class="table table-striped">
  <tr>
    <th>年月</th>
    <td>{{ $book->year }}年{{ $book->month }}月</td>
  </tr>
  <tr>
    <th>区分</th>
    <th>{{ $book->inout }}</th>
  </tr>
  <tr>
    <th>科目</th>
    <th>{{ $book->category }}</th>
  </tr>
  <tr>
    <th>金額</th>
    <th>{{ $book->amount }}万円（{{ $book->next_amount }}万円）</th>
  </tr>
  <tr>
    <th>メモ</th>
    <td>{{ $book->memo }}</td>
  </tr>
</table>

<a href="{{ route('books.index') }}" class="btn btn-secondary">戻る</a>
@endsection