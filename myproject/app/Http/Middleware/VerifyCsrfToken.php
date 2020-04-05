<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        //this line is modified if we donot use @CSRF
        //csrf will give a token ,but here data will be sent but no token will be generated
      //'http://localhost/myproject/public/forms','http://localhost/myproject/public/userform'
      //  'http://localhost/myproject/public/form','http://localhost/myproject/public/caform'
      'http://127.0.0.1:8000/book','http://127.0.0.1:8000/logged'
//'http://localhost/myproject/public/book','http://localhost/myproject/public/logged'
    ];
}
