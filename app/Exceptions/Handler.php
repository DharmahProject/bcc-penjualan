<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Session\TokenMismatchException;

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
        // Existing reportable callback
        $this->reportable(function (Throwable $e) {
            //
        });

        // Add a renderable callback for TokenMismatchException
        $this->renderable(function (TokenMismatchException $e, $request) {
            // Check if the request expects a JSON response
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Your session has expired. Please log in again.'
                ], 419);
            }

            // Redirect to the login page with an error message
            return redirect()->route('login')->with('error', 'Your session has expired. Please log in again.');
        });
    }
}
