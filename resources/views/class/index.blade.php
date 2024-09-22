@extends('components.layouts.app')
@section('content')

    <!-- Classes Section Begin -->
    <section class="classes-section spad">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Classes</span>
                        <h2>WHAT WE CAN OFFER</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($classes as $class)
                    <div key="{{$class->id}}" class="col-lg-4 col-md-6">
                        <div class="class-item">
                            <div class="ci-pic">
                                <img src="{{$class->image}}" alt="">
                            </div>
                            <div class="ci-text">
                                <span>{{$class->class_type}}</span>
                                <h5>{{$class->cost}}</h5>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                @endforeach

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="class-item">--}}
{{--                        <div class="ci-pic">--}}
{{--                            <img src="{{asset('assets/img/classes/class-2.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="ci-text">--}}
{{--                            <span>Cardio</span>--}}
{{--                            <h5>Indoor cycling</h5>--}}
{{--                            <a href="#"><i class="fa fa-angle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
            <div class="pagination d-flex align-items-center justify-content-center gap-4">
                {{ $classes->links('vendor.pagination.bootstrap-5') }}
            </div>


        </div>
    </section>
    <!-- ChoseUs Section End -->
@endsection
