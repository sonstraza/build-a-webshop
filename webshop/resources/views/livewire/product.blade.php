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
        {{ $this->product->name }};
    </div>
</div>
