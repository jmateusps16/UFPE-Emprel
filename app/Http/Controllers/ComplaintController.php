<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComplaintModel;

class ComplaintController extends Controller
{
    //

    public function list() {
        // TODO: ADICIONAR FILTRO NA BUSCA
        return DefaultResponse(200, 'success', ComplaintModel::all());
    } 

    public function save(Request $request) {
        // TODO: APÓS COLOCAR JWT ADICIONAR USUÁRIO  E FAZER VALIDAÇÃO DE INPUT
        if ($request->id > 0) {
            $model = ComplaintModel::find($request->id);
            
            if ($model != NULL) {
                $model->description = $request->description;
                $model->save();
            }
        }
        else {
            $model = ComplaintModel::create([
                "description" => $request->description
            ]);
        }
        return DefaultResponse(200, 'success', $model);
    }

    public function delete(Request $request) {
        // TODO: ADICIONAR VALIDAÇÃO
        $model = NULL;

        if ($request->id > 0) {
            $model = ComplaintModel::find($request->id);

            if ($model != NULL) $model->delete();
        }

        return DefaultResponse(200, 'success', $model);
    }
}
