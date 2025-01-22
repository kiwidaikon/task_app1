 <!DOCTYPE html>
 <html lang="ja">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>task edit</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 </head>

 <body>
         <h1>タスク編集</h1>

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

         <!-- 更新先はmemosのidにしないと増える sail artisan rote:listで確認① -->
         <form action="{{ route('tasks.update', $task) }}" method="post">
             @csrf
             @method('PATCH')
             <p>
                 <label for="title">タイトル</label><br>
                 <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}">
             </p>
             <p>
                 <label for="body">本文</label><br>
                 <textarea name="body" class="body" id="body">{{ old('body', $task->body) }}</textarea>
             </p>

             <div class="button-group">
                 <input type="submit" value="更新">
                 <input type="button" onclick="location.href='/tasks/{{ $task->id }}'" value="詳細へ戻る">
         </form>
         </div>
 </body>

 </html>
