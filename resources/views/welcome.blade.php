<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Component</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

  @php
    $message = 'This is testing message';
  @endphp

  <x-alert type="danger" :$message id="firstAlert" class="m-4" />
  <x-alert type="info" message="{{ $message }}" />
  <x-alert type="success" :message="$message" />
  <x-alert type="notInType" :message="$message" />

  <x-alert type="danger">
    <x-slot:title class="testing-class">
      Lorem ipsum dolor sit amet.
    </x-slot:title>
    <p>Lorem ipsum dolor sit amet. {{ $component->link('This is testing link', 'https://www.google.com') }}</p>
  </x-alert>

</body>

</html>
