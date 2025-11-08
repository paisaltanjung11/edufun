<style>
  .article-cards-container {
    padding: 40px 0;
  }

  .article-card-modern {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    overflow: hidden;
    margin-bottom: 30px;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    display: flex;
    flex-direction: row;
    text-decoration: none;
    color: inherit;
    will-change: transform;
    transform: translateZ(0);
    contain: layout style paint;
  }

  .article-card-modern:hover {
    transform: translateY(-8px) translateZ(0);
    box-shadow: 0 16px 48px rgba(0, 0, 0, 0.4);
    border-color: rgba(100, 150, 255, 0.3);
    text-decoration: none;
    color: inherit;
  }

  .article-card-image-wrapper {
    width: 400px;
    height: 220px;
    flex-shrink: 0;
    overflow: hidden;
    position: relative;
  }

  .article-card-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
    will-change: transform;
    transform: translateZ(0);
  }

  .article-card-modern:hover .article-card-image {
    transform: scale(1.1) translateZ(0);
  }

  .article-card-image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.3) 100%);
    opacity: 0.6;
    transition: opacity 0.3s ease;
  }

  .article-card-modern:hover .article-card-image-overlay {
    opacity: 0.8;
  }

  .article-card-content {
    flex: 1;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .article-card-title {
    font-size: 1.75rem;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 12px;
    line-height: 1.3;
    cursor: pointer;
    transition: color 0.3s ease;
  }

  .article-card-modern:hover .article-card-title {
    color: rgba(100, 150, 255, 1);
  }

  .article-card-meta {
    font-size: 0.95rem;
    color: rgba(255, 255, 255, 0.7);
    margin-bottom: 16px;
  }

  .article-card-description {
    font-size: 1rem;
    color: rgba(255, 255, 255, 0.85);
    line-height: 1.6;
    margin-bottom: 20px;
    flex: 1;
  }

  .article-card-btn {
    display: inline-block;
    padding: 12px 32px;
    background: linear-gradient(135deg, #e63946 0%, #d62839 100%);
    color: #ffffff;
    font-size: 0.95rem;
    font-weight: 600;
    border-radius: 50px;
    box-shadow: 0 4px 16px rgba(230, 57, 70, 0.3);
    transition: all 0.3s ease;
    align-self: flex-start;
    border: none;
    cursor: pointer;
  }

  .article-card-modern:hover .article-card-btn {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(230, 57, 70, 0.4);
  }

  @media (max-width: 992px) {
    .article-card-modern {
      flex-direction: column;
    }

    .article-card-image-wrapper {
      width: 100%;
      height: 250px;
    }

    .article-card-content {
      padding: 25px;
    }

    .article-card-title {
      font-size: 1.5rem;
    }
  }

  @media (max-width: 768px) {
    .article-card-image-wrapper {
      height: 200px;
    }

    .article-card-content {
      padding: 20px;
    }

    .article-card-title {
      font-size: 1.3rem;
    }

    .article-card-description {
      font-size: 0.9rem;
    }
  }
</style>

<div class="article-cards-container">
  @foreach ($article as $item)
    <a href="{{route('readmore.view', $item->id)}}" class="article-card-modern">
      <div class="article-card-image-wrapper">
        <img src="{{ asset('images/course/' . $item->id . '.png') }}" alt="{{ $item->title }}" class="article-card-image">
        <div class="article-card-image-overlay"></div>
      </div>

      <div class="article-card-content">
        <div>
          <h3 class="article-card-title">{{ $item->title }}</h3>
          <div class="article-card-meta">{{ $item->created_at->format('d M Y') }} | by
            {{ $item->author ? (strstr($item->author->name, " ", true) ?: $item->author->name) : 'Unknown' }}</div>
          <p class="article-card-description">{{ substr($item->desc, 0, 150) }}...</p>
        </div>
        <span class="article-card-btn">Read More</span>
      </div>
    </a>
  @endforeach
</div>
