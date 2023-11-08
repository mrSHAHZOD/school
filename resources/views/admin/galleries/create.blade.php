@extends('admin.layouts.layout')


@section('galleries')
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
                        <h3>Rasm qo'shish</h3>
                        <a class="create__btn" href="{{route('admin.galleries.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="img" class="form-control"><br>


                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
