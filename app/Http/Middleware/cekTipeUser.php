<?php

namespace App\Http\Middleware;

use Closure;

class cekTipeUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->session()->get('user_type') == 'siswa'){
            return $next($request);
        }else{
            return redirect()->back()->with('danger', 'Pengajar tidak dapat mengambil kelas');
        }
    }
}
