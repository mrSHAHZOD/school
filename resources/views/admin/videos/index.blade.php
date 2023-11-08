@extends('admin.layouts.layout')

@section('videos')
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
						<h3>videolar</h3>
						<a class="create__btn" href="{{ route('admin.videos.create') }}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>


                    </div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Tavsif Uz</th>
                                <th>Video</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($videos) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif

					        @foreach($videos as $item)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{ $item->title_uz }}</td>
									<td><iframe width="300" src="{{ $item->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                                    <td>
										<form action="{{ route('admin.videos.destroy', $item->id) }}" method="POST">

                                            <a class="btn btn-primary" href="{{ route('admin.videos.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
						                    <a class="btn btn-primary" href="{{ route('admin.videos.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

					                	</form>
								</tr>
							@endforeach
						</tbody>
					</table>
                    {{$videos->links()}}

				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
