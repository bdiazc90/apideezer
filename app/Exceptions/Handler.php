<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler {
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
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
     *
     * @return void
     */
    public function register() {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->is('api/artist/*')) { // <- Add your condition here
                return response()->json([
                    'message' => 'Artist not found.'
                ], 404);
            }
            if ($request->is('api/album/*')) { // <- Add your condition here
                return response()->json([
                    'message' => 'Album not found.'
                ], 404);
            }
            if ($request->is('api/song/*')) { // <- Add your condition here
                return response()->json([
                    'message' => 'Song not found.'
                ], 404);
            }
            if ($request->is('api/search*')) { // <- Add your condition here
                return response()->json([
                    'message' => 'No match found.'
                ], 404);
            }
        });
    }
}
