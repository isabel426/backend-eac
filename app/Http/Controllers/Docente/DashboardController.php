<?php

namespace App\Http\Controllers\Docente;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\View\View;

// app/Http/Controllers/Docente/DashboardController.php
class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $docenteRoleId = Role::where('name', 'docente')->value('id');

        $ecosistemas = auth()->user()
            ->ecosistemasAsignados()
            ->wherePivot('role_id', $docenteRoleId)
            ->with([
                'modulo',
                'situacionesCompetencia',
                'perfilesHabilitacion',
            ])
            ->get();

        return view('docente.dashboard', compact('ecosistemas'));
    }
}
