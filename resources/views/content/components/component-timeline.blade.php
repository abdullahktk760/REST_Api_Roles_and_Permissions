@extends('layouts/contentLayoutMaster')

@section('title', 'Timeline')

@section('content')
<!-- Timeline Starts -->
<section class="basic-timeline">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic</h4>
        </div>
        <div class="card-body">
          <ul class="timeline">
            <li class="timeline-item">
              <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
            </li>
          </ul>

          <br>
          <br>

          <ul class="timeline">
            <li class="timeline-item">
              <span class="timeline-point timeline-point-success timeline-point-indicator"></span>
            </li>
          </ul>
          <br>
          <br>
          <ul class="timeline">
            <li class="timeline-item">
              <span class="timeline-point timeline-point-indicator"></span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <h6>12 Invoices have been paid</h6>
                  <span class="timeline-event-time">12 min ago</span>
                </div>
                <p>Invoices have been paid to the company.</p>
                <div class="d-flex flex-row align-items-center">
                  <img
                    class="me-1"
                    src="{{asset('images/icons/file-icons/pdf.png')}}"
                    alt="invoice"
                    height="23"
                  />
                  <span>invoice.pdf</span>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-secondary timeline-point-indicator"></span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <h6>Client Meeting</h6>
                  <span class="timeline-event-time">45 min ago</span>
                </div>
                <p>Project meeting with john @10:15am.</p>
                <div class="d-flex flex-row align-items-center">
                  <div class="avatar">
                    <img src="{{asset('images/avatars/12-small.png')}}" alt="avatar" height="38" width="38" />
                  </div>
                  <div class="ms-50">
                    <h6 class="mb-0">John Doe (Client)</h6>
                    <span>CEO of Infibeam</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-success timeline-point-indicator"></span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <h6>Financial Report</h6>
                  <span class="timeline-event-time">2 hours ago</span>
                </div>
                <p class="mb-50">Click the button below to read financial reports</p>
                <button
                  class="btn btn-outline-primary btn-sm"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseExample"
                  aria-expanded="true"
                  aria-controls="collapseExample"
                >
                  Show Report
                </button>
                <div class="collapse" id="collapseExample">
                  <ul class="list-group list-group-flush mt-1">
                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                      <span>Last Year's Profit : <span class="fw-bold">$20000</span></span>
                      <i data-feather="share-2" class="cursor-pointer font-medium-2"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                      <span> This Year's Profit : <span class="fw-bold">$25000</span></span>
                      <i data-feather="share-2" class="cursor-pointer font-medium-2"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                      <span> Last Year's Commission : <span class="fw-bold">$5000</span></span>
                      <i data-feather="share-2" class="cursor-pointer font-medium-2"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                      <span> This Year's Commission : <span class="fw-bold">$7000</span></span>
                      <i data-feather="share-2" class="cursor-pointer font-medium-2"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                      <span> This Year's Total Balance : <span class="fw-bold">$70000</span></span>
                      <i data-feather="share-2" class="cursor-pointer font-medium-2"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <h6 class="mb-50">Interview Schedule</h6>
                  <span class="timeline-event-time">03:00 PM</span>
                </div>
                <p>Have to interview Katy Turner for the developer job.</p>
                <hr />
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <div class="d-flex flex-row align-items-center">
                    <div class="avatar me-1">
                      <img src="{{asset('images/avatars/1-small.png')}}" alt="Avatar" height="32" width="32" />
                    </div>
                    <span>
                      <p class="mb-0">Katy Turner</p>
                      <span class="text-muted">Javascript Developer</span>
                    </span>
                  </div>
                  <div class="d-flex align-items-center cursor-pointer mt-sm-0 mt-50">
                    <i data-feather="message-square" class="me-1"></i>
                    <i data-feather="phone-call"></i>
                  </div>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <h6>Online Store</h6>
                  <span class="timeline-event-time">03:00PM</span>
                </div>
                <p>
                  Develop an online store of electronic devices for the provided layout, as well as develop a mobile
                  version of it. The must be compatible with any CMS.
                </p>
                <div class="d-flex justify-content-between flex-wrap flex-sm-row flex-column">
                  <div>
                    <p class="text-muted mb-50">Developers</p>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary avatar-sm me-50">
                        <span class="avatar-content">A</span>
                      </div>
                      <div class="avatar bg-light-success avatar-sm me-50">
                        <span class="avatar-content">B</span>
                      </div>
                      <div class="avatar bg-light-danger avatar-sm">
                        <span class="avatar-content">C</span>
                      </div>
                    </div>
                  </div>
                  <div class="mt-sm-0 mt-1">
                    <p class="text-muted mb-50">Deadline</p>
                    <p class="mb-0">20 Dec 2077</p>
                  </div>
                  <div class="mt-sm-0 mt-1">
                    <p class="text-muted mb-50">Budget</p>
                    <p class="mb-0">$50000</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between align-items-center mb-50">
                  <h6>Designing UI</h6>
                  <div>
                    <span class="badge rounded-pill badge-light-primary">Design</span>
                  </div>
                </div>
                <p>
                  Our main goal is to design a new mobile application for our client. The customer wants a clean & flat
                  design.
                </p>
                <div>
                  <span class="text-muted">Participants</span>
                  <div class="avatar-group mt-50">
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Vinnie Mostowy"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-5.jpg')}}"
                        alt="Avatar"
                        height="30"
                        width="30"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Elicia Rieske"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-7.jpg')}}"
                        alt="Avatar"
                        height="30"
                        width="30"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Julee Rossignol"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-10.jpg')}}"
                        alt="Avatar"
                        height="30"
                        width="30"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Icons</h4>
        </div>
        <div class="card-body">
          <ul class="timeline">
            <li class="timeline-item">
              <span class="timeline-point">
                <i data-feather="dollar-sign"></i>
              </span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <h6>12 Invoices have been paid</h6>
                  <span class="timeline-event-time">12 min ago</span>
                </div>
                <p>Invoices have been paid to the company.</p>
                <div class="d-flex flex-row align-items-center">
                  <img
                    class="me-1"
                    src="{{asset('images/icons/file-icons/pdf.png')}}"
                    alt="invoice"
                    height="23"
                  />
                  <span>invoice.pdf</span>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-secondary">
                <i data-feather="user"></i>
              </span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <h6>Client Meeting</h6>
                  <span class="timeline-event-time">45 min ago</span>
                </div>
                <p>Project meeting with john @10:15am.</p>
                <div class="d-flex flex-row align-items-center">
                  <div class="avatar">
                    <img src="{{asset('images/avatars/12-small.png')}}" alt="avatar" height="38" width="38" />
                  </div>
                  <div class="ms-50">
                    <h6 class="mb-0">John Doe (Client)</h6>
                    <span>CEO of Infibeam</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-success">
                <i data-feather="file-text"></i>
              </span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <h6>Financial Report</h6>
                  <span class="timeline-event-time">2 hours ago</span>
                </div>
                <p class="mb-50">Click the button below to read financial reports</p>
                <button
                  class="btn btn-outline-primary btn-sm"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseExample2"
                  aria-expanded="true"
                  aria-controls="collapseExample2"
                >
                  Show Report
                </button>
                <div class="collapse" id="collapseExample2">
                  <ul class="list-group list-group-flush mt-1">
                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                      <span>Last Year's Profit : <span class="fw-bold">$20000</span></span>
                      <i data-feather="share-2" class="cursor-pointer font-medium-2"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                      <span> This Year's Profit : <span class="fw-bold">$25000</span></span>
                      <i data-feather="share-2" class="cursor-pointer font-medium-2"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                      <span> Last Year's Commission : <span class="fw-bold">$5000</span></span>
                      <i data-feather="share-2" class="cursor-pointer font-medium-2"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                      <span> This Year's Commission : <span class="fw-bold">$7000</span></span>
                      <i data-feather="share-2" class="cursor-pointer font-medium-2"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                      <span> This Year's Total Balance : <span class="fw-bold">$70000</span></span>
                      <i data-feather="share-2" class="cursor-pointer font-medium-2"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-warning">
                <i data-feather="map-pin"></i>
              </span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <h6 class="mb-50">Interview Schedule</h6>
                  <span class="timeline-event-time">03:00 PM</span>
                </div>
                <p>Have to interview Katy Turner for the developer job.</p>
                <hr />
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <div class="d-flex flex-row align-items-center">
                    <div class="avatar me-1">
                      <img src="{{asset('images/avatars/1-small.png')}}" alt="Avatar" height="32" width="32" />
                    </div>
                    <span>
                      <p class="mb-0">Katy Turner</p>
                      <span class="text-muted">Javascript Developer</span>
                    </span>
                  </div>
                  <div class="d-flex align-items-center cursor-pointer mt-sm-0 mt-50">
                    <i data-feather="message-square" class="me-1"></i>
                    <i data-feather="phone-call"></i>
                  </div>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-danger">
                <i data-feather="shopping-bag"></i>
              </span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <h6>Online Store</h6>
                  <span class="timeline-event-time">03:00PM</span>
                </div>
                <p>
                  Develop an online store of electronic devices for the provided layout, as well as develop a mobile
                  version of it. The must be compatible with any CMS.
                </p>
                <div class="d-flex justify-content-between flex-wrap flex-sm-row flex-column">
                  <div>
                    <p class="text-muted mb-50">Developers</p>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary avatar-sm me-50">
                        <span class="avatar-content">A</span>
                      </div>
                      <div class="avatar bg-light-success avatar-sm me-50">
                        <span class="avatar-content">B</span>
                      </div>
                      <div class="avatar bg-light-danger avatar-sm">
                        <span class="avatar-content">C</span>
                      </div>
                    </div>
                  </div>
                  <div class="mt-sm-0 mt-1">
                    <p class="text-muted mb-50">Deadline</p>
                    <p class="mb-0">20 Dec 2077</p>
                  </div>
                  <div class="mt-sm-0 mt-1">
                    <p class="text-muted mb-50">Budget</p>
                    <p class="mb-0">$50000</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-info">
                <i data-feather="server"></i>
              </span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between align-items-center mb-50">
                  <h6>Designing UI</h6>
                  <div>
                    <span class="badge rounded-pill badge-light-primary">Design</span>
                  </div>
                </div>
                <p>
                  Our main goal is to design a new mobile application for our client. The customer wants a clean & flat
                  design.
                </p>
                <div>
                  <span class="text-muted">Participants</span>
                  <div class="avatar-group mt-50">
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Vinnie Mostowy"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-5.jpg')}}"
                        alt="Avatar"
                        height="30"
                        width="30"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Elicia Rieske"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-7.jpg')}}"
                        alt="Avatar"
                        height="30"
                        width="30"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Julee Rossignol"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-10.jpg')}}"
                        alt="Avatar"
                        height="30"
                        width="30"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Timeline Ends -->
@endsection
