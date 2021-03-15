<x-app-layout>
    
    <x-slot name="header">
        {{ $quiz->title }} İçin Yeni Soru Oluştur
    </x-slot>
    
    
    <div class="card">
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{route('questions.store',$quiz->id)}}">
            @csrf
            <div class="form-group">
                <label>Soru Başlığı</label>
                <textarea name="question" class="form-control" rows="6">{{old('question')}}</textarea>
            </div>
            <div class="form-group">
                <label>Fotoğraf</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>1. cevap</label>
                        <textarea name="answer1" class="form-control" rows="2">{{old('answer1')}}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>2. cevap</label>
                        <textarea name="answer2" class="form-control" rows="2">{{old('answer2')}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>3. cevap</label>
                        <textarea name="answer3" class="form-control" rows="2">{{old('answer3')}}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>4. cevap</label>
                        <textarea name="answer4" class="form-control" rows="2">{{old('answer4')}}</textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Doğru Cevap</label>
                <select name="correct_answer" class="form-control">
                    <option value="answer1" @if(old('correct_answer') === 'answer1') selected @endif >1. cevap</option>
                    <option value="answer2" @if(old('correct_answer') === 'answer2') selected @endif>2. cevap</option>
                    <option value="answer3" @if(old('correct_answer') === 'answer3') selected @endif>3. cevap</option>
                    <option value="answer4" @if(old('correct_answer') === 'answer4') selected @endif>4. cevap</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-success">Soru Oluştur</button>
            </div>
            </form>
        </div>
    </div>
</x-app-layout>