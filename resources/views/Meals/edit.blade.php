<x-app-layout>
    <h1>TRAINING</h1>
    <h2>
        {{$date}}
    </h2>
    <div class="menu">
        <h2>食事内容</h2>
        <p>{{ $training->training_kind->name }}</p>
        <div class="record">
            <h2>記録</h2>
            <p>{{ $training->value }}</p>
        </div>
        <div>
            <h2>コメント</h2>
            <p>{{ $training->comment }}</p>
        </div>
        <div class="image">
            <h2>画像</h2>
            @foreach($training->training_detail as $detail)
                <img src="{{ $detail->image }}" class="w-[30rem]">
            @endforeach
        </div>
    <div class="footer">
        <a href="/home">戻る</a>
    </div>
</x-app-layout>