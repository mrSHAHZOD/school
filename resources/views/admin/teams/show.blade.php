@extends('admin.layouts.layout')

@section('teams')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Ma'lumotlar</h3>
                    <a class="create__btn" href="{{route('admin.teams.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>F.I.SH UZ : </p>
                                </td>
                                <td><b>{{ $team->fullname_uz }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>F.I.SH RU : </p>
                                </td>
                                <td><b>{{ $team->fullname_ru }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>F.I.SH EN : </p>
                                </td>
                                <td><b>{{ $team->fullname_en }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Lavozim UZ : </p>
                                </td>
                                <td><b>{{ $team->job_uz }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Lavozim RU : </p>
                                </td>
                                <td><b>{{ $team->job_ru }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Lavozim EN : </p>
                                </td>
                                <td><b>{{ $team->job_en }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Ma'lumot UZ : </p>
                                </td>
                                <td><b>{{ $team->description_uz }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Ma'lumot RU : </p>
                                </td>
                                <td><b>{{ $team->description_ru }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Ma'lumot EN : </p>
                                </td>
                                <td><b>{{ $team->description_en }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Telegram : </p>
                                </td>
                                <td><b>{{ $team->tg_link }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Facebook : </p>
                                </td>
                                <td><b>{{ $team->fb_link }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Rasmi : </p>
                                </td>
                                <td><img src="/images/{{ $team->img }}" alt="" width="200px"></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection
