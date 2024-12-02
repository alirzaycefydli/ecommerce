<x-app-layout>
    <x-slider></x-slider>
    <!-- New Product Area Starts -->
    <section class="section-product-tabs overflow-hidden py-[50px] max-[1199px]:py-[35px]">
        <div
            class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div
                        class="section-title mb-[20px] pb-[20px] z-[5] relative flex justify-between max-[991px]:pb-[0] max-[991px]:flex-col max-[991px]:justify-center max-[991px]:text-center"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="section-detail max-[991px]:mb-[12px]">
                            <h2
                                class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">
                                New <span class="text-[#6c7fd8]">Arrivals</span></h2>
                            <p
                                class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">
                                Shop online for new arrivals and get free shipping!</p>
                        </div>


                    </div>
                </div>
            </div>
            <!-- Single Product -->
            <div class="flex flex-wrap w-full mb-[-24px]">
                <div class="w-full">
                    <div class="tab-content">
                        <div class="flex flex-wrap w-full">
                            @foreach($products as $product)

                                <div
                                    class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]"
                                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
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
                                                        src="{{$product->primaryImage->image_path}}"
                                                        alt="{{$product->title}}">
                                                    <img
                                                        class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                        src="{{$product->primaryImage?->image_path}}" alt="{{$product->title}}">
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
                                                    <form action="#" method="POST"
                                                          class="w-[35px] h-[35px] flex items-center justify-center">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value=""/>
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

                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Product -->
        </div>
    </section>
    <!-- New Product Area End -->
</x-app-layout>
