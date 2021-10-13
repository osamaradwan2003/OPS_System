<div class="panel panel-primary tabs-style-2">
  <div class=" tab-menu-heading">
    <div class="tabs-menu1">
      <!-- Tabs -->
      <ul class="nav panel-tabs main-nav-line">
        <li class="nav-item">
          <a href="#comp_inf" class="nav-link active" data-toggle="tab">Company Information</a>
        </li>
        <li class="nav-item">
          <a href="#tax_settings" class="nav-link" data-toggle="tab">Tax Setting</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="panel-body tabs-menu-body main-content-body-right border">
    <div class="tab-content">
      <div class="tab-pane active" id="comp_inf">
          @include('includes._info_form')
      </div>
      <div class="tab-pane" id="tax_settings">
        tax
      </div>
    </div>
  </div>
</div>
