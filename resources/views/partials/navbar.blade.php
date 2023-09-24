<nav class="navbar navbar-expand-lg" style="background-image: linear-gradient(to bottom right, slateblue, rgb(225, 221, 255)) ">
    <div class="container">
        <a href="#" style="width: 5%"><img src="img/Kemendikbud.png" alt="Kemendikbud" width="100%"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link {{ $title === "Home" ? 'active' : '' }} fs-4" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ $title === "Profil" ? 'active' : '' }} fs-4" href="#">Profil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ $title === "Guru" ? 'active' : '' }} fs-4" href="#">Guru</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ $title === "Siswa" ? 'active' : '' }} fs-4" href="#">Siswa</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ $title === "Pendaftaran" ? 'active' : '' }} fs-4" href="/pendaftaran">Pendaftaran</a>
                </li>
            </ul>
        </div>
    </div>
</nav>