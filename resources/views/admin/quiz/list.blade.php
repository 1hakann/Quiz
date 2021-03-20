<x-app-layout>
    <x-slot name="header">
        Quizler
    </x-slot>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{route('quizzes.create')}}" class="btn btn-sm btn-primary fas fa-plus float-right">Quiz Oluştur</a>
            </h5>
            <form action="" method="GET">
                <div class="form-row">
                    <div class="col-md-2">
                        <input type="text" name="title" placeholder="Quiz Adı" value="{{request()->get('title')}}" class="form-control">
                    </div>
                        <div class="col-md-2">
                            <select class="form-control" name="status" id="" onchange="this.form.submit()">
                                <option>Durum Seçiniz</option>
                                <option value="published" @if(request()->get('status') === 'published') selected @endif>Aktif</option>
                                <option value="passive" @if(request()->get('status') === 'passive') selected @endif>Pasif</option>
                                <option value="draft" @if(request()->get('status') === 'draft') selected @endif>Taslak</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            @if(request()->get('title') || request()->get('status'))
                            <a href="{{route('quizzes.index')}}" class="btn btn-secondary">Sıfırla</a>
                            @endif
                        </div>
                    </div>
            </form>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Quiz</th>
                    <th scope="col">Soru Sayısı</th>
                    <th scope="col">Durum</th>
                    <th scope="col">Bitiş Tarihi</th>
                    <th scope="col">İşlemler</th>
                  </tr>
                </thead>
                <tbody>
                      @foreach ($quizzes as $quiz)
                  <tr>
                      <th scope="row">{{$quiz->title}}</th>
                      <td>{{$quiz->questions_count}}</td>
                      <td>
                          @switch($quiz->status)
                              @case('published')
                                  <span class="badge badge-success">Aktif</span>
                                  @break
                              @case('passive')
                                  <span class="badge badge-danger">Pasif</span>
                                  @break
                              @case('draft')
                                  <span class="badge badge-warning">Taslak</span>
                                  @break
                             
                                  
                          @endswitch    
                      </td>
                      <td><span title="{{$quiz->finished_at}}">{{$quiz->finished_at ? $quiz->finished_at->diffForHumans() : '-' }}</span></td>
                      <td>
                          <a href="{{route('questions.index', $quiz->id)}}" class="btn btn-sm btn-warning fas fa-question" title="Question"></a>
                          <a href="{{route('quizzes.edit', $quiz->id)}}" class="btn btn-sm btn-primary fas fa-pen" title="Edit"></a>
                          <a href="{{route('quizzes.destroy', $quiz->id)}}" class="btn btn-sm btn-danger fas fa-times" title="Delete"></a>
                      </td>
                  </tr>
                      @endforeach
                </tbody>
              </table>
              {{$quizzes->withQueryString()->links()}}
              
        </div>
    </div>
</x-app-layout>