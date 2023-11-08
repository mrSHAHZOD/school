@extends('admin.layouts.layout')

@section('posters')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Ko'rish</h3>
                    <a class="create__btn" href="{{route('admin.faculties.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Nomi UZ : </p>
                                </td>
                                <td><b>{{ $faculty->name_uz }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Nomi RU : </p>
                                </td>
                                <td><b>{{ $faculty->name_ru }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Nomi En : </p>
                                </td>
                                <td><b>{{ $faculty->name_en }}</b></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection
