<x-app-layout>
    <x-slot name="header">
        {{$quiz->title}}
    </x-slot>
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <form method="POST" enctype="multipart/form-data" action="{{route('quiz.result',$quiz->slug)}}">
                   
                    @csrf
                @foreach ($quiz -> questions as $question )

                <strong>#{{$loop->iteration}}</strong>{{$question->question}}
                @if($question->image)
                <img class="img-responsive" width="200px" src="{{asset($question->image)}}" alt="">
                @endif
                <div class="form-check mt-2">
                    <input type="radio" class="form-check-input" name="{{$question->id}}" id="{{$question->name}}" value="answer1" required>
                    <label class="form-check-label" for="{{$question->id}}">{{$question->answer1}}</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="{{$question->id}}" id="{{$question->name}}" value="answer2" required>
                    <label class="form-check-label" for="{{$question->name}}">{{$question->answer2}}</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="{{$question->id}}" id="{{$question->name}}" value="answer3" required>
                    <label class="form-check-label" for="{{$question->name}}">{{$question->answer3}}</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="{{$question->id}}" id="{{$question->name}}" value="answer4" required>
                    <label class="form-check-label" for="{{$question->name}}">{{$question->answer4}}</label>
                </div>
                <hr>

                    
                @endforeach
                <button type="submit" class="btn btn-success btn-sm btn-block">Sınavı Bitir</button>
            </form>
            </p>
       
        </div>
    </div>
    
</x-app-layout>
