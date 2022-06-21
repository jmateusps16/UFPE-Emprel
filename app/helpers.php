<?php

function DefaultResponse(int $code, string $message, $data) {
    return [
        "code" => $code,
        "message" => $message,
        "data" => $data
    ];
}