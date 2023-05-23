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
use App\Http\Requests\V1\UserPinRequest;
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
    public function destroy(DeleteUserRequest $request)
    {
        
    }

    // [url] /v1/users/ [post]
    public function store(StoreUserRequest $request)
    {
        
    }

    // [url] /api/v1/users/{uuid}
    public function update(UpdateUserRequest $request)
    {
        
    }

    // [url] /api/v1/users/login [post]
    public function userLogin(UserLoginRequest $request)
    {
        
    }

    // [url] /api/v1/users/pin [post]
    public function userPin(UserPinRequest $request)
    {
        $user = User::where('employee_uuid', $request->input('employee_uuid'))->first();
        $user->pin_activated = $request->input('activated');
        $user->pin = $user->pin_activated ? random_int(100000,999999) : null;
        $response = $user->pin_activated ? $user->pin : "Pin deactivated";
        if($user->save()){
            return response($response, 200);
        } else {            
            return response("system error", 500);
        }
    }
}
