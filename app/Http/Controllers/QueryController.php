<?php

namespace EloquentORM\Http\Controllers;

use EloquentORM\User;
use Illuminate\Http\Request;
use EloquentORM\Http\Requests;
use EloquentORM\Http\Controllers\Controller;

class QueryController extends Controller
{
    
    public function eloquentAll() {

    	$users=User::all();
    	$title="Todos los usuarios (All)";

    	return view('query.methods', compact('users', 'title'));
    }

    public function eloquentGet($gender) {

    	$users=User::where('gender', $gender)
    			->get();
    	$title="Lista de usuarios (GET)";

    	return view('query.methods', compact('users', 'title'));
    }

    public function eloquentGetCustom() {

        $users=User::where('gender', 'f')
                ->get(['id', 'name', 'biography']);
        $title="Lista de usuarios (GET Custom - con Array)";

        return view('query.methods', compact('users', 'title'));
    }

    public function eloquentDelete($id) {

        $user=User::find($id);
        $user->delete();

        return view('pages.delete');
    }
}
