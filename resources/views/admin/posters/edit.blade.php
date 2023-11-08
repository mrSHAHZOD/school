@extends('admin.layouts.layout')

@section('posters')
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
                        <a class="create__btn" href="{{route('admin.posters.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('admin.posters.update', $poster->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong> Sana raqami :</strong>
                        <input type="number" name="number" value="{{ $poster->number }}" class="form-control">
                        @error('number') {{ $message }} @enderror<br>

                        <strong> Oy, hafta Uz :</strong>
                        <input type="text" name="month_uz" value="{{ $poster->month_uz }}" class="form-control">
                        @error('month_uz') {{ $message }} @enderror<br>

                        <strong> Oy, hafta Ru :</strong>
                        <input type="text" name="month_ru" value="{{ $poster->month_ru }}" class="form-control">
                        @error('month_ru') {{ $message }} @enderror<br>

                        <strong> Oy, hafta En :</strong>
                        <input type="text" name="month_en" value="{{ $poster->month_en }}" class="form-control">
                        @error('month_en') {{ $message }} @enderror<br>

                        <strong> Mavzusi Uz :</strong>
                        <input type="text" name="title_uz" value="{{ $poster->title_uz }}" class="form-control">
                        @error('title_uz') {{ $message }} @enderror<br>

                        <strong> Mavzusi Ru :</strong>
                        <input type="text" name="title_ru" value="{{ $poster->title_ru }}" class="form-control">
                        @error('title_ru') {{ $message }} @enderror<br>

                        <strong> Mavzusi En :</strong>
                        <input type="text" name="title_en" value="{{ $poster->title_en }}" class="form-control">
                        @error('title_en') {{ $message }} @enderror<br>

                        <strong> Ma'lumot uz :</strong>
                        <textarea class="ckeditor form-control" name="body_uz" value="{{ $poster->body_uz }}">{{ $poster->body_uz }}</textarea>
                        @error('body_uz') {{ $message }} @enderror<br>

                        <strong> Ma'lumot ru :</strong>
                        <textarea class="ckeditor form-control" name="body_ru" value="{{  $poster->body_ru }}">{{ $poster->body_ru }}</textarea>
                        @error('body_ru') {{ $message }} @enderror<br>

                        <strong> Ma'lumot en :</strong>
                        <textarea class="ckeditor form-control" name="body_en" value="{{  $poster->body_en }}">{{ $poster->body_en }}</textarea>
                        @error('body_en') {{ $message }} @enderror<br>

                        <strong> Vaqti :</strong>
                        <input type="text" name="time" value="{{ $poster->time }}" class="form-control">
                        @error('time') {{ $message }} @enderror<br>

                        <strong> Xolati :</strong>
                        <select name="status" class="form-control">
                            <option value="{{ $poster->status }}">@if($poster->status==0)Faol @else Yakunlangan @endif </option>
                            <option value="0">Faol</option>
                            <option value="1">Yakunlangan</option>
                        </select> <br>

                        <input type="submit" value="O'zgartirish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
