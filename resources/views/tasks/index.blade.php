 <!DOCTYPE html>
 <html lang="ja">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>task index</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 </head>

 <body>

     <h1>タスク一覧</h1>

     @foreach ($tasks as $task)
         <!-- // リンク先をidで取得し名前で出力 -->
         <li><a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
             @method('DELETE')
             <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">

         </li>
     @endforeach

     <hr>

     <h1>新規タスク登録</h1>

     @if ($errors->any())
         <div class="error">
             <p>
                 <b>{{ count($errors) }}件のエラーがあります。</b>
             </p>
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif

     <form action="{{ route('tasks.store') }}" method="post">
         @csrf
         <p>
             <label for="title">タイトル</label><br>
             <input type="text" name="title" id="title" value="{{ old('title') }}">
         </p>
         <p>
             <label for="body">本文</label><br>
             <textarea name="body" class="body" id="body">{{ old('body') }}</textarea>
         </p>

         <input type="submit" value="Create Task">
     </form>
 </body>

 </html>
