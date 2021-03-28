<x-app-layout>
    <x-slot name="header">
        {{$quiz->title}} Sonucu
    </x-slot>
    <div class="card">
        <div class="card-body">
            <h3>Puan: <strong>{{$quiz->my_result->point}}</strong></h3>
            <div class="alert alert-warning">
                <i class="fa fa-plus"></i> Doğru Cevap
                <i class="fa fa-circle"></i> Senin Seçimin
                <i class="fa fa-times text-danger"></i> Yanlış Cevap
            </div>
            <p class="card-text">
                @foreach ($quiz -> questions as $question )

                @if($question->correct_answer == $question->my_answer->answer)
                <i class="fa fa-check text-success"></i>
                @else
                <i class="fa fa-times text-danger"></i>
                @endif
                <strong>#{{$loop->iteration}}</strong>{{$question->question}}

                @if($question->image)
                <img class="img-responsive" width="200px" src="{{asset($question->image)}}" alt="">
                @endif
                <br>
                <small>Bu soruya <strong>%{{$question->true_percent}} oranında doğru cevap verildi.</strong></small>
                <div class="form-check mt-2">
                    @if('answer1' == $question->correct_answer)
                    <i class="fa fa-plus"></i>
                    @elseif('answer1' == $question->my_answer->answer)
                    <i class="fa fa-circle"></i>
                    @endif
                    <label class="form-check-label" for="{{$question->id}}">{{$question->answer1}}</label>
               
                </div>
                <div class="form-check">
                    @if('answer2' == $question->correct_answer)
                    <i class="fa fa-plus"></i>
                    @elseif('answer2' ==  $question->my_answer->answer)
                    <i class="fa fa-circle"></i>
                    @endif
                    <label class="form-check-label" for="{{$question->name}}">{{$question->answer2}}</label>
                </div>
                <div class="form-check">
                    @if('answer3' == $question->correct_answer)
                    <i class="fa fa-plus"></i>
                    @elseif('answer3' ==  $question->my_answer->answer)
                    <i class="fa fa-circle"></i>
                    @endif
                    <label class="form-check-label" for="{{$question->name}}">{{$question->answer3}}</label>
                </div>
                <div class="form-check">
                    @if('answer4' == $question->correct_answer)
                    <i class="fa fa-plus"></i>
                    @elseif('answer4' ==  $question->my_answer->answer)
                    <i class="fa fa-circle"></i>
                    @endif
                    <label class="form-check-label" for="{{$question->name}}">{{$question->answer4}}</label>
                </div>
                @if (!$loop->last)
                <hr>                    
                @endif

                    
                @endforeach
            </p>
       
        </div>
    </div>
    
</x-app-layout>
