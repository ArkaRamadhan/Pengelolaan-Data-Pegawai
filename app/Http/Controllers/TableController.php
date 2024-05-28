<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class TableController extends Controller
{

    public function index(): View
    {
        //get posts

        $users = User::latest()->paginate(5);
        $maleCount = Post::where('jenis_kelamin', 'Laki-laki')->count();
        $femaleCount = Post::where('jenis_kelamin', 'Perempuan')->count();

        //render view with posts

        return view('admin/table/dashboard', compact('users', 'maleCount', 'femaleCount'));

    }

        /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        $maleCount = Post::where('jenis_kelamin', 'Laki-laki')->count();
        $femaleCount = Post::where('jenis_kelamin', 'Perempuan')->count();
        return view('admin.table.create', compact('maleCount', 'femaleCount'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'usertype' => ['required', 'string', 'lowercase'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'usertype' => $request->usertype,
        ]);

        event(new Registered($user));


        return redirect('admin/table/dashboard');
    }

     /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $user = User::findOrFail($id);
        $maleCount = Post::where('jenis_kelamin', 'Laki-laki')->count();
        $femaleCount = Post::where('jenis_kelamin', 'Perempuan')->count();

        //render view with post
        return view('admin.table.edit', compact('user', 'maleCount', 'femaleCount'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form

        $validation = $request->validate([
            'name'     => 'required',
            'usertype' => 'required',
        ]);

        //get post by ID
        $user = User::findOrFail($id);

            //update post without image
            $user->update([
                'name'     => $request->name,
                'usertype'     => $request->usertype,
            ]);

        //redirect to index
        return redirect('admin/table/dashboard')->with(['success' => 'Data Berhasil Diubah!']);
    }

        /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $user = User::findOrFail($id);


        //delete user
        $user->delete();

        //redirect to index
        return redirect('admin/table/dashboard')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
