<?php

namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;

trait HandleApi
{

    public function sendResponse($result, $message): JsonResponse
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];
        return response()->json($response);
    }


    public function sendError($error, $message, $code = 500): JsonResponse
    {
        $response = [
            'success' => false,
            'error' => $error,
            'message' => $message,
        ];
        return response()->json($response, $code);
    }


    public function sendValidationErrors($error, $errorMessages = [], $code = 500): JsonResponse
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];
        if(!empty($errorMessages)){
            $response['errors'] = $errorMessages;
        }
        return response()->json($response, $code);
    }
}
