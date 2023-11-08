@extends('admin.layouts.layout')

@section('news')
    active
@endsection

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>O'zgartirish</h3>
                        <a class="create__btn" href="{{route('admin.news.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('admin.news.update', $news->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong> Sarvlavha uz :</strong>
                        <input type="text" name="title_uz" value="{{ $news->title_uz }}" class="form-control">
                        @error('title_uz') {{ $message }} @enderror<br>

                        <strong> Sarvlavha ru :</strong>
                        <input type="text" name="title_ru" value="{{ $news->title_ru }}" class="form-control">
                        @error('title_ru') {{ $message }} @enderror<br>

                        <strong> Sarvlavha en :</strong>
                        <input type="text" name="title_en" value="{{ $news->title_en }}" class="form-control">
                        @error('title_en') {{ $message }} @enderror<br>

                        <strong> Ma'lumot uz :</strong>
                        <textarea class="ckeditor form-control" name="body_uz" value="{{ $news->body_uz }}">{{ $news->body_uz }}</textarea>
                        @error('body_uz') {{ $message }} @enderror<br>

                        <strong> Ma'lumot ru :</strong>
                        <textarea class="ckeditor form-control" name="body_ru" value="{{  $news->body_ru }}">{{ $news->body_ru }}</textarea>
                        @error('body_ru') {{ $message }} @enderror<br>

                        <strong> Ma'lumot en :</strong>
                        <textarea class="ckeditor form-control" name="body_en" value="{{  $news->body_en }}">{{ $news->body_en }}</textarea>
                        @error('body_en') {{ $message }} @enderror<br>

                        <strong> Muallif :</strong>
                        <input type="text" name="owner" value="{{ $news->owner }}" class="form-control">
                        @error('owner') {{ $message }} @enderror<br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="img" class="form-control"><br>
                        <img src="/images/{{ $news->img }}" width="160px" alt="">

                        <input type="submit" value="O'zgartirish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
