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
                    <div class="statistical-space">
                        <label class="m-0">Trung bình năm</label>
                        <div id="avg-chart" class="avg-chart turbidity-ele" style="width:100%; height:200px;"></div>

                        <label class="m-0">Giá trị lớn nhất</label>
                        <div id="max-chart" class="max-chart turbidity-ele" style="width:100%; height:200px;"></div>

                        <span>Ngày lớn nhất &nbsp;</span><span class="max-date-of-year font-weight-bold"></span>

                    </div>
                    <div class="chart-space">
                        <div class="date-range">
                            <div class="start">
                                <label for="">Từ ngày</label>
                                <input data-date-format="dd/mm/yyyy" class="start-picker" id="start-picker">
                            </div>
                            <div class="end">
                                <label for="">Đến ngày</label>
                                <input data-date-format="dd/mm/yyyy" class="end-picker" id="end-picker">
                            </div>
                            <div>
                            <label for="">&nbsp;</label>
                                <input type="button" value="Tìm kiếm" class="search-btn" id="search-rain-btn">
                            </div>
                        </div>
                        <div id="container" style="width:100%; height:400px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
