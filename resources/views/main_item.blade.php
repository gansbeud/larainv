<x-app-layout>
        {{-- Konten https://dashboard-tailwindcomponents.netlify.app/tables/ --}}
    
        <div class="flex flex-1 flex-col overflow-hidden">
            <div class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

                <div class="container mx-auto px-6 ">

                    
                    <livewire:datatable
                        model="App\Models\Item"
                        sort="id|asc"
                        include="id, sku, category, name, brandname, price, qty "
                        searchable="sku, category, name, brandname"
                        hideable="select"
                        exportable
                    />



                </div>
            </div>
        </div>
    
        {{--
        <main class="main flex flex-col flex-grow -ml-64 md:ml-0 transition-all duration-150 ease-in">
           <header class="header bg-white shadow py-4 px-4">
                <div class="header-content flex items-center flex-row">
                    <form action="#">
                        <div class="hidden md:flex relative">
                            <div
                                class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
    
                            <input id="search" type="text" name="search"
                                class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-300 w-full h-10 focus:outline-none focus:border-indigo-400"
                                placeholder="Search..." />
                        </div>
                        <div class="flex md:hidden">
                            <a href="#" class="flex items-center justify-center h-10 w-10 border-transparent">
                                <svg class="h-6 w-6 text-gray-500" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </a>
                        </div>
                    </form>
                    <div class="flex ml-auto">
                        <a href class="flex flex-row items-center">
                            <img src="https://pbs.twimg.com/profile_images/378800000298815220/b567757616f720812125bfbac395ff54_normal.png"
                                alt class="h-10 w-10 bg-gray-200 border rounded-full" />
                            <span class="flex flex-col ml-2">
                                <span class="truncate w-20 font-semibold tracking-wide leading-none">John Doe</span>
                                <span class="truncate w-20 text-gray-500 text-xs leading-none mt-1">Manager</span>
                            </span>
                        </a>
                    </div>
                </div>
            </header>
            <div class="main-content flex flex-col flex-grow p-4">
                <h1 class="font-bold text-2xl text-gray-700">Dashboard</h1>
    
                <div class="flex flex-col flex-grow border-4 border-gray-400 border-dashed bg-white rounded mt-4">
                    DISINI CONTENT 
                    ah
                </div>
            <footer class="footer px-4 py-6">
                <div class="footer-content">
                    <p class="text-sm text-gray-600 text-center">© Brandname 2020. All rights reserved. <a
                            href="https://twitter.com/iaminos">by iAmine</a></p>
                </div>
            </footer>
        </main>
        --}}
    </div>
</x-app-layout>
