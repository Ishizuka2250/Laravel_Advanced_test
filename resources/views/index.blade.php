@extends('layouts.default')

@section('title', 'Top Page')

@section('page_title', 'トップページ')

@section('content')
  @if (count($errors) > 0)
    <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
    </ul>
  @endif
  <form action="/thanks" method="post">
    @csrf
    <label for="name">氏名</label><br>
    <input type="text" name="name" id=""><br>
    <label for="mail">メールアドレス</label><br>
    <input type="email" name="mail_address" id=""><br>
    <input type="submit" value="送信する">
  </form>
@endsection

