<?php

namespace App\Http\Controllers;

use App\Handlers\AkunUserHandler;
use App\Repositories\AkunUserRepository;
use Illuminate\Http\Request;

class AkunUserController extends Controller
{
    protected $akunRadit;
    public function __construct(
        protected AkunUserHandler $handler, 
        protected AkunUserRepository $repo
    ) {    
        $this->handler = $handler;
        $this->repo = $repo;
    }

    public function index()
    {
        return response()->json(
            $this->akunRadit->getAll()
        );
    }

    public function show($id)
    {
        return response()->json(
            $this->handler->show($id)
        );
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
        ]);
        $this->handler->store($data);

        return response()->json(
            $this->handler->store($data),
            201
        );
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'email' => 'sometimes|required|email|max:255',
            'password' => 'sometimes|required|string|min:8',
        ]);

        return response()->json(
            $this->handler->update($id, $data)
        );
    }

    public function destroy($id)
    {
        $this->handler->destroy($id);

        return response()->json([
            'message' => 'Akun berhasil dihapus'
        ]);
    }
}