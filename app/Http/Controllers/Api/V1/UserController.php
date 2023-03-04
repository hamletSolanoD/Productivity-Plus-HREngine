<?php
/*
╔══════════════════════════════════════════════════╗
║        © 2023 Productivity Plus HR Engine        ║
╠══════════════════════════════════════════════════╣
║   In memory of Patricia Ivonne Alvarez Avitia!   ║
╚══════════════════════════════════════════════════╝
*/
namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Http\Requests\V1\UserLoginRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Resources\V1\UserResource;
use App\Http\Resources\V1\UserCollection;

use App\Http\Requests\V1\StoreUserRequest;
use App\Http\Requests\V1\UpdateUserRequest;

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\V1\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    /*
    [url] http://localhost:8000/api/v1/users [post] 
    [request] { "active": true,	"type": "e", "employee_id": 1, "employee_uuid": "a77667d7-58f3-34dc-9353-185562051836",	"name": "User",	"uuid": "00e5a5dd-b65f-4215-bde2-0932d8619582",	"email": "user@gmail.com", "password -> "S1$4.Cr3@" }
    */
    public function store(StoreUserRequest $request)
    {
        return new UserResource(User::create($request->all()));
    }
    /*
    [url] http://localhost:8000/api/v1/users [patch] 
    [request] { "active": false }
    */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
    }


    /*
    [url] http://localhost:8000/api/v1/users/login [get]
    [request] { "email": "admin@gmail.com", "password": "Sist8293" }
    */
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
                        return response()->json($data, 203);
                    }
                } else {                    
                    $contact = $user['type'] == 'e' ? 'employer' : 'system provider';
                    $data = ['login' => false, 'message' => 'Inactive User, please contact with your ' . $contact];
                    return response()->json($data, 203);
                }
            } else {
                $data = ['login' => false, 'message' => 'Email is not registered'];
                return response()->json($data, 203);
            }
        } else {
            $data = ['login' => false, 'message' => 'Please specify email and password'];
            return response()->json($data, 203);
        }
    }
}
