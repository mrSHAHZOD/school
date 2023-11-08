@extends('admin.layouts.layout')

@section('grants')
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
                        <a class="create__btn" href="{{route('admin.grants.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('admin.grants.update', $grant->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong> Sarvlavha uz :</strong>
                        <input type="text" name="title_uz" value="{{ $grant->title_uz }}" class="form-control">
                        @error('title_uz') {{ $message }} @enderror<br>

                        <strong> Sarvlavha ru :</strong>
                        <input type="text" name="title_ru" value="{{ $grant->title_ru }}" class="form-control">
                        @error('title_ru') {{ $message }} @enderror<br>

                        <strong> Sarvlavha en :</strong>
                        <input type="text" name="title_en" value="{{ $grant->title_en }}" class="form-control">
                        @error('title_en') {{ $message }} @enderror<br>

                        <strong> Ma'lumot uz :</strong>
                        <textarea class="ckeditor form-control" name="content_uz" value="{{ $grant->content_uz }}">{{ $grant->content_uz }}</textarea>
                        @error('content_uz') {{ $message }} @enderror<br>

                        <strong> Ma'lumot ru :</strong>
                        <textarea class="ckeditor form-control" name="content_ru" value="{{  $grant->content_ru }}">{{ $grant->content_ru }}</textarea>
                        @error('content_ru') {{ $message }} @enderror<br>

                        <strong> Ma'lumot en :</strong>
                        <textarea class="ckeditor form-control" name="content_en" value="{{  $grant->content_en }}">{{ $grant->content_en }}</textarea>
                        @error('content_en') {{ $message }} @enderror<br>


                        <input type="submit" value="O'zgartirish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
