<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //calender
    public function show(){
        return view("calendars.calendar");
    }
    public function get(Request $request, Event $event){
        // バリデーション
        $request->validate([
            'start_date' => 'required|integer',
            'end_date' => 'required|integer'
        ]);

        // 現在カレンダーが表示している日付の期間
        $start_date = date('Y-m-d', $request->input('start_date') / 1000); // 日付変換（JSのタイムスタンプはミリ秒なので秒に変換）
        $end_date = date('Y-m-d', $request->input('end_date') / 1000);

        // 予定取得処理（これがaxiosのresponse.dataに入る）
        return $event->query()
            // DBから取得する際にFullCalendarの形式にカラム名を変更する
            ->select(
                'id',
                'event_title as title',
                'event_body as description',
                'start_date as start',
                'end_date as end',
                'event_color as backgroundColor',
                'event_border_color as borderColor'
            )
            // 表示されているカレンダーのeventのみをDBから検索して表示
            ->where('end_date', '>', $start_date)
            ->where('start_date', '<', $end_date) // AND条件
            ->where('user_id', Auth::id())
            ->get();
    }
}
