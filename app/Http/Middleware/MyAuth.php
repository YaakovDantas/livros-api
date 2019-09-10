<?php

namespace App\Http\Middleware;
use Closure;
use App\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;

class MyAuth 
{
    public function handle($request, Closure $next, $guard = null)
    {   
        try {
            if (!$request->hasHeader('Authorization')) {
                throw new \Exception();
            }
            $authorizationHeader = $request->header('Authorization');
            $token = str_replace('Bearer ', '', $authorizationHeader);
            $dadosAutenticacao = JWT::decode($token, env('JWT_KEY'), ['HS256']);
            $user = User::where('email', $dadosAutenticacao->email)
                 ->first();

            if(is_null($user)){
                throw new \Exception();
            }
            
            return $next($request);
        } catch (\Exception $e) {
            
            return response()->json("This user has no authorization.",401);
        }
        
    }

}