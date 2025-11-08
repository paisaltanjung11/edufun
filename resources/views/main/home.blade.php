@extends('layouts.master')
@section('content')
    <style>
        .hero-section {
            position: relative;
            min-height: 90vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: linear-gradient(135deg, #0a0e3a 0%, #1a1f5c 25%, #2d1b4e 50%, #1a1f5c 75%, #0a0e3a 100%);
        }

        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .hero-background::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset("images/hero.png") }}') center/cover no-repeat;
            opacity: 0.3;
            filter: brightness(0.7) contrast(1.2);
        }

        .hero-background::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(10, 14, 58, 0.85) 0%, rgba(26, 31, 92, 0.75) 50%, rgba(45, 27, 78, 0.85) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            padding: 80px 0;
        }

        .hero-headline {
            font-size: 4.5rem;
            font-weight: 700;
            color: #ffffff;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
            letter-spacing: -0.02em;
        }

        .hero-subtext {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.7;
            margin-bottom: 2.5rem;
            max-width: 700px;
            text-shadow: 0 1px 10px rgba(0, 0, 0, 0.2);
        }

        .hero-cta {
            display: inline-block;
            padding: 16px 48px;
            background: linear-gradient(135deg, #e63946 0%, #d62839 100%);
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 50px;
            box-shadow: 0 8px 30px rgba(230, 57, 70, 0.4), 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .hero-cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .hero-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(230, 57, 70, 0.5), 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .hero-cta:hover::before {
            left: 100%;
        }

        .hero-image-container {
            position: absolute;
            right: 0;
            top: 0;
            width: 50%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }

        .hero-image-overlay {
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset("images/hero.png") }}') center right/cover no-repeat;
            opacity: 0.4;
            filter: brightness(0.6) contrast(1.3);
        }

        @media (max-width: 992px) {
            .hero-headline {
                font-size: 3rem;
            }

            .hero-subtext {
                font-size: 1.1rem;
            }

            .hero-image-container {
                width: 100%;
                opacity: 0.2;
            }
        }

        @media (max-width: 768px) {
            .hero-headline {
                font-size: 2.5rem;
            }

            .hero-subtext {
                font-size: 1rem;
            }

            .hero-cta {
                padding: 14px 36px;
                font-size: 1rem;
            }
        }
    </style>

    <div class="hero-section">
        <div class="hero-background"></div>
        <div class="hero-image-container">
            <div class="hero-image-overlay"></div>
        </div>
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="hero-headline">Learn Modern IT Topics Easily</h1>
                    <p class="hero-subtext">
                        Discover free, comprehensive IT education covering cutting-edge topics including
                        <strong>Interactive Multimedia</strong> and <strong>Software Engineering</strong>.
                        Build your skills with expert-led content designed for modern developers and tech enthusiasts.
                    </p>
                    <a href="{{ route('popular.view') }}" class="hero-cta">Start Learning</a>
                </div>
            </div>
        </div>
    </div>

    <div class="articles-section" style="padding: 60px 0 100px;">
        <div class="container">
            <h2 class="section-title">Featured Articles</h2>
            <div class="carousel-container">
                <div class="carousel-wrapper">
                    <div class="carousel-track">
                        @foreach ($article as $item)
                            <a href="{{route('readmore.view', $item->id)}}" class="carousel-card-link">
                                <div class="carousel-card">
                                    <div class="card-image-wrapper">
                                        <img src="{{ asset('images/course/' . $item->id . '.png') }}" alt="{{ $item->title }}"
                                            class="card-image">
                                        <div class="card-overlay"></div>
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title">{{ $item->title }}</h5>
                                        <div class="card-meta">{{ $item->created_at->format('d M Y') }} | by
                                            {{ $item->author ? (strstr($item->author->name, " ", true) ?: $item->author->name) : 'Unknown' }}
                                        </div>
                                        <p class="card-description">{{ substr($item->desc, 0, 100) }}...</p>
                                        <span class="card-btn">Read More</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <button class="carousel-btn carousel-btn-left" aria-label="Scroll left">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M15 18l-6-6 6-6" />
                    </svg>
                </button>
                <button class="carousel-btn carousel-btn-right" aria-label="Scroll right">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 18l6-6-6-6" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <style>
        .articles-section {
            background: linear-gradient(135deg, #0a0e3a 0%, #1a1f5c 25%, #2d1b4e 50%, #1a1f5c 75%, #0a0e3a 100%);
            position: relative;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 30px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .carousel-container {
            position: relative;
            padding: 0 50px;
        }

        .carousel-wrapper {
            overflow: hidden;
            position: relative;
            border-radius: 16px;
        }

        .carousel-track {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            overflow-y: hidden;
            scroll-behavior: smooth;
            padding: 10px 0;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .carousel-track>* {
            flex-shrink: 0;
        }

        .carousel-track::-webkit-scrollbar {
            display: none;
        }

        .carousel-card-link {
            flex: 0 0 320px;
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .carousel-card-link:hover {
            text-decoration: none;
            color: inherit;
        }

        .carousel-card {
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            cursor: pointer;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            will-change: transform;
            transform: translateZ(0);
            contain: layout style paint;
        }

        .carousel-card-link:hover .carousel-card {
            transform: translateY(-8px) scale(1.02) translateZ(0);
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.4);
            border-color: rgba(100, 150, 255, 0.3);
        }

        .card-image-wrapper {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
            will-change: transform;
            transform: translateZ(0);
        }

        .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.7) 100%);
            opacity: 0.6;
            transition: opacity 0.3s ease;
        }

        .carousel-card:hover .card-image {
            transform: scale(1.1) translateZ(0);
        }

        .carousel-card:hover .card-overlay {
            opacity: 0.8;
        }

        .card-content {
            padding: 20px;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 8px;
            line-height: 1.3;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-meta {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 12px;
        }

        .card-description {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.5;
            margin-bottom: 16px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-btn {
            display: inline-block;
            padding: 10px 24px;
            background: linear-gradient(135deg, #e63946 0%, #d62839 100%);
            color: #ffffff;
            font-size: 0.9rem;
            font-weight: 600;
            border-radius: 50px;
            box-shadow: 0 4px 16px rgba(230, 57, 70, 0.3);
            transition: all 0.3s ease;
        }

        .carousel-card-link:hover .card-btn {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(230, 57, 70, 0.4);
        }

        .carousel-card-link:hover .card-title {
            color: rgba(100, 150, 255, 1);
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%) translateZ(0);
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            color: #ffffff;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
            z-index: 10;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
            will-change: transform;
        }

        .carousel-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(100, 150, 255, 0.5);
            transform: translateY(-50%) scale(1.1) translateZ(0);
        }

        .carousel-btn-left {
            left: 0;
        }

        .carousel-btn-right {
            right: 0;
        }

        .carousel-btn svg {
            width: 20px;
            height: 20px;
        }

        @media (max-width: 768px) {
            .carousel-container {
                padding: 0 40px;
            }

            .carousel-card-link {
                flex: 0 0 280px;
            }

            .section-title {
                font-size: 2rem;
            }

            .carousel-btn {
                width: 40px;
                height: 40px;
            }

            .carousel-btn svg {
                width: 16px;
                height: 16px;
            }
        }

        @media (max-width: 576px) {
            .carousel-container {
                padding: 0 35px;
            }

            .carousel-card-link {
                flex: 0 0 260px;
            }

            .card-image-wrapper {
                height: 160px;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const track = document.querySelector('.carousel-track');
            const leftBtn = document.querySelector('.carousel-btn-left');
            const rightBtn = document.querySelector('.carousel-btn-right');

            if (!track || !leftBtn || !rightBtn) return;

            const scrollAmount = 340;

            leftBtn.addEventListener('click', () => {
                track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            });

            rightBtn.addEventListener('click', () => {
                track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            });

            let isDown = false;
            let startX;
            let scrollLeft;
            let rafId = null;

            function scrollUpdate(e) {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - track.offsetLeft;
                const walk = (x - startX) * 2;
                
                if (rafId) {
                    cancelAnimationFrame(rafId);
                }
                
                rafId = requestAnimationFrame(() => {
                    track.scrollLeft = scrollLeft - walk;
                });
            }

            track.addEventListener('mousedown', (e) => {
                isDown = true;
                startX = e.pageX - track.offsetLeft;
                scrollLeft = track.scrollLeft;
                track.style.cursor = 'grabbing';
            });

            track.addEventListener('mouseleave', () => {
                isDown = false;
                track.style.cursor = 'grab';
                if (rafId) {
                    cancelAnimationFrame(rafId);
                    rafId = null;
                }
            });

            track.addEventListener('mouseup', () => {
                isDown = false;
                track.style.cursor = 'grab';
                if (rafId) {
                    cancelAnimationFrame(rafId);
                    rafId = null;
                }
            });

            track.addEventListener('mousemove', scrollUpdate);
            
            // Touch support for mobile
            let touchStartX = 0;
            let touchScrollLeft = 0;
            
            track.addEventListener('touchstart', (e) => {
                touchStartX = e.touches[0].pageX - track.offsetLeft;
                touchScrollLeft = track.scrollLeft;
            }, { passive: true });
            
            track.addEventListener('touchmove', (e) => {
                if (!touchStartX) return;
                const x = e.touches[0].pageX - track.offsetLeft;
                const walk = (x - touchStartX) * 2;
                track.scrollLeft = touchScrollLeft - walk;
            }, { passive: true });
        });
    </script>
@endsection