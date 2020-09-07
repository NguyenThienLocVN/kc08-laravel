<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->

<div class="modal fade" id="rainfallModal" tabindex="-1" role="dialog" aria-labelledby="rainfallModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="rainfallModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="space-wrapper d-flex">
                    <div class="statistical-space mr-2">
                        <div class="basic-info py-2">
                            <div class="d-flex justify-content-between mb-1">
                                <div class="col-7">Tên trạm : </div>
                                <div class="col-5 font-weight-bold">Tà Lài</div>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="col-7">Mã trạm : </div>
                                <div class="col-5 font-weight-bold"></div>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="col-7">Kinh độ : </div>
                                <div class="col-5 font-weight-bold">107o22'</div>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="col-7">Vĩ độ : </div>
                                <div class="col-5 font-weight-bold">11o22'</div>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="col-7">Sông : </div>
                                <div class="col-5 font-weight-bold">Đồng Nai</div>
                            </div>
                        </div>
                        <div class="monitoring-info py-2">
                            <div class="d-flex justify-content-between mb-1">
                                <div class="col-7">Thời gian quan trắc : </div>
                                <div class="col-5 font-weight-bold">03/10/2007 - 31/12/2007</div>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="col-7">Trung bình nhiều năm : </div>
                                <div class="col-5 font-weight-bold"></div>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="col-7">Lớn nhất : </div>
                                <div class="col-5 font-weight-bold">888 g/m<sup>3</sup></div>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="col-7">Ngày xuất hiện : </div>
                                <div class="col-5 font-weight-bold">12/12/2007</div>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="col-7">Nhỏ nhất : </div>
                                <div class="col-5 font-weight-bold">888 g/m<sup>3</sup></div>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="col-7">Ngày xuất hiện : </div>
                                <div class="col-5 font-weight-bold">01/01/1999</div>
                            </div>
                        </div>
                    </div>
                    <div class="chart-space">
                        <div class="date-range d-flex mb-2 align-items-center">
                            <div class="start d-flex">
                                <span class="mr-1">Từ ngày</span>
                                <input data-date-format="dd/mm/yyyy" class="w-50 start-picker" id="start-picker" style="height: 25px;">
                            </div>
                            <div class="end d-flex">
                                <span class="mr-1">Đến ngày</span>
                                <input data-date-format="dd/mm/yyyy" class="w-50 end-picker" id="end-picker" style="height: 25px;">
                            </div>
                            <div class="d-flex">
                                <input type="button" value="Tìm kiếm" class="search-btn" id="search-rain-btn">
                            </div>
                        </div>
                        <div id="muddy-sand-container" style="width:100%; height:300px;"></div>
                        
                        <div id="avg-chart" class="avg-chart turbidity-ele" style="width:100%; height:200px;"></div>
                        
                        <div id="max-chart" class="max-chart turbidity-ele" style="width:100%; height:200px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
//