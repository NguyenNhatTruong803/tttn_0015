<div>
    <section class="sanpham">
        <div class="container">
            <div>
                <h3 class="text-center my-3 ten">
                    <span><a class="H21" style="text-decoration: none; color:black"
                            href="{{ route('slug.index', ['slug' => $row_cat->slug]) }}">{{ $row_cat->name }}</a></span>
                </h3>
            </div>
            <div class="row carousel slide text-center " id="carouselExampleControls" data-bs-ride="carousel">
                @foreach ($product_list as $product)
                    @php
                        $product_image = $product->images;
                        $image = null;
                        if (count($product_image) > 0) {
                            $image = $product_image[0]['image'];
                        }
                    @endphp

                    <div class="col mx-3">
                        <a href="{{ route('slug.index', ['slug' => $product->slug]) }}"><img
                                src="{{ asset('images/product/' . $image) }}" class="img-fluid "
                                alt="{{ $image }}"></a>
                        <div class="col-12">
                            <span class="ten">{{ $product->name }}</span>
                        </div>
                        <div class="col-12 gia">
                            <p> <strong>{{ $product->price }}đ</strong></p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</div>
