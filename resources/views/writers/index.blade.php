<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writers - EduFun</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/writers.css') }}" rel="stylesheet">
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
                        <a class="nav-link active" href="/writers">Writers</a>
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

    <!-- Writers Section -->
    <section class="writers-section">
        <div class="container">
            <h1 class="page-title">Our Writers:</h1>
            
            <div class="row justify-content-center">
                @foreach($writers as $writer)
                    <div class="col-md-4 mb-5">
                        <a href="/writers/{{ $writer->id }}" class="writer-link">
                            <div class="writer-card text-center">
                                <div class="writer-image-container">
                                    <img src="{{ $writer->image_url }}" alt="{{ $writer->name }}" class="writer-image">
                                </div>
                                <h3 class="writer-name">{{ $writer->name }}</h3>
                                <p class="writer-specialty">Spesialis {{ $writer->subjects->first()->category->name ?? 'General' }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; EduFun 2025 | Web Programming | Bertrand Geraldo Tjahyadi | 2702229932</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
