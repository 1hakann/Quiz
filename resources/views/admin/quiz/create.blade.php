<x-app-layout>
    
    <x-slot name="header">
        Quiz Oluştur
    </x-slot>
    
    
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('quizzes.store')}}">
            @csrf
            <div class="form-group">
                <label>Quiz Başlığı</label>
                <input type="text" name="title" value="{{old('title')}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Quiz Açıklama</label>
                <textarea name="description" class="form-control" rows="6">{{old('description')}}</textarea>
            </div>
            <div class="form-group">
                <input type="checkbox" id="isAddDate" @if(old('finished_at')) checked @endif >
                <label>Bitiş Tarihi Olacak mı?</label>
            </div>
            <div class="form-group" id="dateCheck" @if(!old('finished_at')) style="display: none" @endif>
                <label>Bitiş Tarihi</label>
                <input type="datetime-local" name="finished_at" value="{{old('finished_at')}}" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-success">Quiz Oluştur</button>
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