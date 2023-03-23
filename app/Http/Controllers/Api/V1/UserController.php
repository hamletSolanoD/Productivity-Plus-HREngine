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

    // [url] /api/v1/users/{uuid} [delete]
    public function destroy(DeleteUserRequest $request, $uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        if(empty($user)){
            return response("user uuid dosent exist", 428);
        }
        $user->delete();        
        return response("deleted user", 200);
    }

    // [url] /v1/users/{uuid} [post]
    public function store(StoreUserRequest $request)
    {
        $uuid = $request->input('uuid');
        new UserResource(User::create($request->all()));
        return response($uuid, 200);
    }

    // [url] /api/v1/users/{uuid}
    public function update(UpdateUserRequest $request, $uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        if(empty($user)){
            return response("user uuid dosent exist", 428);
        }
        $user->update($request->all());
        return response("updated user", 200);
    }

    // [url] /api/v1/users/login [post]
    public function userLogin(UserLoginRequest $request)
    {
        //200 Login, 401 Inactive user, 402 Inactive employer, 409 Error data, 406 Incomplete data, 428 Data error
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
