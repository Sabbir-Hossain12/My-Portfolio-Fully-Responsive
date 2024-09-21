

<div class="row">
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <a href="{{route('admin.order.all.data')}}">
            <div class="card card-h-50 shadow">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4 text-center  rounded">
                            <i class="fas fa-cart-plus h2"></i>
                        </div>

                        <div class="col-8">
                            <span class="text-muted mb-1  d-block text-truncate">All Orders</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="{{$allOrdersCount}}">{{$allOrdersCount}}</span>
                            </h4>

                        </div>


                    </div>

                </div><!-- end card body -->
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <a href="{{route('admin.order.status.data','Pending')}}">
        <div class="card card-h-50 shadow">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-4 text-center  rounded">
                        <i class="fas fa-cart-plus h2"></i>
                    </div>

                    <div class="col-8">
                        <span class="text-muted mb-1  d-block text-truncate">Pending</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="{{$pendingOrderCount}}">{{$pendingOrderCount}}</span>
                        </h4>

                    </div>


                </div>

            </div><!-- end card body -->
        </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <a href="{{route('admin.order.status.data','Processing')}}">
            <div class="card card-h-50 shadow">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4 text-center  rounded">
                            <i class="fas fa-cart-plus h2"></i>
                        </div>

                        <div class="col-8">
                            <span class="text-muted mb-1  d-block text-truncate">Processing</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="{{$processingOrderCount}}">{{$processingOrderCount}}</span>
                            </h4>

                        </div>


                    </div>

                </div><!-- end card body -->
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <a href="{{route('admin.order.status.data','Dropped_Off')}}">
            <div class="card card-h-50 shadow">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4 text-center  rounded">
                            <i class="fas fa-cart-plus h2"></i>
                        </div>

                        <div class="col-8">
                            <span class="text-muted mb-1  d-block text-truncate">Dropped Off</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="{{$droppedOffOrderCount}}">{{$droppedOffOrderCount}}</span>
                            </h4>

                        </div>


                    </div>

                </div><!-- end card body -->
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <a href="{{route('admin.order.status.data','Shipped')}}">
            <div class="card card-h-50 shadow">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4 text-center  rounded">
                            <i class="fas fa-cart-plus h2"></i>
                        </div>

                        <div class="col-8">
                            <span class="text-muted mb-1  d-block text-truncate">Shipped</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="{{$shippedOrderCount}}">{{$shippedOrderCount}}</span>
                            </h4>

                        </div>


                    </div>

                </div><!-- end card body -->
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <a href="{{route('admin.order.status.data','Out_Delivery')}}">
            <div class="card card-h-50 shadow">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4 text-center  rounded">
                            <i class="fas fa-cart-plus h2"></i>
                        </div>

                        <div class="col-8">
                            <span class="text-muted mb-1  d-block text-truncate">Out For Delivery</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="{{$outDeliveryOrderCount}}">{{$outDeliveryOrderCount}}</span>
                            </h4>

                        </div>


                    </div>

                </div><!-- end card body -->
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <a href="{{route('admin.order.status.data','Delivered')}}">
            <div class="card card-h-50 shadow">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4 text-center  rounded">
                            <i class="fas fa-cart-plus h2"></i>
                        </div>

                        <div class="col-8">
                            <span class="text-muted mb-1  d-block text-truncate">Delivered</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="{{$deliveredOrderCount}}">{{$deliveredOrderCount}}</span>
                            </h4>

                        </div>


                    </div>

                </div><!-- end card body -->
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <a href="{{route('admin.order.status.data','Cancelled')}}">
            <div class="card card-h-50 shadow">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4 text-center  rounded">
                            <i class="fas fa-cart-plus h2"></i>
                        </div>

                        <div class="col-8">
                            <span class="text-muted mb-1  d-block text-truncate">Cancelled</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="{{$cancelledOrderCount}}">{{$cancelledOrderCount}}</span>
                            </h4>

                        </div>


                    </div>

                </div><!-- end card body -->
            </div>
        </a>
    </div>

    
</div>