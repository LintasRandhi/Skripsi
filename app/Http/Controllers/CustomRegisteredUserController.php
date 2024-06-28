<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\RegisterResponse;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CustomRegisteredUserController extends Controller
{
    
        use PasswordValidationRules;
    
        /**
         * @var \Laravel\Fortify\Contracts\CreatesNewUsers
         */
        protected $creator;
    
        /**
         * Create a new controller instance.
         *
         * @param  \Laravel\Fortify\Contracts\CreatesNewUsers  $creator
         * @return void
         */
        public function __construct(CreatesNewUsers $creator)
        {
            $this->creator = $creator;
        }
    
        /**
         * Handle an incoming registration request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Laravel\Fortify\Contracts\RegisterResponse
         */
        public function store(Request $request)
        {
            Auth::login($user = $this->creator->create($request->all()));
    
            return app(RegisterResponse::class)->toResponse($request)->setTargetUrl('/pendaftaran');
        }
    
}