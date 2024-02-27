<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $firstName = $request->firstName();
        $lastName = $request->lastName();
        $email = $request->email();
        $password = $request->password();

        if ($firstName == null || $lastName == null || $email == null || $password == null) {
            return redirect()->back()->with('error', 'Please fill in all fields');
        }

        $user = \App\Models\user::findByEmailAndPassword($email, $password);

        // verify email and password
        if ($email == '<EMAIL>' && $password == '<PASSWORD>') {
            return $next($request);
        }

        return $next($request);
    }
}
