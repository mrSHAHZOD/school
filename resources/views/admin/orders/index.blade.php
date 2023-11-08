@extends('admin.layouts.layout')

@section('orders')
    active
@endsection

@section('content')

<!-- MAIN -->
		<main>
            @if ($message = Session::get('success'))
        		<div class="alert alert-success">
            		<p>{{ $message }}</p>
        		</div>
    		@endif

            @if ($message = Session::get('danger'))
        		<div class="alert alert-danger">
            		<p>{{ $message }}</p>
        		</div>
    		@endif

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Kelgan xabarlar</h3>



                    </div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>F.I.SH</th>
                                <th>Vaqti</th>
                                <th>Xolati</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($orders) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif

					        @foreach($orders as $item)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{ $item->name }}</td>
									<td>{{ $item->created_at }}</td>
									<td>@if($item->status == 0)
                                        <span style="color: red">O'qilmagan</span>
                                        @else <span style="color: rgb(14, 243, 14)">O'qilgan</span>@endif
                                    </td>
                                    <td>
										<form action="{{ route('admin.orders.destroy', $item->id) }}" method="POST">

                                            <a class="btn btn-primary" href="{{ route('admin.orders.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

					                	</form>
								</tr>
							@endforeach
						</tbody>
					</table>
                    {{$orders->links()}}

				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
