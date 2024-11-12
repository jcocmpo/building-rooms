<style>
    .sidebar {
        width: 280px;
        background-color: #37584F;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        padding: 20px;
        display: flex;
        flex-direction: column;
    }

    .sidebar a {
        color: white;
        text-decoration: none;
        margin-bottom: 10px;
        font-size: 18px;
    }

    .sidebar hr {
        border: none;
        height: 2px;
        background-color: #ffffff;
        margin: 20px 0;
        opacity: 0.5;
        width: 100%;
    }

    .sidebar a:not(.logo-link):hover {
        background-color: #273f39;
        padding-left: 10px;
        border-radius: 5px;
        transition: all 0.3s ease;
        color: white;
    }

    .dashboard {
        padding: 40px;
    }

    .logo-link {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    /* New styles for the logo */
    .sidebar .logo {
        width: 200px; 
        height: auto;
        margin-bottom: 20px;
    }
</style>


    <!-- Sidebar -->
    <div class="sidebar">
        <a href="/" class="logo-link">
            <img src="images/logo.png" alt="Logo" class="logo">
        </a>
        <hr>
        <a href="#" class="nav-link">SCHEDULE</a>
        <a href="#" class="nav-link">ATTENDANCE</a>

        <!-- Dropdown for LEARN -->
        <div class="nav-item">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#learnDropdown" aria-expanded="false">
                LEARN
            </a>
            <div class="collapse" id="learnDropdown">
                <a href="#" class="nav-link ps-4">Activities</a>
                <a href="#" class="nav-link ps-4">Quizzes</a>
                <a href="#" class="nav-link ps-4">Grades</a>
            </div>
        </div>

        <!-- Dropdown for ABOUT -->
        <div class="nav-item">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#aboutDropdown" aria-expanded="false">
                ABOUT
            </a>
            <div class="collapse" id="aboutDropdown">
                <a href="#" class="nav-link ps-4">History</a>
                <a href="#" class="nav-link ps-4">Team</a>
                <a href="#" class="nav-link ps-4">Mission</a>
            </div>
        </div>
    </div>