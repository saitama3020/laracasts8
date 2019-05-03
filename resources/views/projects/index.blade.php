<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>Projects</p>

    <ul>

      @foreach($projects as $project)
      <li>{{ $project->title }}</li>
      @endforeach
    </ul>
  </body>
</html>