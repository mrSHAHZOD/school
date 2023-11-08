@extends('admin.layouts.layout')

@section('services')
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
                        <a class="create__btn" href="{{route('admin.services.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('admin.services.update', $service->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong> Nomi uz :</strong>
                        <input type="text" name="title_uz" value="{{ $service->title_uz }}" class="form-control">
                        @error('title_uz') {{ $message }} @enderror<br>

                        <strong> Nomi ru :</strong>
                        <input type="text" name="title_ru" value="{{ $service->title_ru }}" class="form-control">
                        @error('title_ru') {{ $message }} @enderror<br>

                        <strong> Nomi en :</strong>
                        <input type="text" name="title_en" value="{{ $service->title_en }}" class="form-control">
                        @error('title_en') {{ $message }} @enderror<br>

                        <strong> Ma'lumot uz :</strong>
                        <input type="text" name="info_uz" value="{{ $service->info_uz }}" class="form-control">
                        @error('info_uz') {{ $message }} @enderror<br>

                        <strong> Ma'lumot ru :</strong>
                        <input type="text" name="info_ru" value="{{ $service->info_ru }}" class="form-control">
                        @error('info_ru') {{ $message }} @enderror<br>

                        <strong> Ma'lumot en :</strong>
                        <input type="text" name="info_en" value="{{ $service->info_en }}" class="form-control">
                        @error('info_en') {{ $message }} @enderror<br>

                        <strong> Linki :</strong>
                        <input type="text" name="link" value="{{ $service->link }}" class="form-control">
                        @error('link') {{ $message }} @enderror<br>

                        <strong> Iconka yoki rasm (png yoki jpg) :</strong>
                        <input type="file" name="icon" class="form-control"><br>

                        <img src="/icons/{{ $service->icon }}" width="160px" alt="">

                        <input type="submit" value="O'zgartirish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
