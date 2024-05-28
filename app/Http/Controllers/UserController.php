<?php

namespace App\Http\Controllers;

use index;

//import Model Post

use App\Models\post;
use App\Models\user;

//return type View

use Illuminate\View\View;

//return type redirectResponse

use Illuminate\Http\Request;

//import Facade "Storage"

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * index
     *
     * @return View
     */

    public function index(): View
    {
        //get posts

        $posts = Post::latest()->paginate(5);
        $maleCount = Post::where('jenis_kelamin', 'Laki-laki')->count();
        $femaleCount = Post::where('jenis_kelamin', 'Perempuan')->count();

        //render view with posts

        return view('dashboard', compact('posts', 'maleCount', 'femaleCount'));
    }

    public function pegawai(): View
    {
        //get posts

        $posts = Post::latest()->paginate(5);
        $maleCount = Post::where('jenis_kelamin', 'Laki-laki')->count();
        $femaleCount = Post::where('jenis_kelamin', 'Perempuan')->count();

        //render view with posts

        return view('pegawai', compact('posts', 'maleCount', 'femaleCount'));
    }

    public function tabel_user(): View
    {
        $user = Auth::user();
        $maleCount = Post::where('jenis_kelamin', 'Laki-laki')->count();
        $femaleCount = Post::where('jenis_kelamin', 'Perempuan')->count();

        //render view with posts

        return view('tabel_user', compact('user', 'maleCount', 'femaleCount'));
    }
}
