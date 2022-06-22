<div class="col-md-2">
    <div class="card p-3">
        <form class="" action="{{route('queries.create')}}" method="get">
            <input type="hidden" name="email" value="">
            <button class="btn btn-primary w-100">Compose</button>
        </form>
        <button class="btn btn-sm mt-2 btn-hover-gray">
            <a class="text-dark" href="{{route('queries.index')}}">
                <div class="row">
                        <div class="col-4 d-flex align-items-center ">
                            <i class="fa-solid fa-envelope me-2"></i>
                            <p class="m-0">Inbox</p>
                        </div>
                    <div class="col-8 d-flex justify-content-end">
                        @if ($unread > 0)
                        <span class="badge bg-primary fw-light">{{$unread}}</span>
                        @endif
                    </div>
                </div>
            </a>
        </button>
        <button class="btn btn-sm mt-2 btn-hover-gray">
            <a class="text-dark" href="{{route('queries.sentbox')}}">
                <div class="row">
                        <div class="col-4 d-flex align-items-center ">
                            <i class="fa-solid fa-paper-plane me-2"></i>
                            <p class="m-0">Sentbox</p>
                        </div>
                    <div class="col-8 d-flex justify-content-end">
                        @if ($unread > 0)
                        <span class="badge bg-primary fw-light">{{$unread}}</span>
                        @endif
                    </div>
                </div>
            </a>
        </button>
    </div>
</div>
