<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/status', [ApiController::class, 'status']);
Route::get('/clients', [ApiController::class, 'clients']);
Route::get('/client-by-id/{id}', [ApiController::class, 'clientById']); //Query Params (passando o id)
Route::get('/client', [ApiController::class, 'client']); // Request Body (passando o id)
Route::post('/add-client', [ApiController::class, 'addClient']);
Route::put('/update-client', [ApiController::class, 'updateClient']);
Route::delete('/delete-client/{id}', [ApiController::class, 'deleteClient']);


