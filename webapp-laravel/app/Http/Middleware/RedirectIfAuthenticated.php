<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;
use Log;
use Request;

class RedirectIfAuthenticated {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

		$url = Request::url();
//		Log::info('\n\ncheck\n\n');

error_log("*** $url ***");

		if ($this->auth->check())
		{
			if($url == "http://192.168.48.128:8000/auth/register"){
				return new RedirectResponse(url('/auth/registerTwo'));
			}else{
				return new RedirectResponse(url('/home'));
			}
		}

		return $next($request);
	}

}
