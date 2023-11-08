@extends('admin.layouts.layout')

@section('videos')
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
                        <h3>video qo'shish</h3>
                        <a class="create__btn" href="{{route('admin.videos.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.videos.store') }}" method="POST">
                        @csrf

                        <strong> Tavsif Uz :</strong>
                        <input type="text" name="title_uz" value="{{ old('title_uz') }}" class="form-control">
                        @error('title_uz') {{ $message }} @enderror<br>

                        <strong> Tavsif Ru :</strong>
                        <input type="text" name="title_ru" value="{{ old('title_ru') }}" class="form-control">
                        @error('title_ru') {{ $message }} @enderror<br>

                        <strong> Tavsif En :</strong>
                        <input type="text" name="title_en" value="{{ old('title_en') }}" class="form-control">
                        @error('title_en') {{ $message }} @enderror<br>

                        <strong> Video Linki :</strong>
                        <input type="text" name="link" value="{{ old('link') }}" class="form-control">
                        @error('link') {{ $message }} @enderror<br>

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
