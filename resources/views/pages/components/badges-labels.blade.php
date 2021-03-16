@extends ('layouts.app')

@section('content')
<!-- START: components/badges-labels -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Badge</strong>
      <a
        href="https://.getbootstrap.com/docs/4.2/components/badge/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Default badges</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://.getbootstrap.com/docs/4.2/components/badge/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <span class="badge badge-default mr-2 mb-2">Default</span>
          <span class="badge badge-primary mr-2 mb-2">Primary</span>
          <span class="badge badge-secondary mr-2 mb-2">Secondary</span>
          <span class="badge badge-success mr-2 mb-2">Success</span>
          <span class="badge badge-info mr-2 mb-2">Info</span>
          <span class="badge badge-warning mr-2 mb-2">Warning</span>
          <span class="badge badge-danger mr-2 mb-2">Danger</span>
        </div>
        <h5 class="text-black"><strong>Pill badges</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://.getbootstrap.com/docs/4.2/components/badge/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <span class="badge badge-pill badge-default mr-2 mb-2">Default</span>
          <span class="badge badge-pill badge-primary mr-2 mb-2">Primary</span>
          <span class="badge badge-pill badge-secondary mr-2 mb-2">Secondary</span>
          <span class="badge badge-pill badge-success mr-2 mb-2">Success</span>
          <span class="badge badge-pill badge-info mr-2 mb-2">Info</span>
          <span class="badge badge-pill badge-warning mr-2 mb-2">Warning</span>
          <span class="badge badge-pill badge-danger mr-2 mb-2">Danger</span>
        </div>
        <h5 class="text-black"><strong>Badges in buttons</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://.getbootstrap.com/docs/4.2/components/badge/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <button class="btn btn-default mr-2 mb-2">
            Button
            <span class="badge">1</span>
          </button>
          <button class="btn btn-default-outline mr-2 mb-2">
            Button
            <span class="badge badge-default">1</span>
          </button>
          <button class="btn btn-default-outline mr-2 mb-2">
            Button
            <span class="badge badge-primary">2</span>
          </button>
          <button class="btn btn-default-outline mr-2 mb-2">
            Button
            <span class="badge badge-danger">3</span>
          </button>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Sizing</strong></h5>
        <p class="text-muted">Modifier: font-size inherited from parent</p>
        <div class="mb-5">
          <h1>H1. <span class="badge badge-default">Default</span></h1>
          <h2>H2. <span class="badge badge-default">Default</span></h2>
          <h3>H3. <span class="badge badge-default">Default</span></h3>
          <h4>H4. <span class="badge badge-default">Default</span></h4>
          <h5>H5. <span class="badge badge-default">Default</span></h5>
          <h6>H6. <span class="badge badge-default">Default</span></h6>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: components/badges-labels -->

@endsection