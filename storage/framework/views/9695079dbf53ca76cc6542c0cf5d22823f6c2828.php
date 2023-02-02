<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="sticky top-0 shadow-lg shadow-indigo-500/40 bg-white z-[5]"> 
        <div class="relative max-w-[640px] sm:max-w-[768px] md:max-w-[1024px] lg:max-w-[1280px] mx-auto md:flex md:justify-between">
            <nav class="flex justify-between items-center py-[15px] w-full mx-2">
                <div class="flex items-center">
                    <div class="flex gap-2 items-center">
                        <img src="asset/Logo.png" alt="" class="px-0 w-[50px]"><span class="font-bold text-xl">Mang<span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 via-red-500 to-blue-500 md:text-black pr-5">Coding</span></span>
                    </div>
                    <div>
                        <ul class="toggle-menu hidden md:flex  text-xl gap-3">
                            <li class="font-bold hover:text-slate-400"><a href="#">Home</a></li>
                        <li class="text-slate-400 hover:text-slate-900"><a href="#">About Us</a></li>
                        <li class="text-slate-400 hover:text-slate-900"><a href="#">Shop</a></li>
                        <li class="text-slate-400 hover:text-slate-900"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!--Dropdown Menu -->
                <div class="dropdown-menu bg-cyan-400 hidden relative hover:block hover:bg-#3e8e41 sm:flex md:hidden">
                    <button class="dropdown-btn bg-#4CAF50 text-white px-[20px] text-[18px] cursor-pointer">More</button>
                    <div class="dropdown-content hidden absolute bg-#f9f9f9 min-w-[160px] z-[1] hover:block shadow-lg shadow-indigo-500/40 font-serif">
                        <a href="#" class="text-black py-[12px] px-[16px] block hover:text-cyan-500 hover:animate-bounce">Home</a>
                        <a href="#" class="text-black py-[12px] px-[16px] block hover:bg-#f1f1f1 hover:text-cyan-500 hover:animate-bounce">About Us</a>
                        <a href="#" class="text-black py-[12px] px-[16px] block hover:bg-#f1f1f1 hover:text-cyan-500 hover:animate-bounce">Shop</a>
                        <a href="#" class="text-black py-[12px] px-[16px] block hover:bg-#f1f1f1 hover:text-cyan-500 hover:animate-bounce">Contact</a>
                        
                    </div>
                </div>
                <!-- Dropdown Menu End -->

                <div class="hidden gap-2 md:gap-5 md:flex">
                    <img src="asset/notif.png" alt="">
                    <img src="asset/search.png" alt="">
                    <button class="regis bg-black text-white py-2 px-8 hover:bg-cyan-500">Registration</button>
                </div>
                <div id="menu-toggle" class="relative flex flex-col mx-4 h-[20px] justify-between md:hidden">
                    <input type="checkbox" class="absolute opacity-0 w-[27px] h-[28px] top-[-5px] cursor-pointer z-[2]">
                    <span class="block bg-black rounded-md w-[25px] h-[3px]"></span>
                    <span class="block bg-black rounded-md w-[25px] h-[3px]"></span>
                    <span class="block bg-black rounded-md w-[25px] h-[3px]"></span>
                </div>
            </nav>

            <!-- Navbar Humburger -->
            <nav class="navbar-humburger hidden max-w-[768px] mx-auto py-5 bg-slate-100 shadow-lg shadow-indigo-500 md:hidden z-50">
                <div class="sub-hum flex justify-between px-20 transtition-all ease-in duration-1000">
                    <div class="toggle-nav flex flex-col gap-5">
                        <ul class="toggle-menu flex flex-col gap-5 font-serif text-lg">
                            <li class="font-bold hover:text-slate-400"><a href="#">Home</a></li>
                            <li class="text-slate-400 hover:text-slate-900"><a href="#">About Us</a></li>
                            <li class="text-slate-400 hover:text-slate-900"><a href="#">Shop</a></li>
                            <li class="text-slate-400 hover:text-slate-900"><a href="#">Contact</a></li>
                        </ul>
                        <img src="asset/notif.png" alt="" class="w-[15px]">
                        <img src="asset/search.png" alt="" class="w-[15px]">
                        <button class="regis bg-black text-white py-2 px-8 hover:bg-cyan-500">Registration</button>
                    </div>
                </div>
            </nav>
        </div>
    </div>

        <!-- Form Registrasi -->
        <div class="get-start hidden relative ">
            <div class="max-w-[500px] mx-auto fixed px-5 py-7 bg-gradient-to-r from-yellow-500 via-red-500 to-blue-500 shadow-lg shadow-indigo-500 flex flex-col items-center gap-5 top-[145px] left-[40px] right-[40px] z-[50]">
                <div>
                    <button class="btn-close absolute top-2 right-2 py-2 px-2 bg-cyan-400 font-serif text-2xl text-black font-bold hover:bg-white hover:text-cyan-500 shadow-lg shadow-indigo-500/40">X</button>
                </div>
                <div class="flex flex-col gap-5 items-center">
                    <h1 class="font-bold text-xl font-serif">REGISTRASI AKUN</h1>
                    <table class="font-serif text-white">
                        <tr>
                            <td>Name</td>
                            <td class="px-1">:</td>
                            <td><input type="text" name="" id="" class="text-black pl-1 my-3"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td class="px-1">:</td>
                            <td><input type="password" name="" id="" class="text-black pl-1 my-3"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td class="px-1">:</td>
                            <td><input type="text" name="" id="" class="text-black pl-1 my-3"></td>
                        </tr>
                        
                        <tr>
                            <td>Contact</td>
                            <td class="px-1">:</td>
                            <td><input type="text" name="" id="" class="text-black pl-1 my-3"></td>
                        </tr>
                    </table>
                    <div>
                        <button class="btn-daftar px-5 py-2 bg-black text-white hover:bg-cyan-500">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form Registrais End -->

    <!-- Navigasi End -->

    <!-- Header Start -->
    <header class="bg-gray-50">
        <div class="relative max-w-[640px] sm:max-w-[768px] md:max-w-[1024px] lg:max-w-[1280px] mx-auto flex flex-col sm:flex-row gap-3 bg-gray-50 pt-32 pb-10">
            <div class="sm:w-[45%] md:w-[55%] lg:w-[50%] mx-2 md:py-20">
                <button class="bg-black text-white text-[13px] rounded-full px-3 py-2 mb-2 hover:bg-cyan-500 md:text-lg">Mangcoding Store</button>
                <h1 class="font-bold text-4xl md:text-6xl">Get the right
                <h1 class="font-bold text-4xl py-2 md:text-6xl md:py-5">Furniture</h1>
                <h1 class="font-bold text-4xl md:text-6xl">For Your Home</h1>
                <p class="text-justify py-3 md:text-xl md:py-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. voluptate ducimus laudantium minus expedita praesentium unde?</p>
                <button class="regis bg-black text-white px-5 py-3 mb-[10px] hover:bg-cyan-500 md:text-lg">Shop Now</button>
                <hr class="w-full border-2 border-black sm:hidden">
                <img src="asset/bawahHome.png" alt="" class="absolute w-[120px] left-[150px] top-[304px] md:w-[200px] md:left-[245px] md:top-[478px]">
            </div>
            <div class="flex flex-col sm:justify-between gap-2 items-center mx-5 md:w-[50%] lg:w-[45%]">
                <img src="asset/header1.png" alt="" class="w-full h-full sm:w-[23%] sm:h-[60%] sm:absolute sm:bottom-[100px] sm:right-[200px] md:right-[250px] lg:right-[320px] z-[1]">
                <img src="asset/header2.png" alt="" class="w-full h-full sm:w-[23%] sm:h-[60%] sm:absolute sm:bottom-[20px] sm:right-5 z-[1]"> 
            </div>
        </div>
        <div class="hidden">
            <img src="asset/garisKeAtas.png" alt="" class="hidden sm:w-auto sm:flex sm:absolute sm:bottom-[190px] md:bottom-[-35px]">
            <img src="asset/garisKeBawah.png" alt="" class="hidden sm:flex sm:w-auto sm:absolute sm:bottom-[210px] md:bottom-[-5px]">
        </div>
        
    </header>
    <!-- Header End -->

    <!-- Sub Nav Start -->
    <div class="bg-[#212121;]">
        <div class="max-w-[640px] sm:max-w-[768px] md:max-w-[1024px] lg:max-w-[1280px] flex flex-col items-center gap-3 bg-[#212121;] mx-auto py-10 sm:grid sm:grid-cols-2 md:grid-cols-4">
            <div class="w-2/2 border-solid border-2 border-white px-6 py-2 mx-2 md:px-4">
                <div class="flex justify-center items-center gap-2">
                    <div> 
                        <img src="asset/high.png" alt="">
                    </div>
                    <div>
                        <p class="text-white">High Quality</p><span class="text-slate-400">Material is strong</span>
                    </div>
                </div>
            </div>

            <div class="w-2/2 border-solid border-2 border-white px-3 py-2 mx-2">
                <div class="flex justify-center items-center gap-2">
                    <div>
                        <img src="asset/waranty.png" alt="">
                    </div>
                    <div>
                        <p class="text-white">Warranty Protection</p><span class="text-slate-400">Over 3 years</span>
                    </div>
                </div>
            </div>

            <div class="w-2/2 border-solid border-2 border-white px-7 py-2 mx-2 md:px-4">
                <div class="flex justify-center items-center gap-2">
                    <div>
                        <img src="asset/free.png" alt="">
                    </div>
                    <div>
                        <p class="text-white">Free Shipping</p><span class="text-slate-400">Order 100 $</span>
                    </div>
                </div>
            </div>

            <div class="w-2/2 border-solid border-2 border-white px-4 py-2 mx-2">
                <div class="flex justify-center items-center gap-2">
                    <div>
                        <img src="asset/24.png" alt="">
                    </div>
                    <div>
                        <p class="text-white">24 / Support</p><span class="text-slate-400">Dedicated Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Nav End -->


    <!-- Content Start -->
    <div class="max-w-[640px] sm:max-w-[768px] md:max-w-[1024px] lg:max-w-[1280px] mx-auto">
        <!-- Ruang Tamu - Ruang Kerja -->
        <div class="py-12 mx-2">
            <label class="text-yellow-400 text-xl md;text-2xl">Room</label>
            <div class="flex justify-between items-center pb-5">
                <h1 class="font-bold text-xl md:text-4xl">Categories</h1>
                <button class="py-2 px-5 border-solid border-2 border-slate-500 hover:bg-slate-500">See more</button>
            </div>
            <div class="flex flex-col sm:flex-row items-center gap-3">
                <div class="relative flex justify-between items-center bg-[#BEDDE2;] w-full h-[180px] md:h-[220px]">
                    <div>
                        <img src="asset/categori1.png" alt="" class="absolute bottom-0 left-0 w-[130px] h-[150px] sm:h-[130px] md:w-[170px] md:h-[190px]">
                    </div>
                    <div class="w-[200px] sm:w-[170px] md:w-[250px]">
                        <h1 class="font-bold text-sm">Ruang Tamu</h1>
                        <p class="pr-3 py-2 text-sm text-justify">Terdapat berbagai macam furniture Ruang Tamu yang dapat anda beli dengan kualitas yang bagus.</p>
                        <button class="regis bg-black text-white py-1 px-3 hover:bg-cyan-500 md:text-lg">Buy Now</button>
                    </div>
                </div>
                <div class="relative flex justify-between items-center bg-[#DEEFE9;] w-full h-[180px] md:h-[220px]">
                    <div>
                        <img src="asset/categori2.png" alt="" class="absolute bottom-0 left-1 w-[130px] h-[150px] sm:h-[130px] md:w-[170px] md:h-[190px]">
                    </div>
                    <div class="w-[200px] sm:w-[170px] md:w-[250px]">
                        <h1 class="font-bold text-sm">Ruang Kerja</h1>
                        <p class="pr-3 py-2 text-sm text-justify">Terdapat berbagai macam furniture Ruang Kerja, Seperti Kursi Kantor, Santay, dan lainnya</p>
                        <button class="regis bg-black text-white py-1 px-3 hover:bg-cyan-500 md:text-lg">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ruang Tamu - Ruang Kerja -->

        <!-- Our Best Seller Product - Start -->
        <div class="mx-2">
            <!-- Our Best Seller Product - 1 -->
            <label class="text-yellow-400 text-xl md:text-2xl">Room</label>
            <div class="flex justify-between items-center pb-5">
                <h1 class="font-bold text-xl md:text-4xl">Our Best Seller</h1>
                <button class="py-2 px-5 border-solid border-2 border-slate-500 hover:bg-slate-500">See more</button>
            </div>
            <div class="grid grid-cols-3 sm:grid-cols-4 gap-3 py-10">
                <div class="">
                    <img src="asset/best1.png" alt="" class="w-full">
                    <div class="py-3">
                        <div class="flex justify-between font-semibold text-[12px] md:text-[16px]">
                            <p>Meja Kerja Kantoran</p>
                            <label for="">$1.120</label>
                        </div>
                        <div class="relative flex justify-between pt-3 text-slate-400 text-[10px] md:text-[14px]">
                            <p>Best Quality</p>
                            <img src="asset/bintang.png" alt="" class="absolute bottom-0 right-6 md:bottom-1 md:right-8">
                            <label>(2.1)</label>
                        </div>
                    </div>
                </div>

                <div class="">
                    <img src="asset/best2.png" alt="" class="w-full">
                    <div class="py-3">
                        <div class="flex justify-between font-semibold text-[12px] md:text-[16px]">
                            <p>Best Soffa</p>
                            <label for="">$1.120</label>
                        </div>
                        <div class="relative flex justify-between pt-3 text-slate-400 text-[10px] md:text-[14px]">
                            <p>Best Quality</p>
                            <img src="asset/bintang.png" alt="" class="absolute bottom-0 right-6 md:bottom-1 md:right-8">
                            <label>(2.1)</label>
                        </div>
                    </div>
                </div>

                <div class="">
                    <img src="asset/best3.png" alt="" class="w-full">
                    <div class="py-3">
                        <div class="flex justify-between font-semibold text-[12px] md:text-[16px]">
                            <p>Meja Kerja</p>
                            <label for="">$1.120</label>
                        </div>
                        <div class="pt-3 text-slate-400 text-[10px] md:text-[14px]">
                            <p>Best Quality</p>
                        </div>
                    </div>
                </div>

                <div class="">
                    <img src="asset/best4.png" alt="" class="w-full">
                    <div class="py-3">
                        <div class="flex justify-between font-semibold text-[12px] md:text-[16px]">
                            <p>Meja Laptop Besar</p>
                            <label for="">$1.120</label>
                        </div>
                        <div class="pt-3 text-slate-400 text-[10px] md:text-[14px]">
                            <p>Best Quality</p>
                        </div>
                    </div>
                </div>

                <div class="">
                    <img src="asset/best5.png" alt="" class="w-full">
                    <div class="py-3">
                        <div class="flex justify-between font-semibold text-[12px] md:text-[16px]">
                            <p>Best Chair</p>
                            <label for="">$1.120</label>
                        </div>
                        <div class="pt-3 text-slate-400 text-[10px] md:text-[14px]">
                            <p>Best Quality</p>
                        </div>
                    </div>
                </div>

                <div class="">
                    <img src="asset/best6.png" alt="" class="w-full">
                    <div class="py-3">
                        <div class="flex justify-between font-semibold text-[12px] md:text-[16px]">
                            <p>Chair Office</p>
                            <label for="">$1.120</label>
                        </div>
                        <div class="pt-3 text-slate-400 text-[10px] md:text-[14px]">
                            <p>Best Quality</p>
                        </div>
                    </div>
                </div>

                <div class="">
                    <img src="asset/best7.png" alt="" class="w-full">
                    <div class="py-3">
                        <div class="flex justify-between font-semibold text-[12px] sm:text-[11px] md:text-[16px]">
                            <p>Kursi Kantoran (Murah)</p>
                            <label for="">$1.120</label>
                        </div>
                        <div class="relative flex justify-between pt-3 text-slate-400 text-[10px] md:text-[14px]">
                            <p>Best Quality</p>
                            <img src="asset/bintang.png" alt="" class="absolute bottom-0 right-6 md:bottom-1 md:right-8">
                            <label>(2.1)</label>
                        </div>
                    </div>
                </div>

                <div class="">
                    <img src="asset/best8.png" alt="" class="w-full">
                    <div class="py-3">
                        <div class="flex justify-between font-semibold text-[12px] md:text-[16px]">
                            <p>Meja Meeting</p>
                            <label for="">$1.120</label>
                        </div>
                        <div class="pt-3 text-slate-400 text-[10px] md:text-[14px]">
                            <p>Best Quality</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Best Seller Product - End -->

        <!-- Simple Woodem Table - Start -->
        <div class="flex flex-col sm:flex-row items-center mx-2 py-5 gap-3">
            <div class="">
                <img src="asset/simple.png" alt="" class="w-full h-full">
                <div class="flex justify-center items-center gap-2 py-2">
                    <button class="text-sm"><input type="radio" name="radio1"></button>
                    <button class="text-sm"><input type="radio" name="radio1"></button>
                    <button class="text-sm"><input type="radio" name="radio1"></button>
                </div>
            </div>
            <div class="sm:w-[95%] md:w-[65%]">
                <h1 class="font-bold text-[24px] sm:text-3xl md:text-5xl">Simpe Woodem Tabel</h1>
                <p class="text-slate-500 text-justify text-[14px] sm:text-[16px] md;text-[20px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, enim. Quia quidem, laboriosam quibusdam recusandae nisi dolorum reprehenderit quis, neque perferendis explicabo vel maiores sunt beatae incidunt cupiditate enim eos?</p>
                <div class="flex justify-between items-center py-4">
                    <button class="regis bg-black text-white py-1 px-3 hover:bg-cyan-500 sm:py-3 sm:px-5 md:text-lg">Buy Now</button>
                    <label for="" class="font-bold text-xl md:text-3xl">$1,300</label>
                </div>
            </div>
        </div>
        <!-- Simple Woodem Table - End -->

        <!-- Find Furniture Now - Start -->
        <div class="relative flex justify-center items-center bg-[#DEEFE9;] py-6 my-20 mx-2">
            <img src="asset/lampu.png" alt="" class="absolute top-0 w-[150px] sm:left-[12px] md:w-[170px]">
            <div class="text-center items-center py-32 sm:py-10 md:w-[69%] z-[1]">
                <h1 class="font-bold text-xl md:text-4xl">Find Furniture Now</h1>
                <p class="py-3 text-slate-400 text-sm md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti velit unde quia temporibus assumenda quidem maxime mollitia dolores quibusdam!</p>
                <button class="regis bg-black text-white py-1 px-4 hover:bg-cyan-500 mb-10 sm:mb-0 md:text-lg">Order Now</button>
            </div>
            <img src="asset/find1.png" alt="" class="absolute bottom-0 w-[150px] sm:right-[12px] md:w-[170px]">
            <img src="asset/garisKeBawahFind.png" alt="" class="absolute w-full hidden sm:flex h-[97%] bottom-3 top-0.5">
        </div>
        <!-- Find Furniture Now - End -->
    </div>
    <!-- Content End -->


    <div class="bg-[#212121;]">
        <div class="max-w-[640px] sm:max-w-[768px] md:max-w-[1024px] lg:max-w-[1280px] flex flex-col mx-auto text-white py-10 md:flex-row md:gap-5">
            <div class="text-justify mx-2 py-10 md:w-[35%]">
                <div class="flex items-center pb-10">
                    <img src="asset/Logo.png" alt="" class="w-10 mr-2 md:w-[50px]"><span class="hover:text-slate-400 md:text-xl">mangcoding Store</span>
                </div>
                <p class="pb-10 sm:text-sm md:text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum sapiente voluptate quos recusandae nulla. Quod esse qui rerum saepe? Odit cum ut recusandae dolores! Assumenda commodi pariatur obcaecati quod ea.</p>
                <div class="flex gap-3">
                    <img src="asset/facebook.png" alt="">
                    <img src="asset/twetter.png" alt="">
                    <img src="asset/linkedin.png" alt="">
                    <img src="asset/instagram.png" alt="">
                </div>
            </div>

            <div class="mx-2">
                <div class="grid grid-cols-3 pb-7">
                    <div class="md:px-10">
                        <div class="pb-10">
                            <h1 class="font-bold text-[15px] pb-3 md:text-xl">Navigation</h1>
                            <div>
                                <ul>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Categories</a></li>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Best Product</a></li>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Cart</a></li>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Wishlist</a></li>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Contact</a></li>
                                </ul>
                            </div>    
                        </div>
                        <div>
                            <h1 class="font-bold text-[15px] pb-3 md:text-xl">Payment method</h1>
                            <div>
                                <ul>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Credit card</a></li>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Paypal</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="pb-10">
                            <h1 class="font-bold text-[15px] pb-3 md:text-xl">Shop</h1>
                            <div>
                                <ul>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Ruang Tamu</a></li>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Ruang Makan</a></li>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Ruang Kerja</a></li>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Ruang Tidur</a></li>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Furniture</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <h1 class="font-bold text-[15px] pb-3 md:text-xl">Setting</h1>
                            <div>
                                <ul>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">My Acount</a></li>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Order</a></li>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Address</a></li>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Password</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="pb-[91px]">
                            <h1 class="font-bold text-[15px] pb-3 md:text-xl">Product</h1>
                            <div>
                                <ul>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Chair</a></li>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Table</a></li>
                                    <li class="hover:text-slate-400 pb-2 text-[12px]"><a href="">Wardrobe</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <h1 class="font-bold text-[15px] pb-3 md:text-xl">Contact</h1>
                            <div>
                                <div class="flex flex-col pb-2">
                                    <img src="asset/lokasi.png" alt="" class="w-3 mr-2"><span class="hover:text-slate-400 text-[12px]">Lokasimu di Jakarta Barat</span>
                                </div>
                                <div class="flex flex-col pb-2">
                                    <img src="asset/email.png" alt="" class="w-3 mr-2"><span class="hover:text-slate-400 text-[12px]">furniture@gmail.com</span>
                                </div>
                                <div class="flex flex-col pb-2">
                                    <img src="asset/telepon.png" alt="" class="w-3 mr-2"><span class="hover:text-slate-400 text-[12px]">0897 8608 8976</span>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="asset/app.js"></script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\Azhar\Kuliah\Semester 5\Pengembangan Aplikasi Berbasis WEB\laravel-web\resources\views/dashboard.blade.php ENDPATH**/ ?>