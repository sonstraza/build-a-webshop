<div class="grid md:grid-cols-2 gap-10">
    <div>
        <div>
            <img src="/{{ $this->product->image->image_path }}" alt="">
        </div>
        <div class="grid md:grid-cols-4 gap-4">
            @foreach($this->product->images as $image)
                <img src="/{{ $image->image_path }}" class="rounded" alt="">
            @endforeach
        </div>
    </div>

    <div>
        <h1 class="text-3xl font-medium">{{ $this->product->name }};</h1>
        <div class="text-xl text-gray-700">{{ $this->product->price }};</div>
        <div class="mt-4">{{ $this->product->description }}</div>
    </div>
</div>
