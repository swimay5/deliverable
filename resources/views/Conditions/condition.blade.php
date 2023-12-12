<x-app-layout>
    <h1>MEAL</h1>
    <form action="/condition/{{$date}}/store" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>
            {{$date}}
        </h2>
        <p>就寝時刻（昨日）</p>
        <input type="text">
        <p class="flex-row">時</p>
        <br>
        <p>起床時刻（今日）</p>
        <input type="text">
        <p class="flex flex-row">時</p>
        <p>体温</p>
        <input type="text">
        <p class="flex-row">℃</p>
        <p>体重</p>
        <input type="text">
        <p>kg</p>
        <p>今日の点数</p>
        <input type="text">
        <p>点</p>
        <p>症状</p>
        <input id='fever' type='checkbox' name='symptoms[fever]'>
        <label for='symptoms[fever]'>発熱</label>
        <input id='headache' type='checkbox' name='symptoms[headache]'>
        <label for='symptoms[headache]'>頭痛</label>
        <input id='stomach_ache' type='checkbox' name='symptoms[stomach_ache]'>
        <label for='symptoms[stomach_ache]'>腹痛</label>
        <input id='neck_pain' type='checkbox' name='symptoms[neck_pain]'>
        <label for='symptoms[neck_pain]'>首の痛み</label>
        <input id='shoulder_pain' type='checkbox' name='symptoms[shoulder_pain]'>
        <label for='symptoms[shoulder_pain]'>肩の痛み</label>
        <input id='elbow_pain' type='checkbox' name='symptoms[elbow_pain]'>
        <label for='symptoms[elbow_pain]'>肘の痛み</label>
        <input id='waist_pain' type='checkbox' name='symptoms[waist_pain]'>
        <label for='symptoms[waist_pain]'>腰の痛み</label>
        <input id='knee_pain' type='checkbox' name='symptoms[knee_pain]'>
        <label for='symptos[knee_pain]'>膝の痛み</label>
        <input id='ankle_pain' type='checkbox' name='symptoms[ankle_pain]'>
        <label for='symptoms[ankle_pain]'>足首の痛み</label>
        <input id='wrist_pain' type='checkbox' name='symptoms[wrist_pain]'>
        <label for='symptoms[wrist_pain]'>手首の痛み</label>
        <input id='menstruation' type='checkbox' name='symptoms[menstruation]'>
        <label for='symptoms[menstruation]'>生理痛</label>
        <label for='symptoms[others]'>その他</label>
        <input id='others' type='text' name='symptoms[others]'>

        
        <h2>コメント</h2>
        <textarea></textarea>
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