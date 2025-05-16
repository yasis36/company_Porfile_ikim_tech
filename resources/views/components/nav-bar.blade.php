<nav class="fixed top-0 left-0 w-full z-50 font-ubuntu border-gray-200" 
     style="background-color:  #033D54 ; color: white;">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/alanxcode.png') }}" class="h-10 rounded-full" alt="ALANxCODE Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-slate-100">IKIM Tech Co</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default border-gray-500">
            <ul
                class="flex flex-col text-xl font-medium p-4 md:p-0 mt-4 border border-gray-200 rounded-lg bg-slate-200 text-gray-900 md:space-x-4 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent md:text-slate-100">
                <li>
                    <a href="/"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'index' ? 'bg-sky-800 text-slate-100' : 'hover:text-slate-100 hover:bg-sky-800' }} md:hover:bg-transparent md:hover:text-sky-800 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent {{ $activePage === 'index' ? 'md:text-sky-800' : 'md:text-slate-100' }}">
                        HOME 
                    </a>
                </li>
                <li>
                    <a href="/"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'kontak' ? 'bg-sky-800 text-slate-100' : 'hover:text-slate-100 hover:bg-sky-800' }} md:hover:bg-transparent md:hover:text-sky-800 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent {{ $activePage === 'kontak' ? 'md:text-sky-800' : 'md:text-slate-100' }}">
                        Service
                    </a>
                </li>

                
                <li>
                    <a href="/project"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'project' ? 'bg-sky-800 text-slate-100' : 'hover:text-slate-100 hover:bg-sky-800' }} md:hover:bg-transparent md:hover:text-sky-800 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent {{ $activePage === 'project' ? 'md:text-sky-800' : 'md:text-slate-100' }}">
                        Our Project
                    </a>
                </li>

                <li>
                    <a href="/about"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'tentang' ? 'bg-sky-800 text-slate-100' : 'hover:text-slate-100 hover:bg-sky-800' }} md:hover:bg-transparent md:hover:text-sky-800 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent {{ $activePage === 'tentang' ? 'md:text-sky-800' : 'md:text-slate-100' }}">
                        About
                    </a>
                </li>

                <li>
                    <a href="/contact"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'kontak' ? 'bg-sky-800 text-slate-100' : 'hover:text-slate-100 hover:bg-sky-800' }} md:hover:bg-transparent md:hover:text-sky-800 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent {{ $activePage === 'contact' ? 'md:text-sky-800' : 'md:text-slate-100' }}">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
