<div class="grid md:grid-cols-2 gap-10">
    <div>
        <img src="{{ $product->image }}" alt="">
    </div>
    <div class="grid md:grid-cols-4 gap-4">
        @foreach($product->images as $image)
            <img src="{{ $image }}" class="rounded" alt="">
        @endforeach
    </div>
</div>
