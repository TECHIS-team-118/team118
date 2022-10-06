@extends('layouts.app')

@section('content')
<div class=text-center>
<h3>商品管理システム</h3>
<!-- <div class="form-row"> -->


<form>
 
<div class="form-row " >
  
  <div class="mb-3 col-4 container text-center">
  
    <label for="exampleInputEmail1" class="form-label">メールアドレス</label>
    <input type="email" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" >

</div>
  </div>
  <div class="form-row">
  <div class="mb-3 col-4 container text-center">
    <label for="exampleInputPassword1" class="form-label">パスワード</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
</div>
</div>

  <button type="submit" class="btn btn-primary">ログイン</button>
</form>
</div>


@endsection
