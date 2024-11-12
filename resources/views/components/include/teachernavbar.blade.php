
<style>
    .navbar {
    width: calc(100% - 280px);
    position: fixed;
    left: 280px;
    z-index: 1000;
    top: 0;
}

.profile-link {
    background-color: white;
    border: 1px solid rgb(159, 159, 159);
    border-radius: 0.8rem;
    transition: background-color 1s ease;
    padding: 10px 30px;
    display: flex;
    width: 320px;
    align-items: center;
}

.profile-link img {
    height: 60px;
    width: 60px;
}

.profile-link div {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.profile-link p {
    margin: 0;
}
</style>

    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="dashboard navbar-brand fs-2 fw-bold">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Profile Dropdown -->
                    <div class="dropdown ms-auto">
                        <a class="nav-link dropdown-toggle d-flex align-items-center profile-link shadow-lg" href="#" role="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="images/profile.png" alt="Profile" class="rounded-circle me-2">
                            <div>
                                <p class="text-black mb-0">John Doe</p>
                                <p class="text-black mb-0" style="font-size: 0.9rem;">Teacher</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="#">Info</a></li>
                            <li><a class="dropdown-item" href="{{url('/')}}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

