<?php
namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Http\Requests\V1\UserLoginRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            $user = User::where('email', $email)->first();
            if(!empty($user)){
                if($user['active']){
                    if(Hash::check($password, $user['password'])){
                        $data = ['login' => true, 'message' => 'User logged', 'user' => $user];
                        return response()->json($data, 200);
                    } else {
                        $data = ['login' => true, 'message' => 'Incorrect password'];
                        return response()->json($data, 204);
                    }
                } else {                    
                    $contact = $user['type'] == 'e' ? 'employer' : 'system provider';
                    $data = ['login' => false, 'message' => 'Inactive User, please contact with your ' + $contact];
                    return response()->json($data, 204);
                }
            } else {
                $data = ['login' => false, 'message' => 'Email is not registered'];
                return response()->json($data, 204);
            }
        } else {
            $data = ['login' => false, 'message' => 'Please specify email and password'];
            return response()->json($data);
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
