<?php

namespace App\Models;

class Author
{
    public static function all()
    {
        return [
            ['id' => 1, 'nama' => 'Tere Liye', 'negara' => 'Indonesia'],
            ['id' => 2, 'nama' => 'J.K. Rowling', 'negara' => 'Inggris'],
            ['id' => 3, 'nama' => 'Stephen King', 'negara' => 'Amerika'],
            ['id' => 4, 'nama' => 'Haruki Murakami', 'negara' => 'Jepang'],
            ['id' => 5, 'nama' => 'Andrea Hirata', 'negara' => 'Indonesia'],
        ];
    }
}