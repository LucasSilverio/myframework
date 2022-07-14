<?php

$app->Middleware('before', function ($container) {
    session_start();
});

$app->Middleware('before', function ($container) {
    header("Content-Type: application/json");
});
