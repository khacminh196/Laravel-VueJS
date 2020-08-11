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
        dd($don_hang);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $don = $this->donHangRepository->getById($id);
        echo $don;
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        echo "Dang o day";
    }
}
