@extends('admin.layouts.layout')

@section('teams')
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
                        <h3>Qo'shish</h3>
                        <a class="create__btn" href="{{route('admin.teams.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> F.I.SH uz :</strong>
                        <input type="text" name="fullname_uz" value="{{ old('fullname_uz') }}" class="form-control">
                        @error('fullname_uz') {{ $message }} @enderror<br>

                        <strong> F.I.SH ru :</strong>
                        <input type="text" name="fullname_ru" value="{{ old('fullname_ru') }}" class="form-control">
                        @error('fullname_ru') {{ $message }} @enderror<br>

                        <strong> F.I.SH en :</strong>
                        <input type="text" name="fullname_en" value="{{ old('fullname_en') }}" class="form-control">
                        @error('fullname_en') {{ $message }} @enderror<br>

                        <strong> Lavozim uz :</strong>
                        <input type="text" name="job_uz" value="{{ old('job_uz') }}" class="form-control">
                        @error('job_uz') {{ $message }} @enderror<br>

                        <strong> Lavozim ru :</strong>
                        <input type="text" name="job_ru" value="{{ old('job_ru') }}" class="form-control">
                        @error('job_ru') {{ $message }} @enderror<br>

                        <strong> Lavozim en :</strong>
                        <input type="text" name="job_en" value="{{ old('job_en') }}" class="form-control">
                        @error('job_en') {{ $message }} @enderror<br>

                        <strong> Status :</strong>
                        <select name="status" class="form-control">
                            <option value="1">Rahbariyat</option>
                            <option value="0">Maslahatchi</option>
                        </select>
                        @error('status') {{ $message }} @enderror<br>

                        <strong> Ma'lumot uz:</strong>
                        <input type="text" name="description_uz" value="{{ old('description_uz') }}" class="form-control">
                        @error('description_uz') {{ $message }} @enderror<br>

                        <strong> Ma'lumot ru:</strong>
                        <input type="text" name="description_ru" value="{{ old('description_ru') }}" class="form-control">
                        @error('description_ru') {{ $message }} @enderror<br>

                        <strong> Ma'lumot en :</strong>
                        <input type="text" name="description_en" value="{{ old('description_en') }}" class="form-control">
                        @error('description_en') {{ $message }} @enderror<br>

                        <strong> Telegram :</strong>
                        <input type="text" name="tg_link" value="{{ old('tg_link') }}" class="form-control">
                        @error('tg_link') {{ $message }} @enderror<br>
                        <strong> Facebook :</strong>
                        <input type="text" name="fb_link" value="{{ old('fb_link') }}" class="form-control">
                        @error('fb_link') {{ $message }} @enderror<br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="img" class="form-control"><br>

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
