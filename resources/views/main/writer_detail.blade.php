@extends('layouts.master')
@section('content')
    <style>
        .writer-detail-page {
            min-height: 100vh;
            background: linear-gradient(135deg, #0a0e3a 0%, #1a1f5c 25%, #2d1b4e 50%, #1a1f5c 75%, #0a0e3a 100%);
            padding: 80px 0 100px;
            position: relative;
            overflow: hidden;
        }

        .writer-detail-page::before {
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

        .writer-profile-section {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
            z-index: 2;
        }

        .writer-profile-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 50px 40px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            will-change: transform;
            transform: translateZ(0);
            contain: layout style paint;
        }

        .writer-profile-photo {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(100, 150, 255, 0.3);
            margin-bottom: 24px;
            box-shadow: 0 12px 40px rgba(100, 150, 255, 0.2);
        }

        .writer-profile-name {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 12px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .writer-profile-specialist {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 20px;
            font-weight: 500;
        }

        .writer-profile-stats {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            background: rgba(100, 150, 255, 0.1);
            border-radius: 50px;
            border: 1px solid rgba(100, 150, 255, 0.3);
        }

        .writer-profile-count {
            font-size: 1.2rem;
            font-weight: 700;
            color: #ffffff;
        }

        .writer-profile-label {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .articles-section {
            position: relative;
            z-index: 2;
        }

        .articles-header {
            margin-bottom: 40px;
        }

        .articles-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ffffff;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            margin-bottom: 8px;
        }

        .articles-subtitle {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .articles-list {
            display: grid;
            gap: 24px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .article-item {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 24px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            display: flex;
            gap: 24px;
            align-items: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            text-decoration: none;
            color: inherit;
            will-change: transform;
            transform: translateZ(0);
            contain: layout style paint;
        }

        .article-item:hover {
            transform: translateX(8px) translateZ(0);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            border-color: rgba(100, 150, 255, 0.3);
            text-decoration: none;
            color: inherit;
        }

        .article-image {
            width: 200px;
            height: 140px;
            border-radius: 12px;
            object-fit: cover;
            flex-shrink: 0;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            will-change: transform;
            transform: translateZ(0);
        }

        .article-item:hover .article-image {
            transform: scale(1.05) translateZ(0);
        }

        .article-content {
            flex: 1;
        }

        .article-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 12px;
            line-height: 1.3;
        }

        .article-meta {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 12px;
        }

        .article-description {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            margin-bottom: 16px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .article-btn {
            display: inline-block;
            padding: 10px 24px;
            background: linear-gradient(135deg, #e63946 0%, #d62839 100%);
            color: #ffffff;
            font-size: 0.9rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 50px;
            box-shadow: 0 4px 16px rgba(230, 57, 70, 0.3);
            transition: all 0.3s ease;
        }

        .article-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(230, 57, 70, 0.4);
            color: #ffffff;
            text-decoration: none;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            max-width: 600px;
            margin: 0 auto;
        }

        .empty-state-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            opacity: 0.5;
        }

        .empty-state-text {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.7);
        }

        @media (max-width: 768px) {
            .writer-profile-card {
                padding: 40px 30px;
            }

            .writer-profile-photo {
                width: 150px;
                height: 150px;
            }

            .writer-profile-name {
                font-size: 2rem;
            }

            .articles-title {
                font-size: 2rem;
            }

            .article-item {
                flex-direction: column;
                text-align: center;
            }

            .article-image {
                width: 100%;
                height: 200px;
            }
        }
    </style>

    <div class="writer-detail-page">
        <div class="container">
            <div class="writer-profile-section">
                <div class="writer-profile-card">
                    <img src="{{ asset('images/author/' . $author->id . '.png') }}" alt="{{ $author->name }}"
                        class="writer-profile-photo">
                    <h1 class="writer-profile-name">{{ $author->name }}</h1>
                    <p class="writer-profile-specialist">{{ $author->specialist }}</p>
                    <div class="writer-profile-stats">
                        <span class="writer-profile-count">{{ $author->article->count() }}</span>
                        <span class="writer-profile-label">Articles Published</span>
                    </div>
                </div>
            </div>

            <div class="articles-section">
                <div class="articles-header">
                    <h2 class="articles-title">Articles by {{ strstr($author->name, " ", true) ?: $author->name }}</h2>
                    <p class="articles-subtitle">Explore all articles written by this author</p>
                </div>

                @if($author->article->count() > 0)
                    <div class="articles-list">
                        @foreach($author->article as $article)
                            <a href="{{ route('readmore.view', $article->id) }}" class="article-item">
                                <img src="{{ asset('images/course/' . $article->id . '.png') }}" alt="{{ $article->title }}"
                                    class="article-image">
                                <div class="article-content">
                                    <h3 class="article-title">{{ $article->title }}</h3>
                                    <div class="article-meta">{{ $article->created_at->format('d M Y') }}</div>
                                    <p class="article-description">{{ substr($article->desc, 0, 150) }}...</p>
                                    <span class="article-btn">Read More</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <div class="empty-state">
                        <div class="empty-state-icon">📝</div>
                        <p class="empty-state-text">No articles published yet</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection