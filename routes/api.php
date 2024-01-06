<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\NotaController as NotaV1;
use App\Http\Controllers\Api\V2\NotaController as NotaV2;

Route::apiResource('v1/notas', NotaV1::class)->only(['index', 'show', 'destroy']);
Route::apiResource('v2/notas', NotaV2::class)->only(['index', 'show']);
