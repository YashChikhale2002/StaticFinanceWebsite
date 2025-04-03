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
            <p class="text-gray-700 font-medium mb-6 md:mb-8">Trusted by India's Leading Banks</p>
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

<?php include_once('includes/footer.php'); ?>