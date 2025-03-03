# 📖 FAQ Live Search (Laravel + Tailwind + Alpine.js)
🔥 Komponen **FAQ Live Search** ini memungkinkan pengguna mencari pertanyaan secara langsung dengan **Tailwind CSS** & **Alpine.js**.

![FAQ Demo](https://user-images.githubusercontent.com/yourusername/faq-demo.gif)

---

## **🚀 Fitur**
✅ **Live Search** – Cari pertanyaan secara langsung tanpa refresh  
✅ **Menggunakan Alpine.js** – Interaktif tanpa dependency besar  
✅ **100% Tailwind CSS** – UI modern & responsif  
✅ **Laravel Blade Compatible** – Bisa langsung digunakan di proyek Laravel  

---

## **📌 Cara Menggunakan**
### **1️⃣ Tambahkan Data Pertanyaan di Laravel**
Simpan data pertanyaan dalam file konfigurasi Laravel **`config/faq.php`**:

```php
<?php

return [
    [
        'question' => 'Pertanyaan satu?',
        'answer' => 'Jawaban satu...',
    ],
    [
        'question' => 'Pertanyaan dua?',
        'answer' => 'Jawaban dua...',
    ],
    // Tambahkan pertanyaan lainnya...
];
