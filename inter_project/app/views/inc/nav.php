<div class="container-fluid" style="background-color:#d88b5d;">
    <nav class=" container navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" id="nav">
            <a class="navbar-brand" href="#" style="color:White;">
                <img src=" <?php echo URLROOT . "assets/imgs/PALATA.png" ?> " alt="" style="width:5%; height:5%; border-radius: 50%; ">
                Palata Kingdom</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav" style=" margin-left: auto;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo URLROOT . 'home/index'; ?>" style="color:White;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:White;">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" <?php echo URLROOT . 'user/login'; ?>" style="color:White;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" <?php echo URLROOT . 'user/register'; ?>" style="color:White;">Register</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:White;">
                            Languages
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Japanese</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="d-flex">