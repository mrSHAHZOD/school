@extends('admin.layouts.layout')

@section('galleries')
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
						<h3>Gallereya</h3>
						<a class="create__btn" href="{{ route('admin.galleries.create') }}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>


                    </div>
					<table>
						<thead>
							<tr>
								<th>№</th>
                                <th>Rasm</th>
                                <th>Vaqti</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($galleries) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif

					        @foreach($galleries as $item)
								<tr>
									<td>{{++$loop->index}}</td>

                                    <td><img src="/images/{{ $item->img }}" alt="" width="100px"></td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
										<form action="{{ route('admin.galleries.destroy', $item->id) }}" method="POST">
                                            
						                    <a class="btn btn-primary" href="{{ route('admin.galleries.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

					                	</form>
								</tr>
							@endforeach
						</tbody>
					</table>
                    {{$galleries->links()}}

				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
