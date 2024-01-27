<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestContactUs;
use App\Jobs\SendContactUsMail;
use App\Models\ContactUs;
use App\Services\ContactUs\ContactUsService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function getContactUs(): JsonResponse
    {
        try {
            $contactUsService   = new ContactUsService();
            $contactUsData      = $contactUsService->getContactUs();

            return sendSuccessResponse('Contact Us List Found Successfully', 200, $contactUsData);
        }catch (Exception $exception) {
            return sendErrorResponse('Something went wrong' . $exception->getMessage());
        }
    }

    public function createContactUs(RequestContactUs $request): JsonResponse
    {
        try {
            $contactUsService = new ContactUsService();
            $contactUsService->createContactUs($request);
            dispatch(new SendContactUsMail($request));
            return sendSuccessResponse('Contact Us Created Successfully');
        }catch (Exception $exception) {
            return sendErrorResponse('Something went wrong' . $exception->getMessage());
        }
    }

    public function updateContactUs(RequestContactUs $request, ContactUs $contactUs): JsonResponse
    {
        try {
            $contactUsService = new ContactUsService();
            $contactUsService->updateContactUs($request, $contactUs);

            return sendSuccessResponse('Contact Us Updated Successfully');
        }catch (Exception $exception) {
            return sendErrorResponse('Something went wrong' . $exception->getMessage());
        }
    }

    public function deleteContactUs(ContactUs $contactUs): JsonResponse
    {
        try {
            $contactUs->delete();
            return sendSuccessResponse('Contact Us Deleted Successfully');
        }catch (Exception $exception) {
            return sendErrorResponse('Something went wrong' . $exception->getMessage());
        }
    }
}
