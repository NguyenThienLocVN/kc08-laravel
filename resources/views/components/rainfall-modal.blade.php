<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->

<div class="modal fade" id="turbidityModal" tabindex="-1" role="dialog" aria-labelledby="turbidityModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div id="turbidity-overlay"></div>
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="turbidityModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="space-wrapper d-flex">
                    <div class="statistical-space mr-2 position-relative" id="statistical-space">
                        <div class="station-info" id="station-info">
                            <div class="basic-info py-2">
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Tên trạm : </div>
                                    <div class="col-5 font-weight-bold"><span id="station-value"></span></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Mã trạm : </div>
                                    <div class="col-5 font-weight-bold"></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Vĩ độ : </div>
                                    <div class="col-5 font-weight-bold"><span id="latitude-value"></span></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Kinh độ : </div>
                                    <div class="col-5 font-weight-bold"><span id="longitude-value"></span></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Sông : </div>
                                    <div class="col-5 font-weight-bold"><span id="river-value"></span></div>
                                </div>
                            </div>
                            <div class="monitoring-info py-2">
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Thời gian quan trắc : &nbsp; <i class="fa fa-info-circle wet-info" aria-hidden="true" data-toggle="season-info" data-trigger="hover" data-content="Số liệu bên dưới áp dụng khi NGÀY BẮT ĐẦU và NGÀY KẾT THÚC cùng 1 năm"></i></div>
                                    <div class="col-5 font-weight-bold"><span id="monitoring-time"></span></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7 pr-0">TB <span class="year-value"></span> : </div>
                                    <div class="col-5 font-weight-bold"><span class="same-year-value" id="average-value"></span> g/m<sup>3</sup></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Lớn nhất <span class="year-value"></span> : </div>
                                    <div class="col-5 font-weight-bold"><span class="same-year-value" id="max-value"></span> g/m<sup>3</sup></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Ngày xuất hiện : </div>
                                    <div class="col-5 font-weight-bold"><span class="same-year-value" id="max-date"></span></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Nhỏ nhất <span class="year-value"></span> : </div>
                                    <div class="col-5 font-weight-bold"><span class="same-year-value" id="min-value"></span> g/m<sup>3</sup></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Ngày xuất hiện : </div>
                                    <div class="col-5 font-weight-bold"><span class="same-year-value" id="min-date"></span></div>
                                </div>
                            </div>
                            <div class="wet-season py-2">
                                <div class="d-flex justify-content-between mb-1 position-relative">
                                    <div class="col-7 wet-season-title"><span>MÙA MƯA</span></div>
                                    <div class="col-5"></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Lớn nhất : </div>
                                    <div class="col-5 font-weight-bold"><span class="same-year-value" id="wet-season-max-value"></span> g/m<sup>3</sup></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Ngày xuất hiện : </div>
                                    <div class="col-5 font-weight-bold"><span class="same-year-value" id="wet-season-max-date"></span></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Nhỏ nhất : </div>
                                    <div class="col-5 font-weight-bold"><span class="same-year-value" id="wet-season-min-value"></span> g/m<sup>3</sup></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Ngày xuất hiện : </div>
                                    <div class="col-5 font-weight-bold"><span class="same-year-value" id="wet-season-min-date"></span></div>
                                </div>
                            </div>
                            <div class="dry-season py-2">
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7 dry-season-title">MÙA KHÔ </div>
                                    <div class="col-5 font-weight-bold"></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Lớn nhất : </div>
                                    <div class="col-5 font-weight-bold"><span class="same-year-value" id="dry-season-max-value"></span> g/m<sup>3</sup></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Ngày xuất hiện : </div>
                                    <div class="col-5 font-weight-bold"><span class="same-year-value" id="dry-season-max-date"></span></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Nhỏ nhất : </div>
                                    <div class="col-5 font-weight-bold"><span class="same-year-value" id="dry-season-min-value"></span> g/m<sup>3</sup></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="col-7">Ngày xuất hiện : </div>
                                    <div class="col-5 font-weight-bold"><span class="same-year-value" id="dry-season-min-date"></span></div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-success" id="btn-export-station-info" title="Xuất thông tin" onclick="toPdf()"><i class="fa fa-download" aria-hidden="true"></i></button>
                        <div id="avg-chart" class="avg-chart turbidity-ele" style="width:100%; height:200px;"></div>
                    </div>
                    <div class="chart-space" id="chart-space">
                        <div class="date-range d-flex mb-2 align-items-center font-13">
                            <div class="d-flex align-items-center mr-4" id="block-start">
                                <button type="button" class="btn-primary" id="btn-hide-statistical" title="Mở rộng / Thu nhỏ"><i class="fa fa-expand" aria-hidden="true"></i></button>
                            </div>
                            <div class="d-flex align-items-center" id="block-start">
                                <span class="mr-1">Từ ngày</span>
                                <input data-date-format="dd/mm/yyyy" class="mr-1 start-picker" id="start-picker" style="height: 25px;">
                            </div>
                            <div class="d-flex align-items-center" id="block-end">
                                <span class="mr-1">Đến ngày</span>
                                <input data-date-format="dd/mm/yyyy" class="mr-1 end-picker" id="end-picker" style="height: 25px;">
                            </div>
                            <div class="d-flex">
                                <input type="button" value="Tìm kiếm" class="search-btn" id="search-rain-btn">
                            </div>
                        </div>
                        
                        <div class="position-relative" id="block-export">
                            <div id="muddy-sand-container" style="width:100%; height:300px;"></div>
                            <button class="btn btn-primary position-absolute" id="btn-show-download" title="Xuất file biểu đồ"><i class="fa fa-download" aria-hidden="true"></i></button>
                            <button class="d-none position-absolute btn-success border-0 rounded border-success small" id="btn-export-png">Xuất PNG</button>
                            <button class="d-none position-absolute btn-success border-0 rounded border-success small" id="btn-export-xls">Xuất XLS</button>
                        </div>
                        
                        <div class="position-relative">
                            <div id="max-chart" class="max-chart turbidity-ele" style="width:100%; height:200px;"></div>
                            <div id="date-max-appear" class="date-max-appear date-appear font-13">
                                <table border=1 class="text-center">
                                    <tr>
                                        <td>Ngày</td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="position-relative">
                            <div id="min-chart" class="min-chart turbidity-ele" style="width:100%; height:200px;"></div>
                            <div id="date-min-appear" class="date-min-appear date-appear font-13">
                                <table border=1 class="text-center">
                                    <tr>
                                        <td>Ngày</td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>