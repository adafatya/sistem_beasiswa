<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScholarshipController extends Controller
{
    public function index()
    {
        return view('scholarship.index');
    }

    public function criteria(Request $request)
    {
        $query = 'nama, ';

        $criteria = $request->input('criteria');
        for ($i = 0; $i < count($criteria); $i++) {
            if ($criteria[$i] == 'selisih') {
                $query .= '(penghasilan-pengeluaran) as selisih, ';
            } else {
                $query .= $criteria[$i] . ', ';
            }
        }
        $query = substr_replace($query, '', strlen($query) - 2, 2);

        $data = DB::table('students')
            ->selectRaw($query)
            ->get();

        $matrix = [];

        foreach ($data as $student) {
            array_push($matrix, (array) $student);
        }

        dd($matrix);
    }
}
