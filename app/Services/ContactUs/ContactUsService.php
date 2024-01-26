<?php

namespace App\Services\ContactUs;

use App\Http\Requests\RequestContactUs;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsService
{
    public function getContactUs(): array
    {
        $contactUs = ContactUs::orderBy('id', 'DESC')->get();

        $mappedData = [];

        foreach ($contactUs as $contact) {
            $mappedData[] = [
                'id'        => $contact->id,
                'name'      => $contact->name,
                'email'     => $contact->email,
                'phone'     => $contact->phone_number,
                'address'   => $contact->address,
                'message'   => $contact->message
            ];
        }
        return $mappedData;
    }

    public function createContactUs(RequestContactUs $request): void
    {
        ContactUs::created([
            'name'          => $request->name,
            'email'         => $request->email,
            'phone_number'  => $request->phoneNumber,
            'address'       => $request->address,
            'message'       => $request->message
        ]);
    }

    public function updateContactUs(RequestContactUs $request, ContactUs $contactUs): void
    {
        $contactUs->update([
            'name'          => $request->name,
            'email'         => $request->email,
            'phone_number'  => $request->phoneNumber,
            'address'       => $request->address,
            'message'       => $request->message
        ]);
    }
}
