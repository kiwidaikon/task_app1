 <!DOCTYPE html>
 <html lang="ja">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>task show</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 </head>

 <body>
     <h1 class="text1">タスク詳細</h1>
     <p>{{ $task->title }}</p>
     <p>{!! nl2br(e($task->body)) !!}</p>

     <div class="button-group">
         <!-- $memoのidを元に編集ページへ遷移する -->
         <button onclick='location.href="{{ route("tasks.index", $task) }}"'>一覧へ戻る</button>
         <button onclick='location.href="{{ route("tasks.edit", $task) }}"'>編集する</button>
         <form action="{{ route('tasks.destroy', $task) }}" method="post">
             @csrf
             @method('DELETE')
             <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
         </form>
     </div>

 </body>

 </html>
