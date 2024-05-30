<aside class="sidebar navbar navbar-expand-lg bg-dark d-flex flex-column gab-4 align-center-lg-center m-auto mx-1 my-2 rounded">
    <h5 class="navbar-brand">Eskasaba Mart</h5>
    <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
    <ul class="navbar-nav d-flex flex-column gap-3 px-2">
        <li class="navbar-item rounded {{ Request::path() == 'admin' ? "bg-info" : ""}}">
            <a href="admin/" class="nav-link ">
                <div class="d-flex gab-3">
                    <span class="material-icons">dashboard</span>
                    <p class="m-0 p-0">Dashboard</p>
                </div>
            </a>
        </li>
        <li class="navbar-item rounded {{ Request::path() == 'admin/product' ? "bg-info" : ""}}">
            <a href="admin/product" class="nav-link">
                <div class="d-flex gab-3">
                    <span class="material-icons">inventory</span>
                    <p class="m-0 p-0">Product</p>
                </div>
            </a>
        </li>
        <li class="navbar-item rounded {{ Request::path() == 'admin/user_management' ? "bg-info" : ""}}">
            <a href="admin/user_management"class="nav-link">
                <div class="d-flex gab-3">
                    <span class="material-icons">people_alt</span>
                    <p class="m-0 p-0">User Management</p>
                </div>
            </a>
        </li>
        <li class="navbar-item rounded {{ Request::path() == 'admin/report' ? "bg-info" : ""}}">
            <a href="admin/report" class="nav-link">
                <div class="d-flex gab-3">
                    <span class="material-icons">analytics</span>
                    <p class="m-0 p-0">Report</p>
                </div>
        <li class="navbar-item">
            <a href="#" class="nav-link">
                <div class="d-flex gab-3">
                    <span class="material-icons">logout</span>
                    <p class="m-0 p-0">Logout</p>
                </div>
            </a>
        </li>
    </ul>
</div>
</aside>
