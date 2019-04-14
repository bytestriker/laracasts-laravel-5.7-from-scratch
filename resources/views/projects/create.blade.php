<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Create a New Project</h1>

    <form action="/projects" method="post">
      {{ csrf_field() }}
      <div>
        <input type="text" name="title" placeholder="Project title">
      </div>
      <div>
        <textarea name="description" placeholder="Project description" ></textarea>
      </div>
      <div>
        <button type="submit">Create project</button>
      </div>
    </form>


  </body>
</html>
