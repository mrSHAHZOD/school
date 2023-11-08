@extends('admin.layouts.layout')

@section('posters')
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
						<h3>E'lonlar</h3>
						<a class="create__btn" href="{{ route('admin.posters.create') }}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>


                    </div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Sana raqami</th>
                                <th>Oy, hafta UZ</th>
                                <th>Xolati</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($posters) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif

					        @foreach($posters as $item)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{ $item->number }}</td>
                                    <td>{{ $item->month_uz }}</td>
                                    <td>@if($item->status==0) Faol @else Yakunlangan @endif</td>
                                    <td>
										<form action="{{ route('admin.posters.destroy', $item->id) }}" method="POST">

                                            <a class="btn btn-primary" href="{{ route('admin.posters.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
						                    <a class="btn btn-primary" href="{{ route('admin.posters.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

					                	</form>
								</tr>
							@endforeach
						</tbody>
					</table>
                    {{$posters->links()}}

				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
