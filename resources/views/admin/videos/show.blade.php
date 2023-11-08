@extends('admin.layouts.layout')

@section('videos')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Ko'rish</h3>
                    <a class="create__btn" href="{{route('admin.videos.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Tavsif UZ : </p>
                                </td>
                                <td><b>{{ $video->title_uz }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Tavsif RU : </p>
                                </td>
                                <td><b>{{ $video->title_ru }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Tavsif EN : </p>
                                </td>
                                <td><b>{{ $video->title_en }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Video : </p>
                                </td>
                                <td><iframe width="300" src="{{ $video->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection
