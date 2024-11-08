@include('admins.components.breakcumb')
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{$title}}</h5>
                @include('admins.danhmucs.components.toolbox')
            </div>
            <div class="ibox-content">
                @include('admins.danhmucs.components.filter')
                @include('admins.danhmucs.components.table')
            </div>
        </div>
    </div>
</div>
</div>