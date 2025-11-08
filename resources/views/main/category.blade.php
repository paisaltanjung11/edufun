@extends('layouts.master')
@section('content')
    <style>
        .category-page {
            min-height: 100vh;
            background: linear-gradient(135deg, #0a0e3a 0%, #1a1f5c 25%, #2d1b4e 50%, #1a1f5c 75%, #0a0e3a 100%);
            padding: 80px 0 100px;
            position: relative;
            overflow: hidden;
        }

        .category-page::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 50%, rgba(100, 150, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(138, 43, 226, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .category-header {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
            z-index: 2;
        }

        .category-page-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 1rem;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
            letter-spacing: -0.02em;
        }

        .category-page-subtitle {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
            max-width: 600px;
            margin: 0 auto;
        }

        .category-content {
            position: relative;
            z-index: 2;
        }

        @media (max-width: 768px) {
            .category-page-title {
                font-size: 2.5rem;
            }

            .category-page-subtitle {
                font-size: 1rem;
            }
        }
    </style>

    <div class="category-page">
        <div class="container">
            @if($category)
            <div class="category-header">
                <h1 class="category-page-title">{{ $category->name }}</h1>
                <p class="category-page-subtitle">Explore articles and courses in this category</p>
            </div>

            <div class="category-content">
                @if($category->article && $category->article->count() > 0)
                    @include('components.article_card', ['article' => $category->article])
                @else
                    <p style="color: white; text-align: center; padding: 40px;">No articles found in this category.</p>
                @endif
            </div>
            @else
            <div class="category-header">
                <h1 class="category-page-title">Category Not Found</h1>
            </div>
            @endif
        </div>
    </div>
@endsection