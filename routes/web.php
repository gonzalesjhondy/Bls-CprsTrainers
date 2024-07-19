<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Trainer\TrainerController;
use App\Http\Controllers\Trainer\TrainingCtrl;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginCtrl;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('trainer/index', [TrainerController::class, 'index'])->name('trainer.index');


    Route::get('/check-blsid', [TrainerController::class, 'checkBlsId'])->name('check.blsid');

    Route::get('trainer/aftersubmit', [TrainerController::class, 'aftersubmit'])->name('trainer.aftersubmit');
    Route::get('trainer/list', [TrainerController::class, 'list'])->name('trainer.list');

    Route::get('trainer/agebracket', [TrainerController::class, 'agebracket'])->name('trainer.agebracket');
    Route::post('trainer/saveAgeBracket', [TrainerController::class, 'saveAgeBracket'])->name('trainer.saveAgeBracket');
    Route::post('trainer/updateAgeBracket', [TrainerController::class, 'updateAgeBracket'])->name('trainer.updateAgeBracket');
    Route::delete('trainer/deleteAgeBracket/{id}', [TrainerController::class, 'deleteAgeBracket'])->name('trainer.deleteAgeBracket');

    Route::get('trainer/profwork', [TrainerController::class, 'profwork'])->name('trainer.profwork');
    Route::post('trainer/saveProfWork', [TrainerController::class, 'saveProfWork'])->name('trainer.saveProfWork');
    Route::post('trainer/updateProfWork', [TrainerController::class, 'updateProfWork'])->name('trainer.updateProfWork');
    Route::delete('trainer/deleteProfWork/{id}', [TrainerController::class, 'deleteProfWork'])->name('trainer.deleteProfWork');

    Route::get('trainer/areaofassignmentmain', [TrainerController::class, 'areaofassignmentmain'])->name('trainer.areaofassignmentmain');
    Route::post('trainer/areaofassignmentmain', [TrainerController::class, 'saveAreaOfAssignment'])->name('trainer.saveAreaOfAssignment');
    Route::post('trainer/updateAreaOfAssignment', [TrainerController::class, 'updateAreaOfAssignment'])->name('trainer.updateAreaOfAssignment');


    Route::get('trainer/areaofassignmentsub', [TrainerController::class, 'areaofassignmentsub'])->name('trainer.areaofassignmentsub');
    Route::post('trainer/areaofassignmentsub', [TrainerController::class, 'saveAreaOfAssignmentSub'])->name('trainer.saveAreaOfAssignmentSub');

    Route::get('trainer/areaofassignmentsub/{id}', [TrainerController::class, 'getSubAssignments'])->name('trainer.getSubAssignments');

    Route::post('trainer/save', [TrainerController::class, 'save'])->name('trainer.save');
    Route::get('trainer/get-blsinfo', [TrainerController::class, 'getBlsInfo'])->name('trainer.getBlsInfo');
    Route::post('trainer/update-blsinfo', [TrainerController::class, 'updateBlsInfo'])->name('trainer.updateBlsInfo');
    Route::delete('trainer/deleteblsInfo/{id}', [TrainerController::class, 'deleteblsInfo'])->name('trainer.deleteblsInfo');
    


    



