@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-item-center">
                        <h2>Ask Question</h2>
                        <div class="ml-auto">
                            <a href="{{route('questions.index')}}" class="btn btn-outline-secondary">Back To All
                                Questions</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route('questions.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="question-title">Title</label>
                            <input type="text" value="{{old('title')}}"
                                class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="title"
                                id="question-title" placeholder="">
                            @if($errors->has('title'))
                            <div class="invalid-feedback">
                                <strong>{{$errors->first('title')}}</strong>
                            </div>

                            @endif
                        </div>
                        <div class="form-group">
                            <label for="question-body">Explain your question</label>
                            <textarea class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}" name="body"
                                id="question-body" rows="3">{{old('body')}}</textarea>
                            @if($errors->has('body'))
                            <div class="invalid-feedback">
                                <strong>{{$errors->first('body')}}</strong>
                            </div>

                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-lg">Ask this question</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection