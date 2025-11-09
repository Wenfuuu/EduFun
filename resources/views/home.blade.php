<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - EduFun</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
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
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/category">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/writers">Writers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/popular">Popular</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <!-- Hero Image -->
        <div class="hero-section" style="background-image: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=1200');">
        </div>

        <!-- Articles Section -->
        <div class="container">
            <div class="row">
                <!-- Article 1 - Machine Learning -->
                <div class="col-12">
                    <div class="article-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1555255707-c07966088b7b?w=500" alt="Machine Learning" class="article-image" style="height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="article-content">
                                    <h2 class="article-title">Machine Learning</h2>
                                    <p class="article-meta">18 May 2024 | by: Ida</p>
                                    <p class="article-description">
                                        Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intelligence (AI)...
                                    </p>
                                    <a href="#" class="read-more-btn">read more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article 2 - Human and Computer Interaction -->
                <div class="col-12">
                    <div class="article-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=500" alt="Human Computer Interaction" class="article-image" style="height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="article-content">
                                    <h2 class="article-title">Human and Computer Interaction</h2>
                                    <p class="article-meta">18 May 2024 | by: Sabrina</p>
                                    <p class="article-description">
                                        Human-Computer Interaction atau HCI adalah studi tentang bagaimana manusia berinteraksi dengan...
                                    </p>
                                    <a href="#" class="read-more-btn">read more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p class="mb-0">© EduFun 2025 | Web Programming | Bertrand Geraldo Tjahyadi | 2702229932</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
