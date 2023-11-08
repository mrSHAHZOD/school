@extends('admin.layouts.layout')

@section('orders')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Ko'rish</h3>
                    <a class="create__btn" href="{{route('admin.orders.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>F.I.SH : </p>
                                </td>
                                <td><b>{{ $order->name }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Email : </p>
                                </td>
                                <td><b>{{ $order->email }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Xabar : </p>
                                </td>
                                <td><b>{{ $order->message }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Kelgav vaqti : </p>
                                </td>
                                <td><b>{{ $order->created_at }}</b></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection
