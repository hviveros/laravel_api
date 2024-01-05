<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/notas', App\Http\Controllers\Api\V1\NotaController::class)->only(['index', 'show', 'destroy']);
