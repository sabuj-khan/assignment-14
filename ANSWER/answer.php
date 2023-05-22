<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class TestController extends Controller
{

/***** 
Answer to Question 1: 
******/
 function formAction(Request $request)
{
    $name = $request->input('name');

    return $name;

}




/***** 
Answer to Question 2: 
******/
function headerAction(Request $request){
    $userAgent = $request->header('User-Agent');

    return $userAgent;
}
/***** 
Answer to Question 3: 
******/
function pageAction(Request $request){
    $page = $request->query('page', null);

    return "{$page} is the query value";
}




/***** 
Answer to Question 4: 
******/


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




/***** 
Answer to Question 5: 
******/


 function saveAction(Request $request){
        $avater = $request->file('avater');
        $avater->move(public_path('uploads'), $avater->getClientOriginalName());

        return "The file has been uploaded successfully";
    }


/***** 
Answer to Question 6: 
******/


    function setCookie(Request $request){
        $rememberToken = $request->cookie('remember_token');
    
        if( $rememberToken === null ){
            $rememberToken = null;
        }
    }


/***** 
Answer to Question 7: 
******/

    function submitAction(Request $request){
        $email = $request->input('email');

        $response = [
            'success' => true,
            'message' => 'Form submitted successfully.'
        ];
    
        return new JsonResponse($response);
    }










}


