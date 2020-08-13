<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
<div class="form-popup" id="myForm">
    <input type="hidden" class="x-data">
    <form action="/" class="form-container popup-rainfall">
        <div class="header">
            <h3 id="station-name"></h3>
        </div>
        <div class="date-range">
            <div class="start">
                <label for="">Từ ngày</label>
                <input type="date" class="start-picker" id="start-picker">
            </div>
            <div class="end">
                <label for="">Đến ngày</label>
                <input type="date" class="end-picker" id="end-picker">
            </div>
            <input type="button" value="Tìm kiếm" class="search-btn" id="search-rain-btn">
        </div>
        <div id="container" style="width:100%; height:400px;"></div>
        <button type="button" class="btn cancel" onclick="closeForm()">X</button>
    </form>
</div>