@extends('layouts.app')

@section('content')
    <div class="container p-lg-1">
        <div class="row">
            <div class="col-lg-12 col-md-12 offset-md-2 offset-lg-0">
                @if($number === 1)

                    <div class="card card-inverse card-square border-bottom-pink border-right-pink" style="border-top: none; border-left: none; background-color: transparent;">
                        <div class="card-block">
                            <h4 class="card-title pink">{{$ticket->subject}}</h4>
                            <p class="card-text text-white">This case is for customer {{$ticket->entity->contact->name->name}}</p>

                            <div class="col-md-10 offset-1">
                                <div class="chart-container">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>

                        </div>
                    </div>

                @elseif($number === 2)

                    <div class="card card-inverse card-square border-bottom-teal border-right-teal" style="border-top: none; border-left: none; background-color: transparent; ">
                        <div class="card-block">
                            <h4 class="card-title teal">{{$ticket->subject}}</h4>
                            <p class="card-text text-white">This case is for customer {{$ticket->entity->contact->name->name}}</p>

                            <div class="col-md-10 offset-1">
                                <div class="chart-container">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>

                        </div>
                    </div>

                @elseif($number === 3)

                    <div class="card card-inverse card-square border-bottom-purple border-right-purple" style="border-top: none; border-left: none; background-color: transparent;">
                        <div class="card-block">
                            <h4 class="card-title purple">{{$ticket->subject}}</h4>
                            <p class="card-text text-white">This case is for customer {{$ticket->entity->contact->name->name}}</p>

                            <div class="col-md-10 offset-1">
                                <div class="chart-container">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>

                        </div>
                    </div>

                @elseif($number === 4)

                    <div class="card card-inverse card-square border-bottom-yellow border-right-yellow" style="border-top: none; border-left: none; background-color: transparent;">
                        <div class="card-block">
                            <h4 class="card-title yellow">{{$ticket->subject}}</h4>
                            <p class="card-text text-white">This case is for customer {{$ticket->entity->contact->name->name}}</p>

                            <div class="col-md-10 offset-1">
                                <div class="chart-container">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>

                        </div>
                    </div>

                @else

                    <div class="card card-inverse card-square border-bottom-blue border-right-blue" style="border-top: none; border-left: none; background-color: transparent;">
                        <div class="card-block">
                            <h4 class="card-title blue">{{$ticket->subject}}</h4>
                            <p class="card-text text-white">This case is for customer {{$ticket->entity->contact->name->name}}</p>

                            <div class="col-md-10 offset-1">
                                <div class="chart-container">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>

                        </div>
                    </div>

                @endif
            </div>
        </div>

        <div class="col-lg-12 mt-5 mb-4" style="padding: 0;">
            <div class="row no-gutters">

                <div class="col-lg-6">
                    <div id="container_two"></div>
                </div>

                <div class="col-lg-6">
                    <div id="container_one"></div>
                </div>

            </div>
        </div>

        <div class="card card-square mb-lg-5" style="background-color: transparent; border: none;">
            <ul id="account-card-header" class="nav nav-tabs active-outline-card-header-pink" role="tablist">
                <li id="insights" class="nav-item">
                    <a id="insights-a" class="nav-link active-outline-tab-pink text-white" data-toggle="tab" href="#account-card-block-insights-tab" role="tab">Insights</a>
                </li>
                <li id="locations" class="nav-item">
                    <a id="locations-a" class="nav-link teal" data-toggle="tab" href="#account-card-block-locations-tab" role="tab">Location(s)</a>
                </li>
                <li id="contacts" class="nav-item">
                    <a id="contacts-a" class="nav-link blue" data-toggle="tab" href="#account-card-block-contacts-tab" role="tab">Contacts</a>
                </li>
                <li id="notes" class="nav-item">
                    <a id="notes-a" class="nav-link yellow" data-toggle="tab" href="#account-card-block-notes-tab" role="tab">Notes</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane card-block active active-outline-card-block-pink" id="account-card-block-insights-tab" role="tabpanel">
                    {{--<div id="chart-container" class="chart-container">--}}
                    <div class="row">
                        <div class="col-lg-6">
                            <canvas id="devicebytype"></canvas>
                        </div>
                        <div class="col-lg-6">
                            <canvas id="deviceupstatus"></canvas>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <canvas id="deviceupstatuspercentall"></canvas>
                        </div>
                    </div>
                    {{--</div>--}}
                </div>
                <div class="tab-pane card-block active-outline-card-block-teal" id="account-card-block-locations-tab" role="tabpanel">

                    <h3 class="card-title teal mb-3">Sites</h3>


                </div>

                <div class="tab-pane card-block active-outline-card-block-blue" id="account-card-block-contacts-tab" role="tabpanel">

                </div>


                <div class="tab-pane card-block active-outline-card-block-yellow" id="account-card-block-notes-tab" role="tabpanel">

                    <h5 id='notes-title' class="card-title mt-2 text-white">Notes</h5>

                    <a id="account-card-block-a" href="#" class="btn btn-nav-yellow mt-3" data-toggle="modal" data-target="#noteModal"><i class="fa fa-plus"></i> Add Note</a>

                    <!-- Modal -->
                    <div class="modal" id="noteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Note</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" style="color: white;">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="note-text">Text</label>
                                            <textarea class="form-control" id="note-text" rows="4" placeholder="Type your note here..."></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <a id="note-cancel" class="btn btn-nav-pink" data-dismiss="modal" style="cursor: pointer !important;">Close</a>
                                    <a id="note-submit" class="btn btn-nav-yellow" style="cursor: pointer !important;"><i class="fa fa-plus"></i> Add Note</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection