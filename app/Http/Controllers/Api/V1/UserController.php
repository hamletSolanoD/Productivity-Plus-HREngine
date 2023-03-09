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
use App\Models\Employee;
use App\Models\Employer;
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    /*    
    [url] http://localhost:8000/api/v1/users/{uuid} [delete] 
    */
    public function destroy(Request $request, $uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        if(empty($user)){
            return response()->json(["success" => false, "message" => "user uuid ".$uuid." dosent exist"], 200);
        }
        $user->delete();
        return response()->json(["success" => true, "message" => "deleted user"], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\V1\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    /*
    [url] http://localhost:8000/api/v1/users/{uuid} [post] 
    [request] { "active": true,	"type": "e", "employee_id": 1, "employee_uuid": "a77667d7-58f3-34dc-9353-185562051836",	"name": "User",	"uuid": "00e5a5dd-b65f-4215-bde2-0932d8619582",	"email": "user@gmail.com", "password": "S1$4.Cr3@" }
    */
    public function store(StoreUserRequest $request)
    {
        new UserResource(User::create($request->all()));
        $user = User::where('uuid', $request->input('uuid'))->first();
        return response()->json(["success" => true, "message" => "created user", "data" => $user], 200);
    }

    /*
    [url] http://localhost:8000/api/v1/users/{uuid} [patch] 
    [request] { "active": false }
    */
    public function update(UpdateUserRequest $request, $uuid /*User $user*/)
    {
        $user = User::where('uuid', $uuid)->first();
        if(empty($user)){
            return response()->json(["success" => false, "message" => "user uuid ".$uuid." dosent exist"], 200);
        }
        $user->update($request->all());
        return response()->json(["success" => true, "message" => "updated user", "data" => $user], 200);
    }


    /*
    [url] http://localhost:8000/api/v1/users/login [post]
    [request] { "email": "admin@gmail.com", "password": "Sist8293" }
    */
    public function userLogin(UserLoginRequest $request)
    {        
        /*
        Login | 200
        Inactive user | 401
        Inactive employer | 402
        Error data | 409
        Incomplete data | 406 
        */
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
        if(!empty($user)){            
            $employee = Employee::where('id', $user['employee_id'])->first();
            if(empty($employee)){
                return response("data error", 428);
            }
            $employer = Employer::where('id', $employee['employer_id'])->first();
            if(empty($employer)){
                return response("data error", 428);
            }
            if(!$employer['active']){
                return response("Inactive employer", 402);
            }
            $employer = Employer::where('email', $email)->first();
            if($user['active']){
                if(Hash::check($password, $user['password'])){                    
                    return response()->json($user, 200);
                    //return response()->json(['login' => true, 'message' => 'User logged', 'user' => $user], 200);
                } else {
                    return response("Incorrect password", 409);
                    //return response()->json(['login' => true, 'message' => 'Incorrect password'], 203);
                }
            } else {
                return response("Inactive user", 401);
                //$contact = $user['type'] == 'e' ? 'employer' : 'system provider';
                //return response()->json(['login' => false, 'message' => 'Inactive User, please contact with your ' . $contact], 203);
            }
        } else {
            return response("email is not registered", 409);
            //return response()->json(['login' => false, 'message' => 'Email is not registered'], 203);
        }
    }
}
