<x-app-layout>
    <x-slot name="header">
        <a wire:navigate href="{{ route('home') }}" >
            <svg class="inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24"><!--!Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc.--><path class="fa-secondary" opacity=".4" fill="#ea4431" d="M109.3 288L416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0-32 32 32 32z"/><path class="fa-primary" fill="#ea4431" d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l160-160c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3L77.3 256 214.6 393.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0l-160-160z"/></svg>
            <span class="p-1">Back to list</span>
        </a>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="overflow-hidden bg-white rounded-lg px-4 py-4 font-poppins dark:bg-gray-800">
                <div class="md:py-6 md:px-6">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-3/5">
                            <div class="sticky top-0 z-50 overflow-hidden ">
                                <div class="relative mb-6 lg:mb-10 lg:h-2/4 ">
                                    <img src="https://i.postimg.cc/PqYpFTfy/pexels-melvin-buezo-2529148.jpg" alt="" class="object-cover w-full lg:h-full ">
                                </div>
                                <div class="relative mb-6 lg:mb-10 lg:h-2/4 ">
                                    <img src="https://i.postimg.cc/PqYpFTfy/pexels-melvin-buezo-2529148.jpg" alt="" class="object-cover w-full lg:h-full ">
                                </div>
                                {{--<div class="flex-wrap hidden md:flex ">
                                    <div class="w-1/2 p-2 sm:w-1/4">
                                        <a href="#" class="block border border-blue-300 dark:border-transparent dark:hover:border-blue-300 hover:border-blue-300">
                                            <img src="https://i.postimg.cc/PqYpFTfy/pexels-melvin-buezo-2529148.jpg" alt="" class="object-cover w-full lg:h-20">
                                        </a>
                                    </div>
                                    <div class="w-1/2 p-2 sm:w-1/4">
                                        <a href="#" class="block border border-transparent dark:border-transparent dark:hover:border-blue-300 hover:border-blue-300">
                                            <img src="https://i.postimg.cc/PqYpFTfy/pexels-melvin-buezo-2529148.jpg" alt="" class="object-cover w-full lg:h-20">
                                        </a>
                                    </div>

                                    <div class="w-1/2 p-2 sm:w-1/4">
                                        <a href="#" class="block border border-transparent dark:border-transparent dark:hover:border-blue-300 hover:border-blue-300">
                                            <img src="https://i.postimg.cc/PqYpFTfy/pexels-melvin-buezo-2529148.jpg" alt="" class="object-cover w-full lg:h-20">
                                        </a>
                                    </div>

                                    <div class="w-1/2 p-2 sm:w-1/4">
                                        <a href="#" class="block border border-transparent dark:border-transparent dark:hover:border-blue-300 hover:border-blue-300">
                                            <img src="https://i.postimg.cc/PqYpFTfy/pexels-melvin-buezo-2529148.jpg" alt="" class="object-cover w-full lg:h-20">
                                        </a>
                                    </div>
                                </div>--}}
                            </div>
                        </div>

                        <div class="w-full md:w-2/5">
                            <div class="lg:pl-20">
                                <div class="mb-4 ">
                                    <div class="mb-6">
                                        <h2 class="max-w-xl mt-2 text-2xl font-bold dark:text-gray-400 md:text-4xl">{{ $item->title }}</h2>
                                        <h3 class="text-lg font-medium text-rose-500 dark:text-rose-200">{{ $item->sub_title }}</h3>
                                    </div>
                                    {{--<div class="flex items-center mb-6">
                                        <ul class="flex mr-2">
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor"
                                                         class="w-4 mr-1 text-red-500 dark:text-gray-400 bi bi-star "
                                                         viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor"
                                                         class="w-4 mr-1 text-red-500 dark:text-gray-400 bi bi-star "
                                                         viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor"
                                                         class="w-4 mr-1 text-red-500 dark:text-gray-400 bi bi-star "
                                                         viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor"
                                                         class="w-4 mr-1 text-red-500 dark:text-gray-400 bi bi-star "
                                                         viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="text-xs dark:text-gray-400 ">(2 customer reviews)</p>
                                    </div>--}}
                                    <p class="max-w-md mb-4 text-gray-700 dark:text-gray-400">{{ $item->description }}</p>
                                    <p class="inline-block mb-4 text-4xl font-bold text-gray-700 dark:text-gray-400 ">
                                        <span>${{ $item->price }}</span>
                                        {{--<span class="text-base font-normal text-gray-500 line-through dark:text-gray-400">$1500.99</span>--}}
                                    </p>
                                   {{-- <p class="text-green-600 dark:text-green-300 ">in stock</p>--}}
                                </div>

                                <div class="mb-8">
                                    <h2 class="text-xl font-bold mb-2">Available Items:</h2>
                                    <div class="grid grid-cols-2">
                                        <x-icons.engine na />
                                        <x-icons.tyres  />
                                        <x-icons.suspension na />
                                        <x-icons.gear-box na />
                                        <x-icons.front-doors na />
                                        <x-icons.rear-doors na />
                                        <x-icons.mirrors na />
                                        <x-icons.head-lights na />
                                        <x-icons.back-lights na />
                                        <x-icons.seats na />
                                    </div>
                                    {{--<div class="flex flex-wrap -mx-2 -mb-2">
                                        <button class="p-1 mb-2 mr-2 border border-transparent hover:border-blue-400 dark:border-gray-800 dark:hover:border-gray-400 ">
                                            <div class="w-6 h-6 bg-cyan-300"></div>
                                        </button>
                                        <button class="p-1 mb-2 mr-2 border border-transparent hover:border-blue-400 dark:border-gray-800 dark:hover:border-gray-400"><div class="w-6 h-6 bg-green-300 "></div>
                                        </button>

                                        <button class="p-1 mb-2 border border-transparent hover:border-blue-400 dark:border-gray-800 dark:hover:border-gray-400">
                                            <div class="w-6 h-6 bg-red-200 "></div>
                                        </button>
                                    </div>--}}
                                </div>

                                {{--<div class="flex items-center mb-8">
                                    <h2 class="w-16 text-xl font-bold dark:text-gray-400">Size:</h2>
                                    <div class="flex flex-wrap -mx-2 -mb-2">
                                        <button class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 dark:border-gray-400 hover:text-blue-600 dark:hover:border-gray-300 dark:text-gray-400">XL</button>
                                        <button class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 hover:text-blue-600 dark:border-gray-400 dark:hover:border-gray-300 dark:text-gray-400">S</button>
                                        <button class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 hover:text-blue-600 dark:border-gray-400 dark:hover:border-gray-300 dark:text-gray-400">M</button>
                                        <button class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 hover:text-blue-600 dark:border-gray-400 dark:hover:border-gray-300 dark:text-gray-400">XS</button>
                                    </div>
                                </div>

                                <div class="w-32 mb-8 ">
                                    <label for="" class="w-full text-xl font-semibold text-gray-700 dark:text-gray-400">Quantity</label>

                                    <div class="relative flex flex-row w-full h-10 mt-4 bg-transparent rounded-lg">
                                        <button class="w-20 h-full text-gray-600 bg-gray-300 rounded-l outline-none cursor-pointer dark:hover:bg-gray-700 dark:text-gray-400 hover:text-gray-700 dark:bg-gray-900 hover:bg-gray-400">
                                            <span class="m-auto text-2xl font-thin">-</span>
                                        </button>
                                        <input type="number" class="flex items-center w-full font-semibold text-center text-gray-700 placeholder-gray-700 bg-gray-300 outline-none dark:text-gray-400 dark:placeholder-gray-400 dark:bg-gray-900 focus:outline-none text-md hover:text-black" placeholder="1">
                                        <button class="w-20 h-full text-gray-600 bg-gray-300 rounded-r outline-none cursor-pointer dark:hover:bg-gray-700 dark:text-gray-400 dark:bg-gray-900 hover:text-gray-700 hover:bg-gray-400"><span class="m-auto text-2xl font-thin">+</span></button>
                                    </div>
                                </div>--}}

                                <div class="flex flex-wrap items-center -mx-4 ">
                                    <div class="w-full px-4 mb-4 lg:w-1/2 lg:mb-0">
                                        <button class="flex items-center justify-center w-full p-4 text-blue-500 border border-blue-500 rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-blue-600 hover:border-blue-600 hover:text-gray-100 dark:bg-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300">
                                            Add to Cart
                                        </button>
                                    </div>
                                    <div class="w-full px-4 mb-4 lg:mb-0 lg:w-1/2">
                                        <button class="flex items-center justify-center w-full p-4 text-blue-500 border border-blue-500 rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-blue-600 hover:border-blue-600 hover:text-gray-100 dark:bg-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300">
                                            Add to wishlist
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
