@extends ('layouts.app')

@section('content')
<!-- START: forms/buttons -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Inline Buttons</strong>
      <a
        href="https://.getbootstrap.com/docs/4.2/components/buttons/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <div class="mb-5">
          <h5 class="text-black"><strong>Default Buttons</strong></h5>
          <p class="text-muted">
            Element: read
            <a href="https://.getbootstrap.com/docs/4.2/components/buttons/" target="_blank"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <p class="text-muted">
            Modifiers: <code>default</code>, <code>primary</code>, <code>secondary</code>,
            <code>success</code>, <code>info</code>, <code>warning</code>, <code>danger</code>
          </p>
          <p class="text-muted">Color Modifier: <code>.btn-(modifier)</code></p>
          <p class="text-muted">Outline Modifier: <code>.btn-outline-(modifier)</code></p>
          <button type="button" class="btn mr-2 mb-2">Clear</button>
          <button type="button" class="btn btn-default mr-2 mb-2">Default</button>
          <button type="button" class="btn btn-default mr-2 mb-2" disabled="">
            Default Disabled
          </button>
          <a href="javascript: void(0);" class="btn btn-link mr-2 mb-2">Link Button</a>
          <br />
          <button type="button" class="btn btn-primary mr-2 mb-2">Primary</button>
          <button type="button" class="btn btn-secondary mr-2 mb-2">Secondary</button>
          <button type="button" class="btn btn-success mr-2 mb-2">Success</button>
          <button type="button" class="btn btn-info mr-2 mb-2">Info</button>
          <button type="button" class="btn btn-warning mr-2 mb-2">Warning</button>
          <button type="button" class="btn btn-danger mr-2 mb-2">Danger</button>
          <br />
          <button type="button" class="btn btn-outline-info mr-2 mb-2">Info</button>
          <button type="button" class="btn btn-outline-success mr-2 mb-2">Success</button>
          <button type="button" class="btn btn-outline-primary mr-2 mb-2">Primary</button>
          <button type="button" class="btn btn-outline-warning mr-2 mb-2">Warning</button>
          <button type="button" class="btn btn-outline-danger mr-2 mb-2">Danger</button>
          <button type="button" class="btn btn-outline-secondary mr-2 mb-2">Secondary</button>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="mb-5">
          <h5 class="text-black"><strong>Rounded Buttons</strong></h5>
          <p class="text-muted">Modifier: <code>.btn-rounded</code></p>
          <button type="button" class="btn btn-rounded mr-2 mb-2">Clear</button>
          <button type="button" class="btn btn-rounded btn-default mr-2 mb-2">Default</button>
          <button type="button" class="btn btn-rounded btn-default mr-2 mb-2" disabled="">
            Default Disabled
          </button>
          <a href="javascript: void(0);" class="btn btn-link mr-2 mb-2">Link Button</a>
          <br />
          <button type="button" class="btn btn-rounded btn-primary mr-2 mb-2">Primary</button>
          <button type="button" class="btn btn-rounded btn-secondary mr-2 mb-2">Secondary</button>
          <button type="button" class="btn btn-rounded btn-success mr-2 mb-2">Success</button>
          <button type="button" class="btn btn-rounded btn-info mr-2 mb-2">Info</button>
          <button type="button" class="btn btn-rounded btn-warning mr-2 mb-2">Warning</button>
          <button type="button" class="btn btn-rounded btn-danger mr-2 mb-2">Danger</button>
          <br />
          <button type="button" class="btn btn-rounded btn-outline-info mr-2 mb-2">Info</button>
          <button type="button" class="btn btn-rounded btn-outline-success mr-2 mb-2">
            Success
          </button>
          <button type="button" class="btn btn-rounded btn-outline-primary mr-2 mb-2">
            Primary
          </button>
          <button type="button" class="btn btn-rounded btn-outline-warning mr-2 mb-2">
            Warning
          </button>
          <button type="button" class="btn btn-rounded btn-outline-danger mr-2 mb-2">Danger</button>
          <button type="button" class="btn btn-rounded btn-outline-secondary mr-2 mb-2">
            Secondary
          </button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="mb-5">
          <h5 class="text-black"><strong>Sizing</strong></h5>
          <p class="text-muted">Modifier: <code>.btn-lg</code>, <code>.btn-sm</code></p>
          <button type="button" class="btn mr-2 mb-2">Normal</button>
          <button type="button" class="btn btn-default mr-2 mb-2">Normal</button>
          <button type="button" class="btn btn-default mr-2 mb-2" disabled="">Normal</button>
          <a href="javascript: void(0);" class="btn btn-link mr-2 mb-2">Normal</a>
          <br />
          <button type="button" class="btn btn-lg btn-primary mr-2 mb-2">Large</button>
          <button type="button" class="btn btn-secondary mr-2 mb-2">Normal</button>
          <button type="button" class="btn btn-lg btn-success mr-2 mb-2">Large</button>
          <button type="button" class="btn btn-warning mr-2 mb-2">Normal</button>
          <button type="button" class="btn btn-sm btn-danger mr-2 mb-2">Small</button>
          <br />
          <button type="button" class="btn btn-outline-info mr-2 mb-2">Noraml</button>
          <button type="button" class="btn btn-sm btn-outline-success mr-2 mb-2">Small</button>
          <button type="button" class="btn btn-lg btn-outline-primary mr-2 mb-2">Large</button>
          <button type="button" class="btn btn-outline-danger mr-2 mb-2">Normal</button>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="mb-5">
          <h5 class="text-black"><strong>Squared Buttons</strong></h5>
          <p class="text-muted">Modifier: <code>.btn-squared</code></p>
          <button type="button" class="btn btn-squared mr-2 mb-2">Clear</button>
          <button type="button" class="btn btn-squared btn-default mr-2 mb-2">Default</button>
          <button type="button" class="btn btn-squared btn-default mr-2 mb-2" disabled="">
            Default Disabled
          </button>
          <a href="javascript: void(0);" class="btn btn-link mr-2 mb-2">Link Button</a>
          <br />
          <button type="button" class="btn btn-squared btn-primary mr-2 mb-2">Primary</button>
          <button type="button" class="btn btn-squared btn-secondary mr-2 mb-2">Secondary</button>
          <button type="button" class="btn btn-squared btn-success mr-2 mb-2">Success</button>
          <button type="button" class="btn btn-squared btn-info mr-2 mb-2">Info</button>
          <button type="button" class="btn btn-squared btn-warning mr-2 mb-2">Warning</button>
          <button type="button" class="btn btn-squared btn-danger mr-2 mb-2">Danger</button>
          <br />
          <button type="button" class="btn btn-squared btn-outline-info mr-2 mb-2">Info</button>
          <button type="button" class="btn btn-squared btn-outline-success mr-2 mb-2">
            Success
          </button>
          <button type="button" class="btn btn-squared btn-outline-primary mr-2 mb-2">
            Primary
          </button>
          <button type="button" class="btn btn-squared btn-outline-warning mr-2 mb-2">
            Warning
          </button>
          <button type="button" class="btn btn-squared btn-outline-danger mr-2 mb-2">Danger</button>
          <button type="button" class="btn btn-squared btn-outline-secondary mr-2 mb-2">
            Secondary
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Button Group</strong>
      <a
        href="https://.getbootstrap.com/docs/4.2/components/button-group/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <div class="mb-5">
          <h5 class="text-black"><strong>Basic Group</strong></h5>
          <p class="text-muted">
            Element: read
            <a href="https://.getbootstrap.com/docs/4.2/components/button-group/" target="_blank"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <div class="btn-group mr-2 mb-2">
            <button type="button" class="btn btn-default">Left</button>
            <button type="button" class="btn btn-default">Middle</button>
            <button type="button" class="btn btn-default">Right</button>
          </div>
          <div class="btn-group mr-2 mb-2">
            <button type="button" class="btn btn-rounded btn-primary">Left</button>
            <button type="button" class="btn btn-warning">Middle</button>
            <button type="button" class="btn btn-rounded btn-default">Right</button>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="mb-5">
          <h5 class="text-black"><strong>Justified Group</strong></h5>
          <p class="text-muted">
            Element: read
            <a href="https://.getbootstrap.com/docs/4.2/components/button-group/" target="_blank"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <div class="btn-group btn-group-justified mr-2 mb-2">
            <div class="btn-group">
              <button type="button" class="btn btn-default">Left</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-default">Middle</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-default">Right</button>
            </div>
          </div>
          <div class="btn-group btn-group-justified mr-2 mb-2">
            <div class="btn-group">
              <button type="button" class="btn btn-rounded btn-primary">Left</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-warning">Middle</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-rounded btn-default">Right</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="mb-5">
          <h5 class="text-black"><strong>Vertical Group</strong></h5>
          <p class="text-muted">
            Element: read
            <a href="https://.getbootstrap.com/docs/4.2/components/button-group/" target="_blank"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <div class="btn-group-vertical mr-2 mb-2">
            <button type="button" class="btn btn-danger">Button</button>
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-danger dropdown-toggle"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript: void(0);">Action</a>
                <a class="dropdown-item" href="javascript: void(0);">Another action</a>
                <a class="dropdown-item" href="javascript: void(0);">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript: void(0);">Separated link</a>
              </div>
            </div>
            <button type="button" class="btn btn-danger">Button</button>
            <div class="btn-group">
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                Dropdown
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript: void(0);">Action</a>
                <a class="dropdown-item" href="javascript: void(0);">Another action</a>
                <a class="dropdown-item" href="javascript: void(0);">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript: void(0);">Separated link</a>
              </div>
            </div>
          </div>
          <div class="btn-group-vertical mr-2 mb-2">
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-default dropdown-toggle"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript: void(0);">Action</a>
                <a class="dropdown-item" href="javascript: void(0);">Another action</a>
                <a class="dropdown-item" href="javascript: void(0);">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript: void(0);">Separated link</a>
              </div>
            </div>
            <button type="button" class="btn btn-default">Button</button>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                Dropdown
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript: void(0);">Action</a>
                <a class="dropdown-item" href="javascript: void(0);">Another action</a>
                <a class="dropdown-item" href="javascript: void(0);">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript: void(0);">Separated link</a>
              </div>
            </div>
            <button type="button" class="btn btn-default">Button</button>
          </div>
          <div class="btn-group-vertical mr-2 mb-2">
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-default-outline dropdown-toggle"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript: void(0);">Action</a>
                <a class="dropdown-item" href="javascript: void(0);">Another action</a>
                <a class="dropdown-item" href="javascript: void(0);">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript: void(0);">Separated link</a>
              </div>
            </div>
            <button type="button" class="btn btn-default-outline">Button</button>
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-default-outline dropdown-toggle"
                data-toggle="dropdown"
              >
                Dropdown
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript: void(0);">Action</a>
                <a class="dropdown-item" href="javascript: void(0);">Another action</a>
                <a class="dropdown-item" href="javascript: void(0);">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript: void(0);">Separated link</a>
              </div>
            </div>
            <button type="button" class="btn btn-default-outline">Button</button>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="mb-5">
          <h5 class="text-black"><strong>Nesting Group</strong></h5>
          <p class="text-muted">
            Element: read
            <a href="https://.getbootstrap.com/docs/4.2/components/button-group/" target="_blank"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <div class="btn-group mr-2 mb-2" aria-label="" role="group">
            <button type="button" class="btn btn-primary">1</button>
            <button type="button" class="btn btn-primary">2</button>
            <div class="btn-group" role="group">
              <button
                type="button"
                class="btn btn-primary dropdown-toggle"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript: void(0);">Action</a>
                <a class="dropdown-item" href="javascript: void(0);">Another action</a>
                <a class="dropdown-item" href="javascript: void(0);">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript: void(0);">Separated link</a>
              </div>
            </div>
          </div>
          <div class="btn-group mr-2 mb-2" aria-label="" role="group">
            <button type="button" class="btn btn-default">1</button>
            <button type="button" class="btn btn-default">2</button>
            <div class="btn-group" role="group">
              <button
                type="button"
                class="btn btn-default dropdown-toggle"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript: void(0);">Action</a>
                <a class="dropdown-item" href="javascript: void(0);">Another action</a>
                <a class="dropdown-item" href="javascript: void(0);">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript: void(0);">Separated link</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Button groups -->

<!-- Buttons With Icon -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Buttons w/ Icons</strong>
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <div class="mb-5">
          <h5 class="text-black"><strong>Icon Button</strong></h5>
          <p class="text-muted">Element: <code>i.(icon-class)</code></p>
          <div class="btn-group mr-2 mb-2" aria-label="" role="group">
            <button type="button" class="btn btn-success">
              <i class="icmn-pencil" aria-hidden="true"></i>
              Edit
            </button>
            <button type="button" class="btn btn-success">
              <i class="icmn-reply" aria-hidden="true"></i>
              Reply
            </button>
            <button type="button" class="btn btn-success">
              <i class="icmn-share2" aria-hidden="true"></i>
              Share
            </button>
          </div>
          <div class="btn-group mr-2 mb-2" aria-label="" role="group">
            <button type="button" class="btn btn-default">
              <i class="icmn-pencil" aria-hidden="true"></i>
              Edit
            </button>
            <button type="button" class="btn btn-default">
              <i class="icmn-reply" aria-hidden="true"></i>
              Reply
            </button>
            <button type="button" class="btn btn-default">
              <i class="icmn-share2" aria-hidden="true"></i>
              Share
            </button>
          </div>
          <br />
          <div class="btn-group mr-2 mb-2" aria-label="" role="group">
            <button type="button" class="btn btn-primary">
              <i class="icmn-play3" aria-hidden="true"></i>
            </button>
            <button type="button" class="btn btn-primary">
              <i class="icmn-pause2" aria-hidden="true"></i>
            </button>
            <button type="button" class="btn btn-primary">
              <i class="icmn-stop2" aria-hidden="true"></i>
            </button>
          </div>
          <div class="btn-group mr-2 mb-2" aria-label="" role="group">
            <button type="button" class="btn btn-danger">
              <i class="icmn-play3" aria-hidden="true"></i>
            </button>
            <button type="button" class="btn btn-danger">
              <i class="icmn-pause2" aria-hidden="true"></i>
            </button>
            <button type="button" class="btn btn-danger">
              <i class="icmn-stop2" aria-hidden="true"></i>
            </button>
          </div>
          <br />
          <button type="button" class="btn btn-icon btn-primary mr-2 mb-2">
            <i class="icmn-hammer" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-icon btn-success mr-2 mb-2">
            <i class="icmn-magnet" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-icon btn-info mr-2 mb-2">
            <i class="icmn-alarm" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-icon btn-primary btn-rounded mr-2 mb-2">
            <i class="icmn-cart" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-icon btn-success btn-rounded mr-2 mb-2">
            <i class="icmn-magnet" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-icon btn-info btn-rounded mr-2 mb-2">
            <i class="icmn-alarm" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-icon btn-outline-primary mr-2 mb-2">
            <i class="icmn-rocket" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-icon btn-outline-success mr-2 mb-2">
            <i class="icmn-magnet" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-icon btn-outline-info mr-2 mb-2">
            <i class="icmn-alarm" aria-hidden="true"></i>
          </button>
          <br />
          <button type="button" class="btn btn-icon btn-link icmn-key mr-2 mb-2"></button>
          <button type="button" class="btn btn-icon btn-link icmn-bell mr-2 mb-2"></button>
          <button type="button" class="btn btn-icon btn-link icmn-hour-glass mr-2 mb-2"></button>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="mb-5">
          <h5 class="text-black"><strong>Icon Block Button</strong></h5>
          <p class="text-muted">Modifier: <code>.btn-block</code></p>
          <button type="button" class="btn btn-icon btn-primary btn-block mr-2 mb-2">
            <i class="icmn-menu" aria-hidden="true"></i>
            Main Menu
          </button>
          <button type="button" class="btn btn-icon btn-default btn-block mr-2 mb-2">
            <i class="icmn-menu pull-right" aria-hidden="true"></i>
            Main Menu
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Buttons With Icons -->

<!-- Ladda Buttons -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Ladda Buttons</strong>
      <a
        href="http://msurguy.github.io/ladda-bootstrap/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <div class="mb-5">
          <h5 class="text-black"><strong>Expand</strong></h5>
          <p class="text-muted">
            Element: read
            <a href="http://msurguy.github.io/ladda-bootstrap/" target="_blank"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <div class="ladda-example">
            <a class="btn btn-primary ladda-button mr-2 mb-2" data-style="expand-left"
              ><span class="ladda-label">expand-left</span></a
            >
            <a class="btn btn-primary ladda-button mr-2 mb-2" data-style="expand-right"
              ><span class="ladda-label">expand-right</span></a
            >
            <a class="btn btn-primary ladda-button mr-2 mb-2" data-style="expand-up"
              ><span class="ladda-label">expand-up</span></a
            >
            <a class="btn btn-primary ladda-button mr-2 mb-2" data-style="expand-down"
              ><span class="ladda-label">expand-down</span></a
            >
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="mb-5">
          <h5 class="text-black"><strong>Zoom</strong></h5>
          <p class="text-muted">
            Element: read
            <a href="http://msurguy.github.io/ladda-bootstrap/" target="_blank"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <div class="ladda-example">
            <a class="btn btn-info ladda-button mr-2 mb-2" data-style="zoom-in"
              ><span class="ladda-label">zoom-in</span></a
            >
            <a class="btn btn-info ladda-button mr-2 mb-2" data-style="zoom-out"
              ><span class="ladda-label">zoom-out</span></a
            >
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="mb-5">
          <h5 class="text-black"><strong>Built-in Progress Bar</strong></h5>
          <p class="text-muted">
            Element: read
            <a href="http://msurguy.github.io/ladda-bootstrap/" target="_blank"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <div class="ladda-example-progress">
            <a class="btn btn-default ladda-button mr-2 mb-2" data-style="expand-left"
              ><span class="ladda-label">expand-left</span></a
            >
            <a class="btn btn-default ladda-button mr-2 mb-2" data-style="expand-right"
              ><span class="ladda-label">expand-right</span></a
            >
            <a class="btn btn-default ladda-button mr-2 mb-2" data-style="expand-up"
              ><span class="ladda-label">expand-up</span></a
            >
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="mb-5">
          <h5 class="text-black"><strong>Slide</strong></h5>
          <p class="text-muted">
            Element: read
            <a href="http://msurguy.github.io/ladda-bootstrap/" target="_blank"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <div class="ladda-example">
            <a class="btn btn-warning ladda-button mr-2 mb-2" data-style="slide-left"
              ><span class="ladda-label">slide-left</span><span class="ladda-spinner"></span
            ></a>
            <a class="btn btn-warning ladda-button mr-2 mb-2" data-style="slide-right"
              ><span class="ladda-label">slide-right</span><span class="ladda-spinner"></span>
              <div class="ladda-progress" style="width: 0px;"></div
            ></a>
            <a class="btn btn-warning ladda-button mr-2 mb-2" data-style="slide-up"
              ><span class="ladda-label">slide-up</span><span class="ladda-spinner"></span>
              <div class="ladda-progress" style="width: 0px;"></div
            ></a>
            <a class="btn btn-warning ladda-button mr-2 mb-2" data-style="slide-down"
              ><span class="ladda-label">slide-down</span><span class="ladda-spinner"></span
            ></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Ladda Buttons -->
<!-- END: forms/buttons -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      Ladda.bind('.ladda-example .ladda-button', { timeout: 2000 })

      // Bind progress buttons and simulate loading progress
      Ladda.bind('.ladda-example-progress .ladda-button', {
        callback: function(instance) {
          var progress = 0
          var interval = setInterval(function() {
            progress = Math.min(progress + Math.random() * 0.1, 1)
            instance.setProgress(progress)

            if (progress === 1) {
              instance.stop()
              clearInterval(interval)
            }
          }, 200)
        },
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection