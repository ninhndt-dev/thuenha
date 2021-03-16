@extends ('layouts.app')

@section('content')
<!-- START: components/pagination -->
<div class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Pagination</strong>
      <a
        href="https://getbootstrap.com/docs/4.2/components/pagination/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <div class="mb-5">
          <p class="text-muted">
            Element: read
            <a href="https://getbootstrap.com/docs/4.2/components/pagination/" target="_blank"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <nav>
            <ul class="pagination pagination-lg">
              <li class="page-item">
                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="fa fa-arrow-left"></i>
                  </span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="javascript: void(0);">1</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="javascript: void(0);">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
              <li class="page-item"><a class="page-link" href="javascript: void(0);">...</a></li>
              <li class="page-item active">
                <a class="page-link" href="javascript: void(0);">89</a>
              </li>
              <li class="page-item"><a class="page-link" href="javascript: void(0);">90</a></li>
              <li class="page-item"><a class="page-link" href="javascript: void(0);">91</a></li>
              <li class="page-item">
                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="fa fa-arrow-right"></i>
                  </span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <nav>
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="fa fa-arrow-left"></i>
                  </span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link disabled" href="javascript: void(0);">1</a>
              </li>
              <li class="page-item">
                <a class="page-link disabled" href="javascript: void(0);">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
              <li class="page-item"><a class="page-link" href="javascript: void(0);">...</a></li>
              <li class="page-item"><a class="page-link" href="javascript: void(0);">89</a></li>
              <li class="page-item"><a class="page-link" href="javascript: void(0);">90</a></li>
              <li class="page-item"><a class="page-link" href="javascript: void(0);">91</a></li>
              <li class="page-item">
                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="fa fa-arrow-right"></i>
                  </span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <nav>
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                  <span>First</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="fa fa-arrow-left"></i>
                  </span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
              <li class="page-item"><a class="page-link" href="javascript: void(0);">...</a></li>
              <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
              <li class="page-item">
                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="fa fa-arrow-right"></i>
                  </span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                  <span>Last</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END: components/pagination -->

@endsection