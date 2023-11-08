@extends('admin.layouts.layout')

@section('teams')
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
						<h3>Infos</h3>
						<a class="create__btn" href="{{ route('admin.teams.create') }}"> <i class='bx bxs-folder-plus'></i>Qo'shish</a>


                    </div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>F.I.SH uz</th>
                                <th>Rasm</th>
                                <th>Lavozim uz</th>
                                <th>Status</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($teams) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif

					        @foreach($teams as $item)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{ $item->fullname_uz }}</td>
                                    <td><img src="/images/{{ $item->img }}" alt="" width="100px"></td>
									<td>{{ $item->job_uz }}</td>
									<td>@if($item->status == 1) Rahbariyat @else Maslahatchi @endif</td>
                                    <td>
										<form action="{{ route('admin.teams.destroy', $item->id) }}" method="POST">

                                            <a class="btn btn-primary" href="{{ route('admin.teams.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
						                    <a class="btn btn-primary" href="{{ route('admin.teams.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

					                	</form>
								</tr>
							@endforeach
						</tbody>
					</table>
                    {{$teams->links()}}

				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
