@extends('layouts.user_base')			
@section('title', '内容確認')			
@section('content')			
			
    <section class="confirm">			
        <div class="contactMainBox">			
            <div class="dataContentItem">			
                <p class="dataContentItemP">会社名:〇〇株式会社</p>			
            </div>			
@extends('layouts.user_base')			
@section('title', '内容確認')			
@section('content')			
			
    <section class="confirm">			
        <div class="contactMainBox">			
            <div class="dataContentItem">			
                <p class="dataContentItemP">氏名:山田太郎</p>			
            </div>			
@extends('layouts.user_base')			
@section('title', '内容確認')			
@section('content')			
			
    <section class="confirm">			
        <div class="contactMainBox">			
            <div class="dataContentItem">			
                <p class="dataContentItemP">電話番号:000-000-0000</p>			
            </div>			
@extends('layouts.user_base')			
@section('title', '内容確認')			
@section('content')			
			
    <section class="confirm">			
        <div class="contactMainBox">			
            <div class="dataContentItem">			
                <p class="dataContentItemP">メールアドレス:test@test</p>			
            </div>			
@extends('layouts.user_base')			
@section('title', '内容確認')			
@section('content')			
			
    <section class="confirm">			
        <div class="contactMainBox">			
            <div class="dataContentItem">			
                <p class="dataContentItemP">生年月日:2022-05-25</p>			
            </div>			
@extends('layouts.user_base')			
@section('title', '内容確認')			
@section('content')			
			
    <section class="confirm">			
        <div class="contactMainBox">			
            <div class="dataContentItem">			
                <p class="dataContentItemP">性別:女</p>			
            </div>			
@extends('layouts.user_base')			
@section('title', '内容確認')			
@section('content')			
			
    <section class="confirm">			
        <div class="contactMainBox">			
            <div class="dataContentItem">			
                <p class="dataContentItemP">職業:会社員　（正社員）</p>			
            </div>			
@extends('layouts.user_base')			
@section('title', '内容確認')			
@section('content')			
			
    <section class="confirm">			
        <div class="contactMainBox">			
            <div class="dataContentItem">			
                <p class="dataContentItemP">お問い合わせ:</p>			
            </div>			
            <form action="{{ route('contact.send') }}" method="GET">
            @csrf    
            <button type="submit" class="submitButton">送信する</button>
            </form>
            <button type="button" class="submitButton" onclick="history.back()">戻る</button>
        </div>
    </section>
@endsection