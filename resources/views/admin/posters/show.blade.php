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
                    <a class="create__btn" href="{{route('admin.posters.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Sana raqami : </p>
                                </td>
                                <td><b>{{ $poster->number }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Oy, hafta UZ : </p>
                                </td>
                                <td><b>{{ $poster->month_uz }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Oy, hafta RU : </p>
                                </td>
                                <td><b>{{ $poster->month_ru }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Oy, hafta En : </p>
                                </td>
                                <td><b>{{ $poster->month_en }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Mavzusi UZ : </p>
                                </td>
                                <td><b>{{ $poster->title_uz }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Mavzusi RU : </p>
                                </td>
                                <td><b>{{ $poster->title_ru }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Mavzusi En : </p>
                                </td>
                                <td><b>{{ $poster->title_en }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Ma'lumot uz : </p>
                                </td>
                                <td><b>{!! $poster->body_uz !!}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Ma'lumot ru : </p>
                                </td>
                                <td><b>{!! $poster->body_ru !!}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Ma'lumot en : </p>
                                </td>
                                <td><b>{!! $poster->body_en !!}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>xolati : </p>
                                </td>
                                <td><b>@if($poster->status==0) Faol @else Yakunlangan @endif</b></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection
