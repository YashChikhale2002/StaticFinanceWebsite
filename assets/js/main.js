/**
 * SecuPay - Banking Platform Services
 * Main JavaScript functionality
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize mobile menu
    initMobileMenu();
});

/**
 * Initialize the mobile menu functionality
 */
function initMobileMenu() {
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuPanel = document.getElementById('mobile-menu-panel');
    const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');
    const closeMenuButton = document.getElementById('close-mobile-menu');
    
    // Function to open mobile menu
    function openMobileMenu() {
        // Prevent body scrolling when menu is open
        document.body.style.overflow = 'hidden';
        
        // Show the menu overlay
        mobileMenuOverlay.classList.remove('hidden');
        
        // Add animation classes
        setTimeout(() => {
            mobileMenuPanel.classList.add('translate-x-0');
            mobileMenuPanel.classList.remove('translate-x-full');
        }, 10);
    }
    
    // Function to close mobile menu
    function closeMobileMenu() {
        // Add animation classes to slide out
        mobileMenuPanel.classList.remove('translate-x-0');
        mobileMenuPanel.classList.add('translate-x-full');
        
        // Hide the overlay after animation
        setTimeout(() => {
            mobileMenuOverlay.classList.add('hidden');
            document.body.style.overflow = '';
        }, 300);
    }
    
    // Toggle menu on hamburger click
    menuButton.addEventListener('click', openMobileMenu);
    
    // Close menu when clicking close button
    closeMenuButton.addEventListener('click', closeMobileMenu);
    
    // Close menu when clicking backdrop
    mobileMenuBackdrop.addEventListener('click', closeMobileMenu);
    
    // Close mobile menu on window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 768) {
            closeMobileMenu();
        }
    });
    
    // Add initial transform class
    mobileMenuPanel.classList.add('translate-x-full');
}