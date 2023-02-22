<?php
namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Http\Requests\V1\UserLoginRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function userLogin(UserLoginRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if(!empty($email) && !empty($password)){

        } else {
            $data = ['message' => 'Please specify email and password'];
            return response()->json($data, 204);
        }
        /*
        $bulk = collect($request->all())->map(function ($arr, $key){
            return Arr::except($arr, ['customerId', 'billedDate', 'paidDate']);
        });        
        Invoice::insert($bulk->toArray());
        (
        */
    }
}
