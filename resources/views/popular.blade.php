<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular - EduFun</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/popular.css') }}" rel="stylesheet">
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
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/popular">Popular</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Popular Section -->
    <section class="popular-section">
        <div class="container">
            <h1 class="page-title">Popular</h1>

            @foreach($subjects as $subject)
                <div class="article-card mb-4">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $subject->image_url }}" class="article-image" alt="{{ $subject->name }}">
                        </div>
                        <div class="col-md-8">
                            <div class="article-content">
                                <h2 class="article-title">{{ $subject->name }}</h2>
                                <p class="article-meta">{{ $subject->created_at->format('d M Y') }} | by: {{ $subject->user->name }}</p>
                                <p class="article-description">{{ Str::limit($subject->description, 200, '...') }}</p>
                                <a href="/subject/{{ $subject->id }}" class="btn btn-read-more">read more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Custom Pagination Links -->
            <div class="custom-pagination">
                @if ($subjects->onFirstPage())
                    <span class="page-link disabled">« Previous</span>
                @else
                    <a href="{{ $subjects->previousPageUrl() }}" class="page-link">« Previous</a>
                @endif

                @for ($i = 1; $i <= $subjects->lastPage(); $i++)
                    @if ($i == $subjects->currentPage())
                        <span class="page-link active">{{ $i }}</span>
                    @else
                        <a href="{{ $subjects->url($i) }}" class="page-link">{{ $i }}</a>
                    @endif
                @endfor

                @if ($subjects->hasMorePages())
                    <a href="{{ $subjects->nextPageUrl() }}" class="page-link">Next »</a>
                @else
                    <span class="page-link disabled">Next »</span>
                @endif
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
