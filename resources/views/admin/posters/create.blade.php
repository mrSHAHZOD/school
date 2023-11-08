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
                        <h3>E'lon qo'shish</h3>
                        <a class="create__btn" href="{{route('admin.posters.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.posters.store') }}" method="POST">
                        @csrf

                        <strong> Sana raqami :</strong>
                        <input type="number" name="number" value="{{ old('number') }}" class="form-control">
                        @error('number') {{ $message }} @enderror<br>

                        <strong> Oy, hafta Uz :</strong>
                        <input type="text" name="month_uz" value="{{ old('month_uz') }}" class="form-control">
                        @error('month_uz') {{ $message }} @enderror<br>

                        <strong> Oy, hafta Ru :</strong>
                        <input type="text" name="month_ru" value="{{ old('month_ru') }}" class="form-control">
                        @error('month_ru') {{ $message }} @enderror<br>

                        <strong> Oy, hafta En :</strong>
                        <input type="text" name="month_en" value="{{ old('month_en') }}" class="form-control">
                        @error('month_en') {{ $message }} @enderror<br>

                        <strong> Mavzusi Uz :</strong>
                        <input type="text" name="title_uz" value="{{ old('title_uz') }}" class="form-control">
                        @error('title_uz') {{ $message }} @enderror<br>

                        <strong> Mavzusi Ru :</strong>
                        <input type="text" name="title_ru" value="{{ old('title_ru') }}" class="form-control">
                        @error('title_ru') {{ $message }} @enderror<br>

                        <strong> Mavzusi En :</strong>
                        <input type="text" name="title_en" value="{{ old('title_en') }}" class="form-control">
                        @error('title_en') {{ $message }} @enderror<br>

                        <strong> Ma'lumot uz :</strong>
                        <textarea class="ckeditor form-control" name="body_uz" value="{{ old('body_uz') }}">{{ old('body_uz') }}</textarea>
                        @error('body_uz') {{ $message }} @enderror<br>

                        <strong> Ma'lumot ru :</strong>
                        <textarea class="ckeditor form-control" name="body_ru" value="{{ old('body_ru') }}">{{ old('body_ru') }}</textarea>
                        @error('body_ru') {{ $message }} @enderror<br>

                        <strong> Ma'lumot en :</strong>
                        <textarea class="ckeditor form-control" name="body_en" value="{{ old('body_en') }}">{{ old('body_en') }}</textarea>
                        @error('body_en') {{ $message }} @enderror<br>

                        <strong> Vaqti :</strong>
                        <input type="text" name="time" value="{{ old('time') }}" class="form-control">
                        @error('time') {{ $message }} @enderror<br>

                        <strong> Xolati :</strong>
                        <select name="status" class="form-control">
                            <option value="0">Faol</option>
                            <option value="1">Yakunlangan</option>
                        </select> <br>

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
