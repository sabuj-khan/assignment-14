<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;



class TestController extends Controller
{
    function testAction(Request $request){
        $name = $request->name;
        return "Hello, {$name}";
    }

    function formAction(Request $request){
        $name = $request->input('name');
        $age = $request->input('age');

        return "My name is {$name} and age is {$age}";
    }

    function headerAction(Request $request){
        $userAgent = $request->header('User-Agent');
         return "{$userAgent} is the value of header User-Agent";
    }

    function pageAction(Request $request){
        $page = $request->query('page', null);

        return "{$page} is the query value";
    }

    function jsonAction():JsonResponse{
        $data = [
            'message' => 'Success',
            'data' => [
                'name' => 'John Doe',
                'age' => 25,
            ],
        ];
    
        return response()->json($data);
    }

    function fileAction(Request $request){
        $photo = $request->file('avater');
        $sizef = filesize($photo);
        $typef = filetype($photo);
        $oname = $photo->getClientOriginalName();
        $tname = $photo->getFilename();
        $extension = $photo->extension();

        return array(
            'size' => $sizef,
            'type' => $typef,
            'oname' => $oname,
            'tname' => $tname,
            'extension' => $extension,
        );
    }

    function saveAction(Request $request){
        $avater = $request->file('avater');
        $avater->move(public_path('uploads'), $avater->getClientOriginalName());

        return "The file has been uploaded successfully";
    }

    function setCookie(Request $request){
        $rememberToken = $request->cookie('remember_token');

        if( $rememberToken === null ){
            $rememberToken = null;
        }
    }

    function submitAction(Request $request){
        $email = $request->input('email');

        $response = [
            'success' => true,
            'message' => 'Form submitted successfully.'
        ];
    
        return new JsonResponse($response);
    }
    

}
