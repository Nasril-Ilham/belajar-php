<?php

$menu = [
    [
       "nama" => "bernda"
    ],

    [
        "nama" => "berita",
        "submenu" => [
            [
                "nama" => "wisata",
                "submenu" => [
                    [
                        "nama" => "pantai"
                    ],
                    [
                        "nama" => "gunug"
                    ]
                ]
            ],
            [
                "nama" => "kuliner"
            ],
            [
                "nama" => "hiburan"
            ]
        ]
    ],

    [
        "nama" => "tentang"
    ],
    [
        "nama" => "kontak"
    ],
];

// gagal

// function tampilkanmenubertingkat(array $menu) {

//     echo "<ul>";

//     foreach ($menu as $key => $item) {
//       echo "<li> {$item["nama"]} </li>";

//       foreach ($menu as $key => $item) {
//         echo "<ol>";
//         echo "<li>  {$item["submenu"]} </li>";
//         echo "</ol>";
//       }
//     }

//     echo "</ul>";
    
// }

// tampilkanmenubertingkat($menu);


// berhasil ai
// Asumsikan data menu Anda sudah didefinisikan di sini.
// Kita akan menggunakan struktur data dari gambar sebelumnya: Berita -> Wisata -> Pantai/Gunung

function tampilkanmenutigalevel(array $menu) {
    echo "<ul>\n"; // Buka Menu Utama (Level 1)

    foreach ($menu as $item) {
        
        // 1. Cetak Item Menu Utama (Level 1: Beranda, Berita)
        echo "<li>{$item['nama']}\n"; 

        // 2. Cek apakah ada Submenu (Level 2)
        if (isset($item['submenu']) && is_array($item['submenu'])) {
            
            echo "<ol>\n"; // Buka Submenu (Level 2)
            
            // 3. Loop Kedua: Mengulang Submenu (Level 2: Wisata, Kuliner)
            foreach ($item['submenu'] as $subitem) {
                
                // Mencetak nama submenu (Level 2)
                echo "<li>{$subitem['nama']}\n"; 
                
                // 4. CEK DAN LOOP KETIGA: Cek apakah ada Sub-Submenu (Level 3)
                if (isset($subitem['submenu']) && is_array($subitem['submenu'])) {
                    
                    echo "<ul>\n"; // Buka Sub-Submenu (Level 3)
                    
                    // 5. Loop Ketiga: Mengulang Sub-Submenu (Level 3: Pantai, Gunung)
                    foreach ($subitem['submenu'] as $subsubitem) {
                        // Mencetak nama sub-submenu
                        echo "<li>{$subsubitem['nama']}</li>\n";
                    }
                    
                    echo "</ul>\n"; // Tutup Sub-Submenu
                }
                
                echo "</li>\n"; // Tutup Item Submenu (Level 2)
            }
            
            echo "</ol>\n"; // Tutup Submenu
        }
        
        echo "</li>\n"; // Tutup Item Menu Utama (Level 1)
    }
    
    echo "</ul>\n"; // Tutup Menu Utama
}

// Catatan: Ganti $menu dengan variabel array menu Anda
tampilkanmenutigalevel($menu); 



?>