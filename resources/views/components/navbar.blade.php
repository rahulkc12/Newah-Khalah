<nav class="bg-white text-neutral-900 shadow-md sticky top-0 z-20">
    <!-- Top Banner -->
    <div class="w-full h-[24px] flex justify-center items-center bg-neutral-950 text-white font-light py-2">
        Text here if needed
    </div>
    
    <!-- Main Navigation -->
    <div class="mx-4 md:mx-8 lg:mx-[72px] flex items-center justify-between ">
        <!-- Logo -->
        <div class="flex flex-shrink-0 items-center space-x-4">
            <a href="/">
                <img src="{{ asset('img/image.png') }}" alt="Newah_kalah_logo" class="h-16 md:h-20 lg:h-[114px] w-auto" />
            </a>
        </div>

        <!-- Hamburger Button (Visible on Mobile/Tablet) -->
        <button id="hamburger-btn" class="lg:hidden text-neutral-900 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Nav Links -->
           <!-- Nav Links -->
        <div id="nav-menu" class="fixed font-regular text-lg lg:static top-0 right-0 w-1/2 lg:w-auto h-full lg:h-auto bg-white lg:bg-transparent
            lg:flex lg:items-center transform translate-x-full lg:translate-x-0 transition duration-300 z-50
            flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-10 p-4 lg:p-0 shadow-lg lg:shadow-none gap-12">
            
            <div class="flex flex-col lg:flex-row lg:space-x-10 space-y-4 lg:space-y-0">
                <a href="/events" class="hover:text-red-900 nav-link" data-route="/events">Events</a>

                <!-- Dropdown -->
                <div class="relative group">
                    <button id="about-us-btn" class="hover:text-red-900 flex items-center justify-between w-full lg:w-auto focus:outline-none nav-link" data-route="/about">
                        About us
                        <svg id="about-us-arrow" class="ml-1 h-4 w-4 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    
                    <!-- Desktop Dropdown (hover) -->
                    <div id="about-us-dropdown" class="hidden lg:block absolute right-0 mt-2 w-40 bg-white shadow-lg rounded-md z-50 opacity-0 invisible transition duration-200 group-hover:opacity-100 group-hover:visible">
                        <a href="/about" class="block px-4 py-2 text-regular text-gray-700 hover:text-red-900 hover:bg-gray-100">Mission</a>
                        <a href="/teams" class="block px-4 py-2 text-regular text-gray-700 hover:text-red-900 hover:bg-gray-100">Team</a>
                    </div>
                    
                    <!-- Mobile/Tablet Collapsible Dropdown -->
                    <div id="about-us-mobile-dropdown" class="lg:hidden overflow-hidden transition-all duration-300 max-h-0">
                        <div class="mt-2 pl-4 space-y-2">
                            <a href="/about" class="block py-2 text-gray-700 hover:text-red-900 border-l-2 border-transparent hover:border-red-900 pl-2">Mission</a>
                            <a href="/teams" class="block py-2 text-gray-700 hover:text-red-900 border-l-2 border-transparent hover:border-red-900 pl-2">Team</a>
                        </div>
                    </div>
                </div>
            
                <!-- Gallery to Contact Us in column for mobile, row for desktop -->
                <div class="flex flex-col lg:flex-row lg:space-x-10 space-y-4 lg:space-y-0">
                    <a href="/gallery" class="hover:text-red-900 nav-link" data-route="/gallery">Gallery</a>
                    <a href="/donate" class="hover:text-red-900 nav-link" data-route="/donate">Donate</a>
                    <a href="/getinvolved" class="hover:text-red-900 nav-link" data-route="/getinvolved">Get Involved</a>
                    <a href="/news" class="hover:text-red-900 nav-link" data-route="/news">Resources</a>
                    <a href="/contact" class="hover:text-red-900 nav-link" data-route="/contact">Contact Us</a>
                </div>
            </div>
            
            <!-- Auth Buttons -->
            <div class="flex flex-col lg:flex-row space-y-2 lg:space-y-0 lg:space-x-2 justify-end">
                <x-secondarybutton href="#" text="Login" />
        <x-button href="#" text="Signup" />
            </div>


        </div>
    </div>
</nav>

<!-- JavaScript for Hamburger Menu, Dropdown Toggle, Slide Animation, and Active State -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Elements
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const navMenu = document.getElementById('nav-menu');
        const aboutUsBtn = document.getElementById('about-us-btn');
        const aboutUsDropdown = document.getElementById('about-us-dropdown');
        const aboutUsMobileDropdown = document.getElementById('about-us-mobile-dropdown');
        const aboutUsArrow = document.getElementById('about-us-arrow');
        const navLinks = document.querySelectorAll('.nav-link');

        // State tracking
        let isMobileDropdownOpen = false;

        // Hamburger Menu Toggle
        hamburgerBtn.addEventListener('click', function () {
            navMenu.classList.toggle('translate-x-full');
            if (navMenu.classList.contains('translate-x-full')) {
                navMenu.classList.remove('translate-x-0');
                // Close mobile dropdown when closing menu
                closeMobileDropdown();
            } else {
                navMenu.classList.add('translate-x-0');
            }
        });

        // About Us Mobile Dropdown Toggle
        function toggleMobileDropdown() {
            if (isMobileDropdownOpen) {
                closeMobileDropdown();
            } else {
                openMobileDropdown();
            }
        }

        function openMobileDropdown() {
            isMobileDropdownOpen = true;
            aboutUsMobileDropdown.style.maxHeight = aboutUsMobileDropdown.scrollHeight + 'px';
            aboutUsArrow.style.transform = 'rotate(180deg)';
        }

        function closeMobileDropdown() {
            isMobileDropdownOpen = false;
            aboutUsMobileDropdown.style.maxHeight = '0';
            aboutUsArrow.style.transform = 'rotate(0deg)';
        }

        // About Us Button Click Handler
        aboutUsBtn.addEventListener('click', function (event) {
            // Only handle click for mobile/tablet (below lg breakpoint)
            if (window.innerWidth < 1024) {
                event.preventDefault();
                toggleMobileDropdown();
            }
        });

        // Close mobile menu and dropdown when clicking outside
        document.addEventListener('click', function (event) {
            // Check if click is outside nav menu and hamburger button
            if (!navMenu.contains(event.target) && !hamburgerBtn.contains(event.target)) {
                navMenu.classList.add('translate-x-full');
                navMenu.classList.remove('translate-x-0');
                closeMobileDropdown();
            }
        });

        // Handle window resize to reset dropdown states
        window.addEventListener('resize', function () {
            if (window.innerWidth >= 1024) {
                // Desktop view - reset mobile dropdown
                closeMobileDropdown();
            }
        });

        // Set active link based on current route
        function setActiveLink() {
            const currentPath = window.location.pathname;
            navLinks.forEach(link => {
                link.classList.remove('text-red-900');
                if (link.getAttribute('data-route') === currentPath) {
                    link.classList.add('text-red-900');
                }
            });

            // Handle About Us dropdown links for both desktop and mobile
            const allDropdownLinks = document.querySelectorAll('#about-us-dropdown a, #about-us-mobile-dropdown a');
            allDropdownLinks.forEach(link => {
                link.classList.remove('text-red-900');
                if (link.getAttribute('href') === currentPath) {
                    aboutUsBtn.classList.add('text-red-900');
                }
            });
        }

        // Add click event to nav links
        navLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                // Don't handle click for about-us-btn as it has its own handler
                if (this.id === 'about-us-btn') return;
                
                navLinks.forEach(l => l.classList.remove('text-red-900'));
                this.classList.add('text-red-900');
                
                // Close mobile menu on small screens
                if (window.innerWidth < 1024) {
                    navMenu.classList.add('translate-x-full');
                    navMenu.classList.remove('translate-x-0');
                    closeMobileDropdown();
                }
            });
        });

        // Handle dropdown link clicks
        const dropdownLinks = document.querySelectorAll('#about-us-dropdown a, #about-us-mobile-dropdown a');
        dropdownLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                // Close mobile menu and dropdown when clicking dropdown links on mobile
                if (window.innerWidth < 1024) {
                    navMenu.classList.add('translate-x-full');
                    navMenu.classList.remove('translate-x-0');
                    closeMobileDropdown();
                }
                
                // Set active state
                navLinks.forEach(l => l.classList.remove('text-red-900'));
                aboutUsBtn.classList.add('text-red-900');
            });
        });

        // Initial active link setup
        setActiveLink();
    });
</script>