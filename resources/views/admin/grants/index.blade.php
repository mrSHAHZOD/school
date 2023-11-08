@extends('admin.layouts.layout')

@section('grants')
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
						<h3>Yangiliklar</h3>
						<a class="create__btn" href="{{ route('admin.grants.create') }}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>


                    </div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Sarvlavha uz</th>
                                <th>content</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($grants) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif

					        @foreach($grants as $grant)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{ $grant->title_uz }}</td>
                                    <td>{{ $grant->content_uz}}</td>
                                    <td>
										<form action="{{ route('admin.grants.destroy', $grant->id) }}" method="POST">

                                            <a class="btn btn-primary" href="{{ route('admin.grants.show', $grant->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
						                    <a class="btn btn-primary" href="{{ route('admin.grants.edit', $grant->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

					                	</form>
								</tr>
							@endforeach
						</tbody>
					</table>
                    {{$grants->links()}}

				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
/