<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $records = DB::table('records')->get();
        $applications = DB::table('applications')->get();
        return view('admin.admin', ['records' => $records, 'applications' => $applications]);
    }
    public function delete_record($record_id)
    {
        $Record = Record::find($record_id);
        $Record->delete();
        return redirect()->route('admin');
    }
    public function delete_appl($appl_id)
    {
        $Application = Application::find($appl_id);
        $Application->delete();
        return redirect()->route('admin');
    }
    public function update( $record_id, Request $request)
    {
        $record = Record::find($record_id);
        $record ->fill($request->all());
        $record->save();
        return back();
    }
    public function update_appl( $appl_id, Request $request)
    {
        $appl = Application::find($appl_id);
        $appl ->fill($request->all());
        $appl->save();
        return back();
    }
}
