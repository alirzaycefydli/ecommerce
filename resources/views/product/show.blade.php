<x-app-layout>
    <!-- Product Page Starts-->
    <section class="section-product py-[50px] max-[1199px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full">
                    <div class="bb-single-pro mb-[24px]">
                        <div class="flex flex-wrap w-full">
                            <div class="min-[992px]:w-[41.66%] w-full px-[12px] mb-[24px]">
                                <div class="single-pro-slider sticky top-[0] p-[15px] border-[1px] border-solid border-[#eee] rounded-[24px] max-[991px]:max-w-[500px] max-[991px]:m-auto">
                                    <div class="single-product-cover">
                                        @foreach($product->images as $images)
                                        <div class="single-slide zoom-image-hover rounded-tl-[15px] rounded-tr-[15px]">
                                            <img class="img-responsive rounded-tl-[15px] rounded-tr-[15px]" src="{{$images->image_path}}" alt="product-1">
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="single-nav-thumb w-full overflow-hidden mx-[-8px]">
                                        @foreach($product->images as $images)
                                        <div class="single-slide px-[10px] block">
                                            <img class="img-responsive border-[1px] border-solid border-transparent transition-all duration-[0.3s] ease delay-[0s] cursor-pointer rounded-[15px]" src="{{$images->image_path}}" alt="product-1">
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="min-[992px]:w-[58.33%] w-full px-[12px] mb-[24px]">
                                <div class="bb-single-pro-contact">
                                    <div class="bb-sub-title mb-[20px]">
                                        <h4 class="font-quicksand text-[22px] tracking-[0.03rem] font-bold leading-[1.2] text-[#3d4750]">{{$product->title}}</h4>
                                    </div>
                                    <div class="bb-single-rating mb-[12px]">
                                        <span class="bb-pro-rating mr-[10px]">
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                        </span>
                                        <span class="bb-read-review">
                                            |&nbsp;&nbsp;<a href="#bb-spt-nav-review" class="font-Poppins text-[15px] font-light leading-[28px] tracking-[0.03rem] text-[#6c7fd8]">992 Ratings</a>
                                        </span>
                                    </div>
                                    <p class="font-Poppins text-[15px] font-light leading-[28px] tracking-[0.03rem]">{{$product->short_description}}
                                    </p>
                                    <div class="bb-single-price-wrap flex justify-between py-[10px]">
                                        <div class="bb-single-price py-[15px]">
                                            <div class="price mb-[8px]">
                                                <h5 class="font-quicksand leading-[1.2] tracking-[0.03rem] text-[20px] font-extrabold text-[#3d4750]">${{number_format($product->discounted_price,2)}} <span class="text-[#3d4750] text-[20px]">-{{$product->discount_percent}}%</span></h5>
                                            </div>
                                            <div class="mrp">
                                                <p class="font-Poppins text-[16px] font-light text-[#686e7d] leading-[28px] tracking-[0.03rem]"><span class="text-[15px] line-through">${{number_format($product->price,2)}}</span></p>
                                            </div>
                                        </div>
                                        <div class="bb-single-price py-[15px]">
                                            <div class="stock">
                                                <span class="text-[18px] text-[#6c7fd8]">In stock ({{$product->quantity}})</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bb-single-pro-weight mb-[24px]">
                                        <div class="pro-title mb-[12px]">
                                            <h4 class="font-quicksand leading-[1.2] tracking-[0.03rem] text-[16px] font-bold uppercase text-[#3d4750]">Weight</h4>
                                        </div>
                                        <div class="bb-pro-variation-contant">
                                            <ul class="flex flex-wrap m-[-2px]">
                                                <li class="my-[10px] mx-[2px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer active-variation">
                                                    <span class="font-Poppins text-[#686e7d] font-light text-[14px] leading-[28px] tracking-[0.03rem]">250g</span>
                                                </li>
                                                <li class="my-[10px] mx-[2px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                                    <span class="font-Poppins text-[#686e7d] font-light text-[14px] leading-[28px] tracking-[0.03rem]">500g</span>
                                                </li>
                                                <li class="my-[10px] mx-[2px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                                    <span class="font-Poppins text-[#686e7d] font-light text-[14px] leading-[28px] tracking-[0.03rem]">1kg</span>
                                                </li>
                                                <li class="my-[10px] mx-[2px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                                    <span class="font-Poppins text-[#686e7d] font-light text-[14px] leading-[28px] tracking-[0.03rem]">2kg</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bb-single-qty flex flex-wrap m-[-2px]">
                                        <div class="qty-plus-minus m-[2px] w-[85px] h-[40px] py-[7px] border-[1px] border-solid border-[#eee] overflow-hidden relative flex items-center justify-between bg-[#fff] rounded-[10px]">
                                            <input class="qty-input text-[#777] float-left text-[14px] h-auto m-[0] p-[0] text-center w-[32px] outline-[0] font-normal leading-[35px] rounded-[10px]" type="text" name="bb-qtybtn" value="1">
                                        </div>
                                        <div class="buttons m-[2px]">
                                            <a href="javascript:void(0)" class="bb-btn-2 transition-all duration-[0.3s] ease-in-out h-[40px] flex font-Poppins leading-[28px] tracking-[0.03rem] py-[6px] px-[25px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">View Cart</a>
                                        </div>
                                        <ul class="bb-pro-actions my-[2px] flex">
                                            <li class="bb-btn-group">
                                                <a href="javascript:void(0)" title="heart" class="transition-all duration-[0.3s] ease-in-out w-[40px] h-[40px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] hover:bg-[#6c7fd8] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                    <i class="ri-heart-line text-[16px] leading-[10px] text-[#777]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle transition-all duration-[0.3s] ease-in-out w-[40px] h-[40px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] hover:bg-[#6c7fd8] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                    <i class="ri-eye-line text-[16px] leading-[10px] text-[#777]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-[12px]">
                        <div class="bey-single-accordion border-[1px] border-solid border-[#eee] p-[15px] rounded-[20px]">
                            <div class="bb-accordion style-1 mb-[-24px]">
                                <div class="bb-accordion-item overflow-hidden mb-[24px]">
                                    <h4 class="accordion-head active-arrow m-[0] py-[1rem] px-[1.25rem] text-[#4b5966] text-[16px] leading-[20px] font-medium relative rounded-[15px] border-[1px] border-solid border-[#eee] font-Poppins cursor-pointer tracking-[0] max-[767px]:text-[15px]">
                                        Product Detail
                                    </h4>
                                    <div class="accordion-body p-[1.25rem]">
                                        <div class="bb-details">
                                            <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">{{$product->description}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bb-accordion-item overflow-hidden mb-[24px]">
                                    <h4 class="accordion-head m-[0] py-[1rem] px-[1.25rem] text-[#4b5966] text-[16px] leading-[20px] font-medium relative rounded-[15px] border-[1px] border-solid border-[#eee] font-Poppins cursor-pointer tracking-[0] max-[767px]:text-[15px]">
                                        Reviews
                                    </h4>
                                    <div class="accordion-body p-[1.25rem] hidden">
                                        <div class="bb-reviews">
                                            <div class="reviews-bb-box flex mb-[24px] max-[575px]:flex-col">
                                                <div class="inner-image mr-[12px] max-[575px]:mr-[0] max-[575px]:mb-[12px]">
                                                    <img src="assets/img/reviews/1.jpg" alt="img-1" class="w-[50px] h-[50px] max-w-[50px] rounded-[10px]">
                                                </div>
                                                <div class="inner-contact">
                                                    <h4 class="font-quicksand leading-[1.2] tracking-[0.03rem] mb-[5px] text-[16px] font-bold text-[#3d4750]">Mariya Lykra</h4>
                                                    <div class="bb-pro-rating flex">
                                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                        <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                                    </div>
                                                    <p class="font-Poppins text-[14px] leading-[26px] font-light tracking-[0.03rem] text-[#686e7d]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo,
                                                        hic expedita asperiores eos neque cumque impedit quam, placeat
                                                        laudantium soluta repellendus possimus a distinctio voluptate
                                                        veritatis nostrum perspiciatis est! Commodi!</p>
                                                </div>
                                            </div>
                                            <div class="reviews-bb-box flex mb-[24px] max-[575px]:flex-col">
                                                <div class="inner-image mr-[12px] max-[575px]:mr-[0] max-[575px]:mb-[12px]">
                                                    <img src="assets/img/reviews/2.jpg" alt="img-2" class="w-[50px] h-[50px] max-w-[50px] rounded-[10px]">
                                                </div>
                                                <div class="inner-contact">
                                                    <h4 class="font-quicksand leading-[1.2] tracking-[0.03rem] mb-[5px] text-[16px] font-bold text-[#3d4750]">Saddika Alard</h4>
                                                    <div class="bb-pro-rating flex">
                                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                        <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                                    </div>
                                                    <p class="font-Poppins text-[14px] leading-[26px] font-light tracking-[0.03rem] text-[#686e7d]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo,
                                                        hic expedita asperiores eos neque cumque impedit quam, placeat
                                                        laudantium soluta repellendus possimus a distinctio voluptate
                                                        veritatis nostrum perspiciatis est! Commodi!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bb-reviews-form">
                                            <h3 class="font-quicksand tracking-[0.03rem] leading-[1.2] mb-[8px] text-[20px] font-bold text-[#3d4750]">Add a Review</h3>
                                            <div class="bb-review-rating flex mb-[12px]">
                                                <span class="pr-[10px] font-Poppins text-[15px] font-semibold leading-[26px] tracking-[0.02rem] text-[#3d4750]">Your ratting :</span>
                                                <div class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                                </div>
                                            </div>
                                            <form action="#">
                                                <div class="input-box mb-[24px]">
                                                    <input type="text" placeholder="Name" name="your-name" class="w-full h-[50px] border-[1px] border-solid border-[#eee] pl-[20px] outline-[0] text-[14px] font-normal text-[#777] rounded-[20px] p-[10px]">
                                                </div>
                                                <div class="input-box mb-[24px]">
                                                    <input type="email" placeholder="Email" name="your-email" class="w-full h-[50px] border-[1px] border-solid border-[#eee] pl-[20px] outline-[0] text-[14px] font-normal text-[#777] rounded-[20px] p-[10px]">
                                                </div>
                                                <div class="input-box mb-[24px]">
                                                    <textarea name="your-comment" placeholder="Enter Your Comment" class="w-full h-[100px] border-[1px] border-solid border-[#eee] py-[20px] pl-[20px] pr-[10px] outline-[0] text-[14px] font-normal text-[#777] rounded-[20px] p-[10px]"></textarea>
                                                </div>
                                                <div class="input-button">
                                                    <a href="javascript:void(0)" class="bb-btn-2 transition-all duration-[0.3s] ease-in-out h-[40px] inline-flex font-Poppins leading-[28px] tracking-[0.03rem] py-[4px] px-[15px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">View Cart</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Page Ends -->
</x-app-layout>
