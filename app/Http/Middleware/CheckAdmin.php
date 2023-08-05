<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra xem user hiện tại có phải là admin hay không
        if ($request->user() && $request->user()->is_admin) {
            return $next($request);
        }

        // Nếu không phải admin, chuyển hướng hoặc trả về lỗi tùy ý
        return redirect()->route('home')->with('error', 'You do not have permission to access this page.');
    }
}
