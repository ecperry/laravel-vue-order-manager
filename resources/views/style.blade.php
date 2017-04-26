<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Style Guide</title>
</head>
<body>

    <div id="style">
    <a class="bottom" href="../">BACK</a>

    <div class="Styleguide">
      <h1></h1>
      <h1></h1>
      <h2></h2>
      <h3></h3>
      <h4></h4>
      <h5></h5>

      <h1></h1>
      <p></p>
      <p></p>
      <p></p>

      <h1></h1>
      <button type="small" name="button"></button>
      <button type="medium" name="button"></button>
      <button type="large" name="button"></button>

      <h1></h1>
      <input type="text" name="" value="">
      <input type="select" name="" value="">
      <textarea name="large" rows="8" cols="80"></textarea>

      <h1></h1>
      <ul>
        <li></li>
        <li></li>
        <li></li>
      </ul>

      <ol>
        <li></li>
        <li></li>
        <li></li>
      </ol>

  </div>
</div>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
