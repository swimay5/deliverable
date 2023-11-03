import axios from "axios";
import { Calendar } from "@fullcalendar/core";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction';

// カレンダーを表示させたいタグのidを取得
var calendarEl = document.getElementById("calendar");
// console.log(calendarEl);
// new Calender(カレンダーを表示させたいタグのid, {各種カレンダーの設定});
// "calendar"というidがないbladeファイルではエラーが出てしまうので、if文で除外。
if (calendarEl !== null) {
    let calendar = new Calendar(calendarEl, {
        // プラグインの導入(import忘れずに)
        plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin],
    
        // カレンダー表示
        initialView: "dayGridMonth", // 最初に表示させるページの形式
        dateClick: function(e){
            console.log(e);
            const inputDate = document.getElementById("date");
            inputDate.value = e.dateStr;
            document.getElementById("calendarCreate").submit();
        },
        headerToolbar: { // ヘッダーの設定
            // コンマのみで区切るとページ表示時に間が空かず、半角スペースで区切ると間が空く（半角があるかないかで表示が変わることに注意）
            start: "prev,next today", // ヘッダー左（前月、次月、今日の順番で左から配置）
            center: "title", // ヘッダー中央（今表示している月、年）
            end: "dayGridMonth,timeGridWeek", // ヘッダー右（月形式、時間形式）
        },
        height: "auto", // 高さをウィンドウサイズに揃える
    });
    
    // カレンダーのレンダリング
    calendar.render();
}