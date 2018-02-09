@php
  $slides = (object)array(
    (object)array(
      'SlideTitle' => 'Luxurious Properties',
      'SubTitle' => 'We are proud to provide a range of luxurious homes',
      'Class' => 'one',
    ),
    (object)array(
      'SlideTitle' => 'Outstanding service',
      'SubTitle' => 'We treat customers with all respect and always answer their queries',
      'Class' => 'two',
    ),
  );
@endphp
<div class="SlickMe">
  @foreach($slides as $slide)
    <section class="header-splash {{$slide->Class}}">
      <div class="header-content">
        <div class="slide-content">
        <h1 class="textarea1">{{$slide->SlideTitle}}</h1>
        <p class="textarea2">
          {{$slide->SubTitle}}
        </p>
      </div>
    </div>
    </section>
  @endforeach
</div>
