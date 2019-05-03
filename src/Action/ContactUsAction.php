<?php

namespace NtSchool\Action;

use GuzzleHttp\Psr7\ServerRequest;

class ContactUsAction
{
    public function __invoke(ServerRequest $request)
    {
        return view('contact-us');
    }
}