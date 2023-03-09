<!DOCTYPE html>
<html lang="en">
<head>
  <title>單筆新增</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>單筆新增</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>name</th>
        <th>age</th>
      </tr>
    </thead>
    <form action="{{route('student0309.store')}}" method="post">
        @csrf
    <tbody>
      <tr>
        <td><input type="text" name="name" id="name"></td>
        <td><input type="text" name="age" id="age"></td>
        <td><input type="submit" value="新增" class="btn btn-success"></td>
      </tr>
    </tbody>
</form>
  </table>
</div>

</body>
</html>
