<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
   public function register()
   {
      return view('form');
   }

   public function welcome(Request $request)
   {
      $firstName = $request->input('first_name');
      $lastName = $request->input('last_name');
      $gender = $request->input('gender');
      $nationality = $request->input('nationality');
      $languages = $request->input('language', []);
      $bio = $request->input('bio');

      $language = is_array($languages) ? implode(', ', $languages) : $languages;

      $data = [
         'firstName' => $firstName,
         'lastName' => $lastName,
         'gender' => $gender,
         'nationality' => $nationality,
         'language' => $language,
         'bio' => $bio,
      ];

      return view('welcome', $data);
   }
}
