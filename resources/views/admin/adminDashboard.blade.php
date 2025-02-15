@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome! Here are some numbers about LaraQuiz.</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md text-center">
                            <h1></h1>
                            questions in our database
                        </div>
                        <div class="col-md-3 text-center">
                            <h1></h1>
                            users registered
                        </div>
                        <div class="col-md-3 text-center">
                            <h1></h1>
                            quizzes taken
                        </div>
                        <div class="col-md-3 text-center">
                            <h1></h1>
                            average score
                        </div>
                    </div>
                </div>
            </div>

            <a href="" class="btn btn-success">Take a new quiz!</a>
        </div>
    </div>
@endsection
