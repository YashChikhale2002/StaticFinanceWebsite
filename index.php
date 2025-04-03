<?php include_once('includes/header.php'); ?>

<!-- Hero Section with Circular Corner Gradients -->
<section class="relative overflow-hidden py-10 md:py-16 lg:py-24 bg-white">
    <!-- Top-left Circular Gradient (Pinkish) - Exactly 50% visible -->
    <div class="absolute -top-[6%] -left-[23%] w-[50%] h-[50%] rounded-full"
         style="background: radial-gradient(circle, rgba(230, 120, 120, 0.8) 0%, rgba(242, 219, 219, 0.4) 40%, rgba(255, 255, 255, 0) 70%);"></div>
    
    <!-- Top-right Circular Gradient (Bluish) - Exactly 50% visible -->
    <div class="absolute -top-[5%] -right-[20%] w-[50%] h-[50%] rounded-full"
         style="background: radial-gradient(circle, rgba(126, 194, 240, 0.8) 0%, rgba(222, 242, 255, 0.4) 40%, rgba(255, 255, 255, 0) 70%);"></div>
    
    <!-- Decorative Shapes -->
    <div class="absolute top-10 md:top-20 left-2 md:left-10 lg:left-24 opacity-80 w-24 md:w-32 lg:w-auto z-10">
        <svg width="149" height="83" viewBox="0 0 149 83" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M33.4718 0.60036H69.706L53.3918 49.622L53.1728 50.2799H53.8662H147.795L115.659 82.5H0.738297L33.4718 0.60036Z" stroke="#F15744"/>
        </svg>
    </div>
    
    <div class="absolute top-10 md:top-16 right-2 md:right-10 lg:right-24 opacity-80 w-24 md:w-32 lg:w-auto z-10">
        <svg width="149" height="83" viewBox="0 0 149 83" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M79.3932 82.3996L95.7075 33.378L95.9264 32.7201H95.233H1.20487L33.3406 0.5H148.262L115.528 82.3996H79.3932Z" stroke="#4B69B2"/>
        </svg>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 relative z-20">
        <!-- Hero Text -->
        <div class="max-w-4xl mx-auto text-center mb-8 md:mb-12 lg:mb-16">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 text-gray-900">
                Empowering <span class="text-secondary-500">MSMEs</span> to Deliver
                <br class="hidden sm:block"><span class="text-secondary-500">Financial</span> Freedom
            </h1>
            <p class="text-base sm:text-lg mb-6 md:mb-8 text-gray-700">
                Join 1000+ businesses providing essential financial
                <br class="hidden sm:block">services to 1 lakh+ retailers across India"
            </p>
            <a href="#" class="inline-block bg-secondary-500 text-white px-6 sm:px-8 py-2.5 sm:py-3 rounded-md font-medium hover:bg-secondary-600 transition-colors duration-200">
                Start Your Journey Today
            </a>
        </div>

        <!-- Dashboard Image -->
        <div class="relative max-w-5xl mx-auto">
            <!-- Main Dashboard Image -->
            <div class="relative z-20">
                <img src="./assets/images/home/dashboard.png" alt="Dashboard" class="w-full h-auto" />
                <div class="absolute bottom-0 left-0 right-0 h-1/3 bg-gradient-to-t from-white to-transparent"></div>
            </div>
        </div>

        <!-- Trusted By Section -->
        <div class="mt-10 md:mt-16 text-center">
            <p class="text-gray-700 font-semibold mb-6 md:mb-8">Trusted by India's Leading Banks</p>
            <div class="flex flex-wrap justify-center items-center gap-4 md:gap-6 lg:gap-10">
                <img src="./assets/images/home/hdfc.png" alt="HDFC Bank" class="h-8 w-auto" />
                <img src="./assets/images/home/idfc.png" alt="IDFC Bank" class="h-8 w-auto" />
                <img src="./assets/images/home/bom.png" alt="Bank of Maharashtra" class="h-8 w-auto" />
                <img src="./assets/images/home/sbi.png" alt="SBI" class="h-8 w-auto" />
                <img src="./assets/images/home/ib.png" alt="Indian Bank" class="h-8 w-auto" />
                <img src="./assets/images/home/icici.png" alt="ICICI Bank" class="h-8 w-auto" />
                <img src="./assets/images/home/bob.png" alt="Bank of Baroda" class="h-8 w-auto" />
                <img src="./assets/images/home/sc.png" alt="Standard Chartered" class="h-8 w-auto" />
            </div>
        </div>
    </div>
</section>


<!-- Product/Solutions Section -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Section Header -->
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-primary-800 mb-4">Our Product/Solutions</h2>
      <p class="text-lg text-gray-700 max-w-3xl mx-auto">Building trust through partnerships that last Creating a network that serves millions"</p>
    </div>
    
    <!-- Service Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
      
      <!-- Banking Card -->
      <div class="bg-secondary-500 rounded-lg shadow-md p-6 text-center text-white transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
        <div class="flex justify-center mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 6v12h18V6H3zm4 8H5v-4h2v4zm4 0H9v-4h2v4zm4 0h-2v-4h2v4zm4 0h-2v-4h2v4zM21 4H3L3 2h18v2z M12 20v2 M8 22h8"/>
          </svg>
        </div>
        <h3 class="font-semibold text-lg">Banking</h3>
      </div>
      
      <!-- Travel Booking Card -->
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 text-center transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
        <div class="flex justify-center mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 14H3M21 7l-9 3-9-3m18 0v11a2 2 0 01-2 2H5a2 2 0 01-2-2V7m18 0l-2-2H7L5 7m5 4v.01M12 11v.01M19 11v.01"/>
          </svg>
        </div>
        <h3 class="font-semibold text-lg text-primary-600">Travel Booking</h3>
      </div>
      
      <!-- Utility Payment Card -->
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 text-center transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
        <div class="flex justify-center mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11v4M9 13h6"/>
          </svg>
        </div>
        <h3 class="font-semibold text-lg text-primary-600">Utility Payment</h3>
      </div>
      
      <!-- E-Governance Card -->
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 text-center transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
        <div class="flex justify-center mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
          </svg>
        </div>
        <h3 class="font-semibold text-lg text-primary-600">E-Governance</h3>
      </div>
      
      <!-- Insurance Services Card -->
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 text-center transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
        <div class="flex justify-center mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
          </svg>
        </div>
        <h3 class="font-semibold text-lg text-primary-600">Insurance Services</h3>
      </div>
      
      <!-- ONDC Card -->
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 text-center transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
        <div class="flex justify-center mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
          </svg>
        </div>
        <h3 class="font-semibold text-lg text-primary-600">ONDC</h3>
      </div>
      
    </div>
  </div>
</section>

<?php include_once('includes/footer.php'); ?>