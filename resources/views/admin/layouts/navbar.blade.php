<section id="sidebar">
		<a href="/admin/dashboard" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin 13-maktab</span>
		</a>
		<ul class="side-menu top">

            <li class="@yield('teams')">
				<a href="{{ route('admin.teams.index') }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Rahbariyat</span>
				</a>
			</li>
            <li class="@yield('news')">
				<a href="{{ route('admin.news.index') }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Yangiliklar</span>
				</a>
			</li>

            <li class="@yield('posters')">
				<a href="{{ route('admin.posters.index') }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">E'lonlar</span>
				</a>
			</li>

            <li class="@yield('services')">
				<a href="{{ route('admin.services.index') }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Interaktiv xizmatlar</span>
				</a>
			</li>

            <li class="@yield('numbers')">
				<a href="{{ route('admin.numbers', 1) }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Raqamlar</span>
				</a>
			</li>

            <li class="@yield('galleries')">
				<a href="{{ route('admin.galleries.index') }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Fotogalereya</span>
				</a>
			</li>

            <li class="@yield('videos')">
				<a href="{{ route('admin.videos.index') }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Videogalereya</span>
				</a>
			</li>

            <li class="@yield('orders')">
				<a href="{{ route('admin.orders.index') }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Kelgan arizalar</span>
				</a>
			</li>



		</ul>
		<ul class="side-menu">
			<li>
				<a href="/profile">
					<i class='bx bxs-cog' ></i>
					<span class="text">User Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="text">Logout</button>
                    </form>

				</a>
			</li>
		</ul>
	</section>
