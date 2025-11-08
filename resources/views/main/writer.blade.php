@extends('layouts.master')
@section('content')
    <style>
        .writers-page {
            min-height: 100vh;
            background: linear-gradient(135deg, #0a0e3a 0%, #1a1f5c 25%, #2d1b4e 50%, #1a1f5c 75%, #0a0e3a 100%);
            padding: 80px 0 100px;
            position: relative;
            overflow: hidden;
        }

        .writers-page::before {
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

        .writers-header {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
            z-index: 2;
        }

        .writers-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 1rem;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
            letter-spacing: -0.02em;
        }

        .writers-subtitle {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
            max-width: 600px;
            margin: 0 auto;
        }

        .writers-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .writer-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 40px 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            will-change: transform;
            transform: translateZ(0);
            contain: layout style paint;
        }

        .writer-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.05), transparent);
            transition: left 0.6s;
        }

        .writer-card:hover {
            transform: translateY(-12px) translateZ(0);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
            border-color: rgba(100, 150, 255, 0.3);
        }

        .writer-card:hover::before {
            left: 100%;
        }

        .writer-photo-wrapper {
            position: relative;
            display: inline-block;
            margin-bottom: 24px;
        }

        .writer-photo {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            will-change: transform;
            transform: translateZ(0);
        }

        .writer-card:hover .writer-photo {
            transform: scale(1.05) translateZ(0);
            border-color: rgba(100, 150, 255, 0.5);
            box-shadow: 0 12px 40px rgba(100, 150, 255, 0.3);
        }

        .writer-photo-glow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(100, 150, 255, 0.3) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.4s ease;
            pointer-events: none;
        }

        .writer-card:hover .writer-photo-glow {
            opacity: 1;
        }

        .writer-name {
            font-size: 1.75rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 8px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .writer-specialist {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 20px;
            font-weight: 500;
        }

        .writer-stats {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 20px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .writer-card:hover .writer-stats {
            background: rgba(100, 150, 255, 0.1);
            border-color: rgba(100, 150, 255, 0.3);
        }

        .writer-articles-count {
            font-size: 1.1rem;
            font-weight: 700;
            color: #ffffff;
        }

        .writer-articles-label {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .writer-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .writer-link:hover {
            text-decoration: none;
            color: inherit;
        }

        @media (max-width: 768px) {
            .writers-title {
                font-size: 2.5rem;
            }

            .writers-subtitle {
                font-size: 1rem;
            }

            .writers-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .writer-photo {
                width: 150px;
                height: 150px;
            }

            .writer-photo-glow {
                width: 170px;
                height: 170px;
            }
        }
    </style>

    <div class="writers-page">
        <div class="container">
            <div class="writers-header">
                <h1 class="writers-title">Our Writers</h1>
                <p class="writers-subtitle">Meet our expert contributors who share their knowledge and expertise</p>
            </div>

            <div class="writers-grid">
                @foreach ($authors as $author)
                    <a href="{{ route('writer_detail.view', $author->id) }}" class="writer-link">
                        <div class="writer-card">
                            <div class="writer-photo-wrapper">
                                <div class="writer-photo-glow"></div>
                                <img src="{{ asset('images/author/' . $author->id . '.png') }}" alt="{{ $author->name }}"
                                    class="writer-photo">
                            </div>
                            <h2 class="writer-name">{{ $author->name }}</h2>
                            <p class="writer-specialist">{{ $author->specialist }}</p>
                            <div class="writer-stats">
                                <span class="writer-articles-count">{{ $author->article_count ?? $author->article->count() }}</span>
                                <span class="writer-articles-label">Articles</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection