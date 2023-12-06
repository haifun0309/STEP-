<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <div class="links">
  <table>
     <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>URL</th>
        </tr>
    </thead>
    @foreach ($articles as $article)
    <tbody>
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->url }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>
</div>
    </body>
</html>
