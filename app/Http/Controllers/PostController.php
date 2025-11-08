<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home()
    {
        // Dummy data untuk testing (bisa diganti dari database nanti)
        $posts = [
            (object)[
                'id' => 1,
                'title' => 'Belajar Laravel Dasar',
                'content' => 'Ini adalah contoh artikel pertama untuk menguji tampilan home.',
                'image_url' => 'https://picsum.photos/300/200?random=1',
            ],
            (object)[
                'id' => 2,
                'title' => 'Membuat CRUD Mahasiswa',
                'content' => 'Tutorial membuat CRUD Laravel untuk data mahasiswa.',
                'image_url' => 'https://picsum.photos/300/200?random=2',
            ],
            (object)[
                'id' => 3,
                'title' => 'Menghubungkan Laravel dengan MySQL',
                'content' => 'Langkah-langkah konfigurasi koneksi database di Laravel.',
                'image_url' => 'https://picsum.photos/300/200?random=3',
            ],
        ];

        // Kirim data ke view
        return view('pages.home', compact('posts'));
    }

    public function show($id)
    {
        // Dummy data detail post
        $post = (object)[
            'id' => $id,
            'title' => 'Detail Post ' . $id,
            'content' => 'Ini adalah konten lengkap dari post dengan ID ' . $id,
            'image_url' => 'https://picsum.photos/600/400?random=' . $id,
        ];

        // Pastikan view yang dipanggil sesuai nama file kamu
        return view('pages.post', compact('post'));
    }
}
