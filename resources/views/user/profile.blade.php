@extends('layouts.master_auth')
 
@section('content')

  <h3 style="margin-top: 70px;">プロフィール</h3>
 <div class="btn btn-warning ">編集する</div>
 <div style="margin-top: 30px; text-align: center;">

  <div class="my-4">

    <table class="table table-striped">  
      <tr>
        <th>氏名</th>
        <td>{{ Auth::user()->name }}</td>
      </tr>  
      <tr>
        <th>メールアドレス</th>
        <td>{{ Auth::user()->email }}</td>
      </tr>  
      <tr>
        <th>住所（エリア）</th>
        <td>{{ Auth::user()->area }}</td>
      </tr>
      <tr>
        <th>プログラム経験年数</th>
        <td>{{ Auth::user()->experience }}</td>
      </tr>
    </table>

  </div>

</div>
@endsection