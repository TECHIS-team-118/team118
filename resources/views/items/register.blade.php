
@extends('layouts.app')

@section('content')

<div class=text-center>
<h3 class=mb-3>商品管理システム</h3>
<h4 class=mb-5>商品一覧</h4>

<div class="mb-3 test" >
  <form action="/items/register" method="POST">
  <label for="exampleFormControlInput1" class="form-label" size="10"> 名前</label>
  <input type="name" class="form-control " name="name" value="">
</div>
<div class="mb-3 test">
  <label for="exampleFormControlInput1" class="form-label">状態</label>
  <input type="text" class="form-control " name="text" value="" >
</div>
<div class="mb-3 test">
<label for="exampleFormControlInput1" class="form-label">種別</label>
  <input type="text" class="form-control " name="text" value="" >
</div>
<div class="mb-3 test">
<label for="exampleFormControlInput1" class="form-label">詳細</label>
  <input type="text" class="form-control" name="text" value="" >
</div>
<div class="col-12 test">
    <button type="submit" class="btn btn-primary">登録</button>
  </div> 
</form>
</div>
@endsection