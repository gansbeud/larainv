<aside
    class="hidden md:block h-screen sticky top-0 sidebar w-1/4  md:shadow transform  transition-transform duration-150 ease-in bg-indigo-500">
    <div class="sidebar-header flex items-center justify-center pt-5">
        <div class="inline-flex">
            <a href="{{ route('dashboard') }}" class="inline-flex flex-row items-center">
                <svg class="stroke-current stroke-2 text-indigo-300 inline-block h-10 w-10" viewBox="0 0 24 24"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                    <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                    <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                    <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                    <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                    <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
                </svg>
                <span class="leading-10 text-gray-100 text-2xl font-bold ml-1 uppercase">Inventory</span>
            </a>
        </div>
    </div>
    <div class="sidebar-content px-4 py-6">
        <ul class="flex flex-col w-full">
            <li class="my-px">
                <a href="/dashboard" class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-700 bg-gray-100">
                    <span class="flex items-center justify-center text-lg text-gray-400">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </span>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li class="my-px">
                <span class="flex font-medium text-sm text-gray-300 px-4 my-2 uppercase">Items</span>
            </li>
            <li class="my-px">
                <a href="{{ route('main_items')}}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                    <span class="flex items-center justify-center text-lg ">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                    </span>
                    <span class="ml-3">Item List</span>
                    <span
                        class="flex items-center justify-center text-xs text-green-500 font-semibold bg-green-100 h-6 px-2 rounded-full ml-auto">
                       @php 
                       use App\Models\Item;

                       $count = Item::count();    
                       echo $count;
                       @endphp
                    </span>
                    {{-- <span
                        class="flex items-center justify-center text-xs text-red-500 font-semibold bg-red-100 h-6 px-2 rounded-full ml-auto">133</span> --}}
                </a>
            </li>

            <li class="my-px">
                <a href="{{ route('add_item') }}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                    <span class="flex items-center justify-center text-lg text-green-400">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                    <span class="ml-3">Edit / Add new</span>
                </a>
            </li>


            @if(Auth::user()->role == "staff") 
            <div class="hidden">
            @else
            <div>
            @endif
                
            <li class="my-px">
                <span class="flex font-medium text-sm text-gray-300 px-4 my-2 uppercase">Warehouse</span>
            </li>
            <li class="my-px">
                <a href="{{ route('report') }}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                    <span class="flex items-center justify-center text-lg ">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </span>
                    <span class="ml-3">Reports</span>
                </a>
            </li>
            <li class="my-px">
                <a href="{{ route('activity') }}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                    <span class="flex items-center justify-center text-lg ">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </span>
                    <span class="ml-3">Activity List</span>
                </a>
            </li>
            <li class="my-px">
                <a href="{{ route('staff') }}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                    <span class="flex items-center justify-center text-lg ">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </span>
                    <span class="ml-3">Warehouse Staff</span>

                </a>
            </li>

            </div>

            <li class="my-px">
                <span class="flex font-medium text-sm text-gray-300 px-4 my-2 uppercase">Account</span>
            </li>
            <li class="my-px">
                <a href="/user/profile"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                    <span class="flex items-center justify-center text-lg ">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <span class="ml-3">Profile</span>
                </a>
            </li>
            <li class="my-px">
                <a href="/user/profile"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                    <span class="flex items-center justify-center text-lg ">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </span>
                    <span class="ml-3">Settings</span>
                </a>
            </li>
            <li class="my-px">
                <form method="POST" action="{{ route('logout') }}"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                    @csrf
                    <span class="flex items-center justify-center text-lg text-red-400" onclick="event.preventDefault();
                    this.closest('form').submit();">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                        </svg>
                    </span>
                    <span class="ml-3" onclick="event.preventDefault();
                    this.closest('form').submit();">Logout</span>
                </form>
                </a>
            </li>
        </ul>
    </div>
</aside>