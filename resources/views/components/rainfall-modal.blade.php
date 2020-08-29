{{--<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->--}}
{{--<div class="form-popup" id="myForm">--}}
{{--    <input type="hidden" class="x-data">--}}
{{--    <form action="/" class="form-container popup-rainfall">--}}
{{--        <div class="header">--}}
{{--            <h3 id="station-name"></h3>--}}
{{--        </div>--}}
{{--        <div class="chart-space">--}}
{{--        <div class="date-range">--}}
{{--            <div class="start">--}}
{{--                <label for="">Từ ngày</label>--}}
{{--                <input type="date" class="start-picker" id="start-picker">--}}
{{--            </div>--}}
{{--            <div class="end">--}}
{{--                <label for="">Đến ngày</label>--}}
{{--                <input type="date" class="end-picker" id="end-picker">--}}
{{--            </div>--}}
{{--            <input type="button" value="Tìm kiếm" class="search-btn" id="search-rain-btn">--}}
{{--        </div>--}}
{{--        </div>--}}
{{--        <div id="container" style="width:100%; height:400px;"></div>--}}
{{--        <button type="button" class="btn cancel" onclick="closeForm()">X</button>--}}
{{--    </form>--}}
{{--</div>--}}

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
                        <h5 class="text-center font-weight-bold p-2">THỐNG KÊ</h5>
                        <p class="m-0">Trung bình năm</p>
                        <div class="d-flex justify-content-around mb-3 turbidity-ele"></div>

                        <p class="m-0">Giá trị lớn nhất</p>
                        <div class="d-flex justify-content-around mb-3 turbidity-ele"></div>
                    </div>
                    <div class="chart-space">
                        <div class="date-range">
                            <div class="start">
                                <label for="">Từ ngày</label>
                                <input type="date" class="start-picker" id="start-picker">
                            </div>
                            <div class="end">
                                <label for="">Đến ngày</label>
                                <input type="date" class="end-picker" id="end-picker">
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
