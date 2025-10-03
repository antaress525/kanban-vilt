<?php

namespace App\Http\Controllers;

use App\Actions\CreateKanbanAction;
use App\Http\Requests\KanbanRequest;
use App\Models\Kanban;
use Illuminate\Http\Request;
use Inertia\Inertia;

class KanbanController extends Controller
{
    public function index()
    {
        return Inertia::render('Kanban/Index');
    }

    public function store(KanbanRequest $request, CreateKanbanAction $action) {
        $kanban = $action->handle($request->validated());
        return to_route('kanban.show', $kanban);
    }

    public function show(Kanban $kanban) {
        return to_route('kanban.index');
    }
}
