@extends('admin.layouts.layout')

@section('services')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Mentor ma'lumotlari</h3>
                    <a class="create__btn" href="{{route('admin.services.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Nomi uz : </p>
                                </td>
                                <td><b>{{ $service->title_uz }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Nomi Ru : </p>
                                </td>
                                <td><b>{{ $service->title_ru }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Nomi en : </p>
                                </td>
                                <td><b>{{ $service->title_en }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Ma'lumot uz : </p>
                                </td>
                                <td><b>{{ $service->info_uz }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Ma'lumot Ru : </p>
                                </td>
                                <td><b>{{ $service->info_ru }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Ma'lumot en : </p>
                                </td>
                                <td><b>{{ $service->info_en }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Link : </p>
                                </td>
                                <td><b>{{ $service->link }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Ikonka : </p>
                                </td>
                                <td><img src="/icons/{{ $service->icon }}" alt="" width="100px"></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection
