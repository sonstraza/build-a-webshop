<div class="grid md:grid-cols-3 gap-4 mt-8">
    @foreach($this->product as $product)
        <div class="bg-white rounded-lg shadow p-4 relative">
            <a href="{{ route('product', $product) }}" class="absolute inset-0"></a>
            <img src="{{ $product->image->image_path }}" alt="">
            <h2 class="font-medium text-lg">{{ $product->name }}</h2>
            <span class="text-gray-700 text-sm">{{ $product->price }}</span>
        </div>
    @endforeach
</div>
