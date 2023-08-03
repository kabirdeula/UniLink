<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            if ($this->isHttpException($e)) {
                return $this->renderHttpExceptions($e);
            }

            return $this->renderGenericErrorPage();
        });
    }

    protected function renderHttpExceptions(HttpException $e)
    {
        return response()->view('errors.http', ['exception' => $e], $e->getStatusCode());
    }

    protected function renderGenericErrorPage()
    {
        return response()->view('errors.generic', [], 500);
    }
}

