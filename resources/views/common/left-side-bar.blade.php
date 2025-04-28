<div class="col-md-3 col-lg-2 bg-dark text-white p-4" style="min-height: 100vh;">
    <h4>Dashboard</h4>
    <a href="#" class="text-white d-block my-2">Home</a>
    <a href="{{ route('create-user') }}" class="text-white d-block my-2">Users</a>
    <a href="{{ route('create-role') }}" class="text-white d-block my-2">Roles</a>
    <a href="{{ route('create-permission') }}" class="text-white d-block my-2">Permissions</a>
    <a href="{{ route('logout') }}" class="text-white d-block my-2"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>