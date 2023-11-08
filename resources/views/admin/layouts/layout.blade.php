<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	<!-- My CSS -->
	<link rel="stylesheet" href="/admin/style.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	@include('admin.layouts.navbar') 
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link"></a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">{{DB::table('orders')->where('status',0)->count() }}</span>
			</a>
			<a href="#" class="profile">
				<img src="/admin/img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

    @yield('content')

</section>
<!-- CONTENT -->

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>

<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="/admin/script.js"></script>
</body>
</html>
