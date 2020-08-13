<template>
    <div>
        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sales Ratio</h4>
                        <div class="sales ct-charts mt-3"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-5">Referral Earnings</h5>
                        <h3 class="font-light">$769.08</h3>
                        <div class="m-t-20 text-center">
                            <div id="earnings"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title m-b-0">Users</h4>
                        <h2 class="font-light">35,658 <span class="font-16 text-success font-medium">+23%</span></h2>
                        <div class="m-t-30">
                            <div class="row text-center">
                                <div class="col-6 border-right">
                                    <h4 class="m-b-0">58%</h4>
                                    <span class="font-14 text-muted">New Users</span>
                                </div>
                                <div class="col-6">
                                    <h4 class="m-b-0">42%</h4>
                                    <span class="font-14 text-muted">Repeat Users</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Latest Sales</h4>
                        <p><a href="">Tạo đơn hàng</a></p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="border-top-0">ID</th>
                                    <th class="border-top-0">SDT Người đặt</th>
                                    <th class="border-top-0">Cân nặng</th>
                                    <th class="border-top-0">Tổng tiền</th>
                                    <th class="border-top-0">Ngày đặt hàng</th>
                                    <th class="border-top-0">Tình trạng đơn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="order in orders" v-bind:key="order.id">
                                    <td class="font-medium">{{ order.id }}</td>
                                    <td class="txt-oflo">{{ order.sdt_nguoi_dat }}</td>
                                    <td><span class="label label-success label-rounded">{{ order.can_nang }}</span> </td>
                                    <td class="font-medium">{{ order.tong_tien }}</td>
                                    <td><span class="txt-oflo">{{ order.ngay_dat_hang }}</span></td>
                                    <td><span class="txt-oflo">{{ checkStatus(order) }}</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Comments</h4>
                    </div>
                    <div class="comment-widgets" style="height:430px;">
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row m-t-0">
                            <div class="p-2">
                                <img src="" alt="user" width="50" class="rounded-circle">
                            </div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium">James Anderson</h6>
                                <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                <div class="comment-footer">
                                    <span class="text-muted float-right">April 14, 2016</span>
                                    <span class="label label-rounded label-primary">Pending</span>
                                    <span class="action-icons">
                                        <a href="javascript:void(0)">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="ti-check"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="ti-heart"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                            <div class="p-2">
                                <img src="" alt="user" width="50" class="rounded-circle">
                            </div>
                            <div class="comment-text active w-100">
                                <h6 class="font-medium">Michael Jorden</h6>
                                <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                <div class="comment-footer ">
                                    <span class="text-muted float-right">April 14, 2016</span>
                                    <span class="label label-success label-rounded">Approved</span>
                                    <span class="action-icons active">
                                        <a href="javascript:void(0)">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="icon-close"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="ti-heart text-danger"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                            <div class="p-2">
                                <img src="" alt="user" width="50" class="rounded-circle">
                            </div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium">Johnathan Doeting</h6>
                                <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                <div class="comment-footer">
                                    <span class="text-muted float-right">April 14, 2016</span>
                                    <span class="label label-rounded label-danger">Rejected</span>
                                    <span class="action-icons">
                                        <a href="javascript:void(0)">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="ti-check"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="ti-heart"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row m-t-0">
                            <div class="p-2">
                                <img src="" alt="user" width="50" class="rounded-circle">
                            </div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium">Steve Jobs</h6>
                                <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                <div class="comment-footer">
                                    <span class="text-muted float-right">April 14, 2016</span>
                                    <span class="label label-rounded label-primary">Pending</span>
                                    <span class="action-icons">
                                        <a href="javascript:void(0)">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="ti-check"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="ti-heart"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Temp Guide</h4>
                        <div class="d-flex align-items-center flex-row m-t-30">
                            <div class="display-5 text-info"><i class="wi wi-day-showers"></i> <span>73<sup>°</sup></span></div>
                            <div class="m-l-10">
                                <h3 class="m-b-0">Saturday</h3><small>Ahmedabad, India</small>
                            </div>
                        </div>
                        <table class="table no-border mini-table m-t-20">
                            <tbody>
                                <tr>
                                    <td class="text-muted">Wind</td>
                                    <td class="font-medium">ESE 17 mph</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Humidity</td>
                                    <td class="font-medium">83%</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Pressure</td>
                                    <td class="font-medium">28.56 in</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Cloud Cover</td>
                                    <td class="font-medium">78%</td>
                                </tr>
                            </tbody>
                        </table>
                        <ul class="row list-style-none text-center m-t-30">
                            <li class="col-3">
                                <h4 class="text-info"><i class="wi wi-day-sunny"></i></h4>
                                <span class="d-block text-muted">09:30</span>
                                <h3 class="m-t-5">70<sup>°</sup></h3>
                            </li>
                            <li class="col-3">
                                <h4 class="text-info"><i class="wi wi-day-cloudy"></i></h4>
                                <span class="d-block text-muted">11:30</span>
                                <h3 class="m-t-5">72<sup>°</sup></h3>
                            </li>
                            <li class="col-3">
                                <h4 class="text-info"><i class="wi wi-day-hail"></i></h4>
                                <span class="d-block text-muted">13:30</span>
                                <h3 class="m-t-5">75<sup>°</sup></h3>
                            </li>
                            <li class="col-3">
                                <h4 class="text-info"><i class="wi wi-day-sprinkle"></i></h4>
                                <span class="d-block text-muted">15:30</span>
                                <h3 class="m-t-5">76<sup>°</sup></h3>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>
</template>

<script>
export default {
    data() {
        return {
            orders : []
        }
    },
    mounted() {
        this.getData()
    },
    methods : {
        getData() {
            axios.get('api/admin/DonHang')
                .then((res) => {
                    this.orders = res.data;
                    console.log(res.data);
                })
                .catch((err) => {
                    console.log(err);
                })
        },
        checkStatus(order) {
            if(order.tinh_trang_don == 0 ) {
                return "Đang xử lý";
            }
            else if(order.tinh_trang_don == 1) {
                return "Đã đóng kiện";
            }
            else if(order.tinh_trang_don == 2) {
                return "Đang vận chuyển";
            }
            else if(order.tinh_trang_don == 3) {
                return "Đã đến kho";
            }
            else if(order.tinh_trang_don == 4) {
                return "Tồn kho";
            }
            else if(order.tinh_trang_don == 5) {
                return "Đã giao hàng";
            }
        }
    },
    computed : {

    }
}
</script>

<style>
</style>
