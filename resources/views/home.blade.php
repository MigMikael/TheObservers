@extends('template')

@section('content')

<div class="container" style="width: 100%; text-align: center">
    <div class="jumbotron" style="background: #000000; color: #ffffff">
        <h1><b>The Observers</b></h1>
        <hr>
        <p>ระบบสำหรับทดสอบเพื่อเฟ้นหาเหล่าออพเซิร์ฟเวอร์</p>
        <p>ผู้ที่จะเป็นตัวแทนมหาวิทยาลัยในการแข่งขัน TESA Top Gun Really 2017</p>
        <p>กรุณา <a href="{{ url('login') }}">Login</a> หรือ
            <a href="{{ url('register') }}">Register</a> เพื่อเริ่มการทดสอบ</p>
    </div>
</div>

@endsection
