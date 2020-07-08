<div class="might-like-section">
    <div class="container">
        <h2>You might also like...</h2>
        <div class="might-like-grid">
            @foreach ($mightAlsoLike as $product)
                <a href="{{ route('store.show', $product->title) }}" class="might-like-product">
                    <img src="{{ $product->imagePath }}" alt="product">
                    <div class="might-like-product-name">{{ $product->title }}</div>
                    <div class="might-like-product-price">{{ $product->getPrice() }}</div>
                </a>
            @endforeach

        </div>
    </div>
</div>
