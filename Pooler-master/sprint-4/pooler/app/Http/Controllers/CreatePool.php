<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Pool;
    use Illuminate\Support\Facades\Auth;

    class CreatePool extends Controller
    {

        public function index () {
            return view ('createpool');
        }

        public function store (Request $request) {

            $this -> validate ($request, [
                'title' => 'required|max:255',
                'description' => 'required|max:480',
                'start_date' => 'required',
                'end_date' => 'required',
                'category' => 'required',
            ]);

            $pool = new Pool;
            $pool -> title = $request -> title;
            $pool -> description = $request -> description;
            $pool -> start_date = $request -> start_date;
            $pool -> end_date = $request -> end_date;
            $pool -> category = $request -> category;
            $pool -> img_pool = $request -> img_pool;
            $pool -> user_id = Auth ::user () -> id;

            $pool -> save ();

            if ($request->file('img_pool')) {
            $userPhoto = $request->file('img_pool')->store('public/storage');
            // $userPhoto = Storage::putFile('photos/user', $request->file('userPhoto'), 'public');
        }

            return view('successpoolcreate');
        }
    }
