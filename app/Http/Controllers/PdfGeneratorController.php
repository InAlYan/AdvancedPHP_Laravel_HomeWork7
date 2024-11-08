<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfGeneratorController extends Controller
{

    public function index($id)
    {
        $userData = User::where('id', $id)->first();

        if ($userData) {

            $data = [
                'name' => $userData->name,
                'surname' => $userData->surname,
                'email' => $userData->email,
                'id' => $userData->id,
                'created_at' => $userData->created_at,
                'updated_at' => $userData->updated_at
            ];

            $pdf = PDF::loadView('resume', $data);

            return $pdf->stream('resume.pdf');

        } else {

            return response()->json('User with id '
                . $id . ' not found');

        }
    }
}
