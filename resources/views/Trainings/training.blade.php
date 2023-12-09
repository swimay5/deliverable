<x-app-layout>
    <h1>TRAINING</h1>
    <form action="/training/{{$date}}/store" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>
            {{$date}}
        </h2>
        <div class="menu">
            <h2>トレーニング内容</h2>
            <select name='training[training_kind_id]'>
                @foreach($trainingKind as $opt)
                <option value='{{$opt->id}}'>{{$opt->name}}</option>
                @endforeach
            </select>
            <div>
                <button type='button' id='switching-btn' class='bg-red-300 hover:bg-red-200 text-white rounded px-4 py-2'>トレーニング新規作成</button>
                <div id='input-kind' class='hidden'>
                    <input type='text' name='training_kind[name]'/>
                </div>
            </div>
        </div>
        <div class="record">
            <h2>記録</h2>
            <input name="training[value]"></input>
        </div>
        <div>
            <h2>コメント</h2>
            <textarea name='training[comment]'></textarea>
        </div>
        <div class="image">
            <h2>画像をアップロード</h2>
            <input type="file" name="image">
        </div>
        <input type="submit" value="登録"/>
    </form>
    <div class="footer">
        <a href="/home">戻る</a>
    </div>
</x-app-layout>