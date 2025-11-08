<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Pindahkan semua data kartu universitas ke sini sebagai sumber data utama
    private $data_posts = [
        1 => [
            'title' => 'Universita Bumigora',
            'content' => 'Terkenal Akan Jurusan Komputernya yang tiada duanya, selalu memenangi kejuaraan komputer di daerah NTB 🏆',
            'image' => 'ubgg.jpg', 
        ],
        2 => [
            'title' => 'Universitas Mataram',
            'content' => 'Universitas negeri terkemuka di Nusa Tenggara Barat yang menjadi pusat pendidikan tinggi berkualitas.',
            'image' => 'unram.jpeg', 
        ],
        3 => [
            'title' => 'UIN Mataram',
            'content' => 'Universitas Islam Negeri yang menawarkan berbagai disiplin ilmu dengan integrasi nilai-nilai keislaman.',
            'image' => 'UIN.jpg', 
        ],
        4 => [
            'title' => 'Universitas Pendidikan Mandalika',
            'content' => 'Universitas yang terbentuk dari penggabungan beberapa institusi pendidikan pada tahun 2019.',
            'image' => 'undikma.jpg', 
        ],
        5 => [
            'title' => 'Universitas Nahdlatul Wathan Mataram',
            'content' => 'Universitas swasta terkemuka di Mataram yang berkomitmen menghasilkan lulusan berkualitas.',
            'image' => 'unw.jpg', 
        ],
        6 => [
            'title' => 'Universitas Islam Al-Azhar',
            'content' => 'Universitas Islam swasta terbaik di Nusa Tenggara Barat yang dikenal menghasilkan para pemimpin.',
            'image' => 'unizar.JPG', 
        ],
    ];


    public function home()
    {
        // Ambil data untuk 3 postingan yang kamu hapus di HOME sebelumnya
        // (Saya pakai dummy data postingan lama untuk memenuhi variabel $posts di view home)
        $posts = [
            (object)[ 'id' => 1, 'title' => 'Belajar Laravel Dasar', 'content' => '...', 'image_url' => '...'],
            (object)[ 'id' => 2, 'title' => 'Membuat CRUD Mahasiswa', 'content' => '...', 'image_url' => '...'],
            (object)[ 'id' => 3, 'title' => 'Menghubungkan Laravel dengan MySQL', 'content' => '...', 'image_url' => '...'],
        ];

        // Kirim data ke view
        return view('pages.home', compact('posts'));
    }

    public function show($id)
    {
        // 1. Ambil data post dari sumber data utama ($this->data_posts)
        $id = (int) $id; // Pastikan ID adalah integer
        $post_data = $this->data_posts[$id] ?? null;

        if (!$post_data) {
             // Jika ID tidak ada di array 6 kartu universitas
            abort(404, 'Postingan tidak ditemukan.');
        }

        // 2. Format data agar sesuai dengan objek yang diharapkan oleh post.blade.php
        $post = (object)[
            'id' => $id,
            'title' => $post_data['title'],
            'content' => $post_data['content'],
            // Menggunakan nama file gambar dari data utama dan mengubahnya menjadi URL asset
            'image_url' => asset('images/' . $post_data['image']), 
        ];

        // Pastikan view yang dipanggil sesuai nama file kamu
        return view('pages.post', compact('post'));
    }
}