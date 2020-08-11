<?php

namespace App\Repositories\DonHang;

use App\Repositories\BaseRepository;
use App\Models\DonHang;

class DonHangRepository extends BaseRepository implements DonHangRepositoryInterface {

    public function __construct(DonHang $don_hang)
    {
        parent::__construct($don_hang);
    }
}
