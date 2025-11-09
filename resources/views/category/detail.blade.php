<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }} - EduFun</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet">
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
                        <a class="nav-link dropdown-toggle active" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            @foreach($categories as $cat)
                                <li><a class="dropdown-item" href="/category/{{ $cat->id }}">{{ $cat->name }}</a></li>
                            @endforeach
                        </ul>
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
        <!-- Category Header -->
        <div class="container category-header">
            <h1 class="category-title">{{ $category->name }}</h1>
        </div>

        <!-- Articles Section -->
        <div class="container">
            <div class="row">
                @foreach($subjects as $subject)
                <!-- Article: {{ $subject->name }} -->
                <div class="col-12">
                    <div class="article-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ $subject->image_url }}" alt="{{ $subject->name }}" class="article-image" style="height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="article-content">
                                    <h2 class="article-title">{{ $subject->name }}</h2>
                                    <p class="article-meta">{{ $subject->created_at->format('d M Y') }} | by: {{ $subject->user->name }}</p>
                                    <p class="article-description">
                                        {{ $subject->description }}
                                    </p>
                                    <a href="#" class="read-more-btn">read more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
