<?php
namespace AshokDevatwal\EnvManager\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Routing\Controller;

class EnvManagerController extends Controller
{
    public function index()
    {
        $this->authorizeAccess();
        $envContent = file_get_contents(base_path('.env'));
        return view('envmanager::index', compact('envContent'));
    }

    public function update(Request $request)
    {
        $this->authorizeAccess();
        file_put_contents(base_path('.env'), $request->env_content);
        return redirect()->back()->with('success', 'Environment file updated successfully.');
    }

    private function authorizeAccess()
    {
        abort_unless(config('envmanager.enabled'), 403);
    }
}