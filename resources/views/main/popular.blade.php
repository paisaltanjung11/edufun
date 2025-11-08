@extends('layouts.master')
@section('content')
    <style>
        .popular-page {
            min-height: 100vh;
            background: linear-gradient(135deg, #0a0e3a 0%, #1a1f5c 25%, #2d1b4e 50%, #1a1f5c 75%, #0a0e3a 100%);
            padding: 80px 0 100px;
            position: relative;
            overflow: hidden;
        }

        .popular-page::before {
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

        .popular-header {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
            z-index: 2;
        }

        .popular-page-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 1rem;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
            letter-spacing: -0.02em;
        }

        .popular-content {
            position: relative;
            z-index: 2;
        }

        .pagination-wrapper {
            position: relative;
            z-index: 2;
        }

        .pagination {
            gap: 8px;
        }

        .pagination .page-link {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #ffffff;
            padding: 10px 16px;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .pagination .page-link:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(100, 150, 255, 0.3);
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(100, 150, 255, 0.2);
        }

        .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, #e63946 0%, #d62839 100%);
            border-color: #e63946;
            color: #ffffff;
            box-shadow: 0 4px 16px rgba(230, 57, 70, 0.4);
        }

        .pagination .page-item.disabled .page-link {
            background: rgba(255, 255, 255, 0.02);
            border-color: rgba(255, 255, 255, 0.05);
            color: rgba(255, 255, 255, 0.3);
            cursor: not-allowed;
            opacity: 0.5;
        }

        .pagination .page-item.disabled .page-link:hover {
            transform: none;
            box-shadow: none;
        }

        /* Previous and Next buttons styling */
        .pagination .page-item:first-child .page-link,
        .pagination .page-item:last-child .page-link {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            font-weight: 600;
            min-width: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .pagination .page-item:first-child .page-link:hover,
        .pagination .page-item:last-child .page-link:hover {
            background: rgba(100, 150, 255, 0.15);
            border-color: rgba(100, 150, 255, 0.4);
            box-shadow: 0 4px 16px rgba(100, 150, 255, 0.3);
        }

        .pagination .page-item:first-child .page-link::before {
            content: '←';
            margin-right: 4px;
        }

        .pagination .page-item:last-child .page-link::after {
            content: '→';
            margin-left: 4px;
        }

        @media (max-width: 768px) {
            .popular-page-title {
                font-size: 2.5rem;
            }
        }
    </style>

    <div class="popular-page">
        <div class="container">
            <div class="popular-header">
                <h1 class="popular-page-title">Popular Articles</h1>
            </div>
            <div class="popular-content">
                @include('components.article_card', ['article'=> $article])
            </div>
            <div class="d-flex justify-content-center pt-3 pagination-wrapper">
                {{$article->links()}}
            </div>
        </div>
    </div>
@endsection