@extends('admin.layouts.layout')

@section('faculties')
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
                        <a class="create__btn" href="{{route('admin.faculties.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('admin.faculties.update', $faculty->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                        <strong> Nomi Uz :</strong>
                        <input type="text" name="name_uz" value="{{ $faculty->name_uz }}" class="form-control">
                        @error('name_uz') {{ $message }} @enderror<br>

                        <strong> Nomi Ru :</strong>
                        <input type="text" name="name_ru" value="{{ $faculty->name_ru }}" class="form-control">
                        @error('name_ru') {{ $message }} @enderror<br>

                        <strong> Nomi En :</strong>
                        <input type="text" name="name_en" value="{{ $faculty->name_en }}" class="form-control">
                        @error('name_en') {{ $message }} @enderror<br>

                        <input type="submit" value="O'zgartirish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
