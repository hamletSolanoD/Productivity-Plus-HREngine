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

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Exceptions\HttpResponseException;

use App\Http\Resources\V1\UserResource;
use App\Http\Resources\V1\UserCollection;

use App\Http\Requests\V1\UserLoginRequest;
use App\Http\Requests\V1\StoreUserRequest;
use App\Http\Requests\V1\UpdateUserRequest;
use App\Http\Requests\V1\DeleteUserRequest;

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
    public function destroy(DeleteUserRequest $request, $uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        if(empty($user)){
            return response("user uuid dosent exist", 428);
        }
        $user->delete();        
        return response("deleted user", 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\V1\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    /*
    [url] http://localhost:8000/api/v1/users/{uuid} [post] 
    [request] { "active": true, "type": "e", "employee_uuid": "0ca783aa-44fe-3a6a-aee5-f433b458e8a0", "name": "Admin", "uuid": "00e5a5dd-b65f-4215-bde2-0932d8619582", "email": "admin@ymail.com", "password": "Sist8293+" }
    */
    public function store(StoreUserRequest $request)
    {
        new UserResource(User::create($request->all()));
        return response("created user", 200);
    }

    /*
    [url] http://localhost:8000/api/v1/users/{uuid} [patch] 
    [request] { "active": false }
    */
    public function update(UpdateUserRequest $request, $uuid /*User $user*/)
    {
        $user = User::where('uuid', $uuid)->first();
        if(empty($user)){
            return response("user uuid dosent exist", 428);
        }
        $user->update($request->all());
        return response("updated user", 200);
    }

    /*
    [url] http://localhost:8000/api/v1/users/login [post]
    [request] { "email": "admin@gmail.com", "password": "Sist8293" }
    */
    public function userLogin(UserLoginRequest $request)
    {
        /*
        Login | 200, Inactive user | 401, Inactive employer | 402, Error data | 409, Incomplete data | 406
        */
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
        if(!empty($user)){            
            $employee = Employee::where('id', $user['employee_id'])->first();
            if(empty($employee)){
                return response("Data error", 428);
            }
            $employer = Employer::where('id', $employee['employer_id'])->first();
            if(empty($employer)){
                return response("Data error", 428);
            }
            if(!$employer['active']){
                return response("Inactive employer", 402);
            }
            $employer = Employer::where('email', $email)->first();
            if($user['active']){
                if(Hash::check($password, $user['password'])){
                    return response()->json($user, 200);
                } else {
                    return response("Incorrect password", 409);
                }
            } else {
                return response("Inactive user", 401);
            }
        } else {
            return response("Email is not registered", 409);
        }
    }
}
