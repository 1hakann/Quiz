<x-app-layout>
    
    <x-slot name="header">
        Soru Düzenle
    </x-slot>
    
    
    <div class="card">
        <div class="card-body">
           <form method="POST" enctype="multipart/form-data" action="{{route('questions.update',[$question->quiz_id, $question->id])}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Soru Başlığı</label>
                <textarea name="question" class="form-control" rows="6">{{$question->question}}</textarea>
            </div>
            <div class="form-group">
                <label>Fotoğraf</label>
                @if($question->image)
                <a href="{{asset($question->image)}}" target="_blank">
                <img src="{{asset($question->image)}}" width="200px;">
                </a>
                @endif
                <input type="file" name="image" value="{{$question->image}}" class="form-control">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>1. cevap</label>
                        <textarea name="answer1" class="form-control" rows="2">{{$question->answer1}}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>2. cevap</label>
                        <textarea name="answer2" class="form-control" rows="2">{{$question->answer2}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>3. cevap</label>
                        <textarea name="answer3" class="form-control" rows="2">{{$question->answer3}}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>4. cevap</label>
                        <textarea name="answer4" class="form-control" rows="2">{{$question->answer4}}</textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Doğru Cevap</label>
                <select name="correct_answer" class="form-control">
                    <option value="answer1" @if($question->correct_answer === 'answer1') selected @endif >1. cevap</option>
                    <option value="answer2" @if($question->correct_answer === 'answer2') selected @endif>2. cevap</option>
                    <option value="answer3" @if($question->correct_answer === 'answer3') selected @endif>3. cevap</option>
                    <option value="answer4" @if($question->correct_answer === 'answer4') selected @endif>4. cevap</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-success">Soru Güncelle</button>
            </div>
           </form>
        </div>
    </div>
</x-app-layout>