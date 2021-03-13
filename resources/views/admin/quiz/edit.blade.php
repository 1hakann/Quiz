<x-app-layout>
    
    <x-slot name="header">
        Quiz Güncelle
    </x-slot>
    
    
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('quizzes.update', $quiz->id)}}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label>Quiz Başlığı</label>
                <input type="text" name="title" value="{{ $quiz->title }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Quiz Açıklama</label>
                <textarea name="description" class="form-control" rows="6">{{ $quiz->description }}</textarea>
            </div>
            <div class="form-group">
                <input type="checkbox" id="isAddDate" @if($quiz->finished_at) checked @endif >
                <label>Bitiş Tarihi Olacak mı?</label>
            </div>
            <div class="form-group" id="dateCheck" @if(!$quiz->finished_at) style="display: none" @endif>
                <label>Bitiş Tarihi</label>
                <input type="datetime-local" name="finished_at" @if($quiz->finished_at) value="{{ date('Y-m-d\TH:i', strtotime($quiz->finished_at)) }}" @endif class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-success">Quiz Güncelle</button>
            </div>


            </form>
        </div>
    </div>
    <x-slot name="js">
        <script>
            $('#isAddDate').change(function(){
                if($('#isAddDate').is(':checked')) {
                    $('#dateCheck').show();
                } else {
                    $('#dateCheck').hide();
                }
            });
        </script>
    </x-slot>
</x-app-layout>