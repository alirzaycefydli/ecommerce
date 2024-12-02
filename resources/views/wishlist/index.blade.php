<x-app-layout>
    <!-- Wishlist Starts-->
    <section class="section-wishlist py-[50px] max-[1199px]:py-[35px]">
        @if(!empty($wishlist))
            <div
                class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap w-full mb-[-24px] bb-wish-rightside">
                    @foreach($wishlist as $product)
                        <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px] bb-wishlist">
                            <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                <div
                                    class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                    <a href="javascript:void(0)">
                                        <div
                                            class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                            <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                                 src="{{$product->primaryImage->image_path}}" alt="product-1">
                                            <img
                                                class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                src="{{$product->primaryImage->image_path}}" alt="product-1">
                                        </div>
                                    </a>
                                    <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">

                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <form action="{{route('wishlist.destroy',$product)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="Remove From Cart"
                                                        class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-delete-bin-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </button>
                                            </form>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Add To Cart"
                                               class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bb-pro-contact p-[20px]">
                                    <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                        <p class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">{{$product->brand}}</p>
                                        <span class="bb-pro-rating">
                                        @php
                                            $average_review=$product->reviews->avg('rating');
                                        @endphp
                                            @for($i = 0; $i < (int)$average_review; $i++)
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            @endfor
                                            @for($i = 0; $i < 5 - (int)$average_review; $i++)
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                            @endfor
                                    </span>
                                    </div>
                                    <h4 class="mb-[8px] text-[16px] leading-[18px]">
                                        <a href="#"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">{{$product->title}}</a>
                                    </h4>
                                    <div class="bb-price flex flex-wrap justify-between">
                                        <div class="inner-price mx-[-3px]">
                                        <span
                                            class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">${{number_format($product->discounted_price,2)}}</span>
                                            <span
                                                class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">${{number_format($product->price,2)}}</span>
                                        </div>
                                        <span
                                            class="last-items text-[14px] text-[#686e7d]">{{$product->quantity}} Pcs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p>No products found</p>
        @endif
    </section>
    <!-- Wishlist Ends-->
</x-app-layout>
