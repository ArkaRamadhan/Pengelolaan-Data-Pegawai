<?php

namespace App\Http\Controllers;

use App\Models\post;

//return type View

use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Post::latest()->paginate(5);
        $maleCount = Post::where('jenis_kelamin', 'Laki-laki')->count();
        $femaleCount = Post::where('jenis_kelamin', 'Perempuan')->count();

        //render view with posts

        return view('supervisor.dashboard', compact('posts', 'maleCount', 'femaleCount'));
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id)
    {
        //get post by ID
        $post = Post::findOrFail($id);
        $maleCount = Post::where('jenis_kelamin', 'Laki-laki')->count();
        $femaleCount = Post::where('jenis_kelamin', 'Perempuan')->count();
        //render view with post
        return view('supervisor.show', compact('post', 'maleCount', 'femaleCount'));
    }

    public function pegawai(): View
    {
        $posts = Post::latest()->paginate(5);
        $maleCount = Post::where('jenis_kelamin', 'Laki-laki')->count();
        $femaleCount = Post::where('jenis_kelamin', 'Perempuan')->count();

        //render view with posts

        return view('supervisor.pegawai', compact('posts', 'maleCount', 'femaleCount'));
    }
}
