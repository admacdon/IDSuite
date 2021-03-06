@extends('layouts.app')

@section('content')


    <section class="row mb-lg-2 mt-lg-4">

        <div class="col-lg-2">
            <h6 class="ml-lg-3 subtle-text" style="color: #c8cad5">STATISTICS</h6>
            <h3 class="ml-lg-3 raleway" style="color: white;">Product</h3>
        </div>

    </section>

    <div class="col-lg-6 offset-3">
        <hr style="border-top: 2px solid rgba(255, 255, 255, 0.2) !important;">
    </div>

    <section class="mb-lg-2 mt-lg-4">
        <div class="card-deck">
            <div class="card card-purple">
                <div class="card-block">
                    <div class="text-center">
                        <h4 class="card-title">Customer Count</h4>
                        <h1 class="card-title" id="customer-count"></h1>
                    </div>
                </div>
            </div>

            <div class="card card-orange">
                <div class="card-block">
                    <div class="text-center">
                        <h4 class="card-title">Zabbix count</h4>
                        <h1 class="card-title" id="zabbix-count"></h1>
                    </div>
                </div>
            </div>

            <div class="card card-pink">
                <div class="card-block">
                    <div class="text-center">
                        <h4 class="card-title">NetSuite Count</h4>
                        <h1 class="card-title" id="netsuite-count"></h1>
                    </div>
                </div>
            </div>

            <div class="card card-yellow">
                <div class="card-block">
                    <div class="text-center">
                        <h4 class="card-title">Mrge Count</h4>
                        <h1 class="card-title" id="mrge-count"></h1>
                    </div>
                </div>
            </div>

            <div class="card card-teal">
                <div class="card-block">
                    <div class="text-center">
                        <h4 class="card-title">Polycom Count</h4>
                        <h1 class="card-title" id="polycom-count"></h1>
                    </div>
                </div>
            </div>

        </div>


        <div class="card-deck mt-3">
            <div class="card card-teal">
                <div class="card-block">
                    <div class="text-center">
                        <h4 class="card-title">Total CDR data</h4>
                        <h1 class="card-title" id="cdr-count"></h1>
                    </div>
                </div>
            </div>

            <div class="card card-yellow">
                <div class="card-block">
                    <div class="text-center">
                        <h4 class="card-title">Customers with CDR data</h4>
                        <h1 class="card-title" id="cust-with-cdr"></h1>
                    </div>
                </div>
            </div>

            <div class="card card-pink">
                <div class="card-block">
                    <div class="text-center">
                        <h4 class="card-title">Customer CDR ratio</h4>
                        <h1 class="card-title" id="cust_cdr_ratio"></h1>
                    </div>
                </div>
            </div>

            {{--<div class="card card-orange">--}}
                {{--<div class="card-block">--}}
                    {{--<div class="text-center">--}}
                        {{--<h4 class="card-title">Customer's monitored ratio</h4>--}}
                        {{--<h1 class="card-title" id="cust-monitored-ratio"></h1>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>

    </section>


@endsection

@push('measure.stats')

    <script>

        function getCustomerStats(user_id){

            options = JSON.stringify({
                id: user_id
            });

            return axios.get('/api/measure/stats/customer/' + options)
                .then(function(data){

                    if(!validate(data.data)){
                        return false;
                    }

                    let stats = data.data;

                    $('#customer-count').text(stats.stat);

                });

        }

        function getZabbixStats(user_id){

            options = JSON.stringify({
                id: user_id
            });

            return axios.get('/api/measure/stats/zabbix/' + options)
                .then(function(data){

                    if(!validate(data.data)){
                        return false;
                    }

                    let stats = data.data;

                    $('#zabbix-count').text(stats.stat);

                });

        }

        function getNetSuiteStats(user_id) {

            options = JSON.stringify({
                id: user_id
            });

            return axios.get('/api/measure/stats/netsuite/' + options)
                .then(function(data){

                    if(!validate(data.data)){
                        return false;
                    }

                    let stats = data.data;

                    $('#netsuite-count').text(stats.stat);

                });

        }

        function getMrgeStats(user_id){

            options = JSON.stringify({
                id: user_id
            });

            return axios.get('/api/measure/stats/mrge/' + options)
                .then(function(data){

                    if(!validate(data.data)){
                        return false;
                    }

                    let stats = data.data;

                    $('#mrge-count').text(stats.stat);

                });

        }

        function getPolycomStats(user_id){

            options = JSON.stringify({
                id: user_id
            });

            return axios.get('/api/measure/stats/polycom/' + options)
                .then(function(data){

                    if(!validate(data.data)){
                        return false;
                    }

                    let stats = data.data;

                    $('#polycom-count').text(stats.stat);

                });

        }

        function getCdrStats(user_id){

            options = JSON.stringify({
                id: user_id
            });

            return axios.get('/api/measure/stats/cdr/' + options)
                .then(function(data){

                    if(!validate(data.data)){
                        return false;
                    }

                    let stats = data.data;


                    $('#cdr-count').text(stats.stat);

                });

        }

        function getCustomerWithCdrStats(user_id){

            options = JSON.stringify({
                id: user_id
            });

            return axios.get('/api/measure/stats/customerwithcdr/' + options)
                .then(function(data){

                    if(!validate(data.data)){
                        return false;
                    }

                    let stats = data.data;

                    $('#cust-with-cdr').text(stats.stat);

                });

        }

        function getCustomerCdrRatioStats(user_id){

            options = JSON.stringify({
                id: user_id
            });

            return axios.get('/api/measure/stats/customerwithcdrratio/' + options)
                .then(function(data){

                    if(!validate(data.data)){
                        return false;
                    }

                    let stats = data.data;

                    $('#cust_cdr_ratio').text(stats.stat.toFixed(2) + '%');
                });

        }


        $(document).ready(function () {

            axiosrequests.push = getCustomerStats('{{Auth::user()->id}}');
            axiosrequests.push = getZabbixStats('{{Auth::user()->id}}');
            axiosrequests.push = getNetSuiteStats('{{Auth::user()->id}}');
            axiosrequests.push = getMrgeStats('{{Auth::user()->id}}');
            axiosrequests.push = getPolycomStats('{{Auth::user()->id}}');
            axiosrequests.push = getCdrStats('{{Auth::user()->id}}');
            axiosrequests.push = getCustomerWithCdrStats('{{Auth::user()->id}}');
            axiosrequests.push = getCustomerCdrRatioStats('{{Auth::user()->id}}');


        });

    </script>

@endpush