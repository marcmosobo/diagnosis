@extends('branch')
@section('title','Checker Results')

@section('content')
    <!-- search results -->
    <section class="search-results">
        <div class="container">
        @if(count($searcheddiagnoses) == 1)
            <h5 class="search-result-title">We've found {{count($searcheddiagnoses)}} matching diagnoses.</h5>
            @elseif(count($searcheddiagnoses) < 5)
            <h5 class="search-result-title">We've found {{count($searcheddiagnoses)}} matching diagnoses.</h5>
            @elseif(count($searcheddiagnoses) > 5)
            <h5 class="search-result-title">Great! We've found {{count($searcheddiagnoses)}} matching diagnoses.</h5>
            @else
            <h5 class="search-result-title">Oops! We've found no matching diagnosis.</h5>
        @endif
            <div class="row align-items-center">
                @foreach($searcheddiagnoses as $diagnosis)
                <div class="col-md-12 col-lg-6">
                    <div class="card p-3">
                        <div class="row no-gutters align-items-center align-items-center">
                            <div class="col-md-7">
                                <div class="card-body">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="{{url('single_search/'.$diagnosis->id)}}">{{$diagnosis->disease}}</a>
                                        </li>

                                    </ul>
                                    <p class="card-text">
                                        {{substr($diagnosis->disease_description,0,100)}}{{strlen($diagnosis->disease_description) > 100 ? "..." : ""}}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- search resukts end -->
    <!-- Pagination section -->
    <section class="pagination-section">
        <nav aria-label="Page navigation example">
            <div class="d-flex justify-content-center">
                <!-- {!! $searcheddiagnoses->render() !!} -->
            </div>
        </nav>
    </section>
    <!-- Pagination section end -->
@endsection