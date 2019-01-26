@extends('layout')

@section('content')
  <div class="contents">
    <div class="tax_list">
      <h2>消費税設定の一覧</h2>
      <table class="lists" border="1">
        <tr>
          <th>開始日時</th><th>税率</th><th>操作</th>
        </tr>
          <td>1997-04-01</td><td>8%</td><td><button>削除</button></td>
        </tr>

      </table>
    </div>
    <div class="registrations">
      <h2>消費税設定の新規登録</h2>
      <div class="_data">
        <input class="date" type="text" value="">
        <input class="rate" type="text" value=""> %
        <button class="regist" type="submit">登録</button>
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
