<?php

namespace App\Exceptions;

use App\Http\Traits\HandleApi;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    use HandleApi;



    public function register()
    {

        $this->renderable(function (Exception $exception, Request $request) {


            if ($request->is('api/*')) {

                if ($exception instanceof HttpException) {
                    $code = $exception->getStatusCode();
                    $message = Response::$statusTexts[$code];
                    return $this->sendError('HttpException', $message , $code);

                }


                if ($exception instanceof AuthorizationException) {
                    return $this->sendError('AuthorizationException', $exception->getMessage() , ResponseAlias::HTTP_FORBIDDEN);
                }

                if ($exception instanceof AuthenticationException) {
                    return $this->sendError('AuthenticationException', $exception->getMessage() , ResponseAlias::HTTP_UNAUTHORIZED);
                }

                if ($exception instanceof ValidationException) {
                    $error = $exception->validator->errors()->messages()->first();

                    return $this->sendError('ValidationException',$error, ResponseAlias::HTTP_BAD_REQUEST);
                }

                if ($exception instanceof QueryException){
                    return $this->sendError('QueryException',$exception->getMessage());
                }

            }
            return $this->sendError('Internal Server Error','Internal Server Error has been occurred');

        });

    }
}
