<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\Admin\UserResource;
use Symfony\Component\HttpFoundation\Response;
use Gate;

class UserApiController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UserResource(User::all());
    }

    
    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());

        return (new UserResource($user))->response()->setStatusCode(Response::HTTP_CREATED);
    }


    public function show(User $user)
    {
        //
    }

    
    public function update(Request $request, User $user)
    {
        //
    }

    
    public function destroy(User $user)
    {
        //
    }
}
