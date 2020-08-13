<?php

namespace App\Repositories\DonHang;

use App\Repositories\BaseRepository;
use App\Models\DonHang;
// use Illuminate\Http\Request;

class DonHangRepository extends BaseRepository implements DonHangRepositoryInterface {

    public function __construct(DonHang $don_hang)
    {
        parent::__construct($don_hang);
    }

    // public function createOrder(Request $request) {
    //     DonHang::create($request->all());
    // }
}
