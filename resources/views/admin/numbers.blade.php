@extends('admin.layouts.layout')

@section('numbers')
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
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Raqamlar</h3>


                </div>

                <form class="create__inputs" action="{{ route('admin.numbers.update', $number->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <strong> Talabalar soni :</strong>
                    <input type="number" name="num1" value="{{ $number->num1 }}" class="form-control">
                    @error('num1')
                        {{ $message }}
                    @enderror
                    <br>
                    <strong> Professor-oʻqituvchilar :</strong>
                    <input type="number" name="num2" value="{{ $number->num2 }}" class="form-control">
                    @error('num2')
                        {{ $message }}
                    @enderror
                    <br>
                    <strong> Doktorantlar soni :</strong>
                    <input type="number" name="num3" value="{{ $number->num3 }}" class="form-control">
                    @error('num3')
                        {{ $message }}
                    @enderror
                    <br>
                    <strong> Mustaqil tadqiqotchilar :</strong>
                    <input type="number" name="num4" value="{{ $number->num4 }}" class="form-control">
                    @error('num4')
                        {{ $message }}
                    @enderror
                    <br>
                    <strong> Auditoriyalar soni :</strong>
                    <input type="number" name="num5" value="{{ $number->num5 }}" class="form-control">
                    @error('num5')
                        {{ $message }}
                    @enderror
                    <br>
                    <strong> Taʼlim yoʻnalishlari :</strong>
                    <input type="number" name="num6" value="{{ $number->num6 }}" class="form-control">
                    @error('num6')
                        {{ $message }}
                    @enderror
                    <br>
                    <strong> Qoʻshma taʼlim dasturlari :</strong>
                    <input type="number" name="num7" value="{{ $number->num7 }}" class="form-control">
                    @error('num7')
                        {{ $message }}
                    @enderror
                    <br>
                    <strong> Fakultetlar soni :</strong>
                    <input type="number" name="num8" value="{{ $number->num8 }}" class="form-control">
                    @error('num8')
                        {{ $message }}
                    @enderror
                    <br>

                    <input type="submit" value="O'zgartirish">

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection
