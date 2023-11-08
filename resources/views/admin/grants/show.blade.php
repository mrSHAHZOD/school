@extends('admin.layouts.layout')

@section('grants')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Mentor ma'lumotlari</h3>
                    <a class="create__btn" href="{{route('admin.grants.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>

            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Sarvlavha uz : </p>
                                </td>
                                <td><b>{{ $grants->title_uz }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Sarvlavha Ru : </p>
                                </td>
                                <td><b>{{ $grants->title_ru }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Sarvlavha en : </p>
                                </td>
                                <td><b>{{ $grants->title_en }}</b></td>
                            </tr>


                            <tr>
                                <td>
                                    <p>Ma'lumot uz : </p>
                                </td>
                                <td><b>{!! $grants->content_uz !!}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Ma'lumot ru : </p>
                                </td>
                                <td><b>{!! $grants->content_ru !!}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Ma'lumot en : </p>
                                </td>
                                <td><b>{!! $grants->content_en !!}</b></td>
                            </tr>

                           
                            <tr>
                                <td>
                                    <p>Vaqt : </p>
                                </td>
                                <td><b>{{ $grants->created_at }}</b></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection
