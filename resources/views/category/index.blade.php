<x-app-layout>
    @section('js')
        <script>
            function sortProducts() {
                console.log('first');
                document.getElementById('sort-form').submit()
                console.log('second');

            }
        </script>
    @endsection


    <!-- Shop Section Starts-->
    <section class="section-shop pb-[50px] max-[1199px]:pb-[35px] mt-8">
        <div
            class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]">
                <div class="min-[992px]:w-[25%] w-full px-[12px] mb-[24px]">
                    <div class="bb-shop-wrap border-[1px] border-solid border-[#eee] rounded-[20px] sticky top-[0]">

                        <div class="bb-sidebar-block p-[20px]">
                            <div class="bb-sidebar-title mb-[20px]">
                                <h3
                                    class="font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]">
                                    Categories</h3>
                            </div>
                            <div class="bb-sidebar-contact">
                                <ul>
                                    @foreach($categories as $category)
                                        <li class="relative block mb-[14px]">
                                            <div class="relative">
                                                <!-- Main Categories -->
                                                <a href="{{--{{route('category.show',$category->slug)}}--}} {{route('category.index',[$category->slug])}}"
                                                   class="ml-[30px] block text-[14px] leading-[20px] capitalize cursor-pointer {{ request()->is('categories/'.$category->slug) ? 'text-[#fff] font-bold' : 'font-normal text-[#777]' }}">{{$category->title}}</a>
                                            </div>
                                            <!-- Subcategories -->
                                            <ul class="ml-[40px] mt-[10px]">
                                                @foreach($category->subcategories as $subcategory)
                                                    <li class="mb-[8px]">
                                                        <a href="{{--{{route('category.show',$subcategory->slug)}}--}} {{route('category.index',[$subcategory->slug])}}"
                                                           class="block text-[13px] leading-[18px] capitalize cursor-pointer {{ request()->is('categories/'.$subcategory->slug) ? 'text-[#fff] font-bold' : 'font-normal text-[#777]' }}">{{$subcategory->title}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[75%] w-full px-[12px] mb-[24px]">
                    <div class="bb-shop-pro-inner">
                        <div class="flex flex-wrap mx-[-12px] mb-[-24px]">
                            <div class="w-full px-[12px]">
                                <div
                                    class="bb-pro-list-top mb-[24px] rounded-[20px] flex border-[1px] border-solid border-[#eee] justify-between">
                                    <div class="flex flex-wrap w-full">
                                        <div class="w-[50%] px-[12px] max-[420px]:w-full">
                                            <div class="bb-bl-btn py-[10px] flex max-[420px]:justify-center">
                                                <button type="button"
                                                        class="grid-btn btn-grid-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent mr-[5px] active"
                                                        title="grid">
                                                    <i class="ri-apps-line text-[20px]"></i>
                                                </button>
                                                <button type="button"
                                                        class="grid-btn btn-list-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent"
                                                        title="grid">
                                                    <i class="ri-list-unordered text-[20px]"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="w-[50%] px-[12px] max-[420px]:w-full">
                                            <div
                                                class="bb-select-inner h-full py-[10px] flex items-center justify-end max-[420px]:justify-center">
                                                <div
                                                    class="custom-select w-[130px] mr-[30px] flex justify-end text-[#777] items-center text-[14px] relative max-[420px]:w-[100px] max-[420px]:justify-left">
                                                    <form id="sort-form" method="GET"
                                                          action="">
                                                        @foreach(request()->except('sortBy', 'page') as $key => $value)
                                                            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                                                        @endforeach

                                                        <select name="sortBy" onchange="this.form.submit()"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option disabled selected>Sort By</option>
                                                            <option
                                                                value="name_asc" {{ request('sortBy') == 'name_asc' ? 'selected' : '' }}>
                                                                Name, A to Z
                                                            </option>
                                                            <option
                                                                value="name_desc" {{ request('sortBy') == 'name_desc' ? 'selected' : '' }}>
                                                                Name, Z to A
                                                            </option>
                                                            <option
                                                                value="price_asc" {{ request('sortBy') == 'price_asc' ? 'selected' : '' }}>
                                                                Price, low to high
                                                            </option>
                                                            <option
                                                                value="price_desc" {{ request('sortBy') == 'price_desc' ? 'selected' : '' }}>
                                                                Price, high to low
                                                            </option>
                                                            <option
                                                                value="discount" {{ request('sortBy') == 'discount' ? 'selected' : '' }}>
                                                                Discount, high to low
                                                            </option>
                                                        </select>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product Starts-->
                            @foreach($products as $product)
                                <div
                                    class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]"
                                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                    <div
                                        class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                        <div
                                            class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <span
                                            class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                            <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                        </span>
                                            <a href="{{route('product.show',$product->slug)}}">
                                                <div
                                                    class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                    <img
                                                        class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                                        src="{{--{{$product->primaryImage?->image_path}}--}}"
                                                        alt="{{$product->title}}">
                                                    <img
                                                        class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                        src="{{--{{$product->primaryImage?->image_path}}--}}"
                                                        alt="{{$product->title}}">
                                                </div>
                                            </a>
                                            <ul
                                                class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                                <li
                                                    class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                    <form action="{{route('wishlist.store',$product)}}" method="POST">
                                                        @csrf
                                                        <button title="Add to Wishlist"
                                                                class="w-[35px] h-[35px] flex items-center justify-center">
                                                            <i
                                                                class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                        </button>
                                                    </form>
                                                </li>
                                                <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                    <form action="{{route('cart.store')}}" method="POST"
                                                          class="w-[35px] h-[35px] flex items-center justify-center">
                                                        @csrf
                                                        <input type="hidden" name="product_id"
                                                               value="{{$product->id}}"/>
                                                        <input type="hidden" name="quantity" value="1"/>
                                                        <button type="submit" title="Add to Cart"
                                                                class="w-[35px] h-[35px] flex items-center justify-center">
                                                            <i class="ri-shopping-cart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bb-pro-contact p-[20px]">
                                            <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                                <p class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">{{$product->brand}}</p>
                                                <span class="bb-pro-rating">
                                                <i
                                                    class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i
                                                    class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i
                                                    class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i
                                                    class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i
                                                    class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                            </span>
                                            </div>
                                            <a href="#"
                                               class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">{{$product->title}}</a>
                                            <div class="bb-price flex flex-wrap justify-between">
                                                <div class="inner-price mx-[-3px]">
                                                    <span
                                                        class="old-price px-[3px] text-[14px] text-[#686e7d]">-{{$product->discount_percent}}%</span>
                                                </div>
                                                <span
                                                    class="last-items text-[14px] text-[#686e7d]">${{number_format($product->discounted_price,2)}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Single Product End-->
                        </div>
                        <div class="mt-8 -mb-16">
                            {{ $products->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Shop Section Ends -->

</x-app-layout>
