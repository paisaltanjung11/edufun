<div class="container d-flex justify-content-center gap-20">
    @foreach ($authors as $author)
    <div class="card border-0 text-center" style="width: 30rem;">
        <!-- Link dan gambar dengan radius dan shadow -->
        <a href="{{ route('writer_detail.view', $author->id) }}" class="d-flex justify-content-center mb-3">
            <img src="{{ asset('images/author/' . $author->id . '.png') }}" 
                 class="rounded-circle shadow" 
                 style="width: 300px; height: 300px; object-fit: cover; border-radius: 50%;" 
                 alt="{{ $author->name }}">
        </a>
        
        <!-- Informasi nama dan spesialisasi penulis -->
        <div class="card-body p-0">
            <h2 class="card-text fw-bold mb-1">{{ $author->name }}</h2>
            <p class="card-text text-muted" style="font-size: 1.2em;">{{ $author->specialist }}</p>
        </div>
    </div>
    @endforeach
</div>
