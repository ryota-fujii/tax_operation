@extends('layout')

@section('content')
  <div class="contents">
    <div class="tax_list">
      <h2>消費税設定の一覧</h2>
      <table class="lists" border="1">
        <tr>
          <th>開始日時</th><th>税率</th><th>操作</th>
        </tr>
        @foreach($lists as $list)
            <tr>
              <td>{{$list->date}}</td>
              <td>{{$list->rate}}%</td>
              <td>
                <button type="submit" value="削除">削除</button>
              </td>
            </tr>
        @endforeach
      </table>
    </div>
    <div class="registrations">
      <h2>消費税設定の新規登録</h2>
      <div class="_data">
        {{Form::open(['url' => '/operation', 'method' => 'post'])}}
          <input class="date" type="text" name="date">
          <input class="rate" type="text" name="rate"> %
          <button class="regist_button" value="SENT" type="submit">登録</button>
        {{Form::close()}}
      </div>
    </div>

    <div class="count_tax">
      <h2>消費税計算</h2>
      <div class="count_data">
        <input class="date" type="text" value="">
        <input class="count"type="text" value="">円
        <button class="start_count">計算</button>
      <div class="result">
        <input class="counted"type="text" value="">円 (税込)
      </div>
      </div>
    </div>

  </div>
@endsection
