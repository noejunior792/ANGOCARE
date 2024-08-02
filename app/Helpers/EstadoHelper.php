<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class EstadoHelper
{
    public static function activar($model)
    {
       try {
        $model->update([
            'estado'=>1,
        ]);

        return "done";
       } catch (\Throwable $th) {

        return $th;
       }
    }
    public static function desativar($model)
    {
       try {
        $model->update([
            'estado'=>2,
        ]);

        return "done";
       } catch (\Throwable $th) {
        return null;
       }
    }
}
