@extends('layouts.app')

@section('content')
<div class="container">
    <h1>ホーム画面</h1>
    <div class="pb-3 d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary" href="#" role="button">新規登録</a>
    </div>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">商品一覧</a>
            <form action="{{route('home')}}" method="GET" class="d-flex">
            <input type="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword" value="{{$keyword}}">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">名前</th>
                <th scope="col">商品状態</th>
                <th scope="col">タイプ</th>
                <th scope="col">詳細</th>
                <th scope="col">機能</th>
            </tr>
        </thead>        
        <tbody>
        @foreach($items as $index=>$item)
        <tr>
            <th scope="row">{{$index+1}}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->detail }}</td>
            <td><a href="{{route('items.edit',$item->id)}}" class="btn btn-primary">編集</a></td>
        </tr>
        @endforeach    
        </tbody>
    </table>
    <a class="btn primary" href="{{ route('items.list') }}">商品一覧画面</a> 
</div>
@endsection
