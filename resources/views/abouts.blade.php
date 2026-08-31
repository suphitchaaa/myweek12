@extends('layouts.app')

@section('title')
    เกี่ยวกับเรา
@endsection

@section('content')
    <h2>เกี่ยวกับเรา</h2>
    <hr>
    <p>ผูัพัฒนาระบบบ : {{ $name }}</p>
    <p>วันที่ก่อตั้ง : {{ $date }}</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem eveniet, quis odit architecto illum
        dicta
        earum totam aliquam id, corrupti consectetur delectus corporis sapiente minus. Amet optio inventore ipsa ut!
    </p>
@endsection
