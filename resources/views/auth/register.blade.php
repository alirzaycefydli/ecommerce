<x-app-layout>
    <!-- Register Starts -->
    <section class="section-register py-[50px] max-[1199px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full">
                    <div class="bb-register border-[1px] border-solid p-[30px] rounded-[20px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="flex flex-wrap">
                            <div class="w-full px-[12px]">
                                <div class="section-title mb-[20px] pb-[20px] z-[5] relative flex flex-col items-center text-center max-[991px]:pb-[0]">
                                    <div class="section-detail max-[991px]:mb-[12px]">
                                        <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">Register</h2>
                                        <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">Best place to buy and sell digital products</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-half px-[12px]">
                                <form method="post" action="{{route('auth.register')}}" class="flex flex-wrap mx-[-12px]">
                                    @csrf
                                    <div class="bb-register-wrap w-[50%] max-[575px]:w-full px-[12px] mb-[24px]">
                                        <label class="inline-block mb-[6px] text-[14px] leading-[18px] font-medium text-[#3d4750]">Name*</label>
                                        <input type="text" name="name" placeholder="Enter your name" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]" required>
                                    </div>
                                    <div class="bb-register-wrap w-[50%] max-[575px]:w-full px-[12px] mb-[24px]">
                                        <label class="inline-block mb-[6px] text-[14px] leading-[18px] font-medium text-[#3d4750]">Email*</label>
                                        <input type="email" name="email" placeholder="Enter your Email" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]" required>
                                    </div>
                                    <div class="bb-register-wrap w-[50%] max-[575px]:w-full px-[12px] mb-[24px]">
                                        <label class="inline-block mb-[6px] text-[14px] leading-[18px] font-medium text-[#3d4750]">Password*</label>
                                        <input type="password" name="password" placeholder="Enter your password" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]" required>
                                    </div>
                                    <div class="bb-register-wrap w-[50%] max-[575px]:w-full px-[12px] mb-[24px]">
                                        <label class="inline-block mb-[6px] text-[14px] leading-[18px] font-medium text-[#3d4750]">Confirm Your Password*</label>
                                        <input type="password" name="password_confirmation" placeholder="Enter your password" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]" required>
                                    </div>
                                    <div class="bb-register-button w-full flex justify-center">
                                        <button type="submit" class="bb-btn-2 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[4px] px-[20px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register Ends -->
</x-app-layout>
