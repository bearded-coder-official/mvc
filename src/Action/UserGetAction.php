<?php

namespace NtSchool\Action;

use GuzzleHttp\Psr7\ServerRequest;
use NtSchool\Model\Language;
use NtSchool\Model\User;

class UserGetAction
{
    public function __invoke(ServerRequest $request)
    {
        $user = User::find($request->getAttribute('id'));

        $language = Language::find(1);

        return view('user-get', [
            'user' => $user,
            'language' => $language,
        ]);
    }
}