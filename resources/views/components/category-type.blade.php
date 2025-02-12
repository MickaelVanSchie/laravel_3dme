<div class="row mb-2">
    <div class="col-md-12">
        <div class="col-header">
            <span class="font-weight-bold">{{ $mainCategory->name }}</span>
        </div>
        @foreach($mainCategory->categoriesWithActiveProducts as $category)
            <a href="/catalogus/{{ $category->name }}">
                <div class="shop-item">
                    {{ $category->name }}
                </div>
            </a>
        @endforeach
    </div>
</div>
