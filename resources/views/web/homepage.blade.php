<x-layout>

  <!-- Products Section -->
  <div class="row mb-4">
    <h3 class="text-center mb-4">Products</h3>
    @foreach($products as $product)
      <div class="col-12 col-md-4 mb-4">
        <div class="card shadow-sm border-0 rounded-lg" style="height: 100%;">
          <!-- Gambar menyesuaikan ukuran asli dan tidak terpotong -->
          <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="card-img-top rounded-top" style="width: 100%; height: 200px; object-fit: contain;">
          <div class="card-body">
            <h5 class="card-title">{{ $product['name'] }}</h5>
            <p class="card-text">{{ Str::limit($product['description'], 120) }}</p>
            <a href="/product/{{ $product['slug'] }}" class="btn btn-primary w-100">Detail</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <!-- Categories Section -->
  <div class="row mb-4">
    <h3 class="text-center mb-4">Categories</h3>
    @foreach($categories as $category)
      <div class="col-12 col-md-4 mb-4">
        <div class="card shadow-sm border-0 rounded-lg" style="height: 100%;">
          <!-- Gambar menyesuaikan ukuran asli dan tidak terpotong -->
          <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="card-img-top rounded-top" style="width: 100%; height: 200px; object-fit: contain;">
          <div class="card-body">
            <h5 class="card-title">{{ $category['name'] }}</h5>
            <p class="card-text">{{ Str::limit($category['description'], 120) }}</p>
            <a href="/category/{{ $category['slug'] }}" class="btn btn-primary w-100">Detail</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>

</x-layout>
