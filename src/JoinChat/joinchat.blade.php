<!-- Floating WhatsApp Button -->
    <div x-data="{ open: false }">
        <!-- WhatsApp Floating Button -->
        <button @click="open = true"
            class="fixed bottom-5 right-5 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 2C6.48 2 2 6.48 2 12c0 1.89.52 3.68 1.41 5.21L2 22l5.03-1.35A9.942 9.942 0 0 0 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2zm0 18c-1.61 0-3.16-.39-4.56-1.12l-.33-.17-2.98.8.8-2.97-.17-.33A8.02 8.02 0 0 1 4 12c0-4.42 3.58-8 8-8s8 3.58 8 8-3.58 8-8 8zm3.67-6.47c-.2-.11-1.18-.58-1.37-.65-.19-.07-.32-.11-.45.11s-.52.65-.63.79c-.11.13-.23.15-.43.04s-1.12-.41-2.13-1.29c-.79-.7-1.32-1.57-1.48-1.84-.15-.26-.02-.4.11-.54.11-.11.26-.29.38-.43s.17-.22.26-.37.04-.28-.02-.39c-.07-.11-.45-1.08-.62-1.48-.16-.39-.33-.33-.45-.33s-.25 0-.38 0c-.13 0-.39.05-.59.25-.2.2-.78.76-.78 1.85s.8 2.15.91 2.3c.11.15 1.57 2.4 3.81 3.36 1.29.55 1.79.6 2.44.51.39-.06 1.18-.48 1.34-.95.17-.47.17-.87.11-.95s-.19-.15-.39-.26z">
                </path>
            </svg>
        </button>

        <!-- Modal Card -->
        <div x-show="open" @click.away="open = false"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white rounded-lg shadow-lg p-6 w-80">
                <h2 class="text-xl font-semibold mb-2 text-gray-700">Hubungi Kami</h2>
                <p class="text-gray-600 text-sm">Butuh bantuan? Chat dengan kami via WhatsApp.</p>

                <!-- WhatsApp Number -->
                <div class="flex items-center space-x-2 my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12c0 1.89.52 3.68 1.41 5.21L2 22l5.03-1.35A9.942 9.942 0 0 0 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2zm0 18c-1.61 0-3.16-.39-4.56-1.12l-.33-.17-2.98.8.8-2.97-.17-.33A8.02 8.02 0 0 1 4 12c0-4.42 3.58-8 8-8s8 3.58 8 8-3.58 8-8 8zm3.67-6.47c-.2-.11-1.18-.58-1.37-.65-.19-.07-.32-.11-.45.11s-.52.65-.63.79c-.11.13-.23.15-.43.04s-1.12-.41-2.13-1.29c-.79-.7-1.32-1.57-1.48-1.84-.15-.26-.02-.4.11-.54.11-.11.26-.29.38-.43s.17-.22.26-.37.04-.28-.02-.39c-.07-.11-.45-1.08-.62-1.48-.16-.39-.33-.33-.45-.33s-.25 0-.38 0c-.13 0-.39.05-.59.25-.2.2-.78.76-.78 1.85s.8 2.15.91 2.3c.11.15 1.57 2.4 3.81 3.36 1.29.55 1.79.6 2.44.51.39-.06 1.18-.48 1.34-.95.17-.47.17-.87.11-.95s-.19-.15-.39-.26z">
                        </path>
                    </svg>
                    <span class="text-gray-700 font-semibold">+62 812-1234-5678</span>
                </div>

                <!-- WhatsApp Redirect Button -->
                <a href="https://wa.me/6281213158645" target="_blank"
                    class="block bg-green-500 text-white text-center py-2 rounded-lg font-semibold hover:bg-green-600 transition-all">
                    Chat via WhatsApp
                </a>

                <!-- Close Button -->
                <button @click="open = false"
                    class="block w-full mt-3 text-center text-gray-500 text-sm hover:text-gray-700">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Tambahkan Alpine.js jika belum ada -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
