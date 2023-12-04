<x-app-layout>
    <h1>MEAL</h1>
    <form action="/meal/{{$date}}/store" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>
            {{$date}}
        </h2>
        <h2>朝食</h2>
        <input type='time' name='meals[breakfast_time]'>
        <p>赤の食べ物</p>
        <textarea name='meals[breakfast_red_ingredient]'></textarea>
        <p>黄色の食べ物</p>
        <textarea name='meals[breakfast_yellow_ingredient]'></textarea>
        <p>緑の食べ物</p>
        <textarea name='meals[breakfast_green_ingredient]'></textarea>
        <div class="image">
            <h2>画像をアップロード</h2>
            <input type="file" name="breakfast_image">
        </div>
        <h2>昼食</h2>
        <input type='time' name='meals[lunch_time]'>
        <p>赤の食べ物</p>
        <textarea name='meals[lunch_red_ingredient]'></textarea>
        <p>黄色の食べ物</p>
        <textarea name='meals[lunch_yellow_ingredient]'></textarea>
        <p>緑の食べ物</p>
        <textarea name='meals[lunch_green_ingredient]'></textarea>
        <div class="image">
            <h2>画像をアップロード</h2>
            <input type="file" name="breakfast_image">
        </div>
        <h2>夕食</h2>
        <input type='time' name='meals[dinner_time]'>
        <p>赤の食べ物</p>
        <textarea name='meals[dinner_red_ingredient]'></textarea>
        <p>黄色の食べ物</p>
        <textarea name='meals[dinner_yellow_ingredient]'></textarea>
        <p>緑の食べ物</p>
        <textarea name='meals[dinner_green_ingredient]'></textarea>
        <div class="image">
            <h2>画像をアップロード</h2>
            <input type="file" name="breakfast_image">
        </div>
        <h2>間食</h2>
        <input type='time' name='meals[snack_time]'>
        <p>赤の食べ物</p>
        <textarea name='meals[snack_red_ingredient]'></textarea>
        <p>黄色の食べ物</p>
        <textarea name='meals[snack_yellow_ingredient]'></textarea>
        <p>緑の食べ物</p>
        <textarea name='meals[snack_green_ingredient]'></textarea>
        <div class="image">
            <h2>画像をアップロード</h2>
            <input type="file" name="breakfast_image">
        </div>
        <br>
        <input type="submit" value="登録"/>
    </form>
    <div class="footer">
        <a href="/home">戻る</a>
    </div>
</x-app-layout>