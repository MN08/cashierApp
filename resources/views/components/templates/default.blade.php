<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta16
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  @include('components.templates.partials.head');

  <body  class=" layout-fluid">
    <script src="{{ asset('/dist/js/demo-theme.min.js?1668287865')}}"></script>
    <div class="page">
      <!-- Sidebar -->
     @include('components.templates.partials.sidebar');
      <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                  Overview
                </div>
                <h2 class="page-title">
                  {{ $title ?? 'Dashboard' }}
                </h2>
              </div>
              <!-- Page title actions -->
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-deck row-cards">
                {{ $slot }}
            </div>
          </div>
        </div>
        @include('components.templates.partials.footer');
      </div>
    </div>
   //modal
   @include('components.templates.partials.modal');
   //script
    @include('components.templates.partials.script');

  </body>
</html>
