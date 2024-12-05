<div class="container mt-5">
  <div {{ $attributes->merge(['class' => 'alert alert-' . $validType . ' alert-dismissible fade show']) }}
    role="alert">
    <!-- title -->
    @isset($title)
      <strong {{ $title->attributes->class('alert-heading') }}>{{ $title }}</strong>
    @endisset

    <!-- empty slot -->
    @if ($slot->isEmpty())
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, incidunt.</p>
    @endif

    {{ $slot }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
