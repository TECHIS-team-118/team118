@extends('layouts.app')

@section('content')

<div class=text-center>
<h3 class=mb-3>商品管理システム</h3>
<h4 class=mb-5>商品一覧</h4>

<div class="mb-3 test" >
  <form action= "{{route('items.update',$item->id)}}"method="POST">
    @csrf
  <label for="exampleFormControlInput1" class="form-label" size="10"> 名前</label>
  <input type="text" class="form-control " name="name" value="{{ $item->name }}">
</div>
<div class="mb-3 test">
  <label for="exampleFormControlInput1" class="form-label">状態</label>
  <input type="text" class="form-control " name="status" value="{{ $item->status }}" >
</div>
<div class="mb-3 test">
<label for="exampleFormControlInput1" class="form-label">種別</label>
  <input type="text" class="form-control " name="type" value="{{$item->type}}" >
</div>
<div class="mb-3 test">
<label for="exampleFormControlInput1" class="form-label">詳細</label>
  <input type="text" class="form-control" name="detail" value="{{$item->detail}}" >
</div>
<div class="col-12 test" >
  
    <button type="submit"  class="btn btn-primary">編集</button>
  </div> 
</form>
</div>
@endsection