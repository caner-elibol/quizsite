<x-app-layout>
    <x-slot name="header">Quiz Oluştur</x-slot>
    <div class="card border-success mb-3">
        <div class="card-body text-success">
            <form action="{{route('quizzes.update',$quiz->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group mb-3">
                    <label>
                        Quiz Başlığı
                    </label>
                    <input type="text" name="title" class="form-control" value="{{$quiz->title}}">
                </div>
                <div class="form-group mb-3">
                    <label>
                        Quiz Açıklama
                    </label>
                    <textarea name="description" class="form-control" rows="4">{{$quiz->description}}</textarea>
                </div>
                <div class="form-group mb-3">
                    <input type="checkbox" id="hasFinish" @if($quiz->finished_at) checked @endif >
                    <label>
                        Bitiş Tarihi Belirlemek İstiyorum.
                    </label>
                </div>
                <div id="finishtime" @if(!$quiz->finished_at) style="display: none" @endif class="form-group mb-3">
                    <label>
                        Bitiş Tarihi
                    </label>
                    <input type="datetime-local" name="finished_at" class="form-control" @if($quiz->finished_at) value="{{ date('Y-m-d\TH:i',strtotime($quiz->finished_at))}}" @endif >
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success btn-sm btn-block">Quizi Güncelle</button>
                    <a href="{{route('quizzes.index')}}"><button type="button" class="btn btn-danger btn-sm btn-block">İşlemi İptal Et</button></a>
                </div>
            </form>
        </div>
    </div>
    <x-slot name="js">
        <script>
            $('#hasFinish').change(function(){
                if($('#hasFinish').is(':checked')){
                    $('#finishtime').show();
                }
                else{
                    $('#finishtime').hide();
                }
            })
        </script>
    </x-slot>
</x-app-layout>
