<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecuPay - Banking Platform Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@3"></script>

</head>
<body class="bg-white font-inter">
    <header class="py-4 border-b border-gray-100 sticky top-0 z-50 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Three-column flex layout with centered navigation -->
            <div class="flex items-center justify-between">
                <!-- Logo Column -->
                <div class="w-2/7">
                    <a href="/">
                        <img src="./assets/images/logo.png" alt="SecuPay Logo">
                    </a>
                </div>
                
                <!-- Centered Navigation Column -->
                <div class="w-3/7 flex justify-center">
                    <nav class="hidden md:block">
                        <div class="border border-gray-200 rounded-xl shadow-sm p-1">
                            <ul class="flex space-x-1">
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:text-primary-600 font-medium rounded-lg hover:bg-secondary-100 transition-colors">Platform</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:text-primary-600 font-medium rounded-lg hover:bg-secondary-100 transition-colors">Services</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:text-primary-600 font-medium rounded-lg hover:bg-secondary-100 transition-colors">Who We Serve</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:text-primary-600 font-medium rounded-lg hover:bg-secondary-100 transition-colors">Company</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:text-primary-600 font-medium rounded-lg hover:bg-secondary-100 transition-colors">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                
                <!-- Buttons/Menu Column -->
                <div class="w-2/7 flex justify-end items-center space-x-4">
                    <!-- Buttons - only visible on desktop -->
                    <div class="hidden md:flex items-center space-x-4">
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-secondary-500 text-secondary-500 bg-white bg-opacity-50 hover:bg-secondary-50 rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md">
                            GET STARTED
                        </a>
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md">
                            FREE LIVE DEMO
                        </a>
                    </div>
                    
                    <!-- Mobile menu button -->
                    <button type="button" class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-primary-600 hover:text-primary-700 hover:bg-primary-100 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2" id="mobile-menu-button">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <?php include_once('mobile-menu.php'); ?>
        </div>
    </header>

    <main>