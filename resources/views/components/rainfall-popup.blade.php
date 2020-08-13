
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <div class="form-popup" id="myForm">
        <input type="hidden" class="x-data">
        <form action="/action_page.php" class="form-container popup-rainfall">
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
                <input type="submit" value="Tìm kiếm" class="search-btn">
            </div>
            <div id="container" style="width:100%; height:400px;"></div>
            <button type="button" class="btn cancel" onclick="closeForm()">X</button>
        </form>
    </div>

<script>
        // var xData = document.querySelector('.x-data').value; console.log(document.querySelector('.x-data'));
        // var myChart = Highcharts.chart('container', {

        // title: {
        //     text: 'BIỂU ĐỒ LƯỢNG MƯA TRẠM'
        // },

        // yAxis: {
        //     title: {
        //         text: 'Lượng mưa (mm)'
        //     }
        // },

        // xAxis: {
        //     accessibility: {
        //         rangeDescription: 'Range: 2010 to 2014'
        //     },
        //     categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        // },

        // legend: {
        //     layout: 'vertical',
        //     align: 'right',
        //     verticalAlign: 'middle'
        // },

        // plotOptions: {
        //     series: {
        //         label: {
        //             connectorAllowed: false
        //         },
        //     }
        // },

        // series: [{
        //         name: 'Nước mưa',
        //         data: [0, 1.2, 2, 3.8, 1, 2, 5, 3]
        //     }, {
        //         name: 'Nước giếng',
        //         data: [3, 2, 3.5, 6, 6.2, 5.4, 4.8, 5,]
        //     },
        // ],

        // responsive: {
        //     rules: [{
        //         condition: {
        //             maxWidth: 500
        //         },
        //         chartOptions: {
        //             legend: {
        //                 layout: 'horizontal',
        //                 align: 'center',
        //                 verticalAlign: 'bottom'
        //             }
        //         }
        //     }]
        // }

        // });
</script>