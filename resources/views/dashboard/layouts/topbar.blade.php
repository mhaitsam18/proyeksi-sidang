<nav class="navbar navbar-expand topbar mb-4 static-top p-0 shadow" style="background-color: #b11116">


        <!-- Nav Item - Logout -->
        <div class="navbar-nav ml-auto mr-3">
            <div class="text-nowrap border-0 bg-dark rounded">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link btn btn-dark ">
                        Logout <i data-feather="log-out"></i></button>
                </form>

            </div>
        </div>



</nav>
