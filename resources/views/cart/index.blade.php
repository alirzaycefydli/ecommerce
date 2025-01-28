<x-app-layout>
    @section('js')
        <script src="{{ asset('js/cart.js') }}"></script>
    @endsection
    <!-- Cart Starts-->
    <section class="section-cart py-[50px] max-[1199px]:py-[35px]">
        <div
            class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]">
                <div class="min-[992px]:w-[33.33%] w-full px-[12px] mb-[24px]">
                    <div class="bb-cart-sidebar-block p-[20px] border-[1px] border-solid border-[#eee] rounded-[20px]"
                         data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="bb-sb-title mb-[20px]">
                            <h3
                                class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">
                                Summary</h3>
                        </div>
                        <div class="bb-sb-blok-contact">
                            <form action="#" method="post">
                                <div class="input-box mb-[30px]">
                                    <label
                                        class="mb-[12px] inline-block text-[14px] font-medium text-[#3d4750] leading-[26px]">Country
                                        *</label>
                                    <div
                                        class="custom-select py-[10px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] bg-[#fff] leading-[26px]">
                                        <select>
                                            <option value="option1">Country 1</option>
                                            <option value="option2">Country 2</option>
                                            <option value="option3">Country 3</option>
                                            <option value="option4">Country 4</option>
                                            <option value="option5">Country 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-box mb-[30px]">
                                    <label
                                        class="mb-[12px] inline-block text-[14px] font-medium text-[#3d4750] leading-[26px]">State/Province
                                        *</label>
                                    <div
                                        class="custom-select py-[10px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] bg-[#fff] leading-[26px]">
                                        <select>
                                            <option value="option1">Please Select a region, state</option>
                                            <option value="option2">Region/State 1</option>
                                            <option value="option3">Region/State 2</option>
                                            <option value="option4">Region/State 3</option>
                                            <option value="option5">Region/State 4</option>
                                            <option value="option6">Region/State 5</option>
                                            <option value="option7">Region/State 6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-box mb-[30px]">
                                    <label for="Zip-code"
                                           class="mb-[12px] inline-block text-[14px] font-medium text-[#3d4750] leading-[26px]">Zip/Postal
                                        Code *</label>
                                    <input type="text" placeholder="Zip/Postal Code"
                                           class="w-full py-[10px] px-[15px]  leading-[26px] border-[1px] border-solid border-[#eee] outline-[0] rounded-[10px] text-[14px] font-normal text-[#686e7d] bg-[#fff]"
                                           id="Zip-code">
                                </div>
                            </form>
                            <div class="bb-cart-summary">
                                <div class="inner-summary">
                                    <ul>
                                        <li class="mb-[12px] flex justify-between leading-[28px]">
                                            <span
                                                class="text-left font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-medium">Sub-Total</span>
                                            <span
                                                class="text-right font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-semibold">$80.00</span>
                                        </li>
                                        <li class="mb-[12px] flex justify-between leading-[28px]">
                                            <span
                                                class="text-left font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-medium">Delivery
                                                Charges</span>
                                            <span
                                                class="text-right font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-semibold">$80.00</span>
                                        </li>
                                        <li class="mb-[12px] flex justify-between leading-[28px]">
                                            <span
                                                class="text-left font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-medium">Coupon
                                                Discount</span>
                                            <span
                                                class="text-right font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-semibold">
                                                <a
                                                    class="bb-coupon drop-coupon font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#ff0000] cursor-pointer">Apply
                                                    Coupon</a>
                                            </span>
                                        </li>
                                        <li class="mb-[12px] flex justify-between leading-[28px]">
                                            <div class="coupon-down-box w-full">
                                                <form method="post" class="relative mb-[15px]">
                                                    <input
                                                        class="bb-coupon w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] rounded-[10px]"
                                                        type="text" placeholder="Enter Your coupon Code"
                                                        name="bb-coupon" required>
                                                    <button
                                                        class="bb-btn-2 transition-all duration-[0.3s] ease-in-out my-[8px] mr-[8px] flex justify-center items-center absolute right-[0] top-[0] bottom-[0] font-Poppins leading-[28px] tracking-[0.03rem] py-[2px] px-[12px] text-[13px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]"
                                                        type="submit">Apply
                                                    </button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="summary-total border-t-[1px] border-solid border-[#eee] pt-[15px]">
                                    <ul class="mb-[0]">
                                        <li class="mb-[6px] flex justify-between">
                                            <span
                                                class="text-left font-Poppins text-[16px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Total
                                                Amount</span>
                                            <span
                                                class="text-right font-Poppins text-[16px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">$80.00</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[66.66%] w-full px-[12px] mb-[24px]">
                    <div
                        class="bb-cart-table border-[1px] border-solid border-[#eee] rounded-[20px] overflow-hidden max-[1399px]:overflow-y-auto"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <table class="w-full max-[1399px]:w-[780px]">
                            <thead>
                            <tr class="border-b-[1px] border-solid border-[#eee]">
                                <th
                                    class="font-Poppins p-[12px] text-left text-[16px] font-medium text-[#3d4750] leading-[26px] tracking-[0.02rem] capitalize">
                                    Product
                                </th>
                                <th
                                    class="font-Poppins p-[12px] text-left text-[16px] font-medium text-[#3d4750] leading-[26px] tracking-[0.02rem] capitalize">
                                    Price
                                </th>
                                <th
                                    class="font-Poppins p-[12px] text-left text-[16px] font-medium text-[#3d4750] leading-[26px] tracking-[0.02rem] capitalize">
                                    Quantity
                                </th>
                                <th
                                    class="font-Poppins p-[12px] text-left text-[16px] font-medium text-[#3d4750] leading-[26px] tracking-[0.02rem] capitalize">
                                    Total
                                </th>
                                <th
                                    class="font-Poppins p-[12px] text-left text-[16px] font-medium text-[#3d4750] leading-[26px] tracking-[0.02rem] capitalize">
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr class="border-b-[1px] border-solid border-[#eee]">
                                    <td class="p-[12px]">
                                        <a href="javascript:void(0)">
                                            <div class="Product-cart flex items-center">
                                                <img src="{{$product->primaryImage->image_path}}" alt="new-product-1"
                                                     class="w-[70px] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <span
                                                    class="ml-[10px] font-Poppins text-[14px] font-normal leading-[28px] tracking-[0.03rem] text-[#686e7d]">{{$product->title}}</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="p-[12px]">
                                        <span id="productPrice" data-product-id="{{ $product->id }}"
                                              data-price-per-unit="{{ $product->discounted_price }}"
                                              class="price font-Poppins text-[15px] font-medium leading-[26px] tracking-[0.02rem] text-[#686e7d]">${{number_format($product->discounted_price,2)}}</span>
                                    </td>
                                    <td class="p-[12px]">
                                        <div
                                            class="qty-plus-minus-input w-[85px] h-[45px] py-[7px] border-[1px] border-solid border-[#eee] overflow-hidden relative flex items-center justify-between rounded-[10px]">
                                            <!-- Minus Button -->
                                            <button
                                                class="minus-btn text-[#777] px-[10px] h-[100%] text-[18px] font-bold flex items-center justify-center"
                                                data-product-id="{{ $product->id }}">-
                                            </button>
                                            <!-- Quantity Input -->
                                            <input
                                                class="qty-input text-[#777] float-left text-[14px] h-[auto] m-[0] p-[0] text-center w-[32px] outline-[0] font-normal leading-[35px] rounded-[10px]"
                                                type="text" name="bb-qtybtn" value="{{ $product->quantity }}"
                                                id="productQuantity" data-product-id="{{ $product->id }}"
                                                readonly>
                                            <!-- Plus Button -->
                                            <button
                                                class="plus-btn text-[#777] px-[10px] h-[100%] text-[18px] font-bold flex items-center justify-center"
                                                data-product-id="{{ $product->id }}" max-stock="{{$product->stock}}">
                                                +
                                            </button>
                                        </div>
                                    </td>


                                    <td class="p-[12px]">
                                            <span
                                                class="price total-price-span font-Poppins text-[15px] font-medium leading-[26px] tracking-[0.02rem] text-[#686e7d]">${{number_format($product->discounted_price * $product->quantity,2)}}</span>

                                    </td>
                                    <td class="p-[12px]">
                                        <div class="pro-remove">
                                            <form action="{{route('cart.destroy',$product)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="Remove From Cart">
                                                    <i
                                                        class="ri-delete-bin-line transition-all duration-[0.3s] ease-in-out text-[20px] text-[#686e7d] hover:text-[#ff0000]"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                    <button {{$products->isEmpty() ? 'disabled': ''}}
                       class="bb-btn-2 mt-[24px] inline-flex items-center justify-center check-btn transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]"
                       data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Check Out</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Ends-->
</x-app-layout>
