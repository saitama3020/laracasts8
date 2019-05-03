<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>
  <h1 class="display-1">Create a new Project</h1>

  <form method="POST" action="/projects">
    <!-- {{ csrf_field() }} -->
    <fieldset class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" name="title" placeholder="title">
    </fieldset>
    <fieldset class="form-group">
      <label>Description</label>
      <textarea rows="3" name="description" placeholder="description"></textarea>
    </fieldset>
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
  </form>
</body>

</html>