<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

<div class="px-4 py-6 mx-auto lg:py-8 sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="relative flex items-center justify-between lg:justify-center lg:space-x-16">
        <ul class="flex items-center space-x-8 lg:flex">
            <li><a href="/" aria-label="Our product" title="Our product"
                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-purple-600">Features</a>
            </li>
            <li><a href="/" aria-label="Enterprise Resource" title="Enterprise Resource"
                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-purple-600">ERP</a>
            </li>
        </ul>
        <a href="/" aria-label="Inventory" title="Invetory" class="inline-flex items-center">
            <svg class="w-8 text-purple-600" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2"
                stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                <rect x="3" y="1" width="14" height="6"></rect>
                <rect x="3" y="17" width="14" height="6"></rect>
                <rect x="14" y="1" width="14" height="6"></rect>
                <rect x="14" y="11" width="14" height="6"></rect>
            </svg>
            <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Inventory App</span>
        </a>
        <ul class="flex items-center space-x-8 lg:flex">
            <li><a href="/" aria-label="About us" title="About us"
                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-purple-600">About
                    us</a></li>

            @if (Route::has('login'))
            @auth
            <a href="{{ url('/dashboard') }}" aria-label="Sign up" title="Sign up"
                class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-purple-600">Dashboard</a>
            </li>
            @else
            <li><a href="{{ route('login') }}" aria-label="Sign in" title="Sign in"
                    class="font-medium tracking-wide text-blue-700 transition-colors duration-200 hover:text-purple-600">Sign
                    in</a></li>

            @if (Route::has('register'))

            @endif
            @endauth
            @endif

        </ul>
        <!-- Mobile menu -->
        <div class="lg:hidden">
            <button aria-label="Open Menu" title="Open Menu"
                class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline hover:bg-deep-purple-50 focus:bg-deep-purple-50">
                <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z">
                    </path>
                    <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z">
                    </path>
                    <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z">
                    </path>
                </svg>
            </button>
            <!-- Mobile menu dropdown 
      <div class="absolute top-0 left-0 w-full">
        <div class="p-5 bg-white border rounded shadow-sm">
          <div class="flex items-center justify-between mb-4">
            <div>
              <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                <svg class="w-8 text-purple-600" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                  <rect x="3" y="1" width="7" height="12"></rect>
                  <rect x="3" y="17" width="7" height="6"></rect>
                  <rect x="14" y="1" width="7" height="6"></rect>
                  <rect x="14" y="11" width="7" height="12"></rect>
                </svg>
                <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
              </a>
            </div>
            <div>
              <button aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                  <path
                    fill="currentColor"
                    d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                  ></path>
                </svg>
              </button>
            </div>
          </div>
          <nav>
            <ul class="space-y-4">
              <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-purple-600">Product</a></li>
              <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-purple-600">Features</a></li>
              <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-purple-600">Pricing</a></li>
              <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-purple-600">About us</a></li>
              <li><a href="/" aria-label="Sign in" title="Sign in" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-purple-600">Sign in</a></li>
              <li>
                <a
                  href="/"
                  class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-600 hover:bg-purple-800 focus:shadow-outline focus:outline-none"
                  aria-label="Sign up"
                  title="Sign up"
                >
                  Sign up
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      -->
        </div>
    </div>
</div>

<div class="relative bg-purple-600">
    <div class="absolute inset-x-0 bottom-0">
        <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
            <path
                d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z">
            </path>
        </svg>
    </div>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
            <h2 class="mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                One Stop Solution,<br class="hidden md:block">
                For Your Business.
                <span class="relative inline-block px-2">
                    <div class="absolute inset-0 transform -skew-x-12 bg-blue-400"></div>
                    <span class="relative text-white-600">No Hassle</span>
                </span>
            </h2>
            <p class="mb-6 text-base text-indigo-100 md:text-lg">The Inventory App helps you step up to the
                technologized inventory system, reducing costs, and make the information goes fast!</p>
            <form class="flex flex-col items-center w-full mb-4 md:flex-row md:px-16">
                <input placeholder="Email" required="" type="text"
                    class="flex-grow w-full h-12 px-4 mb-3 text-white transition duration-200 border-2 border-transparent rounded appearance-none md:mr-2 md:mb-0 bg-deep-purple-900 focus:border-teal-accent-700 focus:outline-none focus:shadow-outline">
                <a href="/"
                    class="inline-flex items-center justify-center w-full h-12 px-6 font-semibold tracking-wide text-white-600 transition duration-200 rounded shadow-md md:w-auto hover:text-deep-purple-900 bg-blue-400 hover:bg-teal-accent-700 focus:shadow-outline focus:outline-none">Submit</a>
            </form>
            <p class="max-w-md mb-10 text-xs tracking-wide text-indigo-100 sm:text-sm sm:mx-auto md:mb-16">Enter your
                email address to order the app and even if you only slightly interested, we'll reach you ASAP!</p>
            <a href="/" aria-label="Scroll down"
                class="flex items-center justify-center w-10 h-10 mx-auto text-white duration-300 transform border border-gray-400 rounded-full hover:text-blue-500 hover:border-teal-accent-400 hover:shadow hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                    <path
                        d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</div>

<div class="flex flex-col items-center justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:pt-16 md:px-0">
    <div class="flex flex-col items-center max-w-2xl md:px-8">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <div>
                <p
                    class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-white-600 uppercase rounded-full bg-blue-400">
                    Brand new
                </p>
            </div>
            <h2
                class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor"
                        class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="192913ce-1f29-4abd-b545-0fbccfd2b0ec" x="0" y="0" width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#192913ce-1f29-4abd-b545-0fbccfd2b0ec)" width="52" height="24"></rect>
                    </svg>
                    <span class="relative">Build</span>
                </span>
                bussiness, and let the app manage your assets!
            </h2>
            <p class="text-base text-gray-700 md:text-lg">
                We prioritize how client happy with our app by keep improving our feature, and user experience.
            </p>
        </div>

    </div>
    <img src="https://infonitya.com/assets/img/services-details-image/im-1.png"
        class="w-full max-w-screen-sm mx-auto rounded shadow-2xl md:w-auto lg:max-w-screen-md" alt="" />
</div>

<div class="relative">
    <img src="https://images.pexels.com/photos/158826/structure-light-led-movement-158826.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
        class="absolute inset-0 object-cover w-full h-full" alt="" />
    <div class="relative bg-gray-900 bg-opacity-75">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col items-center justify-between xl:flex-row">
                <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                    <h2
                        class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                        Made with Laravel 8 <br class="hidden md:block" />
                        collaborating with TailwindCSS <span class="text-blue-500">And Livewire</span>
                    </h2>
                    <p class="max-w-xl mb-4 text-base text-gray-400 md:text-lg">
                        Laravel is a powerful framework to build awesome enterprise app.
                    </p>
                    <a href="/" aria-label=""
                        class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-blue-500 hover:text-teal-accent-700">
                        Learn more
                        <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                            <path
                                d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z">
                            </path>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>



<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid max-w-screen-lg gap-8 row-gap-5 md:row-gap-8 sm:mx-auto lg:grid-cols-2">
        <div
            class="transition duration-300 transform bg-white rounded shadow-sm hover:-translate-y-1 hover:shadow md:text-center">
            <div class="relative">
                <img class="object-cover w-full h-64 rounded-t lg:h-80 xl:h-96"
                    src="https://images.pexels.com/photos/3182796/pexels-photo-3182796.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                    alt="" />
                <div class="absolute inset-0 bg-gray-800 bg-opacity-25"></div>
            </div>
            <div class="px-6 py-8 border border-t-0 rounded-b sm:px-8">
                <h5 class="mb-2 text-xl font-bold leading-none sm:text-2xl">
                    Take a look to the Team
                </h5>
                <button type="submit"
                    class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-600 hover:bg-purple-800 focus:shadow-outline focus:outline-none">
                    Read more
                </button>
            </div>
        </div>
        <div
            class="transition duration-300 transform bg-white rounded shadow-sm hover:-translate-y-1 hover:shadow md:text-center">
            <div class="relative">
                <img class="object-cover w-full h-64 rounded-t lg:h-80 xl:h-96"
                    src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                    alt="" />
                <div class="absolute inset-0 bg-gray-800 bg-opacity-25"></div>
            </div>
            <div class="px-6 py-8 border border-t-0 rounded-b sm:px-8">
                <h5 class="mb-2 text-xl font-bold leading-none sm:text-2xl">Contact Us</h5>

                <button type="submit"
                    class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-600 hover:bg-purple-800 focus:shadow-outline focus:outline-none">
                    Read more
                </button>
            </div>
        </div>
    </div>
</div>

<div class="relative mt-16 bg-purple-600">
    <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text-purple-600" preserveAspectRatio="none"
        viewBox="0 0 1440 54">
        <path fill="currentColor"
            d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z">
        </path>
    </svg>
    <div class="px-4 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
            <div class="md:max-w-md lg:col-span-2">
                <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                    <svg class="w-8 text-blue-500" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2"
                        stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                        <rect x="3" y="1" width="7" height="12"></rect>
                        <rect x="3" y="17" width="7" height="6"></rect>
                        <rect x="14" y="1" width="7" height="6"></rect>
                        <rect x="14" y="11" width="7" height="12"></rect>
                    </svg>
                    <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase">Inventory App</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
                <div>
                    <p class="font-semibold tracking-wide text-blue-500">
                        Category
                    </p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">News</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">World</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">Games</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">References</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-blue-500">Cherry</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">Web</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">eCommerce</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">Business</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">Entertainment</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">Portfolio</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-blue-500">Apples</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">Media</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">Brochure</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">Nonprofit</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">Educational</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">Projects</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-blue-500">
                        Business
                    </p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">Infopreneur</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">Personal</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">Wiki</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-blue-500">Forum</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-between pt-5 pb-10 border-t border-deep-purple-accent-200 sm:flex-row">
            <p class="text-sm text-gray-100">
                © Copyright 2020 Lorem Inc. All rights reserved.
            </p>
            <div class="flex items-center mt-4 space-x-4 sm:mt-0">
                <a href="/" class="transition-colors duration-300 text-deep-purple-100 hover:text-blue-500">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                        <path
                            d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                        </path>
                    </svg>
                </a>
                <a href="/" class="transition-colors duration-300 text-deep-purple-100 hover:text-blue-500">
                    <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                        <circle cx="15" cy="15" r="4"></circle>
                        <path
                            d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                        </path>
                    </svg>
                </a>
                <a href="/" class="transition-colors duration-300 text-deep-purple-100 hover:text-blue-500">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                        <path
                            d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>