@extends('template')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-monitor icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    MATERI
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <form method="POST" action="" class="form-inline">
                    <a href="#" class="btn btn-info form-inline mr-3">Screen Capture</a>
                    <a href="#" class="btn btn-focus form-inline">Voice Recognition</a>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card main-card">
                <div class="card-body">
                    <div class="card-title">penjelasan materi</div>
                    <p align="justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe exercitationem
                        animi eos, incidunt cum alias ullam. Necessitatibus atque ipsum qui tenetur esse porro nihil
                        consectetur et accusantium vel, voluptatum ipsa recusandae vero voluptate nam rem magni ea vitae
                        animi asperiores autem, temporibus nulla molestias! Numquam id veniam earum nobis non?
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
