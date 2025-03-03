<div class="mt-16 p-6 mx-auto max-w-7xl">
        <h1 class="text-4xl font-semibold text-left tracking-wide text-black">FAQ</h1>
        <input id="searchInput" type="text" class="w-full mt-5 p-2 border rounded-md" placeholder="Search...">

        <div class="max-w-7xl mx-auto mt-12">
            <h2 class="font-semibold text-2xl">Pertanyaan Seputar Menjadi Agen</h2>

            <div id="faqContainer" class="mt-4">
                @foreach ($faqs as $faq)
                    <div x-data="{ open: false }" class="faq-item border-b border-gray-200 py-4">
                        <button @click="open = !open" class="flex justify-between w-full text-left font-semibold text-lg">
                            <span>{{ $faq['question'] }}</span>
                            <span x-show="!open">▼</span>
                            <span x-show="open">▲</span>
                        </button>

                        <p x-show="open" class="faq-answer mt-2 text-gray-600">
                            {{ $faq['answer'] }}
                        </p>
                    </div>
                @endforeach
            </div>

            <div id="noResults" class="text-gray-500 text-center py-4 hidden">
                Tidak ada hasil ditemukan...
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const searchInput = document.getElementById("searchInput");
            const faqContainer = document.getElementById("faqContainer");
            const noResults = document.getElementById("noResults");
            const faqItems = Array.from(document.querySelectorAll(".faq-item"));

            function filterFAQs() {
                let searchTerm = searchInput.value.toLowerCase();
                let found = false;

                faqItems.forEach(item => {
                    let question = item.querySelector("button span").textContent.toLowerCase();
                    if (question.includes(searchTerm)) {
                        item.style.display = "block";
                        found = true;
                    } else {
                        item.style.display = "none";
                    }
                });

                noResults.style.display = found ? "none" : "block";
            }

            function debounce(func, delay) {
                let timeout;
                return function () {
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func(), delay);
                };
            }

            searchInput.addEventListener("input", debounce(filterFAQs, 300));
        });
    </script>
