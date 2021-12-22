<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Files;

class FileDownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $sorgula = Files::where('id',$id)->first();
        if($sorgula->uid == \Auth::user()->id){
            $file = storage_path('app/files/'.\Auth::user()->id.'/') . $sorgula->file_name . '.' . $sorgula->file_type;

            if (file_exists($file)) {
                return response()->download($file, $sorgula->file_name.'.'.$sorgula->file_type, $headers, 'inline');
            }else {
                abort(404, 'File not found!');
            }
        }else {
            abort(404, 'File not found!');
        }
    }
}
