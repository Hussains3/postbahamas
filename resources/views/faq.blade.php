@extends('layouts.app')

@section('content')
    <!-- Hero -->
    <div class="bg-light" style="" id="faqherobanner">
        <div class="container text-center d-flex flex-column align-items-center">
            <h1 class="fw-bold text-dark mb-4 text-uppercase">FAQ</h1>
            <form action="" style="width: 75%;">
                <input class="form-control rounded-pill" type="text" name="faq-seardh" id="faq-seardh" placeholder="Search" >
            </form>
            <div class="d-none bg-light w-50 rounded mt-1 p-2">
                <ul class="list-unstyled">
                    <li>
                        <p>Question?</p>
                        <p>Answer</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!---->
    <div class="bg-offwhite">
        <div class="container py-5">
            <div class="text-center ">
                <h2 class="text-dark fs-1 mb-5 fw-bold text-uppercase">Package Rates</h2>
            </div>
            <ul class="nav border-bottom border-primary faq-nav mb-3" id="myTab" role="tablist">
                @foreach ($faqcatagories as $category)

                <li class="nav-item" role="presentation">
                    <a class="nav-link @if($loop->index == 0) active @endif" id="tab{{$category->id}}-tab" data-bs-toggle="tab" href="#tab{{$category->id}}" role="tab"
                        aria-controls="tab{{$category->id}}" aria-selected="true">{{$category->name}}
                    </a>
                </li>
                @endforeach
            </ul>


            <div class="tab-content" id="myTabContent">
                 @foreach ($faqcatagories as $category)

                    <div class="tab-pane fade show @if($loop->index == 0) active @endif" id="tab{{$category->id}}" role="tabpanel" aria-labelledby="tab{{$category->id}}-tab">
                        @foreach ($category->subcategory as $subcategory)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-{{$subcategory->slug}}">
                                    <button class="accordion-button  @if($loop->index != 0) collapsed @endif" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{$category->id.$subcategory->id}}" aria-expanded="true" aria-controls="collapse{{$category->id.$subcategory->id}}">
                                        {{$subcategory->name}}
                                    </button>
                                </h2>
                                <div id="collapse{{$category->id.$subcategory->id}}" class="accordion-collapse collapse @if($loop->index == 0) show @endif" aria-labelledby="heading-{{$subcategory->slug}}"
                                    data-bs-parent="#{{$category->slug.'-'.$category->id}}">
                                    <div class="accordion-body">
                                        <!--Answer accordion-->
                                        <div class="accordion" id="answeraccordion-{{$subcategory->id}}">
                                            @forelse ($subcategory->faqs as $faq)
                                                <div class="">
                                                    <h5 class="text-primary fs-6" id="question-{{$faq->id}}" data-bs-toggle="collapse" data-bs-target="#answer-{{$faq->id}}" aria-expanded="true" aria-controls="answer-{{$faq->id}}">
                                                        {{$faq->question}}
                                                    </h5>
                                                    <div id="answer-{{$faq->id}}" class="accordion-collapse collapse " aria-labelledby="question-{{$faq->id}}" data-bs-parent="#answeraccordion-{{$subcategory->id}}">
                                                        <div class="accordion-body">
                                                            {{$faq->answer}}
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                            <p>No Question found in this topics.</p>

                                            @endforelse

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>



@endsection


@section('script')
@endsection
