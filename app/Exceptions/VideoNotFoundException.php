<?php

namespace App\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;

class VideoNotFoundException extends HttpException {

    public function __construct($message = NULL) {
        parent::__construct(404, $message);
    }

}
