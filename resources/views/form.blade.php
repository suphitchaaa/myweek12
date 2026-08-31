@extends('layouts.app')

@section('title')
    เขียนบทความใหม่
@endsection

@section('content')
    <h2 class="text-center py-2">เขียน</h2>
    <form method="POST" action="/insert">
        @csrf
        <div class="form-group">
            <label for="title">ชื่อบทความ: </label>
            <input type="text" name="title" class="form-control">
        </div>
        @error('title')
            <p class ="text-danger">{{ $message }}</p>
        @enderror

        <div class="form-group">
            <label for="title">เนื้อหาบทความ: </label>
            <textarea name="content" class="form-control" cols="50" rows="5"></textarea>
        </div>

        @error('content')
            <p class ="text-danger">{{ $message }}</p>
        @enderror

        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="{{ route('blogs') }}" class="btn btn-secondary my-3">บทความทั้งหมด</a>
    </form>
@endsection
