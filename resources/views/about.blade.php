<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - EduFun</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="EduFun Logo" style="height: 80px; margin-right: 10px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            @foreach($categories as $category)
                                <li><a class="dropdown-item" href="/category/{{ $category->id }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/writers">Writers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/popular">Popular</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <h1 class="about-title">About EduFun</h1>
            
            <div class="about-content">
                <p class="about-text">
                    EduFun adalah perusahaan pendidikan berbasis teknologi asal Indonesia. EduFun menyediakan layanan akses pendidikan dalam format tulisan berbahasa Indonesia yang disajikan secara online melalui website.
                </p>
                
                <p class="about-text">
                    Hingga Juni 2025, EduFun memiliki lebih dari 10 ribu pengguna. EduFun hadir sebagai bentuk revolusi dari pendidikan di Indonesia dengan mengedepankan cara berpikir kritis, logis, rasional, dan sumber pengetahuan sains yang terintegrasi terhadap semua mahasiswa IT di Indonesia. EduFun bercita-cita mencetak generasi Indonesia yang memahami ilmu pengetahuan dan cinta belajar.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; EduFun 2025 | Web Programming | Your Name | Your NIM</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
