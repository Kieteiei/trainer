@extends('layout.app-include')

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">การเทรน</li>
            </ol>
        </div>
        <h1>เทรนเนอร์ {{ $training->trainer_user->fullname }} </h1>

        <div class="panel panel-default">
            <div class="panel-heading">ปฏิทินการฝึก</div>
            <div class="panel-body">
                <div id='calendar'></div>
                <div style="margin-top:30px">
                    <h3 class="text-center">เพิ่มตารางการฝึก</h3>
                    <form action="/user/tabletrainings" method="post">
                        @csrf
                        <input type="hidden" name="training_id" value="{{ $training->training_id }}">

                        <div class="form-group col-sm-4">
                            <label>หัวข้อ</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>ตั้งแต่</label>
                            <input type="datetime-local" name="meeting_at" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>ถึง</label>
                            <input type="datetime-local" name="ending_at" class="form-control">
                        </div>
                        <div class="form-group col-sm-12">
                            <label>หมายเหตุ</label>
                            <textarea name="note" class="form-control" style="height:100px;"></textarea>
                        </div>
                        <div class="col-sm-12 text-right">
                            <button class="btn btn-primary">บันทึกการเปลี่ยนแปลง</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">บันทึกการฝึก</div>
                    <div class="panel-body">
                        <ul class="todo-list">

                            @foreach ($training->practicerecords as $i => $practicerecord)
                                <li class="todo-list-item">
                                    <div>
                                        <div class="checkbox" data-toggle="collapse" href="#collapse-{{ $i }}">
                                            <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                                            <label>{{ $practicerecord->practicerecord_name }}</label>
                                        </div>
                                        <div class="pull-right action-buttons">
                                            <form action="/user/practicerecords/{{ $practicerecord->practicerecord_id }}" method="post">
                                                {{ method_field('DELETE') }}
                                                @csrf

                                                <button type="submit" class="btn btn-danger">
                                                    <em class="fa fa-trash" style="color:white"></em>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                    <div id="collapse-{{ $i }}" class="panel-collapse collapse" role="tabpanel" style="padding: 30px 10px 30px 10px;">
                                        <form action="/user/practicerecords/{{ $practicerecord->practicerecord_id }}" method="post">
                                            {{ method_field('PATCH') }}
                                            @csrf

                                            <div class="form-group col-sm-12">
                                                <label>practicerecord_name</label>
                                                <input type="text" name="practicerecord_name" class="form-control"
                                                    value="{{ $practicerecord->practicerecord_name }}">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>practiced_at</label>
                                                <input type="text" name="practiced_at" class="form-control"
                                                    value="{{ $practicerecord->practiced_at }}">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>weight</label>
                                                <input type="number" name="weight" class="form-control"
                                                    value="{{ $practicerecord->weight }}">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>height</label>
                                                <input type="number" name="height" class="form-control"
                                                    value="{{ $practicerecord->height }}">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label>practicerecord_detail</label>
                                                <textarea name="practicerecord_detail" class="form-control" style="height: 100px;">{!! $practicerecord->practicerecord_detail !!}</textarea>
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label>effect</label>
                                                <textarea name="effect" class="form-control" style="height: 100px;">{!! $practicerecord->effect !!}</textarea>
                                            </div>

                                            <div class="col-sm-12 text-right">
                                                <button class="btn btn-primary">บันทึกการเปลี่ยนแปลง</button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            @endforeach

                            <li class="todo-list-item">
                                <div data-toggle="collapse" href="#collapse-new-practicerecord">
                                    <div class="checkbox">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                        <label>เพิ่มรายการใหม่</label>
                                    </div>
                                </div>
                                <div  id="collapse-new-practicerecord" class="panel-collapse collapse" role="tabpanel" style="padding: 30px 10px 30px 10px;">
                                    <form action="/user/practicerecords" method="post">
                                        @csrf
                                        <input type="hidden" name="training_id" value="{{ $training->training_id }}">

                                        <div class="form-group col-sm-12">
                                            <label>practicerecord_name</label>
                                            <input type="text" name="practicerecord_name" class="form-control">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>practiced_at</label>
                                            <input type="text" name="practiced_at" class="form-control">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>weight</label>
                                            <input type="number" name="weight" class="form-control">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>height</label>
                                            <input type="number" name="height" class="form-control">
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label>practicerecord_detail</label>
                                            <textarea name="practicerecord_detail" class="form-control" style="height: 100px;"></textarea>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label>effect</label>
                                            <textarea name="effect" class="form-control" style="height: 100px;"></textarea>
                                        </div>

                                        <div class="col-sm-12 text-right">
                                            <button class="btn btn-primary">บันทึกการเปลี่ยนแปลง</button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">โภชนาการ</div>
                    <div class="panel-body">
                        <p>
                            {!! $training->nutrition->nutrition_detail !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="timetable-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>ท่านต้องการลบรายการ ?</h1><br>
                <div class="text-right">
                    <form id="timetable-deleteform" method="post">
                        @csrf
                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-danger">
                            ลบทิ้ง
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                height: 500,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                eventRender: function(eventObj, $el) {
                    $el.popover({
                        title: eventObj.title,
                        content: eventObj.description,
                        trigger: 'hover',
                        placement: 'top',
                        container: 'body'
                    });
                },
                eventClick: function(event) {
                    if (event.tabletraining_id) {
                        $('#timetable-modal').modal('toggle');
                        $('#timetable-deleteform').attr('action', "/user/tabletrainings/"+event.tabletraining_id)
                    }
                    return false;
                },
                events: [
                    @foreach ($training->tabletrainings as $tabletraining)
                    {
                        tabletraining_id : {{ $tabletraining->tabletraining_id }},
                        title  : '{{ $tabletraining->title }}',
                        description: `{!! $tabletraining->note !!}`,
                        start  : '{{ $tabletraining->meeting_at }}',
                        @if ($tabletraining->ending_at)
                            end  : '{{ $tabletraining->ending_at }}'
                        @endif
                    },
                    @endforeach
                ],
            });
        });
    </script>


@endsection
