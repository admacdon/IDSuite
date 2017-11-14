<div class="row m-1">
    <div class="col-lg-12 mt-2 text-white">
        <h5>Average Call Duration</h5>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div id="avergaecallduration"></div>
    </div>
</div>

@push('account_averagecallduration_chart')

<script>

    function chartAverageCallDuration(data) {
        if (data !== false) {

            AmCharts.makeChart("avergaecallduration", {
                type: "serial",
                startDuration: 2,
                theme: "dark",
                labelsEnabled: false,
                dataProvider: data,
                valueAxes: [{
                    position: "left",
                    title: "Avg Minutes"
                }],
                graphs: [{
                    balloonText: "[[category]]: <b>[[value]]</b>",
                    fillColorsField: "color",
                    fillAlphas: 1,
                    lineAlpha: 0.1,
                    type: "column",
                    valueField: "value"
                }],
                depth3D: 20,
                angle: 30,
                chartCursor: {
                    categoryBalloonEnabled: false,
                    cursorAlpha: 0,
                    zoomable: false
                },
                categoryField: "date_string",
                categoryAxis: {
                    gridPosition: "start",
                    labelRotation: 90
                },
                export: {
                    enabled: true,
                }
            });


        }
    }

    /**
     *
     * averageCallDuration
     *
     * gets data for average call duration chart
     *
     * @param entity_id
     * @param el
     */
    function averageCallDuration(entity_id, el) {
        setChartHW(el, '500px', '200px');

        let options = JSON.stringify({
            id: entity_id,
            start_time: 2017
        });

        return axios.get('/api/chart/averagecallduration/' + options)
            .then(function (data) {

                if(!validate(data.data)){
                    return false;
                }

                chartAverageCallDuration(data.data);
            });
    }

    $( document ).ready(function() {
        axiosrequests.push = averageCallDuration('{{$entity->id}}', $('#avergaecallduration'));
    });


</script>

@endpush