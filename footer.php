<a href="https://wa.me/50578181690" target="_blank" class="whatsapp-float">
        <span>¡Chatea con nosotros!</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-1.003.164-.524.164-.97.114-1.076-.051-.099-.182-.153-.38-.252"/>
        </svg>
    </a>

    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto px-6 py-8 text-center">
            <p>&copy; 2024 TWA. Todos los derechos reservados.</p>
            <p class="text-sm text-gray-400 mt-2">Diseñado para potenciar tu éxito.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const navLinks = document.querySelectorAll('.nav-link');
            const pageSections = document.querySelectorAll('.page-section');
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            // --- Mobile Menu Toggle ---
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // --- Tab Navigation Logic ---
            function showTab(tabId) {
                // Deactivate all tabs
                tabButtons.forEach(button => button.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));

                // Activate the selected tab
                const button = document.querySelector(`.tab-button[data-tab="${tabId}"]`);
                const content = document.getElementById(`${tabId}-content`);

                if (button && content) {
                    button.classList.add('active');
                    content.classList.add('active');
                }
            }

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    showTab(button.dataset.tab);
                });
            });

            // --- Page Navigation Logic ---
            function showPage(pageId, serviceId = null) {
                // Hide all pages
                pageSections.forEach(section => {
                    section.classList.remove('active');
                });

                // Show the target page
                const targetPage = document.getElementById(pageId);
                if (targetPage) {
                    targetPage.classList.add('active');
                    window.scrollTo(0, 0); // Scroll to top on page change
                }

                // If navigating to services page, handle tab activation
                if (pageId === 'services') {
                    // If a specific service is requested, show its tab. Otherwise, show the first tab.
                    const targetTab = serviceId || tabButtons[0].dataset.tab;
                    showTab(targetTab);
                }
                
                // Close mobile menu after navigation
                mobileMenu.classList.add('hidden');
            }

            // --- Event Listeners for all Nav Links ---
            navLinks.forEach(link => {
                link.addEventListener('click', (event) => {
                    event.preventDefault();
                    const pageId = link.dataset.page;
                    const serviceId = link.dataset.service || null;
                    showPage(pageId, serviceId);
                });
            });

            // Set default page (home)
            showPage('home');
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>
