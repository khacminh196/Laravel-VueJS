<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DonHang\DonHangRepositoryInterface;

class DonHangController extends Controller
{
    protected $donHangRepository;

    public function __construct(DonHangRepositoryInterface $repository)
    {
        $this->donHangRepository = $repository;
    }

    public function index()
    {
        $don_hang = $this->donHangRepository->getAll();
        return response()->json($don_hang, 200);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $this->donHangRepository->createItem($request);
        return response()->json("Create Success");
    }

    public function show($id)
    {
        $don = $this->donHangRepository->getById($id);
        return response()->json($don, 200);
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->donHangRepository->updateItem($id, $request);
        return response()->json("Update Finish");
    }

    public function destroy($id)
    {
        $this->donHangRepository->deleteItem($id);
        return response()->json("Finish");
    }
}
