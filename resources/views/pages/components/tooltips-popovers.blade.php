@extends ('layouts.app')

@section('content')
<!-- START: components/tooltips-popovers -->
<div class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Popovers</strong>
      <a
        href="https://getbootstrap.com/docs/4.2/components/tooltips/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Click Popovers</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://getbootstrap.com/docs/4.2/components/tooltips/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <button
            type="button"
            class="btn btn-default mr-2 mb-2"
            title="Popover Title"
            data-container="body"
            data-toggle="popover"
            data-placement="top"
            data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
          >
            Popover on top
          </button>
          <button
            type="button"
            class="btn btn-default mr-2 mb-2"
            title="Popover Title"
            data-container="body"
            data-toggle="popover"
            data-placement="right"
            data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
          >
            Popover on right
          </button>
          <button
            type="button"
            class="btn btn-default mr-2 mb-2"
            title="Popover Title"
            data-container="body"
            data-toggle="popover"
            data-placement="bottom"
            data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
          >
            Popover on bottom
          </button>
          <button
            type="button"
            class="btn btn-default mr-2 mb-2"
            title="Popover Title"
            data-container="body"
            data-toggle="popover"
            data-placement="left"
            data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
          >
            Popover on left
          </button>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Hover Popovers</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://getbootstrap.com/docs/4.2/components/tooltips/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <button
            type="button"
            class="btn btn-default mr-2 mb-2"
            title="Popover Title"
            data-container="body"
            data-toggle="popover-hover"
            data-placement="top"
            data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
          >
            Popover on top
          </button>
          <button
            type="button"
            class="btn btn-default mr-2 mb-2"
            title="Popover Title"
            data-container="body"
            data-toggle="popover-hover"
            data-placement="right"
            data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
          >
            Popover on right
          </button>
          <button
            type="button"
            class="btn btn-default mr-2 mb-2"
            title="Popover Title"
            data-container="body"
            data-toggle="popover-hover"
            data-placement="bottom"
            data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
          >
            Popover on bottom
          </button>
          <button
            type="button"
            class="btn btn-default mr-2 mb-2"
            title="Popover Title"
            data-container="body"
            data-toggle="popover-hover"
            data-placement="left"
            data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
          >
            Popover on left
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Tooltips</strong>
      <a
        href="https://getbootstrap.com/docs/4.2/components/tooltips/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Hover Tooltip</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://getbootstrap.com/docs/4.2/components/tooltips/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <button
            type="button"
            class="btn btn-default-outlined mr-2 mb-2"
            data-toggle="tooltip"
            data-placement="top"
            title="Tooltip on top"
          >
            Tooltip on top
          </button>
          <button
            type="button"
            class="btn btn-default-outlined mr-2 mb-2"
            data-toggle="tooltip"
            data-placement="right"
            title="Tooltip on right"
          >
            Tooltip on right
          </button>
          <button
            type="button"
            class="btn btn-default-outlined mr-2 mb-2"
            data-toggle="tooltip"
            data-placement="bottom"
            title="Tooltip on bottom"
          >
            Tooltip on bottom
          </button>
          <button
            type="button"
            class="btn btn-default-outlined mr-2 mb-2"
            data-toggle="tooltip"
            data-placement="left"
            title="Tooltip on left"
          >
            Tooltip on left
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END: components/tooltips-popovers -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      $('[data-toggle=popover]').popover()
      $('[data-toggle=popover-hover]').popover({
        trigger: 'hover',
      })

      $('[data-toggle=tooltip]').tooltip()
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection