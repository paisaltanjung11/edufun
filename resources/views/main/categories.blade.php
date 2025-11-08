@extends('layouts.master')
@section('content')
  <style>
    .categories-page {
      min-height: 100vh;
      background: linear-gradient(135deg, #0a0e3a 0%, #1a1f5c 25%, #2d1b4e 50%, #1a1f5c 75%, #0a0e3a 100%);
      padding: 80px 0 100px;
      position: relative;
      overflow: hidden;
    }

    .categories-page::before {
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

    .categories-header {
      text-align: center;
      margin-bottom: 60px;
      position: relative;
      z-index: 2;
    }

    .categories-title {
      font-size: 3.5rem;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 1rem;
      text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
      letter-spacing: -0.02em;
    }

    .categories-subtitle {
      font-size: 1.2rem;
      color: rgba(255, 255, 255, 0.8);
      max-width: 600px;
      margin: 0 auto;
    }

    .category-cards-container {
      position: relative;
      z-index: 2;
      max-width: 1200px;
      margin: 0 auto;
    }

    .category-card {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 24px;
      padding: 50px 40px;
      margin-bottom: 40px;
      transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
      position: relative;
      overflow: hidden;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
      will-change: transform;
      transform: translateZ(0);
      contain: layout style paint;
    }

    .category-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.05), transparent);
      transition: left 0.6s;
    }

    .category-card:hover {
      transform: translateY(-8px) translateZ(0);
      box-shadow: 0 16px 48px rgba(0, 0, 0, 0.4);
      border-color: rgba(100, 150, 255, 0.3);
    }

    .category-card:hover::before {
      left: 100%;
    }

    .category-card-content {
      display: flex;
      align-items: center;
      gap: 40px;
    }

    .category-icon {
      width: 120px;
      height: 120px;
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 3.5rem;
      background: linear-gradient(135deg, rgba(100, 150, 255, 0.2) 0%, rgba(138, 43, 226, 0.2) 100%);
      border: 2px solid rgba(100, 150, 255, 0.3);
      flex-shrink: 0;
      box-shadow: 0 8px 24px rgba(100, 150, 255, 0.2);
      position: relative;
    }

    .category-icon::after {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      border-radius: 20px;
      background: linear-gradient(135deg, rgba(100, 150, 255, 0.5), rgba(138, 43, 226, 0.5));
      z-index: -1;
      opacity: 0;
      transition: opacity 0.3s;
    }

    .category-card:hover .category-icon::after {
      opacity: 1;
    }

    .category-info {
      flex: 1;
    }

    .category-name {
      font-size: 2.5rem;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 16px;
      text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    .category-description {
      font-size: 1.1rem;
      color: rgba(255, 255, 255, 0.85);
      line-height: 1.7;
      margin-bottom: 24px;
    }

    .category-btn {
      display: inline-block;
      padding: 14px 36px;
      background: linear-gradient(135deg, #e63946 0%, #d62839 100%);
      color: #ffffff;
      font-size: 1rem;
      font-weight: 600;
      text-decoration: none;
      border-radius: 50px;
      box-shadow: 0 6px 24px rgba(230, 57, 70, 0.4);
      transition: all 0.3s ease;
      border: none;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }

    .category-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s;
    }

    .category-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 32px rgba(230, 57, 70, 0.5);
      color: #ffffff;
      text-decoration: none;
    }

    .category-btn:hover::before {
      left: 100%;
    }

    .neon-accent {
      position: absolute;
      height: 2px;
      background: linear-gradient(90deg, transparent, rgba(100, 150, 255, 0.6), transparent);
      box-shadow: 0 0 10px rgba(100, 150, 255, 0.5);
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 0;
      transition: width 0.4s ease;
    }

    .category-card:hover .neon-accent {
      width: 60%;
    }

    @media (max-width: 992px) {
      .category-card-content {
        flex-direction: column;
        text-align: center;
      }

      .category-icon {
        width: 100px;
        height: 100px;
        font-size: 3rem;
      }

      .categories-title {
        font-size: 2.5rem;
      }
    }

    @media (max-width: 768px) {
      .categories-title {
        font-size: 2rem;
      }

      .categories-subtitle {
        font-size: 1rem;
      }

      .category-card {
        padding: 30px 25px;
      }

      .category-name {
        font-size: 2rem;
      }

      .category-description {
        font-size: 1rem;
      }

      .category-icon {
        width: 80px;
        height: 80px;
        font-size: 2.5rem;
      }
    }
  </style>

  <div class="categories-page">
    <div class="container">
      <div class="categories-header">
        <h1 class="categories-title">Explore Our Categories</h1>
        <p class="categories-subtitle">Choose your learning path and dive deep into modern IT topics</p>
      </div>

      <div class="category-cards-container">
        @foreach($categories as $category)
          <div class="category-card">
            <div class="neon-accent"></div>
            <div class="category-card-content">
              <div class="category-icon">
                @if($category->id == 1)
                  🎨
                @elseif($category->id == 2)
                  💻
                @else
                  📚
                @endif
              </div>
              <div class="category-info">
                <h2 class="category-name">{{ $category->name }}</h2>
                <p class="category-description">
                  @if($category->id == 1)
                    Master the art of creating engaging digital experiences through interactive multimedia. Learn about
                    graphics design, animation, video production, and user interface design to bring your creative visions to
                    life.
                  @elseif($category->id == 2)
                    Build robust, scalable software solutions using modern engineering practices. Explore software
                    architecture, development methodologies, testing strategies, and best practices for creating high-quality
                    applications.
                  @else
                    Explore comprehensive IT education covering the latest technologies and industry best practices. Enhance
                    your skills with expert-led content designed for modern developers.
                  @endif
                </p>
                <a href="{{ route('category.view', $category->id) }}" class="category-btn">View Courses</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection

