@include('components.layout')
    <section class="flex flex-row text-lg font-meduim">
      
                <div class=" h-screen w-1/6 flex flex-col bg-teal-700 px-3 text-white">
                    <div class="border-b-2 border-teal-100 flex flex-row py-4 ">
                        <div class="w-20 h-20 rounded-full overflow-hidden flex justify-center">
                            <img src="https://cdn.dribbble.com/users/879758/screenshots/6112092/media/930a3a615014e0158261197e6917f1c5.png"
                                alt="img">
                        </div>
                        <p class="my-5 ml-4">BACKEND</p>

                    </div>
                    <div class="border-b-2 border-teal-100 flex flex-row py-2 ">
                        <div class=" w-12 h-12 rounded-full overflow-hidden flex justify-center bg-slate-500">
                            <svg width="40px" height="40px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" fill="#000000" stroke="#000000" stroke-width="3.072">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M512 616.2m-10 0a10 10 0 1 0 20 0 10 10 0 1 0-20 0Z" fill="#f50e0a"></path>
                                    <path d="M511.6 656.9m-10 0a10 10 0 1 0 20 0 10 10 0 1 0-20 0Z" fill="#f50e0a">
                                    </path>
                                    <path d="M512.4 697.7m-10 0a10 10 0 1 0 20 0 10 10 0 1 0-20 0Z" fill="#f50e0a">
                                    </path>
                                    <path
                                        d="M512 130.8c42.1 0 81.7 16.4 111.5 46.2s46.2 69.4 46.2 111.5-16.4 81.7-46.2 111.5c-29.8 29.8-69.4 46.2-111.5 46.2s-81.7-16.4-111.5-46.2c-29.8-29.8-46.2-69.4-46.2-111.5s16.4-81.7 46.2-111.5 69.4-46.2 111.5-46.2m0-44c-111.4 0-201.6 90.3-201.6 201.6C310.4 399.8 400.7 490 512 490c111.4 0 201.6-90.3 201.6-201.6S623.3 86.8 512 86.8zM512.3 523.5L84 681.4v255.7h856V681.4L512.3 523.5zM896 893.1H128V712.6l384.3-142.4L896 712.6v180.5z"
                                        fill="#ffffff"></path>
                                    <path
                                        d="M555.4 585.3l-1.4-0.5v159.9c0 11.7-4.8 22.3-12.4 30-7.7 7.7-18.3 12.4-30 12.4-23.4 0-42.4-19-42.4-42.4V585.3l-1.4 0.5-14.6 5.2v153.8c0 32.2 26.2 58.4 58.4 58.4S570 777 570 744.8V590.5l-14.6-5.2z"
                                        fill="#f50e0a"></path>
                                </g>
                            </svg>
                        </div>
                        <p class="my-4 ml-4 text-sm font-thin">Jayson Rubaya</p>

                    </div>
                    <a href="/"
                        class="px-8 py-2 text-center mt-4 border-2 hover:border-l-8 border-emerald-300 focus:border-l-8 bg-emerald-900 text-white rounded-lg">Home</a>
                    <a href="/dashboard"
                        class="px-8 py-2 text-center mt-1 border-2 hover:border-l-8 border-emerald-300 focus:border-l-8 bg-emerald-900 text-white rounded-lg">Dashboard</a>
                    <a href="/create/product"
                        class=" px-8 py-3 text-center mt-1 border-2 hover:border-l-8 border-emerald-300 focus:border-l-8 bg-emerald-900 text-white rounded-lg text-sm">Create Product</a>
                    <button
                        class="px-8 py-2 text-center mt-1 border-2 hover:border-l-8 border-emerald-300 focus:border-l-8 bg-emerald-900 text-white rounded-lg">Home</button>
                    <button
                        class="px-8 py-2 text-center mt-1 border-2 hover:border-l-8 border-emerald-300 focus:border-l-8 bg-emerald-900 text-white rounded-lg">Home</button>

                </div>
            </div>
        <div class="h-screen bg-opacity-80 w-5/6 bg-teal-100 p-0">
            @yield('contents')
        </div>
    </section>
